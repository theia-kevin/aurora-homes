<?php
get_header();
?>
    <div class="relative h-full mb-24 bg-cover bg-no-repeat" style="background-image: url('<?php echo get_theme_file_uri( '/images/AdobeStock_322912716 copy.jpg' ); ?>');">
        <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
        <div class="absolute w-full bottom-0 bg-cover bg-no-repeat z-40" style="height: 220px; background-image: url('<?php echo get_theme_file_uri( '/images/Asset 4.svg' ); ?>');">
        </div>
        <div class="absolute inset-0 container mx-auto px-4 lg:px-0 flex flex-col justify-center z-40">
            <p class="font-bold text-4xl text-aurora-orange-01 uppercase mb-8">We Are</p>
            <p class="font-black text-4xl lg:text-8xl text-white uppercase">Lorem Ipsum</p>
            <p class="font-black text-4xl lg:text-8xl text-white uppercase mb-8">Dolor Sit</p>
            <a class="self-start bg-aurora-red-01 px-8 py-2 rounded-full font-light text-white" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">Contact
                Us</a>
        </div>
    </div>
    <div class="relative">
        <div class="container mx-auto px-4 lg:px-0 pb-32 mb-24 lg:mb-0 relative z-40">
            <div class="grid grid-cols-12 mb-8 lg:mb-16 gap-0 lg:gap-x-16">
                <div class="col-span-12 lg:col-span-6">
                    <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase mb-8">Completed
                        Projects</p>
                    <div class="font-light text-aurora-grey-02 mb-4"><?php echo term_description(5); ?></div>
                </div>
            </div>
            <div class="grid grid-cols-12 gap-0 gap-y-16 lg:gap-y-32 lg:gap-x-16">
				<?php
				$completed_projects = new WP_Query( [
					'post_type' => 'project',
					'tax_query' => [
						[
							'taxonomy' => 'project_status',
							'field'    => 'name',
							'terms'    => 'Completed'
						]
					]
				] );
				while ( $completed_projects->have_posts() ) {
					$completed_projects->the_post();
					?>
                    <div class="col-span-12 lg:col-span-5">
                        <a href="<?php the_permalink(); ?>" class="block relative" x-data="{ showOverlay: false }" x-on:mouseover="showOverlay = true" x-on:mouseover.away="showOverlay = false">
                            <div class="bg-aurora-blue-02 bg-opacity-50 absolute inset-0 z-30" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            </div>
                            <img class="mb-8 w-full" src="<?php the_field('feature'); ?>" alt="">
                        </a>
                        <p class="font-black leading-tight text-4xl text-aurora-blue-04 uppercase mb-4"><?php the_title(); ?></p>
                        <p class="font-light text-aurora-grey-02 mb-12"><?php the_field('short_description'); ?></p>
                        <a class="self-start bg-aurora-blue-03 px-4 py-2 rounded-full font-light text-sm text-white" href="<?php the_permalink(); ?>">Learn
                            more</a>
                    </div>

					<?php
				}
				?>
            </div>
        </div>
        <div class="absolute bottom-0 w-full bg-cover bg-no-repeat z-30" style="height: 500px; background-image: url('<?php echo get_theme_file_uri( '/images/Asset 2.svg' ); ?>');">
        </div>
    </div>
    <div class="container mx-auto px-4 lg:px-0 pb-32 my-12 lg:my-24 mb-24 lg:mb-0 relative z-40">
        <div class="grid grid-cols-12 mb-8 lg:mb-16 gap-0 lg:gap-x-16">
            <div class="col-span-12 lg:col-start-7 lg:col-span-6">
                <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase mb-8">Projects Work In
                    Progress</p>
                <div class="font-light text-aurora-grey-02 mb-4"><?php echo term_description(6); ?></div>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-0 gap-y-16 lg:gap-y-32 lg:gap-x-16">
	        <?php
	        $wip_projects = new WP_Query( [
		        'post_type' => 'project',
		        'tax_query' => [
			        [
				        'taxonomy' => 'project_status',
				        'field'    => 'name',
				        'terms'    => 'Work In Progress'
			        ]
		        ]
	        ] );
	        while ( $wip_projects->have_posts() ) {
		        $wip_projects->the_post();
		        ?>
                <div class="col-span-12 lg:col-span-5">
                    <a href="<?php the_permalink(); ?>" class="block relative" x-data="{ showOverlay: false }" x-on:mouseover="showOverlay = true" x-on:mouseover.away="showOverlay = false">
                        <div class="bg-aurora-blue-02 bg-opacity-50 absolute inset-0 z-30" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                        </div>
                        <img class="mb-8 w-full" src="<?php the_field('feature'); ?>" alt="">
                    </a>
                    <p class="font-black leading-tight text-4xl text-aurora-blue-04 uppercase mb-4"><?php the_title(); ?></p>
                    <p class="font-light text-aurora-grey-02 mb-12"><?php the_field('short_description'); ?></p>
                    <a class="self-start bg-aurora-blue-03 px-4 py-2 rounded-full font-light text-sm text-white" href="<?php the_permalink(); ?>">Learn
                        more</a>
                </div>

		        <?php
	        }
	        ?>
        </div>
    </div>
    <div class="container mx-auto px-4 lg:px-0 mb-12 lg:mb-24">
        <div class="flex flex-wrap justify-between items-center">
            <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase">LOREM IPSUM DOLOR SIT AMET,
                CONSEC</p>
            <a class="bg-aurora-red-01 px-8 py-2 rounded-full font-light text-white my-4" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">Contact
                Us</a>
        </div>
    </div>
<?php
get_footer();
