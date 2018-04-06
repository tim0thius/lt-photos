<?php get_header(); ?>
<?php
?>
<section id="content" role="main">
@wpquery(array('post_type' => 'gallery'))

<?php
$images = get_field('gallery');
$size = 'full';
?>
	
    <h2>{{the_title()}}</h2 >
    {{ the_post_thumbnail('thumbnail', ['class' => 'thumbnail', 'title' => the_title()]); }}
	@if( $images )
	    <div>
	        @foreach( $images as $image )
	            <div>
	            	<img src="{{$image['url']}}" alt="{{the_title()}}">
	            </div>
	        @endforeach
	    </div>
	@endif
    <p >{{the_excerpt()}}</p>
@wpempty
    <li>{{ __('Sorry, no posts matched your criteria.') }}</li>
@wpend
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<section class="entry-content">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
</article>
<?php if ( ! post_password_required() ) comments_template( '', true ); ?>
<?php endwhile; endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>