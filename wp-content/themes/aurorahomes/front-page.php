<?php
get_header();
?>
    <div class="relative h-[650px] xl:h-[950px] mb-[100px] bg-cover bg-no-repeat" style="background-image: url('<?php echo get_theme_file_uri( '/images/header_resized.jpg' ); ?>');">
        <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
        <div class="absolute h-[220px] w-full bottom-0 bg-cover bg-no-repeat z-40" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 4.svg' ); ?>');">
        </div>
        <div data-aos="fade-right" class="absolute inset-0 container mx-auto px-4 flex flex-col justify-center z-40">
            <p class="font-foco-black text-[70px] xl:text-[100px] leading-[80px] xl:leading-[110px] text-white uppercase">
                Building For</p>
            <p class="font-foco-black text-[70px] xl:text-[100px] leading-[80px] xl:leading-[110px] text-white uppercase pb-[30px]">
                Your Dream</p>
            <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-red-01 border-[5px] border-aurora-red-01 rounded-full py-[5px] px-[30px] self-start transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">
                Contact Us
            </a>
        </div>
    </div>
    <div data-aos="fade-up" class="container mx-auto px-4">
        <div class="grid grid-cols-12 mb-[100px]">
            <div class="col-span-12 xl:col-span-5 flex flex-col justify-center order-2 xl:order-1">
                <p class="font-foco-light text-[16px] text-aurora-grey-02 text-left pb-[70px]">As a member of the New
                    Zealand
                    construction industry, we are young and full of
                    ambitions. Construction is not only our job but also our pursuit. To complete high-
                    quality work and provide comprehensive services is our commitment to customers,
                    and it is also our requirement of ourselves.</p>
                <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-03 border-[5px] border-aurora-blue-03 rounded-full py-[5px] px-[30px] self-start transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02" href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">Learn
                    More</a>
            </div>
            <div class="col-span-12 xl:col-start-7 xl:col-span-6 relative order-1 xl:order-2 mb-[50px]">
                <p class="font-foco-bold text-[24px] text-aurora-blue-03 uppercase">About Us</p>
                <p class="font-foco-black text-[50px] leading-[60px] text-aurora-blue-04 uppercase pb-[50px]">Aurora,
                    Your
                    Reliable Partner</p>
                <img class="object-cover object-center h-[400px] w-full relative z-40 pb-[30px] pr-[30px]" src="<?php echo get_theme_file_uri( '/images/talk.jpg' ); ?>" alt="">
                <img class="object-contain absolute bottom-[0px] right-[0px] animate-pulse" src="<?php echo get_theme_file_uri( '/images/Group 316.png' ); ?>" alt="">
            </div>
        </div>
        <div class="grid grid-cols-12 mb-[100px]">
            <div class="col-span-12 xl:col-span-5 flex flex-col justify-start">
                <p class="font-foco-bold text-[24px] text-aurora-blue-03 uppercase">What We Do</p>
                <p class="font-foco-black text-[50px] leading-[60px] text-aurora-blue-04 uppercase">The Highest
                    Quality Work, The Most Intimate Service.</p>
            </div>
            <div class="col-span-12 xl:col-start-7 flex items-end justify-end">
                <div class="flex flex-col justify-end h-[350px] w-[350px]">
                    <p class="font-foco-light text-[16px] text-aurora-grey-02 pb-[15px]">Aurora provides variety of
                        services
                        by priortising customers' needs:</p>
                    <ul class="list-decimal list-inside pb-[50px]">
                        <li class="font-foco-light text-[16px] text-aurora-grey-02">Land subdivision</li>
                        <li class="font-foco-light text-[16px] text-aurora-grey-02">Construction projects management
                        </li>
                        <li class="font-foco-light text-[16px] text-aurora-grey-02">House structure design</li>
                        <li class="font-foco-light text-[16px] text-aurora-grey-02">Indoor facility configuration</li>
                    </ul>
                    <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-03 border-[5px] border-aurora-blue-03 rounded-full py-[5px] px-[30px] self-start transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02" href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">Learn
                        More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="relative" data-aos="fade-up">
        <div class="absolute bottom-0 h-[500px] w-full bg-cover bg-no-repeat z-30" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 3.svg' ); ?>');">
        </div>
        <div class="container mx-auto mb-[100px] px-4 pb-[100px] relative z-40">
            <div class="grid grid-cols-12 gap-y-12 gap-x-0 xl:gap-x-12">
                <div class="col-span-12 xl:col-span-4 relative cursor-pointer h-[300px] w-[400px] mx-auto" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
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
                <div class="col-span-12 xl:col-span-4 relative cursor-pointer h-[300px] w-[400px] mx-auto" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
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
                <div class="col-span-12 xl:col-span-4 hidden xl:block"></div>
                <div class="col-span-12 xl:col-span-4 hidden xl:block"></div>
                <div class="col-span-12 xl:col-span-4 relative cursor-pointer h-[300px] w-[400px] mx-auto" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
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
                <div class="col-span-12 xl:col-span-4 relative cursor-pointer h-[300px] w-[400px] mx-auto" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
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
                <div class="col-span-12 xl:col-span-4 hidden xl:block"></div>
                <div class="col-span-12 xl:col-span-4 relative cursor-pointer h-[300px] w-[400px] mx-auto" x-data="{ swapImage: false }" x-on:mouseover="swapImage = true" x-on:mouseover.away="swapImage = false">
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
                <div class="col-span-12 xl:col-span-4 hidden xl:block"></div>
            </div>
        </div>
    </div>
    <div class="mb-[100px]" data-aos="fade-up" x-data="{ tab: 'completed' }">
        <div class="container mx-auto px-4">
            <div class="flex flex-col">
                <p class="font-foco-bold text-[24px] text-aurora-blue-03 uppercase">Our Work</p>
                <p class="font-foco-black text-[50px] leading-[60px] text-aurora-blue-04 uppercase">Projects</p>
                <div class="flex flex-wrap pt-[20px] pb-[60px]">
                    <div class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-03 border-[5px] border-aurora-blue-03 rounded-full py-[5px] px-[30px] self-start transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02 cursor-pointer mr-[15px] my-[5px]"
                         x-on:click="tab = 'completed'"
                         x-bind:class="{'bg-aurora-yellow-01' : tab === 'completed', 'border-aurora-yellow-01' : tab === 'completed'}"
                    >
                        Completed
                    </div>
                    <div class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-03 border-[5px] border-aurora-blue-03 rounded-full py-[5px] px-[30px] self-start transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02 cursor-pointer mr-[15px] my-[5px]"
                         x-on:click="tab = 'workinprogress'"
                         x-bind:class="{'bg-aurora-yellow-01' : tab === 'workinprogress', 'border-aurora-yellow-01' : tab === 'workinprogress'}"
                    >
                        Work in Progress
                    </div>
                    <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-red-01 border-[5px] border-aurora-red-01 rounded-full py-[5px] px-[30px] self-start transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02 my-[5px]"
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
                                <div class="absolute inset-0 flex flex-col justify-center items-end p-16 xl:p-16 xl:p-8 z-40" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
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
                                <div class="absolute inset-0 flex flex-col justify-center items-end p-[60px] z-40" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
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
    <div data-aos="fade-up" class="container mx-auto mb-[100px] px-4">
        <p class="font-foco-black text-[36px] text-aurora-blue-04 uppercase">Make An Enquiry</p>
        <p class="font-foco-light text-[16px] text-aurora-grey-02 border-b border-aurora-grey-01 pb-[30px] mb-[30px]">
            Leave us a message.</p>
        <div>
			<?php echo do_shortcode( '[contact-form-7 id="27" title="Contact form 1"]' ); ?>
        </div>
    </div>
<?php
get_footer();
