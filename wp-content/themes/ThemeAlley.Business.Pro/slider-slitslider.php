    <div id="feature" class="site-slider">
    
        
            <div id="slit-slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-1"></div>
                            <?php if( of_get_option('slitslider_slide1_title') ) : ?>
							<h2><span><?php echo of_get_option('slitslider_slide1_title'); ?></span></h2>
                            <?php endif; ?>
                            
							<blockquote>
                            
								<?php if( of_get_option('slitslider_slide1_desc') ) : ?>
                                <p><span><?php echo of_get_option('slitslider_slide1_desc'); ?></span></p>
                                <?php endif; ?>
                                
                                <?php if( of_get_option('slitslider_slide1_cta') ) : ?>
                                <?php if( of_get_option('slitslider_slide1_link') ) : ?>
                                <cite><a href="<?php echo of_get_option('slitslider_slide1_link'); ?>"><?php echo of_get_option('slitslider_slide1_cta'); ?></a></cite>
                                <?php else : ?>
                                <cite><span><?php echo of_get_option('slitslider_slide1_cta'); ?></span></cite>
                                <?php endif; ?>
                                <?php endif; ?>
                            
                            </blockquote>
						</div>
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						<div class="sl-slide-inner">
							<div class="bg-img bg-img-2"></div>
                            <?php if( of_get_option('slitslider_slide2_title') ) : ?>
							<h2><span><?php echo of_get_option('slitslider_slide2_title'); ?></span></h2>
                            <?php endif; ?>
                            
							<blockquote>
                            
								<?php if( of_get_option('slitslider_slide2_desc') ) : ?>
                                <p><span><?php echo of_get_option('slitslider_slide2_desc'); ?></span></p>
                                <?php endif; ?>
                                
                                <?php if( of_get_option('slitslider_slide2_cta') ) : ?>
                                <?php if( of_get_option('slitslider_slide2_link') ) : ?>
                                <cite><a href="<?php echo of_get_option('slitslider_slide2_link'); ?>"><?php echo of_get_option('slitslider_slide2_cta'); ?></a></cite>
                                <?php else : ?>
                                <cite><span><?php echo of_get_option('slitslider_slide2_cta'); ?></span></cite>
                                <?php endif; ?>
                                <?php endif; ?>
                            
                            </blockquote>
						</div>
					</div>
					
                    <?php if( of_get_option('slitslider_slide3_image') ) : ?>
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
                        <div class="sl-slide-inner">
                        
							<div class="bg-img bg-img-3"></div>
                            
                            <?php if( of_get_option('slitslider_slide3_title') ) : ?>
							<h2><span><?php echo of_get_option('slitslider_slide3_title'); ?></span></h2>
                            <?php endif; ?>
                            
							<blockquote>
                            
								<?php if( of_get_option('slitslider_slide3_desc') ) : ?>
                                <p><span><?php echo of_get_option('slitslider_slide3_desc'); ?></span></p>
                                <?php endif; ?>
                                
                                <?php if( of_get_option('slitslider_slide3_cta') ) : ?>
                                <?php if( of_get_option('slitslider_slide3_link') ) : ?>
                                <cite><a href="<?php echo of_get_option('slitslider_slide3_link'); ?>"><?php echo of_get_option('slitslider_slide3_cta'); ?></a></cite>
                                <?php else : ?>
                                <cite><span><?php echo of_get_option('slitslider_slide3_cta'); ?></span></cite>
                                <?php endif; ?>
                                <?php endif; ?>
                            
                            </blockquote>
                            
						</div>
                        
					</div>
                    <?php endif; ?>
					
                    <?php if( of_get_option('slitslider_slide4_image') ) : ?>
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						
                        <div class="sl-slide-inner">
                        
							<div class="bg-img bg-img-4"></div>
                            
                            <?php if( of_get_option('slitslider_slide4_title') ) : ?>
							<h2><span><?php echo of_get_option('slitslider_slide4_title'); ?></span></h2>
                            <?php endif; ?>
                            
							<blockquote>
                            
								<?php if( of_get_option('slitslider_slide4_desc') ) : ?>
                                <p><span><?php echo of_get_option('slitslider_slide4_desc'); ?></span></p>
                                <?php endif; ?>
                                
                                <?php if( of_get_option('slitslider_slide4_cta') ) : ?>
                                <?php if( of_get_option('slitslider_slide4_link') ) : ?>
                                <cite><a href="<?php echo of_get_option('slitslider_slide4_link'); ?>"><?php echo of_get_option('slitslider_slide4_cta'); ?></a></cite>
                                <?php else : ?>
                                <cite><span><?php echo of_get_option('slitslider_slide4_cta'); ?></span></cite>
                                <?php endif; ?>
                                <?php endif; ?>
                            
                            </blockquote>
                            
						</div>
                        
					</div>
                    <?php endif; ?>
					
                    <?php if( of_get_option('slitslider_slide5_image') ) : ?>
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						
                        <div class="sl-slide-inner">
                        
							<div class="bg-img bg-img-5"></div>
                            
                            <?php if( of_get_option('slitslider_slide5_title') ) : ?>
							<h2><span><?php echo of_get_option('slitslider_slide5_title'); ?></span></h2>
                            <?php endif; ?>
                            
							<blockquote>
                            
								<?php if( of_get_option('slitslider_slide5_desc') ) : ?>
                                <p><span><?php echo of_get_option('slitslider_slide5_desc'); ?></span></p>
                                <?php endif; ?>
                                
                                <?php if( of_get_option('slitslider_slide5_cta') ) : ?>
                                <?php if( of_get_option('slitslider_slide5_link') ) : ?>
                                <cite><a href="<?php echo of_get_option('slitslider_slide5_link'); ?>"><?php echo of_get_option('slitslider_slide5_cta'); ?></a></cite>
                                <?php else : ?>
                                <cite><span><?php echo of_get_option('slitslider_slide5_cta'); ?></span></cite>
                                <?php endif; ?>
                                <?php endif; ?>
                            
                            </blockquote>
                            
						</div>
                        
					</div>
                    <?php endif; ?>
                    
                    <?php if( of_get_option('slitslider_slide6_image') ) : ?>
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
						
                        <div class="sl-slide-inner">
                        
							<div class="bg-img bg-img-6"></div>

                            <?php if( of_get_option('slitslider_slide6_title') ) : ?>
							<h2><span><?php echo of_get_option('slitslider_slide6_title'); ?></span></h2>
                            <?php endif; ?>
                            
							<blockquote>
                            
								<?php if( of_get_option('slitslider_slide6_desc') ) : ?>
                                <p><span><?php echo of_get_option('slitslider_slide6_desc'); ?></span></p>
                                <?php endif; ?>
                                
                                <?php if( of_get_option('slitslider_slide6_cta') ) : ?>
                                <?php if( of_get_option('slitslider_slide6_link') ) : ?>
                                <cite><a href="<?php echo of_get_option('slitslider_slide6_link'); ?>"><?php echo of_get_option('slitslider_slide6_cta'); ?></a></cite>
                                <?php else : ?>
                                <cite><span><?php echo of_get_option('slitslider_slide6_cta'); ?></span></cite>
                                <?php endif; ?>
                                <?php endif; ?>
                            
                            </blockquote>
                            
						</div>
                        
					</div>
					<?php endif; ?>
                    
                    <?php if( of_get_option('slitslider_slide7_image') ) : ?>
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
						
                        <div class="sl-slide-inner">
                        
							<div class="bg-img bg-img-7"></div>

                            <?php if( of_get_option('slitslider_slide7_title') ) : ?>
							<h2><span><?php echo of_get_option('slitslider_slide7_title'); ?></span></h2>
                            <?php endif; ?>
                            
							<blockquote>
                            
								<?php if( of_get_option('slitslider_slide7_desc') ) : ?>
                                <p><span><?php echo of_get_option('slitslider_slide7_desc'); ?></span></p>
                                <?php endif; ?>
                                
                                <?php if( of_get_option('slitslider_slide7_cta') ) : ?>
                                <?php if( of_get_option('slitslider_slide7_link') ) : ?>
                                <cite><a href="<?php echo of_get_option('slitslider_slide7_link'); ?>"><?php echo of_get_option('slitslider_slide7_cta'); ?></a></cite>
                                <?php else : ?>
                                <cite><span><?php echo of_get_option('slitslider_slide7_cta'); ?></span></cite>
                                <?php endif; ?>
                                <?php endif; ?>
                            
                            </blockquote>
                            
						</div>
                        
					</div>
					<?php endif; ?>
                    
                    <?php if( of_get_option('slitslider_slide8_image') ) : ?>
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
                        <div class="sl-slide-inner">
                        
							<div class="bg-img bg-img-8"></div>

                            <?php if( of_get_option('slitslider_slide8_title') ) : ?>
							<h2><span><?php echo of_get_option('slitslider_slide8_title'); ?></span></h2>
                            <?php endif; ?>
                            
							<blockquote>
                            
								<?php if( of_get_option('slitslider_slide8_desc') ) : ?>
                                <p><span><?php echo of_get_option('slitslider_slide8_desc'); ?></span></p>
                                <?php endif; ?>
                                
                                <?php if( of_get_option('slitslider_slide8_cta') ) : ?>
                                <?php if( of_get_option('slitslider_slide8_link') ) : ?>
                                <cite><a href="<?php echo of_get_option('slitslider_slide8_link'); ?>"><?php echo of_get_option('slitslider_slide8_cta'); ?></a></cite>
                                <?php else : ?>
                                <cite><span><?php echo of_get_option('slitslider_slide8_cta'); ?></span></cite>
                                <?php endif; ?>
                                <?php endif; ?>
                            
                            </blockquote>
                            
						</div>
                        
					</div>
                    <?php endif; ?>
                    
					<?php if( of_get_option('slitslider_slide9_image') ) : ?>
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
						
                        <div class="sl-slide-inner">
							
                            <div class="bg-img bg-img-9"></div>

                            <?php if( of_get_option('slitslider_slide9_title') ) : ?>
							<h2><span><?php echo of_get_option('slitslider_slide9_title'); ?></span></h2>
                            <?php endif; ?>
                            
							<blockquote>
                            
								<?php if( of_get_option('slitslider_slide9_desc') ) : ?>
                                <p><span><?php echo of_get_option('slitslider_slide9_desc'); ?></span></p>
                                <?php endif; ?>
                                
                                <?php if( of_get_option('slitslider_slide9_cta') ) : ?>
                                <?php if( of_get_option('slitslider_slide9_link') ) : ?>
                                <cite><a href="<?php echo of_get_option('slitslider_slide9_link'); ?>"><?php echo of_get_option('slitslider_slide9_cta'); ?></a></cite>
                                <?php else : ?>
                                <cite><span><?php echo of_get_option('slitslider_slide9_cta'); ?></span></cite>
                                <?php endif; ?>
                                <?php endif; ?>
                            
                            </blockquote>
                            
						</div>
                        
					</div>
					<?php endif; ?>
                    
                    <?php if( of_get_option('slitslider_slide10_image') ) : ?>
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
						
                        <div class="sl-slide-inner">
							
                            <div class="bg-img bg-img-10"></div>

                            <?php if( of_get_option('slitslider_slide10_title') ) : ?>
							<h2><span><?php echo of_get_option('slitslider_slide10_title'); ?></span></h2>
                            <?php endif; ?>
                            
							<blockquote>
                            
								<?php if( of_get_option('slitslider_slide10_desc') ) : ?>
                                <p><span><?php echo of_get_option('slitslider_slide10_desc'); ?></span></p>
                                <?php endif; ?>
                                
                                <?php if( of_get_option('slitslider_slide10_cta') ) : ?>
                                <?php if( of_get_option('slitslider_slide10_link') ) : ?>
                                <cite><a href="<?php echo of_get_option('slitslider_slide10_link'); ?>"><?php echo of_get_option('slitslider_slide10_cta'); ?></a></cite>
                                <?php else : ?>
                                <cite><span><?php echo of_get_option('slitslider_slide10_cta'); ?></span></cite>
                                <?php endif; ?>
                                <?php endif; ?>
                            
                            </blockquote>
                            
						</div>
                        
					</div>
                    <?php endif; ?>
                                        
				</div><!-- /sl-slider -->
                
				<nav id="nav-arrows" class="nav-arrows">
					<span class="nav-arrow-prev">Previous</span>
					<span class="nav-arrow-next">Next</span>
				</nav>                

				<nav id="nav-dots" class="nav-dots">
					<span class="nav-dot-current"></span>
					<span></span>
                    <?php if( of_get_option('slitslider_slide3_image') ) : ?>
					<span></span>
                    <?php endif; ?>
                    <?php if( of_get_option('slitslider_slide4_image') ) : ?>
					<span></span>
                    <?php endif; ?>
                    <?php if( of_get_option('slitslider_slide5_image') ) : ?>
					<span></span>
                    <?php endif; ?>
                    <?php if( of_get_option('slitslider_slide6_image') ) : ?>
					<span></span>
                    <?php endif; ?>
                    <?php if( of_get_option('slitslider_slide7_image') ) : ?>
					<span></span>
                    <?php endif; ?>
                    <?php if( of_get_option('slitslider_slide8_image') ) : ?>
					<span></span>
                    <?php endif; ?>
                    <?php if( of_get_option('slitslider_slide9_image') ) : ?>
					<span></span>
                    <?php endif; ?>
                    <?php if( of_get_option('slitslider_slide10_image') ) : ?>
					<span></span>
                    <?php endif; ?>                   
				</nav>

			</div><!-- /slider-wrapper -->
    
    </div><!-- #banner -->