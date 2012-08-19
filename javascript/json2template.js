
function json2template(args) {

  var url = args.url;
  var id = args.id;
  var templateId = args.templateId;
  
  if ($('#'+id).length > 0 && $('#'+templateId).length > 0) {
    
    // Valid content & template IDs
    
    $.getJSON(url)
    .success(function(data, status, request){
      
      // News retrieved
      
      var results = data.responseData.results;
      if (results.length > 0) {
        
        // Formatting results
        var content = '';
        
        for (resultIdx in results) {
          
          // Preparing one result item
          var item = results[resultIdx];
          var template = $($('#'+templateId).html());
          
          // Searching for the content keys
          var keys = $(template).find('.resultKey').map(function(){return this.id;}).get();
          for (keyIdx in keys) {
            var key = keys[keyIdx];
            var keyPath = key.replace('-','.');
            if (keyExists(keyPath, item)) {
              template.find('#'+key).html(eval('item.'+keyPath));
            }
            else {
              template.find('#'+key).remove();
            }
          }
          
          // Searching for the anchor keys
          var keys = $(template).find('.resultKeyHref').map(function(){return this.id}).get();
          for (keyIdx in keys) {
            var key = keys[keyIdx];
            var keyPath = key.replace('-','.');
            if (keyExists(keyPath, item)) {
              template.find('#'+key).attr('href', eval('item.'+keyPath));
            }
            else {
              template.find('#'+key).remove();
            }
          }

          // Searching for the image source keys
          var keys = $(template).find('.resultKeySrc').map(function(){return this.id}).get();
          for (keyIdx in keys) {
            var key = keys[keyIdx];
            var keyPath = key.replace('-','.');
            if (keyExists(keyPath, item)) {
              template.find('#'+key).attr('src', eval('item.'+keyPath));
            }
            else {
              template.find('#'+key).remove();
            }
          }
          
          content += template.wrap('<div>').parent().html();
          
        }
        $('#'+id).html(content);
        
      }
      else {
        // Google News search result is empty, do nothing
      }
    })
    .error(function(request, status, errorThrown){
      // Do nothing
    });
  }
  else {
    // ID not found, so do nothing
  }
  
  function keyExists(key, item) {
    var key = key.split('.');
    var search = item;
    while (key.length > 1) {
      if (key[0] in search) {
        search = search[key[0]];
        key.shift();
      }
      else {
        return false;
      }
    }
    if (key[0] in search) {
      return true;
    }
    else {
      return false;
    }
  }
  
}
