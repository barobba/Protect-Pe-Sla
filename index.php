<html>
  <head>
	  <link rel="stylesheet" type="text/css" href="css/style.css" />
	  <script type="text/javascript" src="javascript/jquery.min.js"></script>
	  <script type="text/javascript" src="javascript/news.js"></script>
	  <script type="text/javascript">
	    $(document).ready(function(){
		    news({id: 'news', search: 'Pe Sla'});
		  });
	  </script>
  </head>
  <body>
  	<div id="page-wrapper" class="clearfix">
  	
  	  <div id="header-content" class="clearfix">
  	    <div id="site-logo">
    	    <img src="http://rosebudsiouxtribe-nsn.gov/templates/rst_default/Logo.png" />
  	    </div>
  	    <div id="site-name">
	  	    <div class="heading"><a href="http://rosebudsiouxtribe-nsn.gov/"><img src="http://rosebudsiouxtribe-nsn.gov/templates/rst_default/Slogan.png" /></a></div>
	  	    <div class="sub-heading">Protect Pe Sla</div>
  	    </div>
  	  </div>
	    <div id="top-nav">
	      <ul class="nav">
	        <li><a href=".">In the News</a></li>
	        <li><a href="protect-pesla.php">Help us Buy Back "Pe Sla"</a></li>
	      </ul>
	    </div>
  	  <div id="body-content" class="clearfix">
  	  
  	    <div id="message" class="content-block">
  	      <?php require_once '_message.php' ?>
  	    </div>

  	    <div id="donation-request" class="content-block">
  	      <?php require_once '_donation-request.php' ?>
  	    </div>
    	  
        <div id="news" class="content-block"><a href="http://news.google.com/?q=pe+sla">"Pe Sla" in the News</a></div>

  	  </div>
  	  
  	</div>
  	
  	
  </body>
</html>
