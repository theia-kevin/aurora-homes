<?php
get_header();
?>
    <div class="relative h-[950px] mb-12 bg-cover bg-no-repeat" style="background-image: url('<?php echo get_theme_file_uri( '/images/header_resized.jpg' ); ?>');">
        <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
        <div class="absolute w-full bottom-0 bg-cover bg-no-repeat z-40" style="height: 220px; background-image: url('<?php echo get_theme_file_uri( '/images/Asset 4.svg' ); ?>');">
        </div>
        <div data-aos="fade-right" class="absolute inset-0 container mx-auto px-4 xl:px-0 flex flex-col justify-center z-40">
            <p class="font-foco-black text-[100px] leading-[110px] text-white uppercase">Building For</p>
            <p class="font-foco-black text-[100px] leading-[110px] text-white uppercase pb-[30px]">Your Dream</p>
            <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-red-01 rounded-full py-[10px] px-[30px] self-start" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">Contact
                Us</a>
        </div>
    </div>
    <div data-aos="fade-up" class="container mx-auto px-4 xl:px-0 mb-0 xl:mb-36">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-5 flex flex-col justify-center text-right mb-12 xl:mb-0 order-2 xl:order-1">
                <p class="font-foco-light text-[16px] text-aurora-grey-02 mb-12">As a member of the New Zealand
                    construction industry, we are young and full of
                    ambitions. Construction is not only our job but also our pursuit. To complete high-
                    quality work and provide comprehensive services is our commitment to customers,
                    and it is also our requirement of ourselves.</p>
                <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-03 rounded-full py-[10px] px-[30px] self-end" href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">Learn
                    More</a>
            </div>
            <div class="col-span-12 xl:col-start-7 xl:col-span-6 relative mb-12 xl:mb-0 order-1 xl:order-2">
                <p class="font-foco-bold text-[24px] text-aurora-blue-03 uppercase">About Us</p>
                <p class="font-foco-black text-[50px] leading-[60px] text-aurora-blue-04 uppercase mb-8">Service Slogan:
                    High-quality output, the most intimate service.</p>
                <img class="object-cover object-center h-[400px] w-full relative z-40" src="<?php echo get_theme_file_uri( '/images/talk.jpg' ); ?>" alt="">
                <img class="absolute -bottom-8 right-8 2xl:-right-8" src="<?php echo get_theme_file_uri( '/images/Group 316.png' ); ?>" alt="">
            </div>
        </div>
        <div class="grid grid-cols-12 grid-rows-2 mb-0 xl:mb-36">
            <div class="col-span-12 xl:col-span-5 flex flex-col justify-center">
                <p class="font-foco-bold text-[24px] text-aurora-blue-03 uppercase">What We Do</p>
                <p class="font-foco-black text-[50px] leading-[60px] text-aurora-blue-04 uppercase mb-8">Aurora is
                    providing a range
                    of services from land division to house construction.</p>
            </div>
            <div class="col-span-12 row-start-2 xl:col-start-7 xl:col-span-6 mb-12 xl:mb-0">
                <div class="flex flex-col w-[450px] ml-auto">
                    <p class="font-foco-light text-[16px] text-aurora-grey-02 mb-4">Our collective experience means that we
                        can provide:</p>
                    <ul class="list-disc list-inside mb-12">
                        <li class="font-foco-light text-[16px] text-aurora-grey-02">Feasibility plans and suggestions based
                            on client
                            budget
                        </li>
                        <li class="font-foco-light text-[16px] text-aurora-grey-02">Construction cost budget analysis</li>
                        <li class="font-foco-light text-[16px] text-aurora-grey-02">Assistance in the handling of
                            government-related
                            documents
                        </li>
                    </ul>
                    <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-03 rounded-full py-[10px] px-[30px] self-end" href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">Learn
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" class="relative">
        <div class="absolute bottom-0 w-full bg-cover bg-no-repeat z-30" style="height:500px; background-image: url('<?php echo get_theme_file_uri( '/images/Asset 3.svg' ); ?>');">
        </div>
        <div class="container mx-auto px-4 xl:px-0 mb-24 xl:mb-0 relative z-40">
            <div class="grid grid-cols-3 xl:grid-rows-3 gap-4 xl:gap-12 pb-12 xl:pb-24 mb-0 xl:mb-36">
                <div class="relative col-span-3 xl:col-start-1 xl:row-start-1 xl:col-span-1 cursor-pointer h-[300px] w-[450px] mx-auto" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/UgS4y0.png' ); ?>');"
                         x-show="!swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 14 2.png' ); ?>');"
                         x-show="swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                </div>
                <div class="relative col-span-3 xl:col-start-1 xl:row-start-1 xl:col-span-1 cursor-pointer h-[300px] w-[450px] mx-auto" style="min-height: 300px;" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/mVDpx8.png' ); ?>');"
                         x-show="!swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 17 2.png' ); ?>');"
                         x-show="swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                </div>
                <div class="relative col-span-3 xl:col-start-2 xl:row-start-2 xl:col-span-1 cursor-pointer h-[300px] w-[450px] mx-auto" style="min-height: 300px;" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/hprdFP.png' ); ?>');"
                         x-show="!swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 16 2.png' ); ?>');"
                         x-show="swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                </div>
                <div class="relative col-span-3 xl:col-start-3 xl:row-start-2 xl:col-span-1 cursor-pointer h-[300px] w-[450px] mx-auto" style="min-height: 300px;" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 5.png' ); ?>');"
                         x-show="!swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/beWVMU 2.png' ); ?>');"
                         x-show="swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                </div>
                <div class="relative col-span-3 xl:col-start-2 xl:row-start-3 xl:col-span-1 cursor-pointer h-[300px] w-[450px] mx-auto" style="min-height: 300px;" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/3GvoWg.png' ); ?>');"
                         x-show="!swapImage"
                         x-transition:enter="transition-opacity ease-linear duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="transition-opacity ease-linear duration-300"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0">
                    </div>
                    <div class="absolute inset-0 bg-cover bg-no-repeat bg-center" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 15 2.png' ); ?>');"
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
    <div data-aos="fade-up" x-data="{ tab: 'completed' }">
        <div class="container mx-auto px-4 xl:px-0 mb-0 xl:mb-12">
            <div class="flex flex-col">
                <p class="font-foco-bold text-[24px] text-aurora-blue-03 uppercase">Our Work</p>
                <p class="font-foco-black text-[50px] leading-[60px] text-aurora-blue-04 uppercase">Projects</p>
                <div class="flex flex-wrap mt-4 mb-8">
                    <div class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-03 rounded-full py-[10px] px-[30px] self-start cursor-pointer mr-4 my-2"
                         x-on:click="tab = 'completed'"
                         x-bind:class="{'bg-aurora-yellow-01' : tab === 'completed'}"
                    >
                        Completed
                    </div>
                    <div class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-03 rounded-full py-[10px] px-[30px] self-start cursor-pointer mr-4 my-2"
                         x-on:click="tab = 'workinprogress'"
                         x-bind:class="{'bg-aurora-yellow-01' : tab === 'workinprogress'}"
                    >
                        Work in Progress
                    </div>
                    <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-red-01 rounded-full py-[10px] px-[30px] self-start my-2"
                       href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">
                        Contact Us
                    </a>
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
                                    <p class="font-foco-bold text-[18px] text-white uppercase text-right">Our Work</p>
                                    <p class="font-foco-black text-[36px] text-white uppercase text-right"><?php the_title(); ?></p>
                                    <p class="font-foco-regular text-[14px] text-white text-right w-1/2"><?php the_field( 'short_description' ); ?></p>
                                </div>
                                <img class="object-cover object-center h-[400px] w-full" src="<?php the_field( 'feature' ); ?>" alt="">
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
                                    <p class="font-foco-bold text-[18px] text-white uppercase text-right">Our Work</p>
                                    <p class="font-foco-black text-[36px] text-white uppercase text-right"><?php the_title(); ?></p>
                                    <p class="font-foco-regular text-[14px] text-white text-right w-1/2"><?php the_field( 'short_description' ); ?></p>
                                </div>
                                <img class="object-cover object-center h-[400px] w-full" src="<?php the_field( 'feature' ); ?>" alt="">
                            </a>
                        </div>
						<?php
					}
					?>
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" class="container mx-auto px-4 xl:px-0 flex flex-wrap justify-around my-36">
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
    <div data-aos="fade-up" class="container mx-auto mb-0 xl:mb-36 px-4 xl:px-0">
        <p class="font-foco-black text-[36px] text-aurora-blue-06">Make An Enquiry</p>
        <p class="font-foco-light text-[14px] text-aurora-grey-02 border-b border-aurora-grey-01 pb-8 w-1/2 mb-8">Leave us a message.</p>
        <div>
			<?php echo do_shortcode( '[contact-form-7 id="27" title="Contact form 1"]' ); ?>
        </div>
    </div>
<?php
get_footer();
