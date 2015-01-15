    <div class="bizsix-quote-container">
    
       <div class="responsive-container">
       
       		<div class="bizsix-quote">
            
				<?php 
                    if( of_get_option('quote_section_text_biz1') ) {
                        $themealley_business_bizsix_quote_v = '1';
                    }else{
                        $themealley_business_bizsix_quote_v = '0';
                    }
                    if( of_get_option('quote_section_text_biz2') ) {
                        $themealley_business_bizsix_quote_w = '1';
                    }else{
                        $themealley_business_bizsix_quote_w = '0';
                    }
                    if( of_get_option('quote_section_text_biz3') ) {
                        $themealley_business_bizsix_quote_x = '1';
                    }else{
                        $themealley_business_bizsix_quote_x = '0';
                    }
                    if( of_get_option('quote_section_text_biz4') ) {
                        $themealley_business_bizsix_quote_y = '1';
                    }else{
                        $themealley_business_bizsix_quote_y = '0';
                    }	
                    if( of_get_option('quote_section_text_biz5') ) {
                        $themealley_business_bizsix_quote_z = '1';
                    }else{
                        $themealley_business_bizsix_quote_z = '0';
                    }
                    
                    $themealley_business_bizsix_quote_a = $themealley_business_bizsix_quote_v + $themealley_business_bizsix_quote_w + $themealley_business_bizsix_quote_x + $themealley_business_bizsix_quote_y + $themealley_business_bizsix_quote_z;
                    
                    if( $themealley_business_bizsix_quote_a == '5' ){													
                        $themealley_business_bizsixquoterandomnum = rand(1, 5);
                    }elseif ( $themealley_business_bizsix_quote_a == '4' ){
                        $themealley_business_bizsixquoterandomnum = rand(1, 4);
                    }elseif ( $themealley_business_bizsix_quote_a == '3' ){
                        $themealley_business_bizsixquoterandomnum = rand(1, 3);
                    }elseif ( $themealley_business_bizsix_quote_a == '2' ){
                        $themealley_business_bizsixquoterandomnum = rand(1, 2);
                    }else{
                        $themealley_business_bizsixquoterandomnum = '1';
                    }
                    
                    $themealley_business_bizsixquotetext = 'quote_section_text_biz'.$themealley_business_bizsixquoterandomnum;
                    $themealley_business_bizsixquotename = 'quote_section_name_biz'.$themealley_business_bizsixquoterandomnum;
                    
                ?>
                
                <div class="bizsix-quote-text">
                    
                    <p>
                        <?php echo esc_html( of_get_option( $themealley_business_bizsixquotetext ) ); ?>
                    </p> 
                        
                </div><!-- .bizsix-quote-text -->
                
                <p class="bizsix-quote-name">
                
                    <span>
                        <?php echo esc_attr( of_get_option( $themealley_business_bizsixquotename ) ); ?>
                    </span> 
                      
                </p>             
            
            </div><!-- .bizsix-quote -->
            
       </div><!-- .responsive-container -->                
    
    </div><!-- .bizsix-quote-container -->