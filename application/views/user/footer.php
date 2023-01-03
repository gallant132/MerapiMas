<!--Footer-->
<footer id="footer" class="footer">
        
        <div class="footer " style="background-color:black;">
        	<div class="container" >
     			<!--Footer Links-->
            	<div class="footer-top">
                	<div class="row">
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box"> <br><br>
                        	
                            <ul class="addressFooter">
                            	<li><i class="icon anm anm-map-marker-al"></i><p style="color:white; font-size: 10px">Yogyakarta Office: Jl. Batikan No. 5 RT 12/RW 03 Pandean Umbulharjo</p></li>
                                <li><i class="icon anm anm-map-marker-al"></i><p style="color:white; font-size: 10px">Jakarta Office: Gd. World Center Lt. 5 No. 3A, Jl. Jendral Sudirman Kav. 29-31</p></li>
                            </ul>
                        </div> &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;
                        <div class="col-12 col-sm-12 col-md-3 col-lg-3 contact-box" style="text-align:center;">
                          <img src="assets/images/logo_merapimas .png" width="70" /> <br>
                          <p style="color:white; font-size: 8px;">Membangun Indonesia sejahtera melalui usaha bersama</p>
                          <a href="Tentang" style="color:white;">Tentang Kami</a> <br>
                          <a href="Layanan" style="color:white;">Services</a> <br>
                          <a href="Project" style="color:white;">Project</a> <br>
                          <a href="Home" style="color:white;">Contact Us</a>
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-5 d-flex justify-content-end align-items-center">
                            <div class="footer-social" >
                                <ul class="list--inline site-footer__social-icons social-icons">
                                    <li><a class="social-icons. icon" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Facebook"><i class="icon icon-facebook"></i></a></li>
                                    <li><a class="social-icons. icon" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Twitter"><i class="icon icon-twitter"></i> <span class="icon__fallback-text">Twitter</span></a></li>
                                    <li><a class="social-icons. icon" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on Instagram"><i class="icon icon-instagram"></i> <span class="icon__fallback-text">Instagram</span></a></li>
                                    <li><a class="social-icons. icon" href="#" target="_blank" title="Belle Multipurpose Bootstrap 4 Template on LinkedIn"><i class="icon icon-linkedin"></i> <span class="icon__fallback-text">LinkedIn</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Footer Links-->
                
                
            </div>
            <div class="site-footer" style="background-color:#69121B;">
                	<div class="row" >
                    	<!--Footer Copyright-->
	                	<div class="col-12 col-sm-12 col-md-12 col-lg-12 order-1 order-md-0 order-lg-0 order-sm-1 copyright text-center" ><span></span> <a href="#" style="color:white;">PT. Merapi Mas Nusantara</a></div>
                        <!--End Footer Copyright-->
                    </div>
                </div>
        </div>
    </footer>
    <!--End Footer-->
    <!--Scoll Top-->
    <span id="site-scroll"><i class="icon anm anm-angle-up-r"></i></span>
    <!--End Scoll Top-->
    
    
   
    
     <!-- Including Jquery -->
     <script src="assets/js/vendor/jquery-3.3.1.min.js"></script>
     <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
     <script src="assets/js/vendor/jquery.cookie.js"></script>
     <script src="assets/js/vendor/wow.min.js"></script>
     <!-- Including Javascript -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/plugins.js"></script>
     <script src="assets/js/popper.min.js"></script>
     <script src="assets/js/lazysizes.js"></script>
     <script src="assets/js/main.js"></script>
     <!--For Newsletter Popup-->
     <script>
		jQuery(document).ready(function(){  
		  jQuery('.closepopup').on('click', function () {
			  jQuery('#popup-container').fadeOut();
			  jQuery('#modalOverly').fadeOut();
		  });
		  
		  var visits = jQuery.cookie('visits') || 0;
		  visits++;
		  jQuery.cookie('visits', visits, { expires: 1, path: '/' });
		  console.debug(jQuery.cookie('visits')); 
		  if ( jQuery.cookie('visits') > 1 ) {
			jQuery('#modalOverly').hide();
			jQuery('#popup-container').hide();
		  } else {
			  var pageHeight = jQuery(document).height();
			  jQuery('<div id="modalOverly"></div>').insertBefore('body');
			  jQuery('#modalOverly').css("height", pageHeight);
			  jQuery('#popup-container').show();
		  }
		  if (jQuery.cookie('noShowWelcome')) { jQuery('#popup-container').hide(); jQuery('#active-popup').hide(); }
		}); 
		
		jQuery(document).mouseup(function(e){
		  var container = jQuery('#popup-container');
		  if( !container.is(e.target)&& container.has(e.target).length === 0)
		  {
			container.fadeOut();
			jQuery('#modalOverly').fadeIn(200);
			jQuery('#modalOverly').hide();
		  }
		});
		
		/*--------------------------------------
			Promotion / Notification Cookie Bar 
		  -------------------------------------- */
		  if(Cookies.get('promotion') != 'true') {   
			 $(".notification-bar").show();         
		  }
		  $(".close-announcement").on('click',function() {
			$(".notification-bar").slideUp();  
			Cookies.set('promotion', 'true', { expires: 1});  
			return false;
		  });
	</script>
    <!--End For Newsletter Popup-->
</div>
</body>

<!-- belle/home2-default.html   11 Nov 2019 12:23:42 GMT -->
</html>
