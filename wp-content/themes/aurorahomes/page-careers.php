<?php
get_header();
?>
    <div class="relative h-[650px] xl:h-[750px] mb-[50px] xl:mb-[100px] bg-cover bg-no-repeat" style="background-image: url('<?php echo get_theme_file_uri( '/images/workers_resized.jpg' ); ?>');">
        <div class="absolute inset-0 bg-aurora-blue-02 bg-opacity-50"></div>
        <div class="absolute h-[220px] w-full bottom-0 bg-cover bg-no-repeat z-40" style="background-image: url('<?php echo get_theme_file_uri( '/images/Asset 4.svg' ); ?>');">
        </div>
        <div data-aos="fade-right" data-aos-once="true" class="absolute inset-0 container mx-auto px-4 flex flex-col justify-center z-40">
            <p class="font-foco-black text-[70px] xl:text-[90px] leading-[80px] xl:leading-[100px] text-white uppercase">
                Looking To</p>
            <p class="font-foco-black text-[70px] xl:text-[90px] leading-[80px] xl:leading-[100px] text-white uppercase pb-[30px]">
                Your Future</p>
            <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-03 border-[5px] border-aurora-blue-03 rounded-full py-[5px] px-[30px] self-start transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">
                Contact Us
            </a>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-once="true" data-aos-offset="-100" class="container mx-auto mb-[100px] px-4">
        <div class="grid grid-cols-12">
            <div class="col-span-12 xl:col-span-6">
                <p class="font-foco-black text-[50px] leading-[60px] text-aurora-blue-04 uppercase">Interested in Construction & Development</p>
                <p class="font-foco-bold text-[24px] text-aurora-blue-03 uppercase">Join Our Aurora Family Today</p>
                <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-03 border-[5px] border-aurora-blue-03 rounded-full py-[5px] px-[30px] self-start  my-[50px] transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02" href="<?php echo get_permalink( get_page_by_title( 'Openings' ) ); ?>">View
                    Current Openings</a>
            </div>
            <div class="col-span-12 xl:col-span-6 relative">
                <img class="object-cover object-center h-[400px] w-full relative z-40 pb-[30px] pr-[30px]" src="<?php echo get_theme_file_uri( '/images/projectmanagement_resized.jpg' ); ?>" alt="">
                <img class="object-contain absolute bottom-[0px] right-[0px] animate-pulse" src="<?php echo get_theme_file_uri( '/images/Group 175.png' ); ?>" alt="">
            </div>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-once="true" class="container mx-auto px-4">
        <div class="grid grid-cols-12 mb-[50px]">
            <div class="col-span-3 xl:col-span-1 flex justify-end">
                <div class="relative inline-block self-start">
                    <img class="relative z-20 object-contain bg-aurora-blue-02 p-[15px]" src="<?php echo get_theme_file_uri( '/images/about-icon.png' ); ?>" alt="">
                    <div class="absolute z-10 inset-0 bg-aurora-yellow-01 h-full w-full top-[-5px] left-[-5px]"></div>
                    <div class="absolute z-0 inset-0 bg-aurora-blue-03 h-full w-full top-[-10px] left-[-10px]"></div>
                </div>
            </div>
            <div class="col-span-9 xl:col-span-11 pl-[30px] flex flex-col">
                <p class="font-foco-black text-[24px] text-aurora-blue-03 uppercase pb-[15px]">Professional Project Manager</p>
                <p class="font-foco-light text-[16px] text-aurora-grey-02">Schedule the construction time frame accordingly, manage the construction progress and material cost, arrange various inspections being performed, and ensure that all constructions meet the requirements and standards. And will report and update the progress of the project to the customers.</p>
            </div>
        </div>
        <div class="grid grid-cols-12 mb-[50px]">
            <div class="col-span-3 xl:col-span-1 flex justify-end">
                <div class="relative inline-block self-start">
                    <img class="relative z-20 object-contain bg-aurora-blue-02 p-[15px]" src="<?php echo get_theme_file_uri( '/images/about-icon.png' ); ?>" alt="">
                    <div class="absolute z-10 inset-0 bg-aurora-yellow-01 h-full w-full top-[-5px] left-[-5px]"></div>
                    <div class="absolute z-0 inset-0 bg-aurora-blue-03 h-full w-full top-[-10px] left-[-10px]"></div>
                </div>
            </div>
            <div class="col-span-9 xl:col-span-11 pl-[30px] flex flex-col">
                <p class="font-foco-black text-[24px] text-aurora-blue-03 uppercase pb-[15px]">Quality Work</p>
                <ol class="list-decimal list-inside">
                    <li class="font-foco-light text-[16px] text-aurora-grey-02 pb-[15px]">We can guarantee that the construction personnel are trusted, qualified or certified and skilled workers, and the work is also quality guaranteed.</li>
                    <li class="font-foco-light text-[16px] text-aurora-grey-02">At the same time, we cooperate with a number of high reputed local building material suppliers to provide quality-guaranteed products while meeting customer requirements and expectations.</li>
                </ol>
            </div>
        </div>
        <div class="grid grid-cols-12 mb-[50px]">
            <div class="col-span-3 xl:col-span-1 flex justify-end">
                <div class="relative inline-block self-start">
                    <img class="relative z-20 object-contain bg-aurora-blue-02 p-[15px]" src="<?php echo get_theme_file_uri( '/images/about-icon.png' ); ?>" alt="">
                    <div class="absolute z-10 inset-0 bg-aurora-yellow-01 h-full w-full top-[-5px] left-[-5px]"></div>
                    <div class="absolute z-0 inset-0 bg-aurora-blue-03 h-full w-full top-[-10px] left-[-10px]"></div>
                </div>
            </div>
            <div class="col-span-9 xl:col-span-11 pl-[30px] flex flex-col">
                <p class="font-foco-black text-[24px] text-aurora-blue-03 uppercase pb-[15px]">Effective Communication</p>
                <ol class="list-decimal list-inside">
                    <li class="font-foco-light text-[16px] text-aurora-grey-02 pb-[15px]">Good communication with customers is the foundation of success delivering projects. Our team will learn the customer’s needs in detail before the start of the contract. From the beginning, the overall-scale planning of the project will be performed, the estimated completion time, the project budget and the interior and exterior style of the house will be detailed and carefully discussed with the client, and provide professional suggestions and quotations. The most cost-saving solutions and contracts will be given based on the budget and consultancies.</li>
                    <li class="font-foco-light text-[16px] text-aurora-grey-02">Effective communication with sub is the basis for ensuring quality. Our team adheres to the one-month, one-week, three-day, and one-day reminder entry mode to keep in touch with the sub to allow time for potential uncontrollable situations to resolve, to ensure that the construction progress will not be delayed.</li>
                </ol>
            </div>
        </div>
        <div class="grid grid-cols-12 mb-[50px]">
            <div class="col-span-3 xl:col-span-1 flex justify-end">
                <div class="relative inline-block self-start">
                    <img class="relative z-20 object-contain bg-aurora-blue-02 p-[15px]" src="<?php echo get_theme_file_uri( '/images/about-icon.png' ); ?>" alt="">
                    <div class="absolute z-10 inset-0 bg-aurora-yellow-01 h-full w-full top-[-5px] left-[-5px]"></div>
                    <div class="absolute z-0 inset-0 bg-aurora-blue-03 h-full w-full top-[-10px] left-[-10px]"></div>
                </div>
            </div>
            <div class="col-span-9 xl:col-span-11 pl-[30px] flex flex-col">
                <p class="font-foco-black text-[24px] text-aurora-blue-03 uppercase pb-[15px]">Comprehensive And Considerate Service</p>
                <p class="font-foco-light text-[16px] text-aurora-grey-02">From answering customer questions in the field of housing construction and projects, reporting on progress during construction, to preparing various compliance documents for customers and the aftermath of problems after customers move in, we will provide the most professional advice and comprehensive service.</p>
            </div>
        </div>
        <div class="grid grid-cols-12 mb-[100px]">
            <div class="col-span-12 flex justify-end">
                <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-03 border-[5px] border-aurora-blue-03 rounded-full py-[5px] px-[30px] self-start transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02 mr-[15px]" href="<?php echo get_permalink( get_page_by_title( 'About' ) ); ?>">About</a>
                <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-red-01 border-[5px] border-aurora-red-01 rounded-full py-[5px] px-[30px] self-start transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02" href="<?php echo get_permalink( get_page_by_title( 'Contact' ) ); ?>">Contact
                    Us</a>
            </div>
        </div>
    </div>
    <img data-aos="fade-up" data-aos-once="true" class="object-contain mb-[100px]" src="<?php echo get_theme_file_uri( '/images/asset 2-2.png' ); ?>" alt="">
    <div data-aos="fade-up" data-aos-once="true" class="container mx-auto mb-[100px] px-4">
        <div class="grid grid-cols-12">
            <div class="col-span-12">
                <p class="font-foco-black text-[50px] leading-[60px] text-aurora-blue-04 uppercase">Our Current Listings</p>
				<p class="font-foco-light text-[16px] text-aurora-grey-02 pb-[50px]">In order to cope with aurora's expanding company scale and projects, to solve the various needs of customers and potential future challenges, aurora needs more talents to join us. If you are interested in us and need a place to show and enhance your value, you are welcome to submit your resume to us.</p>
            </div>
        </div>
        <div class="grid grid-cols-12 gap-y-[60px] xl:gap-[60px] mb-[60px]">
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
                <div class="col-span-12 xl:col-span-4">
                    <div class="h-full flex flex-col border border-aurora-blue-03">
                        <div class="bg-aurora-blue-03 p-[30px] h-[180px]">
                            <div class="font-foco-black text-[36px] leading-[46px] text-white uppercase"><?php the_title(); ?>:</div>
                            <div class="font-foco-bold text-[24px] text-white uppercase"><?php the_field( 'location' ); ?></div>
                        </div>
                        <div class="flex-grow flex flex-col justify-between p-[30px]">
                            <div class="font-foco-light text-[16px] text-aurora-grey-02 pb-[30px]"><?php the_field( 'description' ); ?></div>
                            <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-03 border-[5px] border-aurora-blue-03 rounded-full py-[5px] px-[30px] self-end mt-auto transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-blue-02" href="<?php echo add_query_arg( 'listing_id',
                                get_the_ID(), rtrim( get_permalink( get_page_by_title( 'Apply' ) ), '/' ) ); ?>">Apply Now</a>
                        </div>
                    </div>
                </div>
				<?php
			}
			?>
        </div>
        <div class="grid grid-cols-12 gap-y-[60px] xl:gap-[60px] ">
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
                <div class="col-span-12 xl:col-span-4">
                    <div class="h-full flex flex-col border border-aurora-blue-02">
                        <div class="bg-aurora-blue-02 p-[30px] h-[180px]">
                            <div class="font-foco-black text-[36px] leading-[46px] text-white uppercase"><?php the_title(); ?>:</div>
                            <div class="font-foco-bold text-[24px] text-white uppercase"><?php the_field( 'location' ); ?></div>
                        </div>
                        <div class="flex-grow flex flex-col justify-between p-[30px]">
                            <div class="font-foco-light text-[16px] text-aurora-grey-02 pb-[30px]"><?php the_field( 'description' ); ?></div>
                            <a class="inline-block font-foco-light text-[16px] text-white bg-aurora-blue-02 border-[5px] border-aurora-blue-02 rounded-full py-[5px] px-[30px] self-end mt-auto transition-all duration-300 hover:transform hover:translate-y-1 hover:-translate-x-1 hover:shadow-inner hover:border-aurora-yellow-01" href="<?php echo add_query_arg( 'listing_id',
							    get_the_ID(), rtrim( get_permalink( get_page_by_title( 'Apply' ) ), '/' ) ); ?>">Apply Now</a>
                        </div>
                    </div>
                </div>
			    <?php
		    }
		    ?>
        </div>
    </div>
    <div data-aos="fade-up" data-aos-once="true" class="container mx-auto py-[30px] px-4">
        <div class="grid grid-cols-12">
            <div class="col-span-12 text-right">
                <p class="font-foco-black text-[50px] leading-[60px] text-aurora-blue-04 uppercase">Have Questions?</p>
            </div>
        </div>
        <p class="font-foco-black text-[36px] text-aurora-blue-04 uppercase">Interested in working with us?</p>
        <p class="font-foco-light text-[16px] text-aurora-grey-02 border-b border-aurora-grey-01 pb-[30px] mb-[30px]">We have more opportunities for both individuals and organisations, leave your message of the interests.</p>
        <div><?php echo do_shortcode( '[contact-form-7 id="181" title="Contact form 2"]' ); ?></div>
    </div>
<?php
get_footer();
