<?php 
  $request = $_SERVER['REQUEST_URI'];
  $request = explode('?', $request);
  $request = $request[0];
  $page_url = 'http://'.$_SERVER['HTTP_HOST'].$request;
?>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" >
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
	  <script type="text/javascript" src="javascript/json2template.js"></script>
	  <script type="text/javascript">
	    $(document).ready(function(){
		    json2template({
			    url: 'https://ajax.googleapis.com/ajax/services/search/news?v=1.0&q='+encodeURIComponent('"Pe Sla"')+'&callback=?',
			    id: 'peslaNews', templateId: 'peslaNewsTemplate'
				});
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
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=372923886111980";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
  	<div id="page-wrapper" class="clearfix">
  	
  	  <div id="header-content" class="clearfix">
  	    <div id="site-logo">
    	    <a href="http://rosebudsiouxtribe-nsn.gov"><img src="http://rosebudsiouxtribe-nsn.gov/templates/rst_default/Logo.png" /></a>
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
  	  
  	    <fb:like class="fb-like" data-href="<?php echo $page_url ?>" send="true" width="928" show_faces="true" colorscheme="dark"></fb:like>
  	  