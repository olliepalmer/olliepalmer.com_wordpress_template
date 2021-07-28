<?php

/**
* Template name: Portfolio
* Description: Page for displaying portfolio items.
*
*/
?>

<?php get_header();?>

<div id="content">
<div id="inner-content" class="wrap cf">
<main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
<?php
           global $post;
           $myposts = get_posts('numberposts=10&category_name=Featured Big');
           foreach($myposts as $post) :
           setup_postdata($post);
     ?>
     <a href="<?php the_permalink(); ?>">
     	<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
     	<div class="folio_image" style="background:url('<?php echo $url?>');">
     		<h1 class="home-title"><?php the_title(); ?></h1>
     	</div>
     </a>
 <?php endforeach; ?>
</main>
</div><!--/inner-content-->
</div><!--/content-->


<?php get_footer(); ?>
