<?php
get_header();

$status = '';

if (get_the_terms( get_the_ID(), 'project_status' )) {
	$status = get_the_terms( get_the_ID(), 'project_status' )[0]->to_array()['name'];
}

?>
    <div class="relative h-4/6 lg:h-96 mb-24 bg-cover bg-no-repeat bg-bottom" style="background-image: url('<?php echo get_theme_file_uri( '/images/m8DVH7.png' ); ?>');">
        <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
        <div class="absolute w-full bottom-0 bg-cover bg-no-repeat z-40" style="height: 220px; background-image: url('<?php echo get_theme_file_uri( '/images/Asset 4.svg' ); ?>');">
        </div>
    </div>
    <div class="container mx-auto px-4 lg:px-0 mb-24 lg:mb-48">
        <div class="grid grid-cols-12">
            <div class="col-span-12 flex flex-wrap items-center justify-between">
                <div class="mb-16">
                    <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase"><?php echo get_the_title(); ?></p>
                    <p class="font-black leading-tight text-3xl text-aurora-blue-03 uppercase"><?php the_field( 'location' ); ?></p>
                </div>
                <a class="bg-aurora-blue-03 pl-8 pr-4 py-2 rounded-full font-light text-white flex flex-row items-center" href="<?php echo get_permalink( get_next_post() ); ?>">
                    Next Project
                    <img class="w-8 h-4" src="<?php echo get_theme_file_uri( '/images/white arrow.svg' ); ?>" alt="">
                </a>
            </div>
            <div class="col-span-12 lg:col-span-7 flex flex-col justify-center">
                <p class="mb-4"><span class="font-bold leading-tight text-lg text-black">Year:</span>
                    <span class="font-light text-aurora-grey-02"><?php the_field( 'year' ); ?></span></p>
                <p class="mb-4"><span class="font-bold leading-tight text-lg text-black">Status:</span>
                    <span class="font-light text-aurora-grey-02"><?php echo $status; ?></span></p>
                <p class="mb-12"><span class="font-bold leading-tight text-lg text-black">Package:</span>
                    <span class="font-light text-aurora-grey-02"><?php the_field( 'package' ); ?></span></p>
                <p class="w-4/5 mb-20 font-light text-aurora-grey-02"><?php the_field( 'description' ); ?></p>
                <div class="flex mb-20">
                    <a class="bg-aurora-blue-03 px-8 py-2 rounded-full font-light text-white mr-4" href="<?php echo get_permalink( get_page_by_title( 'Projects' ) ); ?>">Back
                        to Projects</a>
                    <a class="bg-aurora-red-01 px-8 py-2 rounded-full font-light text-white" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">Contact
                        Us</a>
                </div>
            </div>
            <div class="col-span-12 lg:col-span-5">
                <div class="grid grid-cols-12 gap-4">
                    <div class="col-span-12">
                        <div class="swiper-container swiper-primary">
                            <div class="swiper-wrapper relative">
	                            <?php
	                            if ( get_field( 'exterior' ) ) {
		                            foreach ( get_field( 'exterior' ) as $exterior_image ) {
			                            ?>
                                        <div class="swiper-slide w-full bg-cover bg-no-repeat bg-center" style="height: 400px; background-image: url('<?php echo $exterior_image; ?>');">
                                        </div>
			                            <?php
		                            }
	                            }
	                            ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-12">
                        <div class="swiper-container swiper-secondary">
                            <div class="swiper-wrapper relative">
	                            <?php
	                            if ( get_field( 'exterior' ) ) {
		                            foreach ( get_field( 'exterior' ) as $exterior_image ) {
			                            ?>
                                        <div class="swiper-slide w-full bg-cover bg-no-repeat bg-center" style="height: 250px; background-image: url('<?php echo $exterior_image; ?>');">
                                        </div>
			                            <?php
		                            }
	                            }
	                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 lg:px-0 mb-12 lg:mb-24">
        <div class="swiper-lightbox">
            <div class="grid grid-cols-12 gap-4">
	            <?php
	            if ( get_field( 'interior' ) ) {
		            foreach ( get_field( 'interior' ) as $interior_image ) {
			            ?>
                        <div class="col-span-12 lg:col-span-4" x-data="{ showOverlay: false }" x-on:mouseover="showOverlay = true" x-on:mouseover.away="showOverlay = false">
                            <a href="<?php echo $interior_image; ?>">
                                <div class="w-full bg-cover bg-no-repeat bg-center relative" style="height: 300px; background-image: url('<?php echo $interior_image; ?>');">
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
        <div class="grid grid-cols-12 my-8">
            <div class="col-span-12 flex items-center justify-end">
                <a class="bg-aurora-blue-03 pl-8 pr-4 py-2 rounded-full font-light text-white flex flex-row items-center" href="<?php echo get_permalink( get_next_post() ); ?>">
                    Next Project
                    <img class="w-8 h-4" src="<?php echo get_theme_file_uri( '/images/white arrow.svg' ); ?>" alt="">
                </a>
            </div>
        </div>
    </div>
<?php
get_footer();
