<?php $page_title = 'In the News - Protect Pe Sla'; ?>
<?php require_once 'template/template-top.php' ?>    	  

	<div class="content-block">
	  <h2>"Pe Sla" in the News</h2>
	  <div id="peslaNews"></div>
	  <script id="peslaNewsTemplate" type="text/x-template">
      <div class="peslaNewsResult clearfix">
        <div id="titleContainer"><a target="_blank" id="signedRedirectUrl" class="resultKeyHref" href="#"><span id="title" class="resultKey"></span></a></div>
        <a target="_blank" id="signedRedirectUrl" class="resultKeyHref" href="#"><img id="image-tbUrl" class="resultKeySrc resultConditional" src="" /></a>
        <div id="publisherInfo">
          <span id="publisher" class="resultKey"></span> - <span id="publishedDate" class="resultKey"></span>
        </div>
        <div id="content" class="resultKey"></div>
      </div>
    </script>
	  <div id="peslaNewsMoreLink"><a target="_blank" href="https://www.google.com/search?tbm=nws&q=pe+sla&oq=pe+sla">Click here for more news about Pe Sla.</a></div>
	</div>

  <div id="donation-request" class="content-block">
    <?php require_once '_donation-request.php' ?>
  </div>
	
<?php require_once 'template/template-bottom.php' ?>
