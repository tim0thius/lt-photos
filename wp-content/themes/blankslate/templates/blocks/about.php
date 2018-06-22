<?php if(get_field('homepage_layout_type', 'option') == 'compact') : ?>
<section id="block-about--<?= $about_id ?>" class="block-about" role="main" >
		<div class="grid__container">
			<div class="grid">
				<div class="grid__item one-whole desk--one-half">
					<div class="block-about__content">
						<div class="block-about__content-inner">
							<span class="block-about__label">A Little About Me</span>
							<span class="block-about__subheadline">hello there...</span>
							<h2 class="block-about__headline">I’m Lynsey Tedesco</h2>
							<p class="block-about__summary">{{the_field('about_me_summary', 'option')}}</p>
							<a href="" class="block-about__readmore">read more...</a>

						</div>
					</div>
				</div><!-- 
				 --><div class="grid__item one-whole desk--one-half">
					<div class="block-about__imagebox" style="background-image: url('{{the_field('about_image', 'option')}}')"></div>
				</div>
			</div>
			
		</div>
</section>
<?php else : ?>
<section id="block-hero-content--about" class="block-hero-content" role="main" >
	<div class="grid__super-container" style="background-image:url({{ the_field( 'about_me_hp_hero', 'option' ) }})">
		<div class="grid__container" >
			<div class="block-about__content">
				<div class="block-about__content-inner">
					<span class="block-about__label">A Little About Me</span>
					<span class="block-about__subheadline">hello there...</span>
					<h2 class="block-about__headline">I’m Lynsey Tedesco</h2>
					<p class="block-about__summary">{{the_field('about_me_summary', 'option')}}</p>
					<a href="" class="block-about__readmore">read more...</a>

				</div>
			</div>
		</div>
	</div>
</section>	
<?php endif; ?>