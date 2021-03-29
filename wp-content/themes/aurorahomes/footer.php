<?php wp_footer(); ?>

<?php
if ( is_page( 'Home' ) || is_page( 'Contact' ) ) {
	$background          = get_theme_file_uri( '/images/header_resized.jpg' );
	$background_position = 'bg-center';
}

if ( is_page( 'About' ) || is_page( 'Careers' ) ) {
	$background          = get_theme_file_uri( '/images/workers_resized.jpg' );
	$background_position = 'bg-left-bottom';
}

if ( is_page( 'Services' ) ) {
	$background          = get_theme_file_uri( '/images/header3_resized.jpg' );
	$background_position = 'bg-left-bottom';
}

if ( is_page( 'Projects' ) || ( is_single() && ( get_post_type() == 'project' ) ) || is_page( 'Apply' ) || ( is_single() && ( get_post_type() == 'listing' ) )) {
	$background          = get_theme_file_uri( '/images/AdobeStock_322912716 copy.jpg' );
	$background_position = 'bg-left-bottom';
}
?>
<div data-aos="fade-up" data-aos-once="true" class="relative h-[800px] xl:h-[500px] bg-cover bg-no-repeat <?php echo $background_position; ?>" style="background-image: url('<?php echo $background; ?>');">
    <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
    <div class="absolute h-2/6 xl:h-3/6 w-full -top-4 bg-cover bg-no-repeat z-40" style="background-image: url('<?php echo get_theme_file_uri( '/images/Path 1985.png' ); ?>');">
    </div>
    <div class="absolute inset-0 container mx-auto mb-[100px] px-4 flex flex-col justify-end z-40">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-5 flex flex-col justify-between">
                <a class="block mb-4 xl:mb-0" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img class="object-contain h-[50px]" src="<?php echo get_theme_file_uri( '/images/cropped-cropped-Asset-1-2.png' ); ?>" alt="">
                </a>
                <p class="font-foco-regular text-[16px] text-white mb-4 xl:mb-0">© COPYRIGHT 2020-2021 AURORA HOMES
                    LIMITED. ALL RIGHTS
                    RESERVED.</p>
            </div>
            <div class="col-span-12 xl:col-span-3 flex flex-col">
                <p class="font-foco-bold text-[21px] text-white mb-4">Links</p>
                <div class="flex flex-col flex-wrap h-[100px]">
					<?php
					foreach ( wp_get_nav_menu_items( 'menu-1' ) as $menu ) {
						?>
                        <a class="inline-block font-foco-regular text-[18px] text-white transition-all duration-300 hover:text-aurora-blue-03" href="<?php echo $menu->url ?>"><?php echo $menu->title; ?></a>
						<?php
					}
					?>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-4 flex flex-col mb-4 xl:mb-0">
                <p class="font-foco-bold text-[21px] text-white mb-4">Contact</p>
                <a class="inline-block font-foco-regular text-[18px] text-white transition-all duration-300 hover:text-aurora-blue-03" href="mailto:info@auroradevelopment.co.nz">Email:
                    info@auroradevelopment.co.nz</a>
                <a class="inline-block font-foco-regular text-[18px] text-white transition-all duration-300 hover:text-aurora-blue-03" href="tel:6421806699">Phone:
                    +64 (0)21 806 699</a>
                <p class="inline-block font-foco-regular text-[18px] text-white mb-4">
                    Office: 118 Lincoln Road,
                    Henderson,
                    Auckland, AKL 0610
                </p>
                <div class="flex">
                    <a class="inline-block mr-[30px]" href="#">
                        <img class="object-contain h-[15px] w-[15px]" src="<?php echo get_theme_file_uri( '/images/facebook_Asset 7.svg' ) ?>" alt="">
                    </a>
                    <a class="inline-block mr-[30px]" href="#">
                        <img class="object-contain h-[15px] w-[15px]" src="<?php echo get_theme_file_uri( '/images/twitter_Asset 3.svg' ) ?>" alt="">
                    </a>
                    <a class="inline-block mr-[30px]" href="#">
                        <img class="object-contain h-[15px] w-[15px]" src="<?php echo get_theme_file_uri( '/images/youtube_Asset 4.svg' ) ?>" alt="">
                    </a>
                    <a class="inline-block mr-[30px]" href="#">
                        <img class="object-contain h-[15px] w-[15px]" src="<?php echo get_theme_file_uri( '/images/linkedin_Asset 5.svg' ) ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
