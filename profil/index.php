<?php $page='produk'; $subpage='produk-vpsl'; $tabpage='vpsl-bulanan'; require ('../inc/top.php'); ?>
<?php require ('../inc/header.php'); ?>

<div id="rancak-framework">
  <section class="cover">
    <div class="flex_lazy"><img data-original="img/about-1.jpg" /></div>
  </section>



  <section class="container">
    <div class="reveal-delay">
  	  <div class="container-title content_center">
 	    <span>
  	      <h2>Tentang <b>Cloudmatika</b></h2>
  	      <div class="line content_center"><span></span></div>
  	    </span>
  	  </div>

  	  <div class="page-desc">
  	    <p>Cloudmatika (PT Awan Solusi Informatika) merupakan 100% perusahaan Indonesia dan bagian dari Iska Group. Teknologi yang kami gunakan merupakan hasil kerjasama  dengan Tsukaeru Grup yang berasal dari Jepang, yang memiliki lebih dari 18 tahun pengalaman di bidang Cloud Computing.</p>
  	    <p>Perusahaan lain dari Tsukaeru Grup adalah: <br />
		Tsukaeru Jepang: http://cloud.tsukaeru.net/en/ <br />
		Ozhosting Australia: http://www.ozhosting.com.au/</p>
  	    <p>Cloudmatika didedikasikan untuk memberikan Cloud Solutions terbaik untuk pelanggan Indonesia. Kami adalah satu-satunya penyedia cloud di Indonesia yang memberikan 100% SLA, 24/7 support dan geo-distant disaster recovery. Semua layanan kami dihost dan dikelola di Pusat Data terbaik dan teraman di Indonesia.</p>
  	  </div>
  	</div>
  </section>



  <section class="container">
    <div>
  	  <div class="container-title content_center">
 	    <span>
  	      <h2>Nilai <b>Perusahaan</b></h2>
  	      <div class="line content_center"><span></span></div>
  	    </span>
  	  </div>
  	  
  	  <div class="page-feature page-feature-3">
  	  	<ul>
  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-handshake"></i></div>
  	  	  	  <div class="pft-title">Layanan</div>
  	  	  	  <div class="pft-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus justo massa, imperdiet ac enim bibendum, sollicitudin aliquam ipsum. In a tristique mi.</div>
  	  	  	</div>
  	  	  </li>

  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-lock"></i></div>
  	  	  	  <div class="pft-title">Keamanan</div>
  	  	  	  <div class="pft-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus justo massa, imperdiet ac enim bibendum, sollicitudin aliquam ipsum. In a tristique mi.</div>
  	  	  	</div>
  	  	  </li>

  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-thumbs-up"></i></div>
  	  	  	  <div class="pft-title">Kemudahan</div>
  	  	  	  <div class="pft-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus justo massa, imperdiet ac enim bibendum, sollicitudin aliquam ipsum. In a tristique mi.</div>
  	  	  	</div>
  	  	  </li>

  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-fighter-jet"></i></div>
  	  	  	  <div class="pft-title">Kecepatan</div>
  	  	  	  <div class="pft-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus justo massa, imperdiet ac enim bibendum, sollicitudin aliquam ipsum. In a tristique mi.</div>
  	  	  	</div>
  	  	  </li>

  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-clipboard-check"></i></div>
  	  	  	  <div class="pft-title">Ketersediaan</div>
  	  	  	  <div class="pft-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus justo massa, imperdiet ac enim bibendum, sollicitudin aliquam ipsum. In a tristique mi.</div>
  	  	  	</div>
  	  	  </li>
  	  	</ul>
  	  </div>
    </div>
  </section>



  <section class="container">
    <div>
      <style>
	  .product-download > ul{max-width:568px; margin:0 auto;}
	  .product-download > ul > li{padding:15px 0; border-bottom:1px dashed #E0E0E0;}
	  .pd-each{display:block; position:relative;}
	  .pd-name{margin-bottom:10px;}
	  @media screen and (min-width:568px){
	    .pd-name{min-height:43px;}
		.pd-name > b{margin-left:0;}
	    .pd-button{position:absolute; top:0; right:0;}
	  }
	  @media screen and (min-width:1024px){
	    .pd-each:hover .btn{background-position:100% 100%;}
	  }
	  </style>
  	  <div class="container-title content_center">
 	    <span>
  	      <h2>Download <b>Produk</b> Cloudmatika</h2>
  	      <div class="line content_center"><span></span></div>
  	    </span>
  	  </div>
  	  
  	  <div class="product-download">
  	  	<ul>
 	  	  <?php for ($i=1; $i <= 5 ; $i++) { ?>
  	  	  <li>
  	  	  	<a href="javascript:void(0)" class="pd-each">
  	  	  	  <div class="pd-name content_center"><b>Cloudmatika Collaboration Suites</b></div>
  	  	  	  <div class="pd-button content_center">
  	  	  	  	<div class="btn">Download</div>
  	  	  	  </div>
  	  	  	</a>
  	  	  </li>
  	  	  <?php } ?>
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
	.cst-icon .fa-user{color:#e16a08;}
	.cst-icon .fa-globe-asia{color:#4fb8aa;}
	.cst-icon .fa-users{color:#e84455;}
	.cst-icon .fa-money-bill-wave{color:#b2cb20;}
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
      	    <div class="cst-icon content_center"><i class="fas fa-user"></i></div>
      	    <div class="cst-number numcount">5500</div>
      	    <div class="cst-label">Pengguna</div>
      	  </span>
      	</li>
      	
      	<li class="content_center">
     	  <span>
      	    <div class="cst-icon content_center"><i class="fas fa-globe-asia"></i></div>
      	    <div class="cst-number numcount">4</div>
      	    <div class="cst-label">Negara</div>
      	  </span>
      	</li>
      	
      	<li class="content_center">
     	  <span>
      	    <div class="cst-icon content_center"><i class="fas fa-users"></i></div>
      	    <div class="cst-number numcount">1000</div>
      	    <div class="cst-label">Reseller</div>
      	  </span>
      	</li>
      	
      	<li class="content_center">
     	  <span>
      	    <div class="cst-icon content_center"><i class="fas fa-money-bill-wave"></i></div>
      	    <div class="cst-number numcount">4</div>
      	    <div class="cst-label">Mata Uang</div>
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
</div>

<?php require ('../inc/footer.php'); ?>