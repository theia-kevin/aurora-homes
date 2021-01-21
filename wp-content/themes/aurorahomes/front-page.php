<?php
get_header();
?>
    <div class="relative h-4/6 lg:h-5/6 mb-12 bg-cover bg-no-repeat" style="background-image: url('<?php echo get_theme_file_uri( '/images/Group 315.png' ); ?>');">
        <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
        <div class="absolute h-2/6 w-full -bottom-12 bg-cover bg-no-repeat z-40" style="background-image: url('<?php echo get_theme_file_uri( '/images/Path 1984.png' ); ?>');">
        </div>
        <div class="absolute inset-0 container mx-auto px-4 lg:px-0 flex flex-col justify-center z-40">
            <p class="font-bold text-5xl text-aurora-orange-01 uppercase mb-8">We Are</p>
            <p class="font-black text-5xl lg:text-8xl text-white uppercase">Building For</p>
            <p class="font-black text-5xl lg:text-8xl text-white uppercase mb-8">Your Dream</p>
            <a class="self-start bg-aurora-red-01 px-8 py-2 rounded-full font-light text-white" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">Contact
                Us</a>
        </div>
    </div>
    <div class="container mx-auto px-4 lg:px-0 mb-0 lg:mb-36">
        <div class="grid grid-cols-12">
            <div class="col-span-12 lg:col-span-5 flex flex-col justify-center text-right mb-12 lg:mb-0 order-2 lg:order-1">
                <p class="font-light text-aurora-grey-02 mb-12">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea Lorem ipsum dolor sit
                    amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                    aliquam erat suscipit lobortis nisl ut aliquip ex ea</p>
                <a class="self-end bg-aurora-blue-03 px-8 py-2 rounded-full font-light text-white" href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">Learn
                    more</a>
            </div>
            <div class="col-span-12 lg:col-start-7 lg:col-span-6 relative mb-12 lg:mb-0 order-1 lg:order-2">
                <p class="font-bold text-2xl text-aurora-blue-03 uppercase">About Us</p>
                <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase mb-8">LOREM IPSUM DOLOR SIT
                    AMET, CONSECTETUER</p>
                <img class="object-cover w-full relative z-40" src="<?php echo get_theme_file_uri( '/images/4AYn5D.png' ); ?>" alt="">
                <img class="absolute -bottom-8 right-8 2xl:-right-8" src="<?php echo get_theme_file_uri( '/images/Group 316.png' ); ?>" alt="">
            </div>
        </div>
        <div class="grid grid-cols-12 grid-rows-2 mb-0 lg:mb-36">
            <div class="col-span-12 lg:col-span-5 flex flex-col justify-center">
                <p class="font-bold text-2xl text-aurora-blue-03 uppercase">What We Do</p>
                <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase">LOREM IPSUM DOLOR SIT AMET,
                    CONSECTETUER</p>
            </div>
            <div class="col-span-12 row-start-2 lg:col-start-7 lg:col-span-6 flex flex-col mb-12 lg:mb-0">
                <p class="font-light text-aurora-grey-02 mb-8">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                    nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                    quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea Lorem ipsum dolor sit
                    amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                    aliquam erat suscipit lobortis nisl ut aliquip ex ea</p>
                <a class="self-end bg-aurora-blue-03 px-8 py-2 rounded-full font-light text-white" href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">Learn
                    more</a>
            </div>
        </div>
    </div>
    <div class="relative bg-contain bg-no-repeat bg-left-bottom" style="background-image: url('<?php echo get_theme_file_uri( '/images/Path 1986.png' ); ?>')">
        <div class="container mx-auto px-4 lg:px-0 mb-24 lg:mb-0 relative z-40">
            <div class="grid grid-cols-3 grid-rows-3 gap-4 lg:gap-12 pb-0 lg:pb-24 mb-0 lg:mb-36">
                <div class="col-start-1 row-start-1 col-span-1">
                    <img class="w-full" src="<?php echo get_theme_file_uri( '/images/UgS4y0.png' ); ?>" alt="">
                </div>
                <div class="col-start-2 row-start-1 col-span-1">
                    <img class="w-full" src="<?php echo get_theme_file_uri( '/images/mVDpx8.png' ); ?>" alt="">
                </div>
                <div class="col-start-2 row-start-2 col-span-1">
                    <img class="w-full" src="<?php echo get_theme_file_uri( '/images/hprdFP.png' ); ?>" alt="">
                </div>
                <div class="col-start-3 row-start-2 col-span-1">
                    <img class="w-full" src="<?php echo get_theme_file_uri( '/images/beWVMU.png' ); ?>" alt="">
                </div>
                <div class="col-start-2 row-start-3 col-span-1">
                    <img class="w-full" src="<?php echo get_theme_file_uri( '/images/3GvoWg.png' ); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="absolute bottom-0 h-4/6 w-full bg-aurora-blue-03 bg-opacity-30 bg-contain bg-no-repeat z-30" style="background-image: url('<?php echo get_theme_file_uri( '/images/Path 1986.png' ); ?>');">
        </div>
    </div>
    <div x-data="{ tab: 'completed' }">
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
                    <div class="swiper-slide">
                        <a href="#" class="block relative" x-data="{ showOverlay: false }" x-on:mouseover="showOverlay = true" x-on:mouseover.away="showOverlay = false">
                            <div class="bg-aurora-blue-02 bg-opacity-50 absolute inset-0 z-30" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-center items-end p-8 z-40" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <p class="font-bold tracking-wide text-xl text-white uppercase">Our Work</p>
                                <p class="font-black tracking-wide leading-tight text-4xl text-white uppercase mb-4">
                                    Hobsonville Project</p>
                                <p class="w-1/2 font-light leading-tight text-white text-right">Lorem ipsum dolor sit
                                    amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                    nostrud exerci tation ullamcorper sus</p>
                            </div>
                            <img src="<?php echo get_theme_file_uri( '/images/Rectangle 161.png' ); ?>" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="block relative" x-data="{ showOverlay: false }" x-on:mouseover="showOverlay = true" x-on:mouseover.away="showOverlay = false">
                            <div class="bg-aurora-blue-02 bg-opacity-50 absolute inset-0 z-30" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-center items-end p-8 z-40" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <p class="font-bold tracking-wide text-xl text-white uppercase">Our Work</p>
                                <p class="font-black tracking-wide leading-tight text-4xl text-white uppercase mb-4">
                                    Hobsonville Project</p>
                                <p class="w-1/2 font-light leading-tight text-white text-right">Lorem ipsum dolor sit
                                    amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                    nostrud exerci tation ullamcorper sus</p>
                            </div>
                            <img src="<?php echo get_theme_file_uri( '/images/Rectangle 162.png' ); ?>" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="block relative" x-data="{ showOverlay: false }" x-on:mouseover="showOverlay = true" x-on:mouseover.away="showOverlay = false">
                            <div class="bg-aurora-blue-02 bg-opacity-50 absolute inset-0 z-30" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-center items-end p-8 z-40" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <p class="font-bold tracking-wide text-xl text-white uppercase">Our Work</p>
                                <p class="font-black tracking-wide leading-tight text-4xl text-white uppercase mb-4">
                                    Hobsonville Project</p>
                                <p class="w-1/2 font-light leading-tight text-white text-right">Lorem ipsum dolor sit
                                    amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                    nostrud exerci tation ullamcorper sus</p>
                            </div>
                            <img src="<?php echo get_theme_file_uri( '/images/Rectangle 163.png' ); ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div x-show="tab === 'workinprogress'">
            <div class="our-work-swiper-container swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="#" class="block relative" x-data="{ showOverlay: false }" x-on:mouseover="showOverlay = true" x-on:mouseover.away="showOverlay = false">
                            <div class="bg-aurora-blue-02 bg-opacity-50 absolute inset-0 z-30" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-center items-end p-8 z-40" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <p class="font-bold tracking-wide text-xl text-white uppercase">Our Work</p>
                                <p class="font-black tracking-wide leading-tight text-4xl text-white uppercase mb-4">
                                    Hobsonville Project</p>
                                <p class="w-1/2 font-light leading-tight text-white text-right">Lorem ipsum dolor sit
                                    amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                    nostrud exerci tation ullamcorper sus</p>
                            </div>
                            <img src="<?php echo get_theme_file_uri( '/images/Rectangle 161.png' ); ?>" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="block relative" x-data="{ showOverlay: false }" x-on:mouseover="showOverlay = true" x-on:mouseover.away="showOverlay = false">
                            <div class="bg-aurora-blue-02 bg-opacity-50 absolute inset-0 z-30" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-center items-end p-8 z-40" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <p class="font-bold tracking-wide text-xl text-white uppercase">Our Work</p>
                                <p class="font-black tracking-wide leading-tight text-4xl text-white uppercase mb-4">
                                    Hobsonville Project</p>
                                <p class="w-1/2 font-light leading-tight text-white text-right">Lorem ipsum dolor sit
                                    amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                    nostrud exerci tation ullamcorper sus</p>
                            </div>
                            <img src="<?php echo get_theme_file_uri( '/images/Rectangle 162.png' ); ?>" alt="">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="#" class="block relative" x-data="{ showOverlay: false }" x-on:mouseover="showOverlay = true" x-on:mouseover.away="showOverlay = false">
                            <div class="bg-aurora-blue-02 bg-opacity-50 absolute inset-0 z-30" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            </div>
                            <div class="absolute inset-0 flex flex-col justify-center items-end p-8 z-40" x-show="showOverlay" x-transition:enter="transition-opacity ease-linear duration-300" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100" x-transition:leave="transition-opacity ease-linear duration-300" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                <p class="font-bold tracking-wide text-xl text-white uppercase">Our Work</p>
                                <p class="font-black tracking-wide leading-tight text-4xl text-white uppercase mb-4">
                                    Hobsonville Project</p>
                                <p class="w-1/2 font-light leading-tight text-white text-right">Lorem ipsum dolor sit
                                    amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                                    laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis
                                    nostrud exerci tation ullamcorper sus</p>
                            </div>
                            <img src="<?php echo get_theme_file_uri( '/images/Rectangle 163.png' ); ?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mx-auto px-4 lg:px-0 flex flex-wrap justify-around my-36">
        <img class="m-4" src="<?php echo get_theme_file_uri( '/images/Group 327.png' ); ?>" alt="">
        <img class="m-4" src="<?php echo get_theme_file_uri( '/images/Group 327.png' ); ?>" alt="">
    </div>
    <div class="container mx-auto mb-0 lg:mb-36 px-4 lg:px-0">
        <p class="font-black leading-tight text-4xl text-aurora-blue-06 uppercase">Make An Enquiry</p>
        <p class="border-b border-aurora-grey-01 font-light leading-tight pb-8 w-1/2 mb-8">Lorem ipsum dolor sit amet,
            consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam
            erat.</p>
        <div>
			<?php echo do_shortcode( '[contact-form-7 id="27" title="Contact form 1"]' ); ?>
        </div>
    </div>
<?php
get_footer();
