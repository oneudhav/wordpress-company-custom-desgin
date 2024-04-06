<?php
//Template Name: services
get_header();
?>

   <section class="services section-padding" id="section_3">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 text-center mx-auto mb-5">
                            <small class="small-title">Services <strong class="text-warning">03/05</strong></small>

                            <h2>How can we help you?</h2>

                        </div>

                        <div class="col-lg-6 col-12">
                            <nav>
                                <div class="nav nav-tabs flex-column align-items-baseline" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-business-tab" data-bs-toggle="tab" data-bs-target="#nav-business" type="button" role="tab" aria-controls="nav-business" aria-selected="true">
                                        <h3>Business Consulting</h3>

                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</span>
                                    </button>

                                    <button class="nav-link" id="nav-strategy-tab" data-bs-toggle="tab" data-bs-target="#nav-strategy" type="button" role="tab" aria-controls="nav-strategy" aria-selected="false">
                                        <h3>Strategy Planning</h3>
                                        
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</span>
                                    </button>

                                    <button class="nav-link" id="nav-video-tab" data-bs-toggle="tab" data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video" aria-selected="false">
                                        <h3>Video Content</h3>
                                        
                                        <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</span>
                                    </button>
                                </div>
                            </nav>
                        </div>

                        <div class="col-lg-6 col-12">
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-business" role="tabpanel" aria-labelledby="nav-intro-tab">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/young-entrepreneurs-mature-investor-watching-presentation-discussing-project.jpg" class="img-fluid" alt="">

                                    <h5 class="mt-4 mb-2">Introduction to Business Consulting</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</p>

                                    <ul>
                                        <li>Helping small businesses</li>

                                        <li>Lorem ipsum dolor sit amet</li>

                                        <li>Business Strategy and Management</li>
                                    </ul>
                                </div>

                                <div class="tab-pane fade show" id="nav-strategy" role="tabpanel" aria-labelledby="nav-strategy-tab">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/startup-leader-drawing-flowchart-board-discussing-project.jpg" class="img-fluid" alt="">

                                    <h5 class="mt-4 mb-2">Strategy Planning</h5>

                                    <div class="row">
                                        <div class="col-lg-6 col-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore</p>
                                        </div>

                                        <div class="col-lg-6 col-12">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor dolore</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade show" id="nav-video" role="tabpanel" aria-labelledby="nav-video-tab">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/services/portrait-smiling-african-american-young-woman-holding-movie-production-blackboard.jpg" class="img-fluid" alt="">

                                    <h5 class="mt-4 mb-2">Video Content</h5>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut dolore</p>
                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </section>

          


<?php

get_footer();

?>