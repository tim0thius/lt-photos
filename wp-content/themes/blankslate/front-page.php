<?php get_header(); ?>

<?php
   $args = array('post_type' => 'gallery');
   $category_posts = new WP_Query($args);
?>

@include( 'templates/blocks/hero', ['hero_id' => 'frontpage', 'hero_images' => get_field('hero_gallery')] )

<?php if(get_field('homepage_layout_type', 'option') == 'compact') : ?>
	
	@include( 'templates/blocks/about--frontpage', ['about_id' => 'frontpage'] )
	@include( 'templates/blocks/gallery--frontpage', ['gallery_id' => 'main'] )
	@include( 'templates/blocks/cta', ['cta_id' => 'session'] )

<?php else : ?>

	@include( 'templates/blocks/cta', ['cta_id' => 'session'] )
	@include( 'templates/blocks/gallery--frontpage', ['gallery_id' => 'main'] )
	@include( 'templates/blocks/about--frontpage', ['about_id' => 'frontpage'] )
	
    @acfrepeater('hp_heros', 'option')
		@include( 'templates/blocks/gallery--frontpage', ['gallery_id' => 'main'] )
		@include( 'templates/blocks/hero-content', ['hero_content_id' => 'frontpage'] )
    @acfend

	@include( 'templates/blocks/cta', ['cta_id' => 'session'] )

<?php endif; ?>

<?php get_footer(); ?>