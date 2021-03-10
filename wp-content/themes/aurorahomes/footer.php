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

if ( is_page( 'Projects' ) || (is_single() && ( get_post_type() == 'project' )) || is_page( 'Apply' ) ) {
	$background          = get_theme_file_uri( '/images/AdobeStock_322912716 copy.jpg' );
	$background_position = 'bg-left-bottom';
}
?>
<div class="relative h-5/6 lg:h-3/6 bg-cover bg-no-repeat <?php echo $background_position; ?>" style="background-image: url('<?php echo $background; ?>');">
    <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
    <div class="absolute h-2/6 lg:h-3/6 w-full -top-4 bg-cover bg-no-repeat z-40" style="background-image: url('<?php echo get_theme_file_uri( '/images/Path 1985.png' ); ?>');">
    </div>
    <div class="absolute inset-0 container mx-auto lg:mb-8 px-4 lg:px-0 flex flex-col justify-end z-40">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-5 flex flex-col justify-between">
                <a class="block mb-4 lg:mb-0" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src="<?php echo get_theme_file_uri('/images/cropped-cropped-Asset-1-2.png'); ?>" alt="">
                </a>
                <p class="font-light text-white mb-4 lg:mb-0">© COPYRIGHT 2020-2021 AURORA HOMES LIMITED. ALL RIGHTS
                    RESERVED.</p>
            </div>
            <div class="col-span-12 lg:col-span-3 flex flex-col mb-4 lg:mb-0">
                <p class="font-bold text-xl text-white mb-4">Links</p>
				<?php
				foreach ( wp_get_nav_menu_items( 'menu-1' ) as $menu ) {
					?>
                    <a class="inline-block font-light text-xl text-white" href="<?php echo $menu->url ?>"><?php echo $menu->title; ?></a>
					<?php
				}
				?>
            </div>
            <div class="col-span-12 lg:col-span-4 flex flex-col mb-4 lg:mb-0">
                <p class="font-bold text-xl text-white mb-4">Contact</p>
                <p class="inline-block font-light text-xl text-white">Email: info@auroradevelopment.co.nz</p>
                <p class="inline-block font-light text-xl text-white">Phone: +64 (0)21 806 699</p>
                <p class="inline-block font-light text-xl text-white mb-4">Office: 118 Lincoln Road, Henderson,
                    Auckland, AKL 0610</p>
                <div class="flex">
                    <img class="h-4 w-4 mr-4" src="<?php echo get_theme_file_uri('/images/facebook_Asset 7.svg') ?>" alt="">
                    <img class="h-4 w-4 mr-4" src="<?php echo get_theme_file_uri('/images/linkedin_Asset 5.svg') ?>" alt="">
                    <img class="h-4 w-4 mr-4" src="<?php echo get_theme_file_uri('/images/twitter_Asset 3.svg') ?>" alt="">
                    <img class="h-4 w-4 mr-4" src="<?php echo get_theme_file_uri('/images/youtube_Asset 4.svg') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
