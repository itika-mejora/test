<!-- for footer section -->
<footer id="footer">
        <div class="container">
            <div class="footer-content-wrap">
                <div class="row">
                <?php if ( is_active_sidebar( 'footer-widget' )) : ?>
                    <div class="footer-left">
                        <div class="footer-left-content">
                        <?php dynamic_sidebar( 'footer-widget' ); ?>
                           
                            <?php if ( is_active_sidebar( 'footer-menu-widget' )) : ?>
                            <ul class="footer-menu">
                            
                             <?php dynamic_sidebar( 'footer-menu-widget' ); ?>
                            </ul>
                            <?php endif;?>
                        </div>
                       
                    </div>
                    <?php endif;?>
                    
                    <?php if ( is_active_sidebar( 'footer-right-widget' )) : ?>
                    <div class="footer-right">

                    <?php dynamic_sidebar( 'footer-right-widget' ); ?>   
                        
                      
                    </div>
                    <?php endif;?>
                </div>
            </div>
           
            <div class="footer-social-contact">
            <?php if ( is_active_sidebar( 'footer-social-widget' )) : ?>
            <?php dynamic_sidebar( 'footer-social-widget' ); ?>  
                
                <?php endif;?>
            </div>
           
           
            <div class="copyright-wrap">
            <?php if ( is_active_sidebar( 'footer-bottom-widget' )) : ?>
            <?php dynamic_sidebar( 'footer-bottom-widget' ); ?> 
                
                <?php endif;?>
            </div>
           
        </div>
    </footer>
    

    <?php wp_footer(); ?>
    <!-- end footer section -->

    <!-- for js links -->    
	
	
    <script type="text/javascript">     
        jQuery(document).ready(function($){   
            //for counter
            var a = 0;
            $(window).scroll(function() {

            var oTop = $('.commitment-blog').offset().top - window.innerHeight;
            if (a == 0 && $(window).scrollTop() > oTop) {
                $('.prg-count').each(function() {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                    },

                    {

                    duration: 2000,
                    easing: 'swing',
                    step: function() {
                        $this.text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $this.text(this.countNum);
                       
                    }

                    });
                });
                a = 1;
            }

            });
        });
    </script>
</body>
</html>