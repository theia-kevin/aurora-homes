<?php
get_header();
?>
    <div class="relative h-[250px] xl:h-[350px] mb-[50px] xl:mb-[100px] bg-cover bg-no-repeat bg-left-bottom" style="background-image: url('<?php echo get_theme_file_uri( '/images/m8DVH7.png' ); ?>');">
        <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
        <div class="absolute h-[220px] w-full bottom-0 bg-cover bg-no-repeat z-40" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 4.svg' ); ?>');">
        </div>
    </div>
	<div class="container mx-auto mb-[100px] px-4">
        <div class="flex flex-wrap items-center justify-between mb-[30px]">
            <div class="mb-[15px]">
                <p class="font-foco-black text-[50px] leading-[60px] text-aurora-blue-04 uppercase"><?php the_title(); ?></p>
                <p class="font-foco-bold text-[24px] text-aurora-blue-03 uppercase"><?php the_field( 'location' ); ?></p>
            </div>
            <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-02 border-[5px] border-aurora-blue-02 rounded-full py-[5px] px-[30px] transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-yellow-01" href="<?php echo get_permalink( get_page_by_title( 'Careers' ) ); ?>">Back to Job Listings</a>
        </div>
        <div class="font-foco-light text-[16px] text-aurora-grey-02"><?php the_field( 'description' ); ?></div>
	</div>
<?php
get_footer();
