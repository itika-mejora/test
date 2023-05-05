<?php
/**
 * The template for displaying archive pages.
 */
?>
<?php get_header();?>

<?php query_posts( 'post_type= country' );
get_footer();

