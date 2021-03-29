<?php
get_header();

$status = '';

if (get_the_terms( get_the_ID(), 'project_status' )) {
	$status = get_the_terms( get_the_ID(), 'project_status' )[0]->to_array()['name'];
	$status_slug = get_the_terms( get_the_ID(), 'project_status' )[0]->to_array()['slug'];
}

$next_post = get_adjacent_post( true, '', false, 'project_status' );
$next_post_link = get_permalink( $next_post->ID );

if ($next_post_link == get_permalink()) {
	$next_post_link = get_permalink( get_page_by_title( 'Projects' ) );
}
?>
    <div class="relative h-[250px] xl:h-[350px] mb-[50px] xl:mb-[100px] bg-cover bg-no-repeat bg-left-bottom" style="background-image: url('<?php echo get_theme_file_uri( '/images/m8DVH7.png' ); ?>');">
        <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
        <div class="absolute h-[220px] w-full bottom-0 bg-cover bg-no-repeat z-40" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 4.svg' ); ?>');">
        </div>
    </div>
    <div class="container mx-auto mb-[200px] px-4" data-aos="fade-up" data-aos-once="true">
        <div class="grid grid-cols-12">
            <div class="col-span-12 flex flex-wrap items-center justify-between">
                <div class="mb-[15px]">
                    <p class="font-foco-black text-[48px] leading-[58px] text-aurora-blue-04 uppercase"><?php echo get_the_title(); ?></p>
                    <p class="font-foco-black text-[24px] leading-[34px] text-aurora-blue-03 uppercase"><?php the_field( 'location' ); ?></p>
                </div>
                <a class="inline-flex items-center font-foco-light text-[16px] text-white bg-aurora-blue-03 border-[5px] border-aurora-blue-03 rounded-full py-[5px] pl-[30px] pr-[15px] transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02 mb-[15px]" href="<?php echo $next_post_link; ?>">
                    Next Project
                    <img class="w-8 h-4" src="<?php echo get_theme_file_uri( '/images/white arrow.svg' ); ?>" alt="">
                </a>
            </div>
        </div>
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-5 flex flex-col justify-center">
                <div class="pb-[30px]">
                    <p class="inline-block font-foco-bold text-[18px] text-aurora-grey-02">Year:</p>
                    <p class="inline-block font-foco-light text-[16px] text-aurora-grey-02"><?php the_field( 'year' ); ?></p>
                </div>
                <div class="pb-[30px]">
                    <p class="inline-block font-foco-bold text-[18px] text-aurora-grey-02">Status:</p>
                    <p class="inline-block font-foco-light text-[16px] text-aurora-grey-02"><?php echo $status; ?></p>
                </div>
                <div class="pb-[70px]">
                    <p class="inline-block font-foco-bold text-[18px] text-aurora-grey-02">Package:</p>
                    <p class="inline-block font-foco-light text-[16px] text-aurora-grey-02"><?php the_field( 'package' ); ?></p>
                </div>
                <p class="font-foco-light text-[16px] text-aurora-grey-02 w-4/5 pb-[80px]">
	                <?php the_field( 'description' ); ?>
                </p>
                <div class="flex mb-20">
                    <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-03 border-[5px] border-aurora-blue-03 rounded-full py-[5px] px-[30px] self-start transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02 mr-[15px]" href="<?php echo get_permalink( get_page_by_title( 'Projects' ) ); ?>">Back
                        to Projects</a>
                    <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-red-01 border-[5px] border-aurora-red-01 rounded-full py-[5px] px-[30px] self-start transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">
                        Contact Us
                    </a>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-7">
                <div class="grid grid-cols-12 gap-y-[15px]">
                    <div class="col-span-12">
                        <div class="swiper-container swiper-primary">
                            <div class="swiper-wrapper relative">
	                            <?php
	                            if ( get_field( 'exterior' ) ) {
		                            foreach ( get_field( 'exterior' ) as $exterior_image ) {
			                            ?>
                                        <div class="swiper-slide">
                                            <img class="object-cover object-center h-[500px] w-full" src="<?php echo $exterior_image; ?>" alt="">
                                        </div>
			                            <?php
		                            }
	                            }
	                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="swiper-container swiper-secondary relative">
                            <div class="swiper-wrapper">
	                            <?php
	                            if ( get_field( 'exterior' ) ) {
		                            foreach ( get_field( 'exterior' ) as $exterior_image ) {
			                            ?>
                                        <div class="swiper-slide">
                                            <img class="object-cover object-center h-[250px] w-full" src="<?php echo $exterior_image; ?>" alt="">
                                        </div>
			                            <?php
		                            }
	                            }
	                            ?>
                            </div>
                            <div class="absolute top-1/2 transform -translate-y-1/2 left-[15px] z-10 swiper-secondary-prev w-[40px] h-[40px] flex items-center justify-center text-white bg-aurora-blue-02 bg-opacity-80 rounded-full cursor-pointer outline-none transition-all duration-300 hover:shadow-inner mr-[15px]">
                                <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                                </svg>
                            </div>
                            <div class="absolute top-1/2 transform -translate-y-1/2 right-[15px] z-10 swiper-secondary-next w-[40px] h-[40px] flex items-center justify-center text-white bg-aurora-blue-02 bg-opacity-80 rounded-full cursor-pointer outline-none transition-all duration-300 hover:shadow-inner">
                                <svg class="w-[20px] h-[20px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4" data-aos="fade-up" data-aos-once="true">
        <div class="swiper-lightbox">
            <div class="grid grid-cols-12 gap-[15px] xl:gap-[15px]">
	            <?php
	            if ( get_field( 'interior' ) ) {
		            foreach ( get_field( 'interior' ) as $interior_image ) {
			            ?>
                        <div class="col-span-12 xl:col-span-4" x-data="{ showOverlay: false }" x-on:mouseover="showOverlay = true" x-on:mouseover.away="showOverlay = false">
                            <a href="<?php echo $interior_image; ?>">
                                <div class="relative">
                                    <img class="object-cover object-center h-[300px] w-full" src="<?php echo $interior_image; ?>" alt="">
                                    <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"></div>
                                </div>
                            </a>
                        </div>
			            <?php
		            }
	            }
	            ?>
            </div>
        </div>
        <div class="grid grid-cols-12 py-[30px]">
            <div class="col-span-12 flex items-center justify-end">
                <a class="inline-flex items-center font-foco-light text-[16px] text-white bg-aurora-blue-03 border-[5px] border-aurora-blue-03 rounded-full py-[5px] pl-[30px] pr-[15px] transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02" href="<?php echo $next_post_link; ?>">
                    Next Project
                    <img class="w-8 h-4" src="<?php echo get_theme_file_uri( '/images/white arrow.svg' ); ?>" alt="">
                </a>
            </div>
        </div>
    </div>
<?php
get_footer();
