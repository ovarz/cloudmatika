<?php $page='home'; $subpage='home'; require ('inc/top.php'); ?>
<?php require ('inc/header.php'); ?>

<div id="rancak-framework">
  <div class="home-slideshow">
    <link href="css/slideshow.css" rel="stylesheet" type="text/css" />
    <style>
	.home-slideshow .slick-list{padding:0;}
	.home-slideshow .slick-next, .home-slideshow .slick-prev{height:100%; padding:10px; background:0; color:#FFF; z-index:1;}
	.home-slideshow .slick-next:before, .home-slideshow .slick-prev:before{font-size:36px; color:inherit;}
	.home-slideshow .slick-dots li button:before{color:#FFF;}
	.hs-each{position:relative;}
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
	
	@media screen and (min-width:0px){
	  .hs-info{zoom:0.5;}
	}
	
	@media screen and (min-width:568px){
	  .hs-info{zoom:0.7;}
	}
	
	@media screen and (min-width:768px){
	  .hs-info{zoom:1;}
	}
	
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
		autoplay:false,
		arrows:true,
		autoplaySpeed:5000,
	  });
	  $('.home-slideshow > div').slickAnimation();
	});
    </script>
  </div>
  

</div>

<?php require ('inc/footer.php'); ?>