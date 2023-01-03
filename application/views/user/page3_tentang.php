<!--Body Content-->
<div id="page-content">
    	<!--Home slider-->
    	<div class="slideshow slideshow-wrapper pb-section sliderFull">
        	<div class="home-slideshow">
            	<div class="slide">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="assets/images/bg1.jpg" src="assets/images/bg1.jpg" alt="" title="" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content top">
                                <div style="margin-left: 10%; margin-right: 10%;">
                                    <h2 style="color:white; text-align:left;" class="h1 mega-title slideshow__title">Tentang Kami</h2>
                                    <p style="text-align:justify; color:white; font-size:14px;"><?php foreach ($tentang as $key): ?>
                                                <?php echo $key->tentangperusahaan; ?>
                                                <?php endforeach; ?>   
                                    </p> <br>
                                    <h3 style="color:white; text-align:left;" class="h3 mega-title slideshow__title">Visi</h3>
                                    <p style="text-align:justify; color:white; font-size:14px;"><?php foreach ($visi as $key): ?>
                                                <?php echo $key->visi; ?>
                                                <?php endforeach; ?> </p><br>
                                    
                                    <h3 style="color:white; text-align:left;" class="h3 mega-title slideshow__title">Misi</h3>
                                    <p style="text-align:justify; color:white; font-size:14px;"><?php foreach ($misi as $key): ?>
                                                <?php echo $key->misi; ?> <br>
                                                <?php endforeach; ?> </p><br></p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Home slider-->
        <!--Our benefits will change the way you buy parts-->
        <div class="section featured-content pb-0">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<div class="section-header text-center">
                            <h2 class="h2">Core of Value</h2>
                        </div>
                    </div>
                </div>
                <div class="row list-items">
                    <?php foreach ($cov as $key): ?>
                                                
                                                
                	<div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center">
                    	<img class="blur-up lazyload"  src="<?php echo base_url().'/upload/icon_cov/'. $key->icon ?>" alt="Warranty" title="Warranty"  width="50"/>
                        <h3 class="h4"><?php echo $key->nama; ?></h3>
                        <p><?php echo $key->detail; ?></p>
                    </div>
                    <?php endforeach; ?>  
                    
                </div>
            </div>
        </div>
        <!--End Our benefits will change the way you buy parts-->

        <!--Weekly Bestseller-->
        <div class="section" style="background-color:black;">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="section-header text-center">
                            <h2 style="color:white" class="h2">Tim Kami</h2>
                        </div>
						<div class="productSlider grid-products">
                                <?php foreach ($karyawan as $key): ?>
                                                <!-- <td colspan="1"><?php echo $key->tentangperusahaan; ?></td> -->
                                                 
                            <div class="col-12 item">
                                
                                <!-- start product image -->
                                <div class="product-image">
                                    <!-- start product image -->
                                    <a href="product-layout-1.html" class="grid-view-item__link">
                                        <!-- image -->
                                        <img class="primary blur-up lazyload" src="<?php echo base_url().'/upload/karyawan/'. $key->foto ?>" alt="image" >
                                        <!-- End image -->
                                        <!-- Hover image -->
                                        <img class="hover blur-up lazyload"  src="<?php echo base_url().'/upload/karyawan/'. $key->foto ?>" alt="image" >
                                        <!-- End hover image -->
                                        <!-- Variant Image-->
                                        <img class="grid-view-item__image hover variantImg" src="<?php echo base_url().'/upload/karyawan/'. $key->foto ?>" alt="image" >
                                        <!-- Variant Image-->
                                    </a>
                                    <!-- end product image -->
                                    
                                    <!-- Start product button -->
                                    
                                    <form class="variants add" action="#" onclick="window.location.href='cart.html'"method="post">
                                        <button class="btn btn-addto-cart" type="button" tabindex="0">
                                        <p><?php echo $key->nama_karyawan; ?></p>
                                        <p><?php echo $key->jabatan; ?></p></button>
                                        
                                    </form>
                                    <!-- <div class="button-set">
                                        <a href="javascript:void(0)" title="Quick View" class="quick-view-popup quick-view" data-toggle="modal" data-target="#content_quickview">
                                            <i class="icon anm anm-search-plus-r"></i>
                                        </a>
                                        <div class="wishlist-btn">
                                            <a class="wishlist add-to-wishlist" href="wishlist.html">
                                                <i class="icon anm anm-heart-l"></i>
                                            </a>
                                        </div>
                                        <div class="compare-btn">
                                            <a class="compare add-to-compare" href="compare.html" title="Add to Compare">
                                                <i class="icon anm anm-random-r"></i>
                                            </a>
                                        </div>
                                    </div> -->
                                    <!-- end product button -->
                                </div>
                               
                            </div>
                                <?php endforeach; ?> 
                            
                        </div>
                        
                    </div>
            	</div>    
            </div>
        </div>
        <!--Weekly Bestseller-->

        <!--Feature Content-->
        <div class="section feature-content" style="background-color:white;">
            <div class="container">
                <div class="row">
                    <div class="feature-row">
                        <div class="col-12 col-sm-12 col-md-6 feature-row__item">
                            <img src="assets/akta-pt-compressor.png" alt="Fast Fashion Only available at BElle" title="Fast Fashion Only available at BElle" />
                        </div>
                        <div style="font-color:white;" class="col-12 col-sm-12 col-md-6 feature-row__item feature-row__text feature-row__text--left text-left">
                            <div class="row-text">
                                <?php foreach ($legalitas as $key): ?>
                                                <!-- <td colspan="1"><?php echo $key->tentangperusahaan; ?></td> -->
                                                <h2 class="h2"><?php echo $key->legalitas; ?></h2>
                                    <div class="rte-setting featured-row__subtext"><p><?php echo $key->Keterangan; ?></p></div>
                                <?php endforeach; ?>  
                        
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Feature Content-->
