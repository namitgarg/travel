<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Prevalent
 */
?>
<div id="footer-wrapper">
    	<div class="container">
               <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>             
               <?php endif; // end footer widget area ?>    
                        
               <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>                                  	
               <?php endif; // end footer widget area ?>   
            
               <?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>                
               <?php endif; // end footer widget area ?> 
               
               <?php if ( ! dynamic_sidebar( 'footer-4' ) ) : ?>                
               <?php endif; // end footer widget area ?>                  
                
            <div class="clear"></div>
        </div><!--end .container-->
        
        <div class="copyright-wrapper">
        	<div class="container">
              <div class="copyright-txt-bottom">
                  <div class="address-wrapper">
                      <div class="address-text">
                          <h3 class="office"> Main Branch </h3>
                          <p>162-rogan gran<br>
                              Delhi gate<br>
                              Ghaziabad – 201002<br>
                              Mob :<a href="tel:9810494888"> 9810494888</a></p>
                      </div>  
                      <div class="address-text">
                          <h3 class="office"> Home Branch </h3>
                          <p>K.M - 25 Kavi Nagar<br>
                              Ghaziabad - 201002<br>
                              Mob :<a href="tel:9810494888"> 9810494888</a></p> 

                      </div>
                  </div>
                  
              </div>
                <div class="clear"></div>
            </div>
            
        </div>
    </div>
</div><!--#end pageholder-->
<?php wp_footer(); ?>

</body>
</html>