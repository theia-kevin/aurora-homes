<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="absolute inset-0 h-36 z-50 hidden lg:flex items-center justify-between mx-0 lg:mx-8">
	<?php
	if ( is_page( 'Home' ) || is_page( 'About' ) || is_page( 'Services' ) || is_page( 'Contact' ) ) {
		$logo = get_theme_file_uri( '/images/Group 198.png' );
	}

	if ( is_page( 'Projects' ) || ( is_single() && ( get_post_type() == 'project' ) ) ) {
		$logo = get_theme_file_uri( '/images/Group 258.png' );
	}
	?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img src="<?php echo $logo; ?>" alt="">
    </a>
	<?php
	wp_nav_menu(
		array(
			'theme_location' => 'menu-1',
			'menu_id'        => 'primary-menu',
		)
	);
	?>
</header>
<header class="mobile absolute inset-0 h-36 z-50 flex lg:hidden items-center justify-between mx-4 lg:mx-8" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
	<?php
	if ( is_page( 'Home' ) || is_page( 'About' ) || is_page( 'Services' ) ) {
		$logo = get_theme_file_uri( '/images/Group 198.png' );
	} else {
		$logo = get_theme_file_uri( '/images/Group 258.png' );

	}
	?>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img src="<?php echo $logo; ?>" alt="">
    </a>
    <div class="cursor-pointer mr-4" @click.stop="sidebarOpen = true">
        <img src="<?php echo get_theme_file_uri( '/images/breadcrumb.png' ); ?>" alt="">
    </div>
    <div class="fixed inset-0 flex" x-show="sidebarOpen">
        <div class="fixed inset-0" @click="sidebarOpen = false" x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
            <div class="absolute inset-0"></div>
        </div>
        <div class="ml-auto relative flex-1 flex flex-col max-w-full w-full pt-24 pb-4 bg-aurora-blue-01" x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full">
            <div class="absolute top-0 right-0 p-8">
                <button class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none" x-show="sidebarOpen" @click="sidebarOpen = false">
                    <svg class="h-10 w-10 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="flex-1 h-0 overflow-y-auto">
                <nav class="px-12 space-y-1">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
                </nav>
            </div>
        </div>
    </div>
</header>
