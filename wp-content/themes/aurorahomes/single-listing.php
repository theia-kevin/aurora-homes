<?php
get_header();
?>
	<div class="relative h-4/6 lg:h-96 mb-24 bg-cover bg-no-repeat bg-bottom" style="background-image: url('<?php echo get_theme_file_uri( '/images/m8DVH7.png' ); ?>');">
		<div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
		<div class="absolute w-full bottom-0 bg-cover bg-no-repeat z-40" style="height: 220px; background-image: url('<?php echo get_theme_file_uri( '/images/Asset 4.svg' ); ?>');">
		</div>
	</div>
	<div class="container mx-auto px-4 lg:px-0 mb-24 lg:mb-48">
		<div>
			<div class="mb-8">
				<a class="bg-aurora-blue-04 px-8 py-2 rounded-full font-light text-white" href="<?php echo get_permalink( get_page_by_title( 'Careers' ) ); ?>">Back to Job Listings</a>
			</div>
			<p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase"><?php the_title(); ?></p>
			<p class="font-black leading-tight text-2xl text-aurora-blue-03 uppercase mb-8"><?php the_field( 'location' ); ?></p>
			<div class="mb-16"><?php the_field( 'description' ); ?></div>
		</div>
	</div>
<?php
get_footer();
