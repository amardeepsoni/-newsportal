
<!DOCTYPE html>
<html>
<head>
<title>Road Safety News</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="../gallery/fevicon1.ico">
<link rel="icon" href="assets/css/images/favicon.png">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>

<![endif]-->
<style type="text/css">
 .signle_iteam .intro
  {
    display: none;
  }
 .signle_iteam li
 {
  position: relative;
}
   .signle_iteam li .header

  {
    position: absolute;
    bottom: 10px;
  z-index: 12;
  width: inherit;
  height: 70px;
  background: black;
  color: white;
  opacity: .8;
  text-align: center;

  }
  .signle_iteam li .header a
  {
    color: white;
  }
    .signle_iteam li .list_dateline
    {
         position: absolute;
    top:  10px;
  z-index: 12;
  background: white;
  opacity: .8;
    }
    .signle_iteam li p.float_l
    {
      width:100%;
        height: 100%;
    }
    .signle_iteam li p .float_l img
      {
        width:100%;
        height: 100%;
      }
      .list_dateline a
      {
        display: none;
      }
      .recentpost_nav .intro
      {
        display: none;
      }
      .recentpost_nav .list_dateline
      {
        display: none;
      }
</style>

</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
  <ul style="list-style:none;" >

<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">
  <div class="box_wrapper">
    <header id="header">
      <div class="header_top">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav custom_nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="#contactus">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="header_search">
          <button id="searchIcon"><i class="fa fa-search"></i></button>
          <div id="shide">
            <div id="search-hide">
              <form action="#">
                <input type="text" size="40" placeholder="Search here ...">
              </form>
              <button class="remove"><span><i class="fa fa-times"></i></span></button>
            </div>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="logo_road"><img src="images/traffic-light.png" style="height: 70px;width: auto; float: left;"></div>
        <div class="logo_area"><a class="logo" href="#"><b>ROAD SAFETY </b>NATIONAL NEWS PORTAL <span>News Related to Road-Safety</span></a></div>
        <div class="top_addarea"><a href="https://missionroadsafety.com/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Road Crash Data" ><img src="images/laptop.png" alt=""></a><a href="https://ww2.road-safety.co.in/en/drivingtest/test/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Driving License Test Portal" ><img src="images/driving.png"  alt=""></a></div>
      </div>
    </header>


    <?php

?>
    <div class="latest_newsarea"> <span>Latest News</span>
      <ul id="ticker01" class="news_sticker">
          </marquee>
        <li></li>

      </ul>
    </div>
    <div class="thumbnail_slider_area">
      <div class="owl-carousel">


<?php
// Create DOM from URL

require "vendor/autoload.php";
use PHPHtmlParser\Dom;

$dom = new Dom;
$doms = new Dom;
$domss = new Dom;
$domsss = new Dom;
$midnewsob = new Dom;
try
{
	$dom->load('https://www.ndtv.com/search?searchtext=road-accident-vehicle');

	$element = $dom->getElementById('news_list')->find('ul')->find('li');

	foreach ($element as $key) {

		//$doms->load($link);
		//$get = $doms->find('article')->find('img')->getAttribute('data-src');
		//$key->find('img')->setAttribute('src', $get);
		echo ' <div class="signle_iteam" style="margin-left:3px;overflow:hidden;padding:0;">' . $key . '</div>';
	}

	?>

                </div>
              </div>
</div>


<section id="contentbody">
      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 h-100">
          <div class="row">
            <div class="left_bar">
              <div class="single_leftbar">
                <h2><span>Recent Post</span></h2>
                <div class="singleleft_inner">
                    <ul class="recentpost_nav wow fadeInDown">

          <?php $domss->load('https://www.ndtv.com/search?searchtext=road-safety');

	$element2 = $domss->getElementById('news_list')->find('ul')->find('li');
	foreach ($element2 as $key2) {

		// $link2 = $key2->find('a')->getAttribute('href');

		//$domsss->load($link2);

		// $get2 = $domsss->find('article')->find('img')->getAttribute('data-src');
		// $key2->find('img')->setAttribute('src', $get2);
		echo $key2;
	}
	?>

                  </ul>
                 </div>
              </div>
            </div>
          </div>
        </div>

    <div class="col-lg-7 col-md-7 col-sm-8 col-xs-12">
         <div class="row">
            <div class="middle_bar">
                <div class="featured_sliderarea">

                  <?php

	$midnewsob->load('https://www.ndtv.com/search?searchtext=road-accident-news');
	$midnews = $midnewsob->getElementById('news_list')->find('ul')->find('li');
	foreach ($midnews as $midcontent) {

		// $link2 = $key2->find('a')->getAttribute('href');

		//$domsss->load($link2);

		// $get2 = $domsss->find('article')->find('img')->getAttribute('data-src');
		// $key2->find('img')->setAttribute('src', $get2);
		echo '  <div class="single_category wow fadeInDown"><div class="single_category_inner">' . $midcontent . '</div></div>';
	}
	?>
                   </div>
              </div>

</div>
</div>


        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="row">
            <div class="right_bar">
              <div class="single_leftbar wow fadeInDown">
                <h2><span>Popular Post</span></h2>
                <div class="singleleft_inner">
                  <ul class="catg3_snav ppost_nav wow fadeInDown">

                    <li>
                      <div class="media"> <a href="<?php echo $link ?>" class="media-left"> <img alt="" src="<?php echo $img_src; ?>" style="height:70px;width:70px;"> </a>
                        <div class="media-body"> <a href="<?php echo $link; ?>" class="catg_title">         <?php

	$pop = $dom->getElementById('news_list')->find('ul')->find('li')[0];
	$pop2 = $dom->getElementById('news_list')->find('ul')->find('li')[1];
	foreach ($pop as $key3) {

		// $link2 = $key2->find('a')->getAttribute('href');

		//$domsss->load($link2);

		// $get2 = $domsss->find('article')->find('img')->getAttribute('data-src');
		// $key2->find('img')->setAttribute('src', $get2);
		echo $key3;

	}

	foreach ($pop2 as $key4) {
		echo $key4;
	}
} catch (Exception $e) {
	echo '<section id="contentbody"><div style="width:100%; hieght:auto;background:#ddd;text-align:center;font-size:7vw;color:#aaa;">404 <br> Page Not Found</div></section>';
}
?>
           </a></div>
                      </div>
                   </li>

                 </ul>
                </div>
              </div>
            </div>
          </div>
</div>
</section>
    </section>
      <div id="contactus" class="footer_top">
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInLeft">
            <h2><b>Contact-Info</b></h2>
            <div class="subscribe_area">

                <h3><b>Address</b></h3>
                <p>Ministry of Road Transport & Highways
                   Transport Bhawan, 1, Parliament Street
                   New Delhi-110001.</p>
                <h3><b>Contact-Us</b></h3>
                <p><b>Email:</b> info@road-safety.co.in<BR>meena.rr@nic.in</p>
                <p><b>Phone</b> 011 23718560, 87009 61067</p>

            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInLeft">
            <h2><b>Resources</b></h2>
            <ul class="catg3_snav ppost_nav">
              <li>
                 <div class="media"> <!--<a class="media-left" href="www.missionroadsafety.com"> <img src="images/portal.png" alt=""> </a>-->
                    <div class="media-body"> <a class="catg_title" href="https://missionroadsafety.com/"> A portal for road accidents data <p style="color: red;">www.missionroadsafety.com</p></a></div>
                </div>
             </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInRight">
            <h2><b>Important Links</b></h2>
            <ul>
   <li><a href="https://morth.nic.in/" target="_blank" class="catg_title">Ministry of Road Transport &amp; Highways</a></li>
   <li><a href="https://morth.nic.in/road-safety" target="_blank" class="catg_title">Road Safety MoRTH</a></li>
   <li><a href="https://missionroadsafety.com/" target="_blank" class="catg_title">Road Crash Data Interactive Portal</a></li>
   <li><a href="http://road-safety.co.in/newsportal/" target="_blank" class="catg_title"> Road Safety News</a></li>
   <li><a href="https://ww2.road-safety.co.in/en/drivingtest/test/" target="_blank" class="catg_title">Driving Licence Practice Portal</a></li>
   <li><a href="http://pib.gov.in/indexd.aspx" target="_blank" class="catg_title">Printer Friendly
Press Information Bureau (PIB) Website</a></li>
   <li><a href="https://pib.gov.in/newsite/pmreleases.aspx?mincode=69" target="_blank" class="catg_title">PIB Press Releases pertaining to Ministry of Road Transport and Highways</a></li>
  <li><a href="https://delhitrafficpolice.nic.in/be-road-smart/helmet/" target="_blank" class="catg_title">Delhi Traffic Police</a></li>

  </ul>
            <ul class="footer_labels">
              <!--<li><a href="http://www.road-safety.co.in/isafe">iSAFE</a></li>
              <li><a href="http://ambivan.in/">Ambivan</a></li>
              <<li><a href="#">Safekart</a></li>
              <li><a href="https://www.road-safety.co.in/marathon/">Marathon</a></li>
              <li><a href="https://www.road-safety.co.in/conference/">Conferences</a></li>
              <li><a href="https://delhitrafficpolice.nic.in/be-road-smart/helmet/">Delhi Traffic Police</a></li>
              <li><a href="https://www.road-safety.co.in/portal/studentportal/">Login</a></li>-->
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6">
          <div class="single_footer_top wow fadeInRight">
            <h2><b>Contact Form</b></h2>
            <form action="#" class="contact_form">
              <label>Name</label>
              <input class="form-control" type="text">
              <label>Email*</label>
              <input class="form-control" type="email">
              <label>Message*</label>
              <textarea class="form-control" cols="30" rows="10"></textarea>
              <input class="send_btn" type="submit" value="Send">
            </form>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="footer_bottom_left">
          <p>Copyright &copy;2020 MoRTH</p>
        </div>
        <div class="footer_bottom_right">
          <ul>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Twitter" href="https://twitter.com/MORTHIndia"><i class="fa fa-twitter"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Facebook" href="https://www.facebook.com/MoRTHIndia/"><i class="fa fa-facebook"></i></a></li>
            <li><a class="tootlip" data-toggle="tooltip" data-placement="top" title="Youtube" href="https://www.youtube.com/channel/UCTOhBdWjB0FOH1MNa5mEBJg"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>







<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.li-scroller.1.0.js"></script>
<script src="assets/js/custom.js"></script>
<script type="text/javascript">

      var x = document.getElementsByClassName("list_dateline").textContent;
      console.log(x);


</script>
</body>
</html>