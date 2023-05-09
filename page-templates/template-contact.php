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
                                            <strong class="icon"><img src="<?php echo the_field('contact_email_icon');?>"></strong>
                                            <a href="mailto:<?php echo the_field('contact_email');?>"><?php echo the_field('contact_email');?></a>
                                        </li>
                                        <li>
                                            <strong class="icon"><img src="<?php echo the_field('call_icon');?>"></strong>
                                            <ul class="number-id">
                                            <?php if(get_field('details_address')){
                                                    while(has_sub_field('details_address')){?>
                                                <li>
                                                    <strong class="country-name">
                                                    <?php echo get_sub_field('blog_address');?>
                                                    </strong>
                                                    <a href="tel+<?php echo get_sub_field('blog_address_contacts');?>"><?php echo get_sub_field('blog_address_contact');?></a>
                                                </li>
                                                  <?php  } }?>
                                                <!-- <li>
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
                                                </li> -->
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
                                        <?php echo do_shortcode(get_field('short_code')); ?>
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