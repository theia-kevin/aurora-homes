<?php
get_header();
?>
    <div class="relative h-full mb-12 lg:mb-36 bg-cover bg-no-repeat" style="background-image: url('<?php echo get_theme_file_uri( '/images/workers_resized.jpg' ); ?>');">
        <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
        <div class="absolute w-full bottom-0 bg-cover bg-no-repeat z-40" style="height: 220px; background-image: url('<?php echo get_theme_file_uri( '/images/Asset 4.svg' ); ?>');">
        </div>
        <div data-aos="fade-up" data-aos-duration="2000" data-aos-offset="0" class="absolute inset-0 container mx-auto px-4 lg:px-0 flex flex-col justify-center z-40">
            <p class="font-black text-4xl lg:text-8xl text-white uppercase">Looking To</p>
            <p class="font-black text-4xl lg:text-8xl text-white uppercase mb-8">Your Future</p>
            <a class="self-start bg-aurora-blue-03 px-8 py-2 rounded-full font-light text-white" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">Contact
                Us</a>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="2000" class="container mx-auto px-4 lg:px-0">
        <div class="grid grid-cols-12">
            <div class="col-span-12 2xl:col-span-6 mb-12 2xl:mb-0">
                <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase mb-4">Interested in Construction & Development</p>
                <p class="font-bold text-2xl text-aurora-blue-03 uppercase mb-16">Join Our Aurora Family Today</p>
                <a class="self-end bg-aurora-blue-03 px-4 py-2 rounded-full font-light text-white" href="<?php echo get_permalink( get_page_by_title( 'Openings' ) ); ?>">View
                    Current Openings</a>
            </div>
            <div class="col-span-12 2xl:col-span-6 2xl:mb-0 relative">
                <img class="object-cover w-full z-40" src="<?php echo get_theme_file_uri( '/images/projectmanagement_resized.jpg' ); ?>" alt="">
                <img class="absolute -bottom-8 right-8 2xl:-right-8" src="<?php echo get_theme_file_uri( '/images/Group 175.png' ); ?>" alt="">
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="2000" class="container mx-auto px-4 lg:px-0 mb-12 lg:mb-36">
        <div class="grid grid-cols-12 my-20 2xl:my-28">
            <div class="col-span-12 text-center">
                <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase">Why Choose Us</p>
            </div>
        </div>
        <div class="grid grid-cols-12">
            <div class="col-span-12 2xl:col-span-3 flex flex-col items-center mb-20 lg:px-8">
                <img class="mb-4" src="https://auroradevelopments.co.nz/wp-content/uploads/2021/01/Group-176.png" alt="">
                <p class="font-bold text-2xl text-aurora-blue-03 uppercase text-center h-20">PROFESSIONAL PROJECT MANAGER</p>
                <p class="font-light text-aurora-grey-02 text-justify">Schedule the construction time frame accordingly, manage the construction progress and material cost, arrange various inspections being performed, and ensure that all constructions meet the requirements and standards. And will report and update the progress of the project to the customers.</p>
            </div>
            <div class="col-span-12 2xl:col-span-3 flex flex-col items-center mb-20 lg:px-8">
                <img class="mb-4" src="https://auroradevelopments.co.nz/wp-content/uploads/2021/01/Group-176.png" alt="">
                <p class="font-bold text-2xl text-aurora-blue-03 uppercase text-center h-20">QUALITY WORK</p>
                <ol class="list-decimal list-inside">
                    <li class="font-light text-aurora-grey-02 text-justify mb-4">We can guarantee that the construction personnel are trusted, qualified or certified and skilled workers, and the work is also quality guaranteed.</li>
                    <li class="font-light text-aurora-grey-02 text-justify">At the same time, we cooperate with a number of high reputed local building material suppliers to provide quality-guaranteed products while meeting customer requirements and expectations.</li>
                </ol>
            </div>
            <div class="col-span-12 2xl:col-span-3 flex flex-col items-center mb-20 lg:px-8">
                <img class="mb-4" src="https://auroradevelopments.co.nz/wp-content/uploads/2021/01/Group-176.png" alt="">
                <p class="font-bold text-2xl text-aurora-blue-03 uppercase text-center h-20">EFFECTIVE COMMUNICATION</p>
                <ol class="list-decimal list-inside">
                    <li class="font-light text-aurora-grey-02 text-justify mb-4">Good communication with customers is the foundation of success delivering projects. Our team will learn the customer’s needs in detail before the start of the contract. From the beginning, the overall-scale planning of the project will be performed, the estimated completion time, the project budget and the interior and exterior style of the house will be detailed and carefully discussed with the client, and provide professional suggestions and quotations. The most cost-saving solutions and contracts will be given based on the budget and consultancies</li>
                    <li class="font-light text-aurora-grey-02 text-justify">Effective communication with sub is the basis for ensuring quality. Our team adheres to the one-month, one-week, three-day, and one-day reminder entry mode to keep in touch with the sub to allow time for potential uncontrollable situations to resolve, to ensure that the construction progress will not be delayed.</li>
                </ol>
            </div>
            <div class="col-span-12 2xl:col-span-3 flex flex-col items-center mb-20 lg:px-8">
                <img class="mb-4" src="https://auroradevelopments.co.nz/wp-content/uploads/2021/01/Group-176.png" alt="">
                <p class="font-bold text-2xl text-aurora-blue-03 uppercase text-center h-20">COMPREHENSIVE AND CONSIDERATE SERVICE</p>
                <p class="font-light text-aurora-grey-02 text-justify">From answering customer questions in the field of housing construction and projects, reporting on progress during construction, to preparing various compliance documents for customers and the aftermath of problems after customers move in, we will provide the most professional advice and comprehensive service.</p>
            </div>
        </div>
        <div class="grid grid-cols-12">
            <div class="col-span-12 flex justify-center">
                <a class="self-start bg-aurora-blue-03 px-8 py-2 rounded-full font-light text-white mx-4" href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">About
                    Us</a>
                <a class="self-start bg-aurora-red-01 px-8 py-2 rounded-full font-light text-white mx-4" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">Contact
                    Us</a>
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="2000" class="mb-12 lg:mb-36">
        <div class="w-full bg-cover bg-no-repeat z-30" style="height:550px; background-image: url('<?php echo get_theme_file_uri( '/images/asset 2-2.png' ); ?>');">
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="2000" class="container mx-auto px-4 lg:px-0 mb-12 lg:mb-28">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase">Our Current Listings</p>
				<p class="font-light text-aurora-grey-02 mb-12">In order to cope with aurora's expanding company scale and projects, to solve the various needs of customers and potential future challenges, aurora needs more talents to join us. If you are interested in us and need a place to show and enhance your value, you are welcome to submit your resume to us.</p>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-y-16 2xl:gap-x-20">
			<?php
			$office_listings = new WP_Query( [
				'post_type' => 'listing',
				'tax_query' => [
					[
						[
							'taxonomy' => 'listing_status',
							'field'    => 'name',
							'terms'    => 'Active'
						],

						[
							'taxonomy' => 'listing_type',
							'field'    => 'name',
							'terms'    => 'Office'
						]

					]
				]
			] );
			while ( $office_listings->have_posts() ) {
				$office_listings->the_post();
				?>
                <div class="col-span-12 2xl:col-span-4">
                    <div class="h-full flex flex-col justify-start items-end">
                        <div class="border border-aurora-blue-03 h-full w-full">
                            <div class="bg-aurora-blue-03 p-8">
                                <div class="font-black leading-tight text-3xl text-white uppercase"><?php the_title(); ?>:</div>
                                <div class="font-bold text-xl text-white uppercase"><?php the_field( 'location' ); ?></div>
                            </div>
                            <div class="p-8">
                                <p class="font-light text-aurora-grey-02"><?php the_field( 'description' ); ?></p>
                            </div>
                        </div>
                        <a class="bg-aurora-blue-03 px-8 py-2 rounded-full font-light text-white my-4" href="<?php echo add_query_arg( 'listing_id',
							get_the_ID(), rtrim( get_permalink( get_page_by_title( 'Apply' ) ), '/' ) ); ?>">Apply
                            Now</a>
                    </div>
                </div>
				<?php
			}
			?>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="2000" class="container mx-auto px-4 lg:px-0 mb-12 lg:mb-36">
        <div class="grid grid-cols-12 gap-y-16 2xl:gap-x-20">
			<?php
			$office_listings = new WP_Query( [
				'post_type' => 'listing',
				'tax_query' => [
					[
						[
							'taxonomy' => 'listing_status',
							'field'    => 'name',
							'terms'    => 'Active'
						],

						[
							'taxonomy' => 'listing_type',
							'field'    => 'name',
							'terms'    => 'Contractor'
						]

					]
				]
			] );
			while ( $office_listings->have_posts() ) {
				$office_listings->the_post();
				?>
                <div class="col-span-12 2xl:col-span-4">
                    <div class="h-full flex flex-col justify-start items-end">
                        <div class="border border-aurora-blue-02 h-full w-full">
                            <div class="bg-aurora-blue-02 p-8">
                                <div class="font-black leading-tight text-3xl text-white uppercase"><?php the_title(); ?>:</div>
                                <div class="font-bold text-xl text-white uppercase"><?php the_field( 'location' ); ?></div>
                            </div>
                            <div class="p-8">
                                <p class="font-light text-aurora-grey-02"><?php the_field( 'description' ); ?></p>
                            </div>
                        </div>
                        <a class="bg-aurora-blue-02 px-8 py-2 rounded-full font-light text-white my-4" href="<?php echo add_query_arg( 'listing_id',
							get_the_ID(), rtrim( get_permalink( get_page_by_title( 'Apply' ) ), '/' ) ); ?>">Apply
                            Now</a>
                    </div>
                </div>
				<?php
			}
			?>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-duration="2000" class="container mx-auto mb-0 lg:mb-36 px-4 lg:px-0">
        <div class="grid grid-cols-12 my-12">
            <div class="col-span-12 text-left 2xl:text-right">
                <p class="font-black leading-tight text-5xl text-aurora-blue-04 uppercase">Have Questions?</p>
            </div>
        </div>
        <p class="font-black leading-tight text-4xl text-aurora-blue-04 uppercase">Interested in working with us?</p>
        <p class="border-b border-aurora-grey-01 font-light leading-tight pb-8 w-1/2 mb-8">We have more opportunities for both individuals and organisations, leave your message of the interests.</p>
        <div><?php echo do_shortcode( '[contact-form-7 id="181" title="Contact form 2"]' ); ?></div>
    </div>
<?php
get_footer();
