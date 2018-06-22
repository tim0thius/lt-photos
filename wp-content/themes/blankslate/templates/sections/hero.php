<section id="section__hero--<?= $hero_id ?>" class="section__hero">
	<div class="grid__super-container">
		<div class="block-hero">
		    @if( $hero_images )
					    <div class="block-gallery__slider slider" >
					        @foreach( $hero_images as $image )
					            <div>
					            	<img data-lazy="{{$image['url']}}" alt="{{the_title()}}">
					            </div>
					        @endforeach
					    </div>
			@endif
		</div>	
	</div>
</section>