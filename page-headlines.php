<?php
/**
 * @package WordPress
 * @subpackage Yoko
 */
/*
Template Name: Project Details with Headlines
*/

get_header(); ?>

<div id="wrap">
<div id="main">
  <div id="content">
  
				<?php the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>
				<?php /*if ( function_exists('socialshareprivacy') ) { socialshareprivacy(); }*/ ?>	
				<?php /*comments_template( '', true ); */?>
<?php if ( $tag = get_post_custom_values( 'headlines-tag' ) ) : ?>
    <?php $headlines = get_posts(array('tag'=>$tag[0])) ?>
              <?php if ( count( $headlines ) ) : ?>
	                        <h3>Aktuelles</h3>
		                   <ul>
		                     <?php foreach ( $headlines as $post ) : setup_postdata( $post ); ?>
		                       <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>					                                                        <?php endforeach; ?>
                                  </ul>
                                 <?php endif; ?>
				 <?php endif; ?>
        </div><!-- end content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

