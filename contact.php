<?php include "header.php" ?>

<body
    class="page-template-default page page-id-8 theme-petroleum woocommerce-no-js wpb-js-composer js-comp-ver-6.7.0 vc_responsive">
    <!--.l-header region -->
    <header class='l-header creative-layout'>
        <div class="top-bar-container contain-to-grid sticky ">
            <?php include "menu.php" ?>

        </div>

    </header>


    <section class="wd-title-bar">

        <div class="row">

            <div class="large-12 columns p-t-70 text-left">

                <h2 id="page-title" class="title">Contact</h2>



            </div>

        </div>

    </section>



    <!-- content  -->
    <main class="l-main">
        <div class="main row">
            <article class="large-12 columns">
                <div class="body field clearfix">
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1448990409591">
                        <div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch>
                            <div class="wpb_wrapper">

                                <div class="">
                                    <div class="large-12 columns  wd-title-section_l">
                                        <h2>Get In Touch</h2>
                                        <h5>Contact us for cutting edge Energy solutions. </h5>
                                    </div>
                                </div>
                                <hr><br>
                                <div class="large-3 columns">
                                    <h6><i class="fa fa-map-marker"></i> <?php echo $addr; ?></h6>
                                </div>
                                <div class="large-3 columns">
                                    <h6><i class="fa fa-phone"></i> <?php echo $phone; ?></h6>
                                </div>
                                <div class="large-3 columns">
                                    <h6><i class="fab fa-whatsapp"></i> <?php echo $whatsapp; ?></h6>
                                </div>
                                <div class="large-3 columns">
                                    <h6> <i class="fa fa-envelope"></i> <?php echo $email; ?></h6>
                                </div>
                                <br>
                                <hr><br>
                                <h5>Write us a review, complaint or inquiry. </h5><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch>
                            <div class="wpb_wrapper">
                                <div role="form" class="wpcf7" id="wpcf7-f701-p8-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response">
                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                        <ul></ul>
                                    </div>
                                    <form action="submit.php" method="post" class="wpcf7-form init">
                                        <input type='hidden' name='fresh' value='<?php echo $email; ?>' />
                                        <div class="large-4 columns">
                                            <span class="wpcf7-form-control-wrap your-name"><input type="text"
                                                    name="your_name" value="" size="40"
                                                    class="wpcf7-form-control wpcf7-text  " required
                                                    placeholder="Full Name" /></span>
                                        </div>
                                        <div class="large-4 columns">
                                            <span class="wpcf7-form-control-wrap your-email"><input type="email"
                                                    name="your_email" value="" size="40"
                                                    class="wpcf7-form-control wpcf7-text wpcf7-email  " required
                                                    placeholder="Email" /></span>
                                        </div>
                                        <div class="large-4 columns">
                                            <span class="wpcf7-form-control-wrap your-name"><input type="text"
                                                    name="number" value="" size="40"
                                                    class="wpcf7-form-control wpcf7-text  " required
                                                    placeholder="Phone Number" /></span>
                                        </div>
                                        <div class="large-12 columns">
                                            <span class="wpcf7-form-control-wrap your-message"><textarea name="message"
                                                    cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                                    aria-invalid="false" placeholder="Your Message"></textarea></span>
                                        </div>
                                        <div class="large-12 columns text-center">
                                            <input type="submit" value="Submit"
                                                class="wpcf7-form-control wpcf7-submit button small" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                        class="vc_row wpb_row vc_row-fluid vc_custom_1464113075672">
                        <div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch>
                            <div class="wpb_wrapper">

                                <section class="wd-section-call-to-action  ">
                                    <div class="row call-to-action">
                                        <div class="large-8 columns">
                                            <h4>OUR REPUTATION</h4>
                                            <p><?php echo $name; ?> has cutting-edge conversion and reforming
                                                capacities, and produce a wide range of high quality petroleum /
                                                energy products.</p>
                                        </div>
                                        <div class="large-4 columns">
                                            <div class="wd-call-to-action-btn">
                                                <a href="about.php">VIEW MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width"></div>
                </div>
            </article>
            <div class="large-12 columns"> </div>
        </div>
    </main> <!-- /content  -->

    <!--.footer-columns -->

    <?php include "footer.php" ?>