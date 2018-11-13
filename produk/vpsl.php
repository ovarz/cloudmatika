<?php $page='produk'; $subpage='produk-vpsl'; $tabpage='vpsl-bulanan'; require ('../inc/top.php'); ?>
<?php require ('../inc/header.php'); ?>

<div id="rancak-framework">
  <section class="cover">
    <div class="flex_lazy"><img data-original="img/server-1.jpg" /></div>
  </section>



  <section class="container">
    <div class="reveal-delay">
  	  <div class="container-title content_center">
 	    <span>
  	      <h2>Cloud <b>VPS</b> Indonesia</h2>
  	      <div class="line content_center"><span></span></div>
  	    </span>
  	  </div>

  	  <div class="page-desc">
  	    <p>Cloud VPS Indonesia dari Cloudmatika menggunakan teknologi terkini dari Odin / Parallels yang memungkinkan anda memiliki VPS dengan ukuran yang bervariasi, mulai dari ukuran yang terkecil sampai dengan kapasitas yang besar tanpa mengesampingkan kestabilan dan keamanan VPS anda. Cloud VPS biasanya dipergunakan untuk membangun Application Hosting dengan Virtual Private Server, Development/Test Environments, dan juga untuk anda yang memerlukan web hosting yang lebih sekedar dari shared hosting.</p>
  	  </div>
  	</div>
  </section>



  <section class="container">
    <div>
  	  <div class="page-feature page-feature-2">
  	  	<ul>
  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-chart-line"></i></div>
  	  	  	  <div class="pft-title">High Performance Infrastructure</div>
  	  	  	  <div class="pft-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus justo massa, imperdiet ac enim bibendum, sollicitudin aliquam ipsum. In a tristique mi.</div>
  	  	  	</div>
  	  	  </li>

  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-thumbs-up"></i></div>
  	  	  	  <div class="pft-title">User Friendly</div>
  	  	  	  <div class="pft-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus justo massa, imperdiet ac enim bibendum, sollicitudin aliquam ipsum. In a tristique mi.</div>
  	  	  	</div>
  	  	  </li>

  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-child"></i></div>
  	  	  	  <div class="pft-title">Dedicated Resource</div>
  	  	  	  <div class="pft-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus justo massa, imperdiet ac enim bibendum, sollicitudin aliquam ipsum. In a tristique mi.</div>
  	  	  	</div>
  	  	  </li>

  	  	  <li>
  	  	  	<div class="pft-box">
  	  	  	  <div class="pft-icon content_center"><i class="fas fa-phone"></i></div>
  	  	  	  <div class="pft-title">24/7 Support</div>
  	  	  	  <div class="pft-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus justo massa, imperdiet ac enim bibendum, sollicitudin aliquam ipsum. In a tristique mi.</div>
  	  	  	</div>
  	  	  </li>
  	  	</ul>
  	  </div>
    </div>
  </section>



  <section class="container product-list">
    <div>
  	  <div class="container-title content_center">
 	    <span>
  	      <h2>Paket Cloud <b>VPS</b> Cloudmatika</h2>
  	      <div class="line content_center"><span></span></div>
  	    </span>
  	  </div>

  	  <div class="pagetab">
  	  	<ul>
		  <li><a itemprop="url" href="produk/vpsl.php" class="pagetab-link content_center <?php if($tabpage == 'vpsl-bulanan') { ?>curr<?php } ?>"><b>Paket VPS Bulanan</b></a></li>
		  <li><a itemprop="url" href="produk/vpsl.php" class="pagetab-link content_center <?php if($tabpage == 'vpsl-tahunan') { ?>curr<?php } ?>"><b>Paket VPS Tahunan</b></a></li>
		  <li><a itemprop="url" href="produk/vpsl.php" class="pagetab-link content_center <?php if($tabpage == 'vpsl-tahunan-bulanan') { ?>curr<?php } ?>"><b>Paket VPS + Plesk Bulanan</b></a></li>
		  <li><a itemprop="url" href="produk/vpsl.php" class="pagetab-link content_center <?php if($tabpage == 'vpsl-tahunan-tahunan') { ?>curr<?php } ?>"><b>Paket VPS + Plesk Tahunan</b></a></li>
		  <li><a itemprop="url" href="produk/vpsl.php" class="pagetab-link content_center <?php if($tabpage == 'vpsl-addon') { ?>curr<?php } ?>"><b>Add On</b></a></li>
  	  	</ul>
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
</div>

<?php require ('../inc/footer.php'); ?>