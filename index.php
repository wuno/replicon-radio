<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
   <!--  <link rel="stylesheet" href="scripts/OwlCarousel2-2.2.1/dist/assets/owl.carousel.min.css" />
	<link rel="stylesheet" href="scripts/OwlCarousel2-2.2.1/dist/assets/owl.theme.default.css" />     -->
	
	<!-- slick -->
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick-theme.css"/>
    
    <link rel="stylesheet" href="custom.css" type="text/css" media="all">
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="bootstrap-4/css/bootstrap.css" type="text/css" media="all">
    <script src="jquery-3.2.1.min.js"></script>
    <script src="tether-1.3.3/dist/js/tether.min.js"></script>
    <script src="bootstrap-4/js/bootstrap.min.js"></script>
   
   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
   <script>
	  (adsbygoogle = window.adsbygoogle || []).push({
	    google_ad_client: "ca-pub-6494193625972452",
	    enable_page_level_ads: true
	  });
	</script>
    <style>
	@media(max-width:480px){
	
.ml-auto {
    margin-left: 0!important;
    flex-direction: row;
}
	
	}
    .ml-auto {
    margin-left: 0!important;
}

.left-m{
	    padding: 10px 20px;
		}
    </style>

	<title>Replicon Radio</title>
</head>
<body>

<!-- Site Container -->
<div class="container-fluid">

<!-- Navigation / Header  -->
	        <nav class="navbar navbar-toggleable-md navbar-inverse">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="https://wuno.com"><img src="images/green-dino.png" class="App-logo" alt="logo" /></a>
          <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav mx-auto"><img class="img-responsive" src="images/banner.png" alt="Replicon Radio Banner" /></div>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="https://twitter.com/replicon_radio" target="_blank" class="nav-link"><span class="fa fa-twitter"></span></a>
              </li>
              <li class="nav-item">
                  <a href="https://www.facebook.com/RepliconRadio/" target="_blank" class="nav-link"><span class="fa fa-facebook-official"></span></a>
              </li>
              <li class="nav-item">
                  <a href="https://www.instagram.com/replicon_radio/" target="_blank" class="nav-link"><span class="fa fa-instagram"></span></a>
              </li>
              <li class="nav-item">
                  <a href="https://www.youtube.com/channel/UC519AX77iLOcGPrbNLLOBOQ" target="_blank" class="nav-link"><span class="fa fa-youtube"></span></a>
              </li>
              <li class="nav-item">
                  <a href="https://plus.google.com/108391393328341921366" target="_blank" class="nav-link"><span class="fa fa-google-plus"></span></a>
              </li>
            </ul>
          </div>
        </nav>

<!-- Breadcrumb Under Navigation Break -->
<div class="crumb"></div>

<!--  Right Sidebar -->
		

<!-- Main Content Area -->
	<div class=" container-fluid">
		
          
          <div class="col-md-2 col-xs-12 sidebar-offcanvas mr-auto" id="sidebarl">
          <div class="list-group">
            <a href="#" class="list-group-item left-m"><img src="images/ad1.jpg" alt="ad 1" /></a>
          </div>
        </div>
          
          
        
        
        
			<div class="col-md-4 col-xs-12 music-area" >
				<a id="my-widget" class="spreaker-player" href="https://www.spreaker.com/show/1443546" data-resource="show_id=1443546" data-width="100%" data-height="305px"></a>
				<script async src="https://widget.spreaker.com/widgets.js"></script>
				<button id="cmd-play" class="button secondary large "><span class="fa fa-play"></span></button>
				<button id="cmd-pause" class="button secondary large"><span class="fa fa-pause"></span></button>
			</div>
            
            <div class=" col-md-4 col-sm-12 music-area" >
				<div id="twitter-wjs">
					<a class="twitter-timeline" href="https://twitter.com/replicon_radio">Replicon Radio</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
				</div>
			</div>
            
            
            <div class=" col-md-2 col-xs-12 sidebar-offcanvas ml-auto" id="sidebarr">
          <div class="list-group">
            <a href="#" class="list-group-item right-m"><img src="images/ad1.jpg" alt="ad 1" /></a>
          </div>
        </div>
            
            
		
		
	</div>

<!-- Left Sidebar -->
 		

<!-- Instafeed Image Feed -->	
	<div  class=" slickitup shift mtop20 " id="instafeed"></div>

<!-- Footer Area -->
	<footer class="footer shift">
        <div class="container">
            <p class="rep-footer">RepliconRadio.com &copy; 2016 - <?php echo date("Y"); ?></p>
            <p class="wuno-color"><a class="wuno-color" href="https://wuno.com">wunO.com - Creative Designs From Creative Minds</a></p>
        </div>
    </footer>
</div>

<script>
    window.onload = function() {
        var widget   = SP.getWidget("my-widget");
        var playBtn  = document.getElementById("cmd-play");
        var pauseBtn = document.getElementById("cmd-pause");

        playBtn.addEventListener("click", function() {
            widget.play();
        });

        pauseBtn.addEventListener("click", function() {
            widget.pause();
        });
    };

$('button#cmd-play').on('click', function() {
  $('button#cmd-pause').removeClass('active');
  $(this).toggleClass('active');
});

$('button#cmd-pause').on('click', function() {
	$('button#cmd-play').removeClass('active');
  $(this).toggleClass('active');
});
</script>
<script type="text/javascript" src="scripts/instafeed.min.js"></script>
<script type="text/javascript"> 
var feed = new Instafeed({ 
	clientId: '496b280aa9e14c1e8a219453eccc9a59', 
	accessToken: '5427181789.1677ed0.469346b997854cf5b595d239c649c3ea', 
	get: "user",
  	userId: "5427181789", 
  	sortBy: 'most-recent',
  	limit: '30',
  	after: function () {
       $('.slickitup').slick({
            infinite: true,
  			slidesToShow: 9,
  			slidesToScroll: 9,
  			 responsive: [
		{
		  breakpoint: 1324,
		  settings: {
		    slidesToShow: 7,
		    slidesToScroll: 7,
		    infinite: true,
		  }
		},
		{
		  breakpoint: 1224,
		  settings: {
		    slidesToShow: 6,
		    slidesToScroll: 6
		  }
		},
		{
		  breakpoint: 1024,
		  settings: {
		    slidesToShow: 5,
		    slidesToScroll: 5
		  }
		},
		{
		  breakpoint: 800,
		  settings: {
		    slidesToShow: 4,
		    slidesToScroll: 4
		  }
		},
		{
		  breakpoint: 624,
		  settings: {
		    slidesToShow: 3,
		    slidesToScroll: 3
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
		    slidesToShow: 2,
		    slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 324,
		  settings: {
		    slidesToShow: 1,
		    slidesToScroll: 1
		  }
		}
	],
       });
    }
  }); 
  	feed.run(); 
 </script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
</body>
</html>