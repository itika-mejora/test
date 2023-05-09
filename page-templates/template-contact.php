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
                        <h2>CONTACT US</h2>
                    </div>
                    <div class="row">
                        <div class="blog-width-50">
                            <div class="contact-blog">
                                <div class="contact-blog-heading">
                                    <h3>OUR OFFICES</h3>
                                </div>
                                <div class="contact-blog-content">
                                    <ul class="address-line">
                                        <li>
                                            <strong class="icon"><img src="images/icons/map.svg"></strong>
                                            <h5>CYPRUS - HEADQUARTERS</h5>
                                            <p>Address line 1, Address line 2,68974, Limassol, Cyprus</p>
                                        </li>
                                        <li>
                                            <strong class="icon"><img src="images/icons/map.svg"></strong>
                                            <h5>MALTA</h5>
                                            <p>Address line 1, Address line 2,68974, Malta</p>
                                        </li>
                                        <li>
                                            <strong class="icon"><img src="images/icons/map.svg"></strong>
                                            <h5>DUBAI</h5>
                                            <p>Address line 1, Address line 2,68974, Dubai, UAE</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="contact-blog">
                                <div class="contact-blog-heading">
                                    <h3>TALK TO US</h3>
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
                                        <div class="input-wrap">
                                            <input type="text" name="first-name" placeholder="Name">
                                        </div>
                                        <div class="input-wrap">
                                            <input type="text" name="last-name" placeholder="Surname">
                                        </div>
                                        <div class="input-wrap">
                                            <input type="email" name="email" placeholder="Email">
                                        </div>
                                        <div class="input-wrap">
                                            <select name="country" id="country">
                                                <option value="argentina">Argentina</option>
                                                <option value="belgium">Belgium</option>
                                                <option value="cambodia">Cambodia</option>
                                                <option value="denmark">Denmark</option>
                                                <option value="india">India</option>
                                            </select>
                                        </div>
                                        <div class="input-wrap">
                                            <textarea name="message" placeholder="Message"></textarea>
                                        </div>
                                        <div class="input-wrap">
                                            <button type="button">SUBMIT MESSAGE</button>
                                        </div>
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