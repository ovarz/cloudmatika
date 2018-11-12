<footer>
  <div class="footer-content">
  	<ul class="reveal-delay">
  	  <li class="footer-about">
	    <div class="footer-title content_center">
 	      <span>
  	        <h2>About Cloudmatika</h2>
  	        <div class="line content_center"><span></span></div>
  	      </span>
  	    </div>
  	    
  	    <div class="footer-desc">Cloudmatika (PT Awan Solusi Informatika) merupakan perusahaan lokal Indonesia, bekerja sama secara teknologi dan jaringan dengan Tsukaeru dari Jepang dan OZ Hosting dari Australia.</div>
  	    
  	    <div class="footer-other">
 	      <div class="icon content_center"><i class="fas fa-map-marker-alt"></i></div>
  	      <div class="info">Graha Iska 165 Jl. Pramuka Raya, Jakarta Pusat, Indonesia</div>
  	    </div>
  	    
  	    <div class="footer-other">
 	      <div class="icon content_center"><i class="fas fa-phone"></i></div>
  	      <div class="info">(+62) 21-2856-5201</div>
  	    </div>
  	    
  	    <div class="footer-other">
 	      <div class="icon content_center"><i class="fas fa-envelope"></i></div>
  	      <div class="info"><a href="mailto:sales@cloudmatika.com">sales@cloudmatika.com</a></div>
  	    </div>
  	    
  	    <div class="footer-socmed">
  	      <ul>
  	      	<li>
  	      	  <a href="javascript:void(0)" class="fs-link fs-fb content_center"><i class="fab fa-facebook-f"></i></a>
  	      	</li>
  	      	<li>
  	      	  <a href="javascript:void(0)" class="fs-link fs-tw content_center"><i class="fab fa-twitter"></i></a>
  	      	</li>
  	      	<li>
  	      	  <a href="javascript:void(0)" class="fs-link fs-go content_center"><i class="fab fa-google-plus-g"></i></a>
  	      	</li>
  	      	<li>
  	      	  <a href="javascript:void(0)" class="fs-link fs-ld content_center"><i class="fab fa-linkedin-in"></i></a>
  	      	</li>
  	      </ul>
  	    </div>
 	  </li>
 	  
  	  <li class="footer-affiliate">
	    <div class="footer-title content_center">
 	      <span>
  	        <h2>Top Products</h2>
  	        <div class="line content_center"><span></span></div>
  	      </span>
  	    </div>
  	    
  	    <div class="footer-list">
  	      <ul>
  	        <?php for ($i=1; $i <= 5 ; $i++) { ?>
  	      	<li><a href="javascript:void(0)" class="fl-link">Footer Link</a></li>
  	      	<?php } ?>
  	      </ul>
  	    </div>
 	  </li>
 	  
  	  <li class="footer-affiliate">
	    <div class="footer-title content_center">
 	      <span>
  	        <h2>Categories</h2>
  	        <div class="line content_center"><span></span></div>
  	      </span>
  	    </div>
  	    
  	    <div class="footer-list">
  	      <ul>
  	        <?php for ($i=1; $i <= 2 ; $i++) { ?>
  	      	<li><a href="javascript:void(0)" class="fl-link">Footer Link</a></li>
  	      	<?php } ?>
  	      </ul>
  	    </div>
 	  </li>
 	  
  	  <li class="footer-affiliate">
	    <div class="footer-title content_center">
 	      <span>
  	        <h2>Information</h2>
  	        <div class="line content_center"><span></span></div>
  	      </span>
  	    </div>
  	    
  	    <div class="footer-list">
  	      <ul>
  	        <?php for ($i=1; $i <= 4 ; $i++) { ?>
  	      	<li><a href="javascript:void(0)" class="fl-link">Footer Link</a></li>
  	      	<?php } ?>
  	      </ul>
  	    </div>
 	  </li>
  	</ul>
  </div>
  <div class="footer-copyright">
  	<ul>
  	  <li>Copyright &copy; 2018 Cloudmatika. all rights reserved.</li>
  	</ul>
  </div>
</footer>



<div class="floating-rightbottom">
  <div id="btt" title="Return To Top">
    <div class="content_center">
	  <i class="fas fa-arrow-up"></i>
	</div>
  </div>
</div>



<noscript id="deferred-styles">
  <link rel="stylesheet" type="text/css" href="css/core.css"/>
</noscript>
<script>
  var loadDeferredStyles = function() {
	var addStylesNode = document.getElementById("deferred-styles");
	var replacement = document.createElement("div");
	replacement.innerHTML = addStylesNode.textContent;
	document.body.appendChild(replacement)
	addStylesNode.parentElement.removeChild(addStylesNode);
  };
  var raf = window.requestAnimationFrame || window.mozRequestAnimationFrame ||
	  window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
  if (raf) raf(function() { window.setTimeout(loadDeferredStyles, 0); });
  else window.addEventListener('load', loadDeferredStyles);
</script>
<script src="js/rancak.js?<?php echo $kumbaya; ?>"></script>
</body>
</html>