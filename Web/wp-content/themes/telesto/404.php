<?php get_header(); ?>

 

<section id="cm-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-md-12">
                        <div class="banner-left-side wow fadeIn text-center" >
                            <span class="text-center">404 Error</span>
                            
                            <h1 class="text-center">Page Not Found</h1>
                            <p>Sorry, the page you’re looking for doesn’t exist or has been moved.<br>
Please check the button or return to the homepage.</p>
							<a class="blue-btn ml-auto mr-auto mt-3" href="<?php echo esc_url(home_url('/')); ?>">
                              Return to Homepage
                                <svg width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.7501 1.63619C11.7501 1.22198 11.4143 0.886194 11.0001 0.886194L4.25012 0.886194C3.83591 0.886194 3.50012 1.22198 3.50012 1.63619C3.50012 2.05041 3.83591 2.38619 4.25012 2.38619H10.2501V8.38619C10.2501 8.80041 10.5859 9.13619 11.0001 9.13619C11.4143 9.13619 11.7501 8.80041 11.7501 8.38619L11.7501 1.63619ZM1.46099 12.236L11.5305 2.16652L10.4698 1.10586L0.400334 11.1753L1.46099 12.236Z" fill="white"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

<?php get_footer(); ?>