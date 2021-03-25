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
<header id="header" class="fixed z-50 inset-0 px-[120px] h-[80px] hidden xl:flex items-center justify-between py-16 transition-all duration-300">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img class="object-contain h-[50px]" src="<?php echo get_theme_file_uri( '/images/cropped-cropped-Asset-1-2.png' ); ?>" alt="">
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
<header id="header-mobile" class="mobile container mx-auto fixed z-50 inset-0 h-[80px] flex xl:hidden items-center justify-between transition-all duration-300" x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <img class="object-contain h-[50px]" src="<?php echo get_theme_file_uri( '/images/cropped-cropped-Asset-1-2.png' ); ?>" alt="">
    </a>
    <div class="cursor-pointer mr-[30px]" @click.stop="sidebarOpen = true">
        <svg class="h-[40px] w-[40px] text-white transition-all duration-300 hover:text-aurora-blue-03" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
        </svg>
    </div>
    <div class="fixed inset-0" x-show="sidebarOpen" style="display: none;">
        <div class="fixed inset-0" @click="sidebarOpen = false" x-show="sidebarOpen" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
            <div class="absolute inset-0"></div>
        </div>
        <div class="relative h-full w-full flex flex-1 flex-col ml-auto pt-[100px] bg-aurora-blue-01" x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-y-full" x-transition:enter-end="translate-y-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-y-0" x-transition:leave-end="-translate-y-full">
            <div class="absolute top-0 right-0 p-[30px]">
                <button class="ml-1 flex items-center justify-center h-[40px] w-[40px] rounded-full focus:outline-none" x-show="sidebarOpen" @click="sidebarOpen = false">
                    <svg class="h-[40px] w-[40px] text-white transition-all duration-300 hover:text-aurora-blue-02" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="flex-1 h-[0px] overflow-y-auto">
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
