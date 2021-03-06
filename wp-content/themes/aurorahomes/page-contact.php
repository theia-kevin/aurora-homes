<?php
get_header();
?>
    <div class="relative h-[650px] xl:h-[750px] mb-[50px] xl:mb-[100px] bg-cover bg-no-repeat" style="background-image: url('<?php echo get_theme_file_uri( '/images/header_resized.jpg' ); ?>');">
        <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
        <div class="absolute h-[220px] w-full bottom-0 bg-cover bg-no-repeat z-40" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 4.svg' ); ?>');">
        </div>
        <div data-aos="fade-right" data-aos-once="true" class="absolute inset-0 container mx-auto px-4 flex flex-col justify-center z-40">
            <p class="font-foco-black text-[70px] xl:text-[90px] leading-[80px] xl:leading-[100px] text-white uppercase pb-[30px]">Get In Touch</p>
        </div>
    </div>
    <div id="contact" data-aos="fade-up" data-aos-once="true" data-aos-offset="-100" class="container mx-auto mb-[100px] px-4">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-4 flex flex-col items-start justify-start">
                <p class="font-foco-black text-[50px] leading-[60px] text-aurora-blue-04 uppercase pb-[30px]">
                    Office:</p>
                <p class="font-foco-regular text-[24px] text-aurora-grey-02 pb-[30px]">118 Lincoln Road</p>
                <p class="font-foco-regular text-[24px] text-aurora-grey-02 pb-[30px]">Henderson</p>
                <p class="font-foco-regular text-[24px] text-aurora-grey-02">Email: info@auroradevelopments.co.nz</p>
                <p class="font-foco-regular text-[24px] text-aurora-grey-02 pb-[15px]">Phone: +64 (0)9 836 9999</p>
                <div class="flex mb-[50px]">
                    <a class="inline-block mr-[30px]" href="#">
                        <img class="object-contain" src="<?php echo get_theme_file_uri( '/images/Group 216.png' ); ?>" alt="">
                    </a>
                    <a class="inline-block mr-[30px]" href="#">
                        <img class="object-contain" src="<?php echo get_theme_file_uri( '/images/Path 1583.png' ); ?>" alt="">
                    </a>
                    <a class="inline-block mr-[30px]" href="#">
                        <img class="object-contain" src="<?php echo get_theme_file_uri( '/images/Path 1582.png' ); ?>" alt="">
                    </a>
                    <a class="inline-block mr-[30px]" href="#">
                        <img class="object-contain" src="<?php echo get_theme_file_uri( '/images/Group 218.png' ); ?>" alt="">
                    </a>
                    <a class="inline-block mr-[30px]" href="#">
                        <img class="object-contain" src="<?php echo get_theme_file_uri( '/images/Group 217.png' ); ?>" alt="">
                    </a>
                </div>
            </div>
            <div class="col-span-12 xl:col-span-7 xl:col-start-6 relative">
                <div id="map" class="h-[430px] w-full relative z-40"></div>
                <img class="object-contain absolute bottom-[-30px] right-[30px] xl:right-[-30px] animate-pulse" src="<?php echo get_theme_file_uri( '/images/Group 316.png' ); ?>" alt="">
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-once="true" class="container mx-auto mb-[100px] px-4">
        <p class="font-foco-black text-[36px] text-aurora-blue-04 uppercase">Make An Enquiry</p>
        <p class="font-foco-light text-[16px] text-aurora-grey-02 border-b border-aurora-grey-01 pb-[30px] mb-[30px]">If any projects you are
            interested in or related inquiries, please contact us today!</p>
        <div>
			<?php echo do_shortcode( '[contact-form-7 id="27" title="Contact form 1"]' ); ?>
        </div>
    </div>
<?php
get_footer();
