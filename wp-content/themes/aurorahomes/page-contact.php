<?php
get_header();
?>
    <div class="relative h-full mb-24 bg-cover bg-no-repeat" style="background-image: url('<?php echo get_theme_file_uri( '/images/header_resized.jpg' ); ?>');">
        <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
        <div class="absolute w-full bottom-0 bg-cover bg-no-repeat z-40" style="height: 220px; background-image: url('<?php echo get_theme_file_uri( '/images/Asset 4.svg' ); ?>');">
        </div>
        <div data-aos="fade-up" data-aos-duration="2000" class="absolute inset-0 container mx-auto px-4 lg:px-0 flex flex-col justify-center z-40">
            <p class="font-black text-4xl lg:text-8xl text-white uppercase">Get in Touch</p>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="2000" class="container mx-auto mb-0 lg:mb-36 px-4 lg:px-0">
        <div class="grid grid-cols-12">
            <div class="col-span-4 flex items-center justify-start">
                <div>
                    <p class="font-black leading-tight text-4xl text-aurora-blue-04 uppercase mb-8">Office:</p>
                    <p class="font-light text-lg mb-8">118 Lincoln Road</p>
                    <p class="font-light text-lg mb-8">Henderson</p>
                    <p class="font-light text-lg">Email: info@auroradevelopment.co.nz</p>
                    <p class="font-light text-lg mb-4">Phone: +64 (0)21 806 699</p>
                    <div class="flex">
                        <img class="mr-8" src="<?php echo get_theme_file_uri( '/images/Group 216.png' ); ?>" alt="">
                        <img class="mr-8" src="<?php echo get_theme_file_uri( '/images/Group 217.png' ); ?>" alt="">
                        <img class="mr-8" src="<?php echo get_theme_file_uri( '/images/Group 218.png' ); ?>" alt="">
                        <img class="mr-8" src="<?php echo get_theme_file_uri( '/images/Path 1582.png' ); ?>" alt="">
                        <img class="mr-8" src="<?php echo get_theme_file_uri( '/images/Path 1583.png' ); ?>" alt="">
                    </div>
                </div>
            </div>
            <div class="col-span-8 relative">
                <div id="map" class="w-full relative z-40" style="height: 500px;"></div>
                <img class="absolute -bottom-8 right-8 2xl:-right-8" src="<?php echo get_theme_file_uri( '/images/Group 316.png' ); ?>" alt="">
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="2000" class="container mx-auto mb-0 lg:mb-36 px-4 lg:px-0">
        <p class="font-black leading-tight text-4xl text-aurora-blue-04 uppercase">Make An Enquiry</p>
        <p class="border-b border-aurora-grey-01 font-light leading-tight pb-8 w-1/2 mb-8">If any projects you are interested in or related inquiries, please contact us today!</p>
        <div>
			<?php echo do_shortcode( '[contact-form-7 id="27" title="Contact form 1"]' ); ?>
        </div>
    </div>
<?php
get_footer();
