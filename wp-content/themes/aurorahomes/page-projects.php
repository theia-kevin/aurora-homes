<?php
get_header();
?>
    <div class="relative h-[650px] xl:h-[950px] mb-[50px] xl:mb-[100px] bg-cover bg-no-repeat" style="background-image: url('<?php echo get_theme_file_uri( '/images/AdobeStock_322912716 copy.jpg' ); ?>');">
        <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
        <div class="absolute h-[220px] w-full bottom-0 bg-cover bg-no-repeat z-40" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 4.svg' ); ?>');">
        </div>
        <div data-aos="fade-right" data-aos-once="true" class="absolute inset-0 container mx-auto px-4 flex flex-col justify-center z-40">
            <p class="font-foco-black text-[70px] xl:text-[100px] leading-[80px] xl:leading-[110px] text-white uppercase">
                Deliver the</p>
            <p class="font-foco-black text-[70px] xl:text-[100px] leading-[80px] xl:leading-[110px] text-white uppercase pb-[30px]">
                High Quality</p>
            <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-red-01 border-[5px] border-aurora-red-01 rounded-full py-[5px] px-[30px] self-start transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">
                Contact Us
            </a>
        </div>
    </div>

    <div id="completed" class="relative" data-aos="fade-up" data-aos-once="true" >
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-12">
                <div class="col-span-12 lg:col-span-6">
                    <p class="font-foco-black text-[50px] leading-[60px] text-aurora-blue-04 uppercase pb-[40px]">Completed Projects</p>
                    <div class="font-foco-light text-[14px] text-aurora-grey-02 pb-[100px]"><?php echo term_description(5); ?></div>
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
    <div id="wip" data-aos="fade-up" data-aos-duration="2000" class="container mx-auto px-4 lg:px-0 pb-32 my-12 lg:my-24 mb-24 lg:mb-0 relative z-40">
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
<?php
get_footer();
