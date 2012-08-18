<html>
  <head>
		<meta http-equiv="X-UA-Compatible" content="IE=9" />
    <meta property="fb:admins" content="arobba"/>  
    <meta property="fb:app_id" content="372923886111980"/>
    <?php if($page_title): ?>  
    	<meta property="og:title" content="<?php echo $page_title ?>"/>
    	<title><?php echo $page_title ?></title>
    <?php endif; ?>  
    <meta property="og:type" content="website"/>  
    <meta property="og:image" content="http://rosebudsiouxtribe-nsn.gov/templates/rst_default/Logo.png"/>  
	  <link rel="stylesheet" type="text/css" href="css/style.css" />
	  <script type="text/javascript" src="javascript/jquery.min.js"></script>
	  <script type="text/javascript" src="javascript/news.js"></script>
	  <script type="text/javascript">
	    $(document).ready(function(){
		    news({id: 'pesla-news', search: 'Pe Sla'});
		  });
	  </script>
    <script type="text/javascript">
    
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-34101375-1']);
      _gaq.push(['_setDomainName', 'protectpesla.org']);
      _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);
    
      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    
    </script>	  
  </head>
  <body>
  
    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '372923886111980', // App ID
          channelUrl : '//protectpesla.org/_fb-channel.html', // Channel File
          status     : true, // check login status
          cookie     : true, // enable cookies to allow the server to access the session
          xfbml      : true  // parse XFBML
        });
    
        // Additional initialization code here
      };
    
      // Load the SDK Asynchronously
      (function(d){
         var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement('script'); js.id = id; js.async = true;
         js.src = "//connect.facebook.net/en_US/all.js";
         ref.parentNode.insertBefore(js, ref);
       }(document));
    </script>      
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
	      <?php require_once '_navigation.php' ?>
	    </div>
  	  <div id="body-content" class="clearfix">
  	  
				<div class="fb-like" data-send="true" data-width="450" data-show-faces="true" data-colorscheme="dark"></div>
  	  