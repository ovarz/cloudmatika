<?php $page='home'; $subpage='home'; require ('inc/top.php'); ?>
<?php require ('inc/header.php'); ?>
<link href="css/slideshow.css" rel="stylesheet" type="text/css" />

<div id="rancak-framework">
  <section class="home-slideshow">
    <style>
	.home-slideshow .slick-list{padding:0;}
	.home-slideshow .slick-next, .home-slideshow .slick-prev{height:100%; padding:10px; background:0; color:#FFF; z-index:1;}
	.home-slideshow .slick-next:before, .home-slideshow .slick-prev:before{font-size:36px; color:inherit;}
	.home-slideshow .slick-dots li button:before{color:#FFF;}
	.hs-each{position:relative; max-height:calc(100vh - 60px);}
	.hs-each:after{display:block; content:''; padding-top:56.25%;}
	.hs-each > *, .hs-overlay{position:absolute !important; top:0; left:0; width:100%; height:100%;}
	.hs-imgbg{z-index:1;}
	.hs-overlay{background:url(img/bg_trans.png) rgba(0,0,0,0.5);}
	.hs-info-box{position:relative; z-index:2; padding:40px; max-width:960px;}
	.hs-info-box > *{text-align:center; display:block;}
	.hs-info-box h1{color:#FFF; font-size:36px; text-transform:uppercase; font-weight:bold;}
	.hs-info-box h2{color:#E0E0E0; font-size:18px;}
	.hs-info-button{margin:10px 0;}
	.hs-info-button > ul{display:-webkit-box; display:-ms-flexbox; display:flex; -ms-flex-wrap:wrap; flex-wrap:wrap; -webkit-box-pack:center; -ms-flex-pack:center; justify-content:center;}
	.hs-info-button > ul > li{margin:10px; float:left; box-sizing:border-box;}
	
	@media screen and (min-width:0px){.hs-info{zoom:0.5;}}
	@media screen and (min-width:568px){.hs-info{zoom:0.7;}}
	@media screen and (min-width:768px){.hs-info{zoom:1;}}
	@media screen and (min-width:1024px){
	  .home-slideshow .slick-next, .home-slideshow .slick-prev{transition:all 0.4s; -moz-transition:all 0.4s; -webkit-transition:all 0.4s; -o-transition:all 0.4s;}
	  .home-slideshow .slick-next:hover, .home-slideshow .slick-prev:hover{color:#49a5b7;}
	}
	</style>
    
    <div>
      <?php for ($i=1; $i <= 5 ; $i++) { ?>
  	  <div class="hs-each">
  	    <a class="hs-imgbg" href="javascript:void(0)">
  	      <img data-lazy="img/sample/slide-<?php echo rand(1,5); ?>.jpg" />
  	      <div class="hs-overlay"></div>
  	    </a>
  	    <div class="hs-info content_center">
  	      <span>
  	        <div class="hs-info-box">
  	          <h1 data-animation-in="pulse" data-duration-in="0.7" data-delay-in="0">
  	            Lorem ipsum dolor sit amet
  	          </h1>
  	          <h2 data-animation-in="bounceIn" data-duration-in="0.7" data-delay-in="0.3">
  	            consectetur adipiscing elit. Nunc aliquam arcu malesuada nunc malesuada, eget pulvinar dolor eleifend. Nulla eget dolor mollis
  	          </h2>
  	          <div class="hs-info-button" data-animation-in="bounceInUp" data-duration-in="0.7" data-delay-in="0.6">
  	          	<ul>
  	          	  <li>
  	          	  	<a class="btn" href=" ">Klik Disini</a>
  	          	  </li>
  	          	  <li>
  	          	  	<a class="btn" href=" ">Klik Disini</a>
  	          	  </li>
  	          	</ul>
  	          </div>
  	      	</div>
  	      </span>
  	    </div>
  	  </div>
  	  <?php } ?>
  	</div>
  </section>



  <section class="container">
    <div class="reveal-delay">
  	  <div class="container-title content_center">
 	    <span>
  	      <h2>Delivering Your <b>Limitless</b> IT Infrastructure</h2>
  	      <div class="line content_center"><span></span></div>
  	    </span>
  	  </div>

  	  <div class="page-desc">
  	    <p>Phasellus faucibus finibus magna convallis vulputate. Donec justo sapien, porttitor condimentum dignissim ut, fermentum a elit. Sed lorem risus, lacinia ut finibus eu, tristique eu turpis. Donec hendrerit nulla a bibendum rutrum. Fusce a diam elit. Nulla consequat ante vel odio consectetur, nec consectetur odio mollis. In hac habitasse platea dictumst. Nullam scelerisque nibh vulputate faucibus imperdiet.</p>
  	  </div>
  	</div>
  </section>



  <section class="container">
    <div>
  	  <div class="page-feature page-feature-3">
  	  	<ul>
  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-chart-line"></i></div>
  	  	  	  <div class="pft-title">Virtual Infrastructures</div>
  	  	  	  <div class="pft-desc">Kini anda dapat membangun infrastruktur tanpa harus investasi server. Berbagai macam pilihan infrastruktur seperti Virtual Data Center, VPS, Docker, Object Storage tersedia untuk anda.</div>
  	  	  	</div>
  	  	  </li>

  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-thumbs-up"></i></div>
  	  	  	  <div class="pft-title">Productivity & Collaboration</div>
  	  	  	  <div class="pft-desc">Kami menyediakan berbagai tools untuk meningkatkan kinerja perusahaan anda. Dari Document Management Software, Email, Collaboration tools dan lain sebagainya.</div>
  	  	  	</div>
  	  	  </li>

  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-child"></i></div>
  	  	  	  <div class="pft-title">Safety & Security</div>
  	  	  	  <div class="pft-desc">Kami melindungi anda dengan berbagai pilihan pengamanan kantor dan server anda seperti Cloud Firewall, Spam Filtering, Cloud Backup dan Disaster Recovery.</div>
  	  	  	</div>
  	  	  </li>

  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-phone"></i></div>
  	  	  	  <div class="pft-title">Domain & SSL Certificate</div>
  	  	  	  <div class="pft-desc">Berbagai pilihan domain baik berupa generic top level domain maupun domain negara Indonesia dengan harga yang terjangkau. Kami juga menyediakan sertifikat SSL dengan harga murah.</div>
  	  	  	</div>
  	  	  </li>

  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-child"></i></div>
  	  	  	  <div class="pft-title">Managed Services</div>
  	  	  	  <div class="pft-desc">Tidak memiliki tim untuk menangani masalah teknis anda? Jangan khawatir, Cloudmatika juga menyediakan layanan managed services untuk membantu anda.</div>
  	  	  	</div>
  	  	  </li>

  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-phone"></i></div>
  	  	  	  <div class="pft-title">Others</div>
  	  	  	  <div class="pft-desc">Untuk anda yang membutuhkan tingkat privacy lebih tinggi, kami juga memiliki layanan private cloud & dedicated server yang dapat anda manfaatkan untuk kebutuhan anda.</div>
  	  	  	</div>
  	  	  </li>
  	  	</ul>
  	  </div>
    </div>
  </section>



  <section class="company-stat">
    <style>
	.company-stat{position:relative; background:#212121;}
	.cst-bg{position:absolute; z-index:1; top:0; left:0; width:100%; height:100%; background-attachment:fixed; background-position:bottom center; display:block; opacity:0.25;}
	.cst-content{position:relative; z-index:2;}
	.cst-content > ul{padding:100px 20px; margin:0 auto; max-width:1024px;
	display:-webkit-box; display:-ms-flexbox; display:flex; -ms-flex-wrap:wrap; flex-wrap:wrap; -webkit-box-pack:center; -ms-flex-pack:center; justify-content:center;}
	.cst-content *{text-align:center; color:#FFF;}
	.cst-content > ul > li{margin:20px; float:left; box-sizing:border-box;}
	.cst-content > ul > li > span{margin-bottom:0;}
	.cst-icon{font-size:60px;}
	.cst-icon .fa-cubes{color:#4fb8aa;}
	.cst-icon .fa-trophy{color:#b2cb20; font-size:50px;}
	.cst-icon .fa-clock{color:#e84455;}
	.cst-icon .fa-smile{color:#e16a08;}
	.cst-number{font-size:48px; font-weight:bold;}
	.cst-label{font-size:16px;}

	@media screen and (min-width:0px) and (max-width:567px){.cst-content > ul > li{width:calc(100% - 40px);}}
	@media screen and (min-width:568px){.cst-content > ul > li{width:calc(50% - 40px);}}
	@media screen and (min-width:1024px){.cst-content > ul > li{width:calc(25% - 40px);}}
	</style>
   
    <span class="cst-bg flex_lazy"><img data-original="img/number-bg.jpg" /></span>
    <div class="cst-content">
      <ul>
      	<li class="content_center">
     	  <span>
      	    <div class="cst-icon content_center"><i class="fas fa-cubes"></i></div>
      	    <div class="cst-number numcount">5124</div>
      	    <div class="cst-label">Virtual Machines</div>
      	  </span>
      	</li>
      	
      	<li class="content_center">
     	  <span>
      	    <div class="cst-icon content_center"><i class="fas fa-trophy"></i></div>
      	    <div class="cst-number numcount">8278</div>
      	    <div class="cst-label">Productivity & Collaboration</div>
      	  </span>
      	</li>
      	
      	<li class="content_center">
     	  <span>
      	    <div class="cst-icon content_center"><i class="far fa-clock"></i></div>
      	    <div class="cst-number numcount">1869</div>
      	    <div class="cst-label">Domains</div>
      	  </span>
      	</li>
      	
      	<li class="content_center">
     	  <span>
      	    <div class="cst-icon content_center"><i class="far fa-smile"></i></div>
      	    <div class="cst-number numcount">3421</div>
      	    <div class="cst-label">Secured Client</div>
      	  </span>
      	</li>
      </ul>
    </div>
    
    <script>
	$(document).ready(function(){
	  var number_count = function(){
	    $('.numcount').each(function () {
		  $(this).prop('Counter',0).animate({
		    Counter:$(this).text()
		  },{
			duration:2000,
			easing:'swing',
			step:function (now){
			  $(this).text(Math.ceil(now));
		    }
		  });
	    });
	  };
	  
	  $(window).resize(function(e){
		console.log(e);                   
	  });

	  /* header desktop */
	  $(document).on('scroll',function() {
		var sc = $(window).scrollTop();
		var wh = $(window).height();
		var ncp = $('.company-stat').position().top;

		if(sc + wh >= ncp + 300){
		  number_count();
		  $(document).off('scroll');
		}
		else{}
	  });
	});
	</script>
  </section>



  <section class="container testimonial-list">
    <style>
	.testimonial-list{padding:100px 20px; margin:0 auto; background:#F5F5F5;}
	.testimonial-list > div{max-width:1280px; margin:0 auto;}
	.testimonial-carousel{padding-bottom:45px;}
	.testimonial-carousel .slick-list{padding:0;}
	.ttc-each{margin:10px;}
	.ttc-icon{margin-bottom:-24px;}
	.ttc-circle{width:48px; height:48px; background-color:#4382a5; color:#FFF; font-size:18px;
	-moz-border-radius:50%; -webkit-border-radius:50%; border-radius:50%;}
	.ttc-word{background:#FFF; padding:40px 20px 70px; transition:all 0.4s; -moz-transition:all 0.4s; -webkit-transition:all 0.4s; -o-transition:all 0.4s;
	-moz-border-radius:10px; -webkit-border-radius:10px; border-radius:10px;}
	.ttc-each:hover .ttc-word{background:#4382a5; color:#FFF;}
	.ttc-person{margin-top:-50px;}
	.ttc-photo{margin-bottom:5px;}
	.ttc-crop{width:100px; height:100px; overflow:hidden;
	-moz-border-radius:50%; -webkit-border-radius:50%; border-radius:50%;}
	.ttc-name, .ttc-job{text-align:center;}
	.ttc-name{font-size:18px; color:#212121;}
	.ttc-job{font-size:12px;}
	</style>
   
    <div>
  	  <div class="container-title content_center">
 	    <span>
  	      <h2>Apa Kata <b>Mereka</b></h2>
  	      <div class="line content_center"><span></span></div>
  	    </span>
  	  </div>
  	  
  	  <div class="testimonial-carousel">
  	    <?php for ($i=1; $i <= 5 ; $i++) { ?>
  	  	<div class="ttc-each">
 	  	  <div class="ttc-icon content_center">
 	  	  	<span>
 	  	  	  <div class="ttc-circle content_center"><i class="fas fa-quote-right"></i></div>
 	  	  	</span>
 	  	  </div>
  	  	  <div class="ttc-word">
  	  	  	Donec semper euismod nisi quis feugiat. Nullam finibus metus eget orci volutpat porta. Morbi quis arcu vulputate, dignissim mi ac, varius magna.
  	  	  </div>
  	  	  <div class="ttc-person">
  	  	  	<div class="ttc-photo content_center">
  	  	  	  <span>
  	  	  	  	<div class="ttc-crop"><img data-lazy="img/sample/profile-<?php echo rand(1,5); ?>.jpg" /></div>
  	  	  	  </span>
  	  	  	</div>
  	  	  	<div class="ttc-name">John Doe</div>
  	  	  	<div class="ttc-job">Businessman</div>
  	  	  </div>
  	  	</div>
  	  	<?php } ?>
  	  </div>
  	</div>
  </section>



  <section class="container product-list">
    <div>
  	  <div class="container-title content_center">
 	    <span>
  	      <h2>Solusi untuk <b>Bisnis</b> Anda</h2>
  	      <div class="line content_center"><span></span></div>
  	    </span>
  	  </div>

  	  <div class="page-desc">
  	    <p>Upgrade Bisnis Anda Dengan Cloudmatika</p>
  	  </div>

  	  <div class="product-list-1">
  	    <ul>
 	      <?php for ($i=1; $i <= 5 ; $i++) { ?>
  	      <li>
  	      	<div class="pl1-box">
  	      	  <div class="pl1-packname">
  	      	  	<h3>Cloud VPS 512M</h3>
  	      	  	<h4>Solusi Penyimpanan Data dan Aplikasi Bisnis di Cloud. Instan, Elastis, Aman dan Canggih.</h4>
  	      	  </div>

  	      	  <div class="pl1-price">
  	      	  	<h5>110 K / bulan</h5>
  	      	  </div>

  	      	  <div class="pl1-feature">
  	      	  	<ul>
  	      	  	  <li>CPU 1 core @ 1.2 GHz</li>
  	      	  	  <li>20GB storage</li>
  	      	  	  <li>Unlimited bandwidth</li>
  	      	  	  <li>512Mb Memory</li>
  	      	  	  <li>24/7 security monitoring</li>
  	      	  	  <li>24/7 technical support</li>
  	      	  	  <li>1 Public IP Address Included</li>
  	      	  	</ul>
  	      	  </div>

  	      	  <div class="pl1-button">
  	      	  	<a href="javascript:void(0)" class="btn">Selengkapnya</a>
  	      	  </div>
  	      	</div>
  	      </li>
  	      <?php } ?>
  	      
  	      <li class="pl1-red">
  	      	<div class="pl1-box">
  	      	  <div class="pl1-packname">
  	      	  	<h3>Cloud VPS 512M</h3>
  	      	  	<h4>Solusi Penyimpanan Data dan Aplikasi Bisnis di Cloud. Instan, Elastis, Aman dan Canggih.</h4>
  	      	  </div>

  	      	  <div class="pl1-price">
  	      	  	<h5>110 K / bulan</h5>
  	      	  </div>

  	      	  <div class="pl1-feature">
  	      	  	<ul>
  	      	  	  <li>CPU 1 core @ 1.2 GHz</li>
  	      	  	  <li>20GB storage</li>
  	      	  	  <li>Unlimited bandwidth</li>
  	      	  	  <li>512Mb Memory</li>
  	      	  	  <li>24/7 security monitoring</li>
  	      	  	  <li>24/7 technical support</li>
  	      	  	  <li>1 Public IP Address Included</li>
  	      	  	</ul>
  	      	  </div>

  	      	  <div class="pl1-button">
  	      	  	<a href="javascript:void(0)" class="btn">Selengkapnya</a>
  	      	  </div>
  	      	</div>
  	      </li>
  	    </ul>
  	  </div>
  	</div>
  </section>



  <section class="client-list">
    <style>
	.client-list{padding:40px 20px; background:#4382a5;}
	.client-list > div{max-width:1280px; margin:0 auto;}
	.client-carousel .slick-list{padding:0;}
	.client-carousel .slick-next, .client-carousel .slick-prev{height:100%; padding:10px; background:0;}
	.client-carousel .slick-next:before, .client-carousel .slick-prev:before{font-size:24px;}
	.cc-each img{height:80px;}
	</style>
    <div>
  	  <div class="client-carousel">
  	    <div class="cc-each content_center">
  	      <a href="javascript:void(0)" class="content_center"><img data-lazy="img/client/logo-acronis.png" /></a>
  	    </div>
  	    
  	    <div class="cc-each content_center">
  	      <a href="javascript:void(0)" class="content_center"><img data-lazy="img/client/logo-cloudbric.png" /></a>
  	    </div>
  	    
  	    <div class="cc-each content_center">
  	      <a href="javascript:void(0)" class="content_center"><img data-lazy="img/client/logo-dovecot.png" /></a>
  	    </div>
  	    
  	    <div class="cc-each content_center">
  	      <a href="javascript:void(0)" class="content_center"><img data-lazy="img/client/logo-odin.png" /></a>
  	    </div>
  	    
  	    <div class="cc-each content_center">
  	      <a href="javascript:void(0)" class="content_center"><img data-lazy="img/client/logo-ox.png" /></a>
  	    </div>
  	    
  	    <div class="cc-each content_center">
  	      <a href="javascript:void(0)" class="content_center"><img data-lazy="img/client/logo-ozhosting.png" /></a>
  	    </div>
  	    
  	    <div class="cc-each content_center">
  	      <a href="javascript:void(0)" class="content_center"><img data-lazy="img/client/logo-tsukaeru.png" /></a>
  	    </div>
  	  </div>
  	</div>
  </section>



  <section class="container">
    <div class="reveal-delay">
  	  <div class="container-title content_center">
 	    <span>
  	      <h2>Kabar <b>Cloudmatika</b></h2>
  	      <div class="line content_center"><span></span></div>
  	    </span>
  	  </div>

  	  <div class="article-list">
  	    <ul>
 	      
 	      <?php for ($i=1; $i <= 6 ; $i++) { ?>
  	      <li>
  	      	<div class="al-box">
  	      	  <div class="al-thumb"><a href="javascript:void(0)" class="flex_lazy"><img data-original="img/sample/slide-<?php echo rand(1,5); ?>.jpg" /></a></div>
  	      	  <div class="al-info">
  	      	  	<div class="al-title"><a href="javascript:void(0)"><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2></a></div>
  	      	  	<div class="al-desc"><p>Proin vestibulum id risus vitae bibendum. Maecenas eu placerat eros, eu fringilla nulla. Fusce euismod ultricies nisl, non feugiat orci dignissim id.</p></div>
  	      	  	<div class="al-socmed">
  	      	  	  <ul>
  	      	  	  	<li><a href="javascript:void(0)" class="als-link als-fb content_center"><i class="fab fa-facebook-f"></i></a></li>
  	      	  	  	<li><a href="javascript:void(0)" class="als-link als-tw content_center"><i class="fab fa-twitter"></i></a></li>
  	      	  	  	<li><a href="javascript:void(0)" class="als-link als-ml content_center"><i class="far fa-envelope"></i></a></li>
  	      	  	  	<li><a href="javascript:void(0)" class="als-link als-ld content_center"><i class="fab fa-linkedin-in"></i></a></li>
  	      	  	  	<li><a href="javascript:void(0)" class="als-link als-wa content_center"><i class="fab fa-whatsapp"></i></a></li>
  	      	  	  </ul>
  	      	  	</div>
  	      	  </div>
  	      	</div>
  	      </li>
  	      <?php } ?>
  	      
  	    </ul>
  	  </div>
  	</div>
  </section>
</div>

  	
<script src="js/slideshow.js"></script>
<script>
$(window).load(function(){
  $('.home-slideshow > div').slick({
	lazyLoad:'ondemand',
	prevArrow:'<button type="button" data-role="none" class="slick-prev fa fa-angle-left">Previous</button>',
	nextArrow:'<button type="button" data-role="none" class="slick-next fa fa-angle-right">Next</button>',
	dots:true,
	infinite:true,
	slidesToShow:1,
	slidesToScroll:1,
	autoplay:true,
	arrows:true,
	autoplaySpeed:5000,
  });
  $('.home-slideshow > div').slickAnimation();
  
  $('.client-carousel').slick({
	lazyLoad:'ondemand',
	prevArrow:'<button type="button" data-role="none" class="slick-prev fa fa-angle-left">Previous</button>',
	nextArrow:'<button type="button" data-role="none" class="slick-next fa fa-angle-right">Next</button>',
	dots:false,
	infinite:true,
	slidesToShow:5,
	slidesToScroll:1,
	autoplay:true,
	arrows:true,
	autoplaySpeed:5000,
	responsive:[{
	    breakpoint:1025,
		settings:{
		  slidesToShow:4,
		}
	  },
	  {
	    breakpoint:769,
		settings:{
		  slidesToShow:3,
	  	}
      },
	  {
	    breakpoint:569,
		settings:{
		  slidesToShow:2,
	  	}
      },
	  {
	    breakpoint:415,
		settings:{
		  slidesToShow:1,
	  	}
      }
	]
  });
  
  $('.testimonial-carousel').slick({
	lazyLoad:'ondemand',
	dots:true,
	infinite:true,
	slidesToShow:5,
	slidesToScroll:1,
	autoplay:true,
	arrows:false,
	autoplaySpeed:5000,
	responsive:[{
	    breakpoint:1281,
		settings:{
		  slidesToShow:4,
		}
	  },
	  {
	    breakpoint:769,
		settings:{
		  slidesToShow:3,
	  	}
      },
	  {
	    breakpoint:569,
		settings:{
		  slidesToShow:2,
	  	}
      },
	  {
	    breakpoint:415,
		settings:{
		  slidesToShow:1,
	  	}
      }
	]
  });
});
</script>
<?php require ('inc/footer.php'); ?>