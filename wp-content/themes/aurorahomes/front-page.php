<?php
get_header();
?>
    <div class="relative h-full mb-12 bg-cover bg-no-repeat" style="background-image: url('<?php echo get_theme_file_uri( '/images/header_resized.jpg' ); ?>');">
        <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
        <div class="absolute w-full bottom-0 bg-cover bg-no-repeat z-40" style="height: 220px; background-image: url('<?php echo get_theme_file_uri( '/images/Asset 4.svg' ); ?>');">
        </div>
        <div data-aos="fade-up" data-aos-duration="2000" data-aos-offset="0" class="absolute inset-0 container mx-auto px-4 lg:px-0 flex flex-col justify-center z-40">
            <p class="font-black text-4xl lg:text-8xl text-white uppercase">Building For</p>
            <p class="font-black text-4xl lg:text-8xl text-white uppercase mb-8">Your Dream</p>
            <a class="self-start bg-aurora-red-01 px-8 py-2 rounded-full font-light text-white" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">Contact
                Us</a>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="2000" data-aos-offset="0" class="container mx-auto px-4 lg:px-0 mb-0 lg:mb-36">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-5 flex flex-col justify-center text-right mb-12 lg:mb-0 order-2 lg:order-1">
                <p class="font-light text-aurora-grey-02 mb-12">As a member of the New Zealand construction industry, we are young and full of
ambitions. Construction is not only our job but also our pursuit. To complete high-
quality work and provide comprehensive services is our commitment to customers,
and it is also our requirement of ourselves.</p>
                <a class="self-end bg-aurora-blue-03 px-8 py-2 rounded-full font-light text-white" href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">Learn
                    more</a>
            </div>
            <div class="col-span-12 lg:col-start-7 lg:col-span-6 relative mb-12 lg:mb-0 order-1 lg:order-2">
                <p class="font-bold text-2xl text-aurora-blue-03 uppercase">About Us</p>
                <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase mb-8">Service Slogan: High-quality output, the most intimate service.</p>
                <img class="object-cover w-full relative z-40" src="<?php echo get_theme_file_uri( '/images/talk.jpg' ); ?>" alt="">
                <img class="absolute -bottom-8 right-8 2xl:-right-8" src="<?php echo get_theme_file_uri( '/images/Group 316.png' ); ?>" alt="">
            </div>
        </div>
        <div class="grid grid-cols-12 grid-rows-2 mb-0 lg:mb-36">
            <div class="col-span-12 lg:col-span-5 flex flex-col justify-center">
                <p class="font-bold text-2xl text-aurora-blue-03 uppercase">What We Do</p>
                <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase">Aurora is providing a range of services from land division to house construction.</p>
            </div>
            <div class="col-span-12 row-start-2 lg:col-start-7 lg:col-span-6 flex flex-col mb-12 lg:mb-0">
                <p class="font-light text-aurora-grey-02 mb-4">Our collective experience means that we can provide:</p>
				<ul class="list-disc list-inside">
					<li class="font-light text-aurora-grey-02">Feasibility plans and suggestions based on client budget</li>
					<li class="font-light text-aurora-grey-02">Construction cost budget analysis</li>
					<li class="font-light text-aurora-grey-02">Assistance in the handling of government-related documents</li>
				</ul>
                <a class="self-end bg-aurora-blue-03 px-8 py-2 rounded-full font-light text-white" href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">Learn
                    more</a>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="2000" class="relative">
        <div class="absolute bottom-0 w-full bg-cover bg-no-repeat z-30" style="height:500px; background-image: url('<?php echo get_theme_file_uri( '/images/Asset 3.svg' ); ?>');">
        </div>
        <div class="container mx-auto px-4 lg:px-0 mb-24 lg:mb-0 relative z-40">
            <div class="grid grid-cols-3 lg:grid-rows-3 gap-4 lg:gap-12 pb-12 lg:pb-24 mb-0 lg:mb-36">
                <div class="relative col-span-3 lg:col-start-1 lg:row-start-1 lg:col-span-1 cursor-pointer" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/UgS4y0.png' ); ?>');"
                         x-show="!swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 14.png' ); ?>');"
                         x-show="swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                </div>
                <div class="relative col-span-3 lg:col-start-2 lg:row-start-1 lg:col-span-1 cursor-pointer" style="min-height: 300px;" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/mVDpx8.png' ); ?>');"
                         x-show="!swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 17.png' ); ?>');"
                         x-show="swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                </div>
                <div class="relative col-span-3 lg:col-start-2 lg:row-start-2 lg:col-span-1 cursor-pointer" style="min-height: 300px;" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/hprdFP.png' ); ?>');"
                         x-show="!swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 16.png' ); ?>');"
                         x-show="swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                </div>
                <div class="relative col-span-3 lg:col-start-3 lg:row-start-2 lg:col-span-1 cursor-pointer" style="min-height: 300px;" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 5.png' ); ?>');"
                         x-show="!swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/beWVMU.png' ); ?>');"
                         x-show="swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                </div>
                <div class="relative col-span-3 lg:col-start-2 lg:row-start-3 lg:col-span-1 cursor-pointer" style="min-height: 300px;" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/3GvoWg.png' ); ?>');"
                         x-show="!swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 15.png' ); ?>');"
                         x-show="swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="2000" x-data="{ tab: 'completed' }">
        <div class="container mx-auto px-4 lg:px-0 mb-0 lg:mb-12">
            <div class="flex flex-col">
                <p class="font-bold text-2xl text-aurora-blue-03 uppercase">Our Work</p>
                <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase">Projects</p>
                <div class="flex flex-wrap mt-4 mb-8">
                    <div class="inline-block mr-4 mb-4 bg-aurora-blue-03 px-8 py-2 rounded-full font-light text-white cursor-pointer" x-on:click="tab = 'completed'">
                        Completed
                    </div>
                    <div class="inline-block mr-4 mb-4 bg-aurora-blue-03 px-8 py-2 rounded-full font-light text-white cursor-pointer" x-on:click="tab = 'workinprogress'">
                        Work in Progress
                    </div>
                    <a class="inline-block mr-4 mb-4 bg-aurora-red-01 px-8 py-2 rounded-full font-light text-white" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">Contact
                        Us</a>
                </div>
            </div>
        </div>
        <div x-show="tab === 'completed'">
            <div class="our-work-swiper-container swiper-container">
                <div class="swiper-wrapper">
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
                        <div class="swiper-slide">
                            <a href="<?php the_permalink(); ?>" class="block relative" x-data="{ showOverlay: false }" x-on:mouseover="showOverlay = true" x-on:mouseover.away="showOverlay = false">
                                <div class="bg-aurora-blue-02 bg-opacity-50 absolute inset-0 z-30" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                </div>
                                <div class="absolute inset-0 flex flex-col justify-center items-end p-8 z-40" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                    <p class="font-bold tracking-wide text-xl text-white uppercase">Our Work</p>
                                    <p class="font-black tracking-wide leading-tight text-4xl text-white uppercase mb-4 text-right"><?php the_title(); ?></p>
                                    <p class="w-1/2 font-light leading-tight text-white text-right"><?php the_field('short_description'); ?></p>
                                </div>
                                <img class="w-full" src="<?php the_field('feature'); ?>" alt="">
                            </a>
                        </div>
		                <?php
	                }
	                ?>
                </div>
            </div>
        </div>
        <div x-show="tab === 'workinprogress'">
            <div class="our-work-swiper-container swiper-container">
                <div class="swiper-wrapper">
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
                        <div class="swiper-slide">
                            <a href="<?php the_permalink(); ?>" class="block relative" x-data="{ showOverlay: false }" x-on:mouseover="showOverlay = true" x-on:mouseover.away="showOverlay = false">
                                <div class="bg-aurora-blue-02 bg-opacity-50 absolute inset-0 z-30" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                </div>
                                <div class="absolute inset-0 flex flex-col justify-center items-end p-8 z-40" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                    <p class="font-bold tracking-wide text-xl text-white uppercase">Our Work</p>
                                    <p class="font-black tracking-wide leading-tight text-4xl text-white uppercase mb-4 text-right"><?php the_title(); ?></p>
                                    <p class="w-1/2 font-light leading-tight text-white text-right"><?php the_field('short_description'); ?></p>
                                </div>
                                <img class="w-full" src="<?php the_field('feature'); ?>" alt="">
                            </a>
                        </div>
		                <?php
	                }
	                ?>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="2000" class="container mx-auto px-4 lg:px-0 flex flex-wrap justify-around my-36">
        <div class="w-full flex flex-wrap justify-around">
            <div class="m-8">
                <img src="<?php echo get_theme_file_uri( '/images/Logo Mt Wellington copy.png' ); ?>" alt="">
            </div>
            <div class="m-8">
                <img src="<?php echo get_theme_file_uri( '/images/Akarana Logo set-2-a.png' ); ?>" alt="">
            </div>
            <div class="m-8">
                <img src="<?php echo get_theme_file_uri( '/images/knk-logo.png' ); ?>" alt="">
            </div>
            <div class="m-8">
                <img src="<?php echo get_theme_file_uri( '/images/logo.png' ); ?>" alt="">
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="2000" class="container mx-auto mb-0 lg:mb-36 px-4 lg:px-0">
        <p class="font-black leading-tight text-4xl text-aurora-blue-06 uppercase">Make An Enquiry</p>
        <p class="border-b border-aurora-grey-01 font-light leading-tight pb-8 w-1/2 mb-8">Leave us a message.</p>
        <div>
			<?php echo do_shortcode( '[contact-form-7 id="27" title="Contact form 1"]' ); ?>
        </div>
    </div>
<?php
get_footer();
