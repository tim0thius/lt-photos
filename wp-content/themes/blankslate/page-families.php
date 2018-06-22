<?php get_header(); ?>
<?php
?>
<section id="section-gallery" role="main">

<!-- slideshows -->
@wpquery(array('post_type' => 'gallery'))

<?php
$images = get_field('gallery');
$size = 'full';
?>
	<div class="block-gallery">
	    <h2 class="block-gallery__title">{{the_title()}}</h2 >
	    {{ the_post_thumbnail('thumbnail', ['class' => 'action--show-gallery', 'title' => the_title()]); }}
	    <p class="block-gallery__excerpt" >{{the_excerpt()}}</p>
	    @if( $images )
		    <div class="block-gallery__slider-backdrop" >
			    <div class="block-gallery__slider-container" >
				    <div class="block-gallery__slider slider" >
				        @foreach( $images as $image )
				            <div>
				            	<img data-lazy="{{$image['url']}}" alt="{{the_title()}}">
				            </div>
				        @endforeach
				    </div>
			    </div>
			    <a class="block-gallery__slider-close action--hide-gallery">X</a>
		    </div>
		@endif
	</div>	
@wpempty
    <li>{{ __('Sorry, no posts matched your criteria.') }}</li>
@wpend

<!-- page content -->
</section>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="header">
			<h1 class="entry-title">{{the_title()}} </h1>  {{edit_post_link()}}
		</header>
		<section class="entry-content">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
			<?php the_content(); ?>
		</section>
	</article>
<?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>