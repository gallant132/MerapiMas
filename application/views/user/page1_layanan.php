<!--Body Content-->
<div id="page-content">

        <!--Our benefits will change the way you buy parts-->
        <div class="section featured-content pb-0">
        	<div class="container">
            	<div class="row">
                	<div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    	<div class="section-header text-center">
                            <h2 class="h2">Jenis Layanan.</h2>
                            <p>Berikut layanan yang kami tawarkan!</p>
                        </div>
                    </div>
                </div>
                <div class="row list-items">
                         <?php foreach ($jenis_layanan as $key): ?>
                                                <!-- <td colspan="1"><?php echo $key->tentangperusahaan; ?></td> -->
                                                 
                	<div class="col-12 col-sm-6 col-md-4 col-lg-4 text-center">
                    	<img class="blur-up lazyload"  src="<?php echo base_url().'upload/icon_jenis_layanan/'. $key->icon ?>" alt="Warranty"  width="50"/>
                        <h3 class="h4"><?php echo $key->JenisLayanan; ?></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>

                    <?php endforeach; ?> 

                    
                </div>
            </div>
        </div>
        <!--End Our benefits will change the way you buy parts-->
        <!--Store Information-->
        <div class="section store-information" style="background-color:black; color:white;">
        	<div class="container-fluid">

        <h1 style="text-align:center; font-size: 32px; color:white;">Keunggulan</h1> <br>
            	<div class="row">
            		<ul class="display-table store-info">
                      <li class="display-table-cell"> <i class="icon anm anm-comments-l" aria-hidden="true"></i>
                        <h5>24/7 Help Center</h5>
                            <span class="sub-text">
                            Use this text to display your store information
                            </span> 
                        </li>
                        <li class="display-table-cell"> <i class="icon anm anm-comments-l" aria-hidden="true"></i>
                        <h5>24/7 Help Center</h5>
                            <span class="sub-text">
                            Use this text to display your store information
                            </span> 
                        </li>
                        <li class="display-table-cell"> <i class="icon anm anm-comments-l" aria-hidden="true"></i>
                        <h5>24/7 Help Center</h5>
                            <span class="sub-text">
                            Use this text to display your store information
                            </span> 
                        </li>
                    </ul>
            	</div>
            </div>
        </div>
        <!--End Store Information-->