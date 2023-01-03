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
                                <div class="wrap-caption center left">
                                        <h3 style="color:white;"  class="text-left">Blass Group</h3>
                                        <h2 style="color:white;" class="h1 mega-title slideshow__title">MERAPI MAS NUSANTARA</h2>
                                        <div class="wrap-caption center left"> <a href="#" class="btn ">Selengkapnya!</a> </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="slide">
                	<div class="blur-up lazyload bg-size">
                        <img class="blur-up lazyload bg-img" data-src="assets/images/bg1.jpg" src="assets/images/bg1.jpg" alt="" title="" />
                        <div class="slideshow__text-wrap slideshow__overlay classic bottom">
                            <div class="slideshow__text-content bottom">
                                <div class="wrap-caption center">
                                        <h3 style="color:white;">Blass Group</h3>
                                        <h2 style="color:white;" class="h1 mega-title slideshow__title">MERAPI MAS NUSANTARA</h2>
                                        <span class="btn">Selengkapnya</span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!--End Home slider-->

        <!--Parallax Section-->
        <div class="section">
            <div class="hero hero--large hero__overlay bg-size">
            	<!-- <img class="bg-img" src="assets/background3.jpg" alt="" /> -->
                <div class="hero__inner">
                    <div class="container">
                        <div class="wrap-text left text-small font-bold">
                            <h2 class="h2 mega-title">Tentang Kami</h2>
                            <div style="text-align:justify; font-size:18px">
                            <?php foreach ($tentang as $key): ?>
                                                <td colspan="1"><?php echo $key->tentangperusahaan; ?></td>
                                                <?php endforeach; ?>   
                                <br>
                            <a href="#" class="btn">Selengkapnya!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Parallax Section-->

        <h1 style="text-align:center; font-size: 32px;">Proyek Terkini</h1> <br>
        <div class="row align-items-center" style="background-color:black;">
         <?php foreach ($pekerjaan as $key): ?>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="custom-text text-center">
                    <img class="blur-up lazyload"  src="<?php echo base_url().'/upload/pekerjaan/'. $key->thumbnail ?>" height="350" alt="" title="">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-6 col-lg-6">
                <div class="custom-text text-left">
                        
                        <h1 style="color:white; ">
                            <a href="#"><?php echo $key->nama_pekerjaan; ?></a>   
                        </h1>
                            <h3 style="color:white;"><?php echo $key->Nama_layanan; ?></h3>
                                <div class="rte-setting"><p style="color:white;"><?php echo $key->detail_pekerjaan; ?></p></div>
                                                        <a class="btn" href="#">Selengkapnya</a>
                     
                </div>
            </div>
            <?php endforeach; ?> 
        </div>
        
        
        <!--Latest Blog-->
        <div class="latest-blog section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
        				<div class="section-header text-center">
      						<h2 class="h2">Kata Orang</h2>
                            <p>Lorem Ipsum is simply dummy text...</p>
					    </div>
            		</div>
                </div>
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    	<div class="wrap-blog">
                        	<a href="blog-left-sidebar.html" class="article__grid-image">
              					<img src="assets/images/blog/post-img1.jpg" alt="It's all about how you wear" title="It's all about how you wear" class="blur-up lazyloaded"/>
				            </a>
                            <div class="article__grid-meta article__grid-meta--has-image">
                                <div class="wrap-blog-inner">
                                    <h2 class="h3 article__title">
                                      <a href="blog-left-sidebar.html">It's all about how you wear</a>
                                    </h2>
                                    <span class="article__date">May 02, 2017</span>
                                    <div class="rte article__grid-excerpt">
                                        I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account...
                                    </div>
                                    <ul class="list--inline article__meta-buttons">
                                    	<li><a href="blog-article.html">Read more</a></li>
                                    </ul>
                                </div>
							</div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    	<div class="wrap-blog">
                        	<a href="blog-left-sidebar.html" class="article__grid-image">
              					<img src="assets/images/blog/post-img2.jpg" alt="27 Days of Spring Fashion Recap" title="27 Days of Spring Fashion Recap" class="blur-up lazyloaded"/>
				            </a>
                            <div class="article__grid-meta article__grid-meta--has-image">
                                <div class="wrap-blog-inner">
                                    <h2 class="h3 article__title">
                                      <a href="blog-right-sidebar.html">27 Days of Spring Fashion Recap</a>
                                    </h2>
                                    <span class="article__date">May 02, 2017</span>
                                    <div class="rte article__grid-excerpt">
                                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab...
                                    </div>
                                    <ul class="list--inline article__meta-buttons">
                                    	<li><a href="blog-article.html">Read more</a></li>
                                    </ul>
                                </div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End Latest Blog-->
        <!--Logo Slider-->
        <div class="section logo-section">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<div class="section-header text-center">
                        	<h2 class="h2">Dipercaya Oleh:</h2>
                    	</div>
                		<div class="logo-bar">
                            <div class="logo-bar__item">
                                <img src="assets/images/logo/brandlogo1.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="assets/images/logo/brandlogo2.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="assets/images/logo/brandlogo3.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="assets/images/logo/brandlogo4.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="assets/images/logo/brandlogo5.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="assets/images/logo/brandlogo6.png" alt="" title="" />
                            </div>
               			 </div>
                         <div class="logo-bar">
                            <div class="logo-bar__item">
                                <img src="assets/images/logo/brandlogo1.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="assets/images/logo/brandlogo2.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="assets/images/logo/brandlogo3.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="assets/images/logo/brandlogo4.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="assets/images/logo/brandlogo5.png" alt="" title="" />
                            </div>
                            <div class="logo-bar__item">
                                <img src="assets/images/logo/brandlogo6.png" alt="" title="" />
                            </div>
               			 </div>
                	</div>
                </div>
            </div>
        </div>
        <!--End Logo Slider-->
    </div>
    <!--End Body Content-->