


function news(args) {
  
  var id = args.id;
  var search = args.search;
  
  // Retrieve and format news
  var googleNewsSearchUrl = 'https://ajax.googleapis.com/ajax/services/search/news?v=1.0&q=%22'+encodeURIComponent(search)+'%22&callback=?';
  $.getJSON(googleNewsSearchUrl)
  .success(function(data, status, request){
    if (data.responseData.results.length > 0) {
      var content = '';
      content += '<div id="google-news-results">';
      var newsItems = data.responseData.results;
      for (newsIdx in newsItems) {
        var newsItem = newsItems[newsIdx];
        content += '<div class="google-news-result">';
        content += '<div class="title"><a href="'+newsItem.signedRedirectUrl+'">'+newsItem.titleNoFormatting+'</a></div>';
        content += '<div class="publisher-info">'+newsItem.publisher+' - '+newsItem.publishedDate+'</div>';
        content += '<div class="abstract">'+newsItem.content+'</div>';
        content += '</div>';
      }
      content += '</div>';
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


