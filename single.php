<?php
/* this is Post detail */

get_header();
?>
<div class="body-content">
        <!-- for banner section -->
        <div class="banner-section-wrap">
            <div class="specer"></div>
        </div>
        <!-- end banner section -->

        <!-- news details section -->
        <?php if ( have_posts() ) : 
					 while ( have_posts() ) : the_post(); 
        $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'blog-thumb'); ?>
        <div class="news-details-section">
            <div class="container share-wrap">
                <div class="back-btn">
                    <a href="<?php echo get_permalink('410' ); ?>">BACK TO NEWS</a>
                </div>
                <div class="news-details-wrap">
                    <div class="news-img">
                        <img src="<?php echo $url[0];?>" alt="news-details">
                    </div>
                    <div class="news-name">
                        <strong class="date"><?php the_time( 'd.m.Y' ); ?></strong>
                        <h1><?php the_title(); ?></h1>
                    </div>
                    <div class="news-content-text">
                    <?php the_content(); ?>
                        <!-- <p>Cyprus is mulling the enabling of transfer pricing regulations in an environment rife with base erosion and proﬁt 
                            shifting. Read on to ﬁnd out about the proposed Transfer Pricing legislation of 2021.  
                        </p>
                        <h2>H2 Title</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
                            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in 
                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et 
                            iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi:
                        </p>
                        <ul class="content-list-text">
                            <li>Duis autem vel eum iriure dolor in </li>
                            <li>Duis autem vel eum iriure dolor in </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
                            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                            suscipit lobortis nisl ut aliquip ex ea commodo consequat.<br>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
                            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in 
                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et 
                            iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        </p>
                        <h3>H3 Title</h3>
                        <p>Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
                            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                            suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
                            dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                            suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in 
                            vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et 
                            iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
                            dolore magna aliquam erat volutpat. Ut wisi umsan et iusto odio dignissim qui blandit prae
                        </p> -->
                    </div>
                    
                    <div id="share-box">
                    <?php if ( is_active_sidebar( 'share-icon' )) : ?>
                        <button id="share-btn">
                        <?php dynamic_sidebar( 'share-icon' ); ?>   
                        </button>
                        <?php endif;?>
                      
                        <ul id="share-list">

                        <?php if ( is_active_sidebar( 'share-article' )) : ?>
                          <li class="list-item">
                            <a class="list-item-link" href="#">
                            <?php dynamic_sidebar( 'share-article' ); ?>  
                            </a>
                          </li>
                          <?php endif;?>
                          <!-- <li class="list-item">
                            <a class="list-item-link" href="#">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/icons/twitter.svg" alt="fb">
                            </a>
                          </li>
                          <li class="list-item">
                            <a class="list-item-link" href="#">
                                <img src="<?php echo get_stylesheet_directory_uri();?>/images/icons/linkedin.svg" alt="fb">
                            </a>
                          </li> -->
                        </ul>
                        <div class="share-text">Share this article</div>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
					<?php endif; ?>
        <!-- end details section -->
    </div>
    <?php get_footer(); ?>