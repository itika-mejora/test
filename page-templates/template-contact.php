<?php
/*
    Template name: Contactpage template
*/
get_header();
?>


<div class="body-content">
        <!-- for banner section -->
        <div class="banner-section-wrap">
            <div class="specer"></div>
        </div>
        <!-- end banner section -->

        
        <!-- for contact-us section -->
        <div class="contact-us-section">
            <div class="container">
                <div class="contact-us-container">
                    <div class="contact-us-heading">
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="row">
                        <div class="blog-width-50">
                            <div class="contact-blog">
                            <?php if (get_field('contact_heading')) : ?>
                                <div class="contact-blog-heading">
                                    <h3><?php the_field('contact_heading'); ?></h3>
                                </div>
                                <?php endif;?>
                                <div class="contact-blog-content">
                                    
                                    <ul class="address-line">
                                    
                                    <?php if(get_field('contact_details')){
                                        while(has_sub_field('contact_details')){?>
                                        <li>
                                            <strong class="icon"><img src="<?php echo get_sub_field('address_icon');?>"></strong>
                                            <h5><?php echo get_sub_field('address_heading');?></h5>
                                            <?php echo get_sub_field('address_subheading');?>
                                        </li>
                                        <?php } }?>
                                        
                                    </ul>
                                </div>
                            </div>
                            <div class="contact-blog">
                                
                                <div class="contact-blog-heading">
                                    <h3><?php echo the_field('contact_blog_heading');?></h3>
                                </div>
                                
                                <div class="contact-blog-content">
                                    <ul class="address-line">
                                        
                                        <li>
                                            <strong class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icons/mail.svg"></strong>
                                            <a href="mailto:info@reyglobal.com">info@reyglobal.com</a>
                                        </li>
                                        <li>
                                            <strong class="icon"><img src="<?php echo get_stylesheet_directory_uri();?>/images/icons/call.svg"></strong>
                                            <ul class="number-id">
                                                <li>
                                                    <strong class="country-name">
                                                        Cyprus:
                                                    </strong>
                                                    <a href="tel:+357 25 785 965">+357 25 785 965</a>
                                                </li>
                                                <li>
                                                    <strong class="country-name">
                                                        Malta:
                                                    </strong>
                                                    <a href="tel:+357 25 785 965">+357 25 785 965</a>
                                                </li>
                                                <li>
                                                    <strong class="country-name">
                                                        Dubai: 
                                                    </strong>
                                                    <a href="tel:+357 25 785 965">+357 25 785 965</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="blog-width-50">
                            <div class="contact-blog">
                                <div class="contact-blog-content">
                                    <div class="form-group-wrap">                                        
                                        <h5>SEND US A MESSAGE</h5>
                                        <?php echo do_shortcode(get_field('Short Code')); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end contact-us section -->
    </div>

<?php get_footer(); ?>