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
                                        <h5>

                                            <?php


                                            if ($_POST) {

                                                $your_name     = "";
                                                $message      = "";
                                                $number            = "";
                                                $your_email             = "";
                                                $fresh             = "";

                                                if (isset($_POST['your_name'])) {
                                                    $your_name = filter_var($_POST['your_name'], FILTER_SANITIZE_STRING);
                                                }



                                                if (isset($_POST['your_email'])) {
                                                    $your_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['your_email']);
                                                    $your_email = filter_var($your_email, FILTER_VALIDATE_EMAIL);
                                                }

                                                if (isset($_POST['number'])) {
                                                    $number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
                                                }

                                                if (isset($_POST['message'])) {
                                                    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
                                                }



                                                if (isset($_POST['fresh'])) {
                                                    $fresh = filter_var($_POST['fresh'], FILTER_SANITIZE_STRING);
                                                }

                                                $recipient = $fresh;

                                                $headers  = 'MIME-Version: 1.0' . "\r\n"
                                                    . 'Content-type: text/html; charset=utf-8' . "\r\n"
                                                    . 'From: ' . $your_email . "\r\n";

                                                $email_content = "<html><body>";
                                                $email_content .= "<table style='font-family: Arial;'><tbody><tr>
    <td style='background: #eee; padding: 10px;'>Name</td><td style='background: #fda; padding: 10px;'>$your_name</td></tr>";


                                                $email_content .= "<tr><td style='background: #eee; padding: 10px;'> Email</td><td style='background: #fda; padding: 10px;'>$your_email</td></tr>";
                                                $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Phone</td><td style='background: #fda; padding: 10px;'>$number</td></tr>";

                                                $email_content .= "<tr><td style='background: #eee; padding: 10px;'>Message</td><td style='background: #fda; padding: 10px;'>$message</td></tr>";
                                                $email_content .= '</body></html>';



                                                if (mail($recipient, "New Contact from Client", $email_content, $headers)) {
                                                    echo 'Contact Message Submitted! Our customer service agent would respond to you soon! Thank you';
                                                } else {
                                                    echo '<p>We are sorry, but the Message failed. </p>';
                                                }
                                            } else {
                                                echo '<p>Something went wrong</p>';
                                            }

                                            ?>




                                        </h5>
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

    <?php include "header.php" ?>

    <body
        class="home page-template-default page page-id-883 theme-petroleum woocommerce-no-js wpb-js-composer js-comp-ver-6.7.0 vc_responsive">
        <!--.l-header region -->
        <header class='l-header creative-layout'>
            <div class="top-bar-container contain-to-grid sticky ">
                <nav class="top-bar" data-topbar="">
                    <ul class="title-area">
                        <li class="name">
                            <h1>
                                <a title="Petroleum and Gas" rel="home" href="index.php">
                                    <img class="logo" alt="Petroleum and Gas"
                                        src="wp-content/uploads/2016/07/logo1.png">
                                    <img class="logo-sticky" alt="Petroleum and Gas"
                                        src="wp-content/uploads/2016/07/logo2.png">
                                </a>
                            </h1>
                        </li>
                        <li class="toggle-topbar menu-icon">
                            <a href="#"><span>Menu</span></a>
                        </li>
                    </ul>
                    <section class="creative top-bar-section right">
                        <div class="menu-home-menu-container">
                            <ul id="menu-home-menu" class="menu">

                                <li id="menu-item-1521" class=" active_menu color-2">

                                    <a href="index.php" class="has-icon">Home</a>

                                </li>

                                <li id="menu-item-656" class="  color-3">

                                    <a href="about.php?page_id=6" class="has-icon">About Us</a>

                                </li>


                                <li id="menu-item-720" class="has-dropdown not-click  color-5">

                                    <a href="#" class="has-icon">Capabilities</a>

                                    <ul class="sub-menu dropdown ">

                                        <li id="menu-item-12" class=" color-5">
                                            <a href="oil.php?page_id=10" class="has-icon">Oil and Gas</a>
                                        </li>
                                        <li id="menu-item-718" class=" color-5">
                                            <a href="automation.php?page_id=713" class="has-icon">Automation
                                                Agency</a>
                                        </li>
                                        <li id="menu-item-719" class=" color-5">
                                            <a href="building.php?p=307" class="has-icon">Building and
                                                Construction</a>

                                        </li>
                                    </ul>

                                </li>


                                <li id="menu-item-721" class="  color-4">

                                    <a href="service.php?page_id=677" class="has-icon">Services</a>

                                </li>


                                <li id="menu-item-13" class=" color-7">

                                    <a href="contact.php?page_id=8" class="has-icon">Contact</a>

                                </li>



                            </ul>
                        </div>
                    </section>
                    <div class="show-for-large-up creative-social">
                        <ul class="social-icons inline-list">
                            <li class="">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="">
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li class="">
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                        </ul>
                    </div>

                </nav>

            </div>

        </header> <!-- content  -->
        <main class="l-main">
            <div class="main row">
                <article class="large-12 columns">
                    <div class="body field clearfix">
                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                            class="vc_row wpb_row vc_row-fluid">
                            <div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch>
                                <div class="wpb_wrapper">
                                    <div class="wpb_revslider_element wpb_content_element">
                                        <!-- START Home one Slider REVOLUTION SLIDER 6.4.8 -->
                                        <p class="rs-p-wp-fix"></p>
                                        <rs-module-wrap id="rev_slider_3_1_wrapper" data-source="gallery"
                                            style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                                            <rs-module id="rev_slider_3_1" data-version="6.4.8">
                                                <rs-slides>
                                                    <rs-slide data-key="rs-13" data-title="<?php echo $name; ?>"
                                                        data-description="We will help you to reduce your energy consumption."
                                                        data-thumb="wp-content/uploads/revslider/home-one-slider/oil-100x50.jpg"
                                                        data-in="y:(100%);" data-out="y:(-60%);">
                                                        <img src="wp-content/uploads/revslider/home-one-slider/oil.jpg"
                                                            title="Home" class="rev-slidebg tp-rs-img rs-lazyload"
                                                            data-lazyload="wp-content/uploads/revslider/home-one-slider/oil.jpg"
                                                            data-parallax="10" data-no-retina>
                                                        <!--
							-->
                                                        <rs-layer id="slider-3-slide-13-layer-3"
                                                            class="tp-shape tp-shapewrapper" data-type="shape"
                                                            data-rsp_ch="on" data-xy="x:c;y:m;"
                                                            data-text="w:normal;fw:700;" data-dim="w:100%;h:100%;"
                                                            data-basealign="slide" data-frame_0="tp:600;"
                                                            data-frame_1="tp:600;st:1000;sp:1500;"
                                                            data-frame_999="o:0;tp:600;st:9000;sp:1000;"
                                                            style="z-index:5;background-color:rgba(0,0,0,0.35);">
                                                        </rs-layer>
                                                        <!--

							-->
                                                        <rs-layer id="slider-3-slide-13-layer-1" class="Newspaper-Title"
                                                            data-type="text" data-color="rgba(255,255,255,1)"
                                                            data-rsp_ch="on"
                                                            data-xy="xo:50px,50px,50px,30px;yo:239px,135px,105px,130px;"
                                                            data-text="w:normal;s:50,50,50,30;l:55,55,55,35;fw:700,400,400,400;"
                                                            data-dim="w:600px,600px,600px,420px;" data-padding="b:10;"
                                                            data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;"
                                                            data-frame_1="tp:600;st:1000;sp:1500;"
                                                            data-frame_1_mask="u:t;"
                                                            data-frame_999="st:9000;sp:1000;auto:true;"
                                                            data-frame_999_mask="u:t;"
                                                            style="z-index:6;font-family:Montserrat;text-align:left;">
                                                            Overcoming technology challenges: making the most of
                                                            resources
                                                        </rs-layer>
                                                        <!--

							-->
                                                        <rs-layer id="slider-3-slide-13-layer-2"
                                                            class="Newspaper-Subtitle" data-type="text"
                                                            data-color="rgba(255,210,0,1)||rgba(168,216,238,1)||rgba(168,216,238,1)||rgba(168,216,238,1)"
                                                            data-rsp_ch="on"
                                                            data-xy="xo:50px,50px,50px,30px;yo:210px,110px,80px,100px;"
                                                            data-text="s:15;l:20;fw:400,900,900,900;"
                                                            data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;"
                                                            data-frame_1="tp:600;st:1000;sp:1500;"
                                                            data-frame_1_mask="u:t;"
                                                            data-frame_999="st:9000;sp:1000;auto:true;"
                                                            data-frame_999_mask="u:t;"
                                                            style="z-index:7;font-family:Montserrat;text-align:left;">
                                                            <?php echo $name; ?>
                                                        </rs-layer>
                                                        <!--

							-->
                                                        <rs-layer id="slider-3-slide-13-layer-5"
                                                            class="Newspaper-Button rev-btn" data-type="button"
                                                            data-color="rgba(255,255,255,1)"
                                                            data-xy="xo:55px,51px,52px,32px;yo:490px,374px,356px,256px;"
                                                            data-text="s:13;l:17;fw:700;" data-rsp_bd="off"
                                                            data-padding="t:12;r:35;b:12;l:35;"
                                                            data-border="bos:solid;boc:rgba(255,255,255,0.25);bow:1px,1px,1px,1px;bor:4px,4px,4px,4px;"
                                                            data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;"
                                                            data-frame_1="tp:600;st:1000;sp:1500;"
                                                            data-frame_1_mask="u:t;"
                                                            data-frame_999="st:9000;sp:1000;auto:true;"
                                                            data-frame_999_mask="u:t;"
                                                            data-frame_hover="c:#333;bgc:rgba(255,255,255,0.80);boc:rgba(255,255,255,0.25);bor:4px,4px,4px,4px;bos:solid;bow:1px,1px,1px,1px;oX:50;oY:50;e:power1.inOut;"
                                                            style="z-index:8;background-color:rgba(255,210,0,0.80);font-family:Montserrat;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:2px;text-align:left;">
                                                            READ MORE
                                                        </rs-layer>
                                                        <!--

							-->
                                                        <rs-layer id="slider-3-slide-13-layer-6"
                                                            class="Newspaper-Button rev-btn" data-type="button"
                                                            data-color="rgba(255,255,255,1)"
                                                            data-xy="xo:240px,50px,50px,30px;yo:490px,432px,411px,315px;"
                                                            data-text="w:normal,nowrap,nowrap,nowrap;s:13;l:17;fw:700;"
                                                            data-dim="w:186px,auto,auto,auto;h:44px,auto,auto,auto;"
                                                            data-rsp_bd="off" data-padding="t:12;r:35;b:12;l:35;"
                                                            data-border="bos:solid;boc:rgba(255,255,255,0.25);bow:3px,3px,3px,3px;bor:4px,4px,4px,4px;"
                                                            data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;"
                                                            data-frame_1="tp:600;st:1000;sp:1500;"
                                                            data-frame_1_mask="u:t;"
                                                            data-frame_999="st:9000;sp:1000;auto:true;"
                                                            data-frame_999_mask="u:t;"
                                                            data-frame_hover="boc:rgba(255,255,255,0.90);bor:4px,4px,4px,4px;bos:solid;bow:3px,3px,3px,3px;oX:50;oY:50;e:power1.inOut;"
                                                            style="z-index:9;font-family:Montserrat;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:2px;text-align:left;">
                                                            READ MORE
                                                        </rs-layer>
                                                        <!--
-->
                                                    </rs-slide>
                                                    <rs-slide data-key="rs-14" data-title="<?php echo $name; ?>"
                                                        data-description="Save the planet by using renewable energy."
                                                        data-thumb="wp-content/uploads/2016/05/glass-building-100x50.jpg"
                                                        data-in="y:(100%);" data-out="y:(-60%);">
                                                        <img src="wp-content/uploads/revslider/home-one-slider/oil.jpg"
                                                            title="Home" class="rev-slidebg tp-rs-img rs-lazyload"
                                                            data-lazyload="wp-content/uploads/2016/05/glass-building.jpg"
                                                            data-parallax="10" data-no-retina>
                                                        <!--
							-->
                                                        <rs-layer id="slider-3-slide-14-layer-3"
                                                            class="tp-shape tp-shapewrapper" data-type="shape"
                                                            data-rsp_ch="on" data-xy="x:c;y:m;"
                                                            data-text="w:normal;fw:700;" data-dim="w:100%;h:100%;"
                                                            data-basealign="slide" data-frame_0="tp:600;"
                                                            data-frame_1="tp:600;st:1000;sp:1500;"
                                                            data-frame_999="o:0;tp:600;st:w;sp:1000;"
                                                            style="z-index:5;background-color:rgba(0,0,0,0.35);">
                                                        </rs-layer>
                                                        <!--

							-->
                                                        <rs-layer id="slider-3-slide-14-layer-1" class="Newspaper-Title"
                                                            data-type="text" data-color="rgba(255,255,255,1)"
                                                            data-rsp_ch="on"
                                                            data-xy="xo:50px,50px,50px,30px;yo:366px,135px,105px,130px;"
                                                            data-text="w:normal;s:50,50,50,30;l:55,55,55,35;fw:700,400,400,400;"
                                                            data-dim="w:600px,600px,600px,420px;" data-padding="b:10;"
                                                            data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;"
                                                            data-frame_1="tp:600;st:1000;sp:1500;"
                                                            data-frame_1_mask="u:t;"
                                                            data-frame_999="st:w;sp:1000;auto:true;"
                                                            data-frame_999_mask="u:t;"
                                                            style="z-index:6;font-family:Montserrat;text-align:left;">
                                                            Save the planet by using renewable energy.
                                                        </rs-layer>
                                                        <!--

							-->
                                                        <rs-layer id="slider-3-slide-14-layer-2"
                                                            class="Newspaper-Subtitle" data-type="text"
                                                            data-color="rgba(255,210,0,1)||rgba(168,216,238,1)||rgba(168,216,238,1)||rgba(168,216,238,1)"
                                                            data-rsp_ch="on"
                                                            data-xy="xo:50px,50px,50px,30px;yo:340px,110px,80px,100px;"
                                                            data-text="s:15;l:20;fw:900;"
                                                            data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;"
                                                            data-frame_1="tp:600;st:1000;sp:1500;"
                                                            data-frame_1_mask="u:t;"
                                                            data-frame_999="st:w;sp:1000;auto:true;"
                                                            data-frame_999_mask="u:t;"
                                                            style="z-index:7;font-family:Roboto;text-align:left;">
                                                            <?php echo $name; ?>
                                                        </rs-layer>
                                                        <!--

							-->
                                                        <rs-layer id="slider-3-slide-14-layer-5"
                                                            class="Newspaper-Button rev-btn" data-type="button"
                                                            data-color="rgba(255,255,255,1)"
                                                            data-xy="xo:53px,53px,53px,30px;yo:561px,331px,301px,245px;"
                                                            data-text="s:13;l:17;fw:700;" data-rsp_bd="off"
                                                            data-padding="t:12;r:35;b:12;l:35;"
                                                            data-border="bos:solid;boc:rgba(255,255,255,0.25);bow:1px,1px,1px,1px;"
                                                            data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;"
                                                            data-frame_1="tp:600;st:1000;sp:1500;"
                                                            data-frame_1_mask="u:t;"
                                                            data-frame_999="st:w;sp:1000;auto:true;"
                                                            data-frame_999_mask="u:t;"
                                                            data-frame_hover="c:#000;bgc:#fff;boc:#fff;bor:0px,0px,0px,0px;bos:solid;bow:1px,1px,1px,1px;oX:50;oY:50;e:power1.inOut;"
                                                            style="z-index:8;background-color:rgba(255,210,0,0.80);font-family:Roboto;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;letter-spacing:2px;text-align:left;">
                                                            READ MORE
                                                        </rs-layer>
                                                        <!--
-->
                                                    </rs-slide>
                                                </rs-slides>
                                            </rs-module>
                                            <script type="text/javascript">
                                            setREVStartSize({
                                                c: 'rev_slider_3_1',
                                                rl: [1240, 1024, 778, 480],
                                                el: [],
                                                gw: [1240, 1024, 778, 480],
                                                gh: [700, 650, 580, 480],
                                                type: 'standard',
                                                justify: '',
                                                layout: 'fullwidth',
                                                mh: "0"
                                            });
                                            var revapi3,
                                                tpj;

                                            function revinit_revslider31() {
                                                jQuery(function() {
                                                    tpj = jQuery;
                                                    revapi3 = tpj("#rev_slider_3_1");
                                                    if (revapi3 == undefined || revapi3.revolution ==
                                                        undefined) {
                                                        revslider_showDoubleJqueryError("rev_slider_3_1");
                                                    } else {
                                                        revapi3.revolution({
                                                            sliderLayout: "fullwidth",
                                                            visibilityLevels: "1240,1024,778,480",
                                                            gridwidth: "1240,1024,778,480",
                                                            gridheight: "700,650,580,480",
                                                            lazyType: "smart",
                                                            perspectiveType: "local",
                                                            responsiveLevels: "1240,1024,778,480",
                                                            startWithSlide: 1,
                                                            progressBar: {
                                                                disableProgressBar: true
                                                            },
                                                            navigation: {
                                                                mouseScrollNavigation: false,
                                                                onHoverStop: false,
                                                                touch: {
                                                                    touchenabled: true,
                                                                    swipe_min_touches: 50
                                                                },
                                                                arrows: {
                                                                    enable: true,
                                                                    tmp: "<div class=\"tp-title-wrap\">  	<div class=\"tp-arr-imgholder\"></div> </div>",
                                                                    style: "zeus",
                                                                    left: {
                                                                        h_offset: 0
                                                                    },
                                                                    right: {
                                                                        h_offset: 0
                                                                    }
                                                                }
                                                            },
                                                            parallax: {
                                                                levels: [2, 3, 4, 5, 6, 7, 12, 16,
                                                                    10,
                                                                    50, 47, 48, 49, 50, 51, 55
                                                                ],
                                                                type: "mouse",
                                                                origo: "slidercenter",
                                                                speed: 2000
                                                            },
                                                            fanim: {
                                                                in: {
                                                                    "o": 0
                                                                },
                                                                out: {
                                                                    "a": false
                                                                },
                                                                speed: 1500
                                                            },
                                                            fallbacks: {
                                                                allowHTML5AutoPlayOnAndroid: true
                                                            },
                                                        });
                                                    }

                                                });
                                            } // End of RevInitScript
                                            var once_revslider31 = false;
                                            if (document.readyState === "loading") {
                                                document.addEventListener('readystatechange', function() {
                                                    if ((document.readyState === "interactive" || document
                                                            .readyState === "complete") && !
                                                        once_revslider31) {
                                                        once_revslider31 = true;
                                                        revinit_revslider31();
                                                    }
                                                });
                                            } else {
                                                once_revslider31 = true;
                                                revinit_revslider31();
                                            }
                                            </script>
                                            <script>
                                            var htmlDivCss = unescape(
                                                "%23rev_slider_3_1_wrapper%20.zeus.tparrows%20%7B%0A%20%20cursor%3Apointer%3B%0A%20%20min-width%3A70px%3B%0A%20%20min-height%3A70px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20display%3Ablock%3B%0A%20%20z-index%3A1000%3B%0A%20%20border-radius%3A50%25%3B%20%20%20%0A%20%20overflow%3Ahidden%3B%0A%20%20background%3Argba%280%2C0%2C0%2C0.1%29%3B%0A%7D%0A%0A%23rev_slider_3_1_wrapper%20.zeus.tparrows%3Abefore%20%7B%0A%20%20font-family%3A%20%27revicons%27%3B%0A%20%20font-size%3A20px%3B%0A%20%20color%3A%23ffffff%3B%0A%20%20display%3Ablock%3B%0A%20%20line-height%3A%2070px%3B%0A%20%20text-align%3A%20center%3B%20%20%20%20%0A%20%20z-index%3A2%3B%0A%20%20position%3Arelative%3B%0A%7D%0A%23rev_slider_3_1_wrapper%20.zeus.tparrows.tp-leftarrow%3Abefore%20%7B%0A%20%20content%3A%20%27%5Ce824%27%3B%0A%7D%0A%23rev_slider_3_1_wrapper%20.zeus.tparrows.tp-rightarrow%3Abefore%20%7B%0A%20%20content%3A%20%27%5Ce825%27%3B%0A%7D%0A%0A%23rev_slider_3_1_wrapper%20.zeus%20.tp-title-wrap%20%7B%0A%20%20background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20top%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20position%3Aabsolute%3B%0A%20%20opacity%3A0%3B%0A%20%20transform%3Ascale%280%29%3B%0A%20%20-webkit-transform%3Ascale%280%29%3B%0A%20%20%20transition%3A%20all%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20-moz-transition%3Aall%200.3s%3B%0A%20%20%20border-radius%3A50%25%3B%0A%20%7D%0A%23rev_slider_3_1_wrapper%20.zeus%20.tp-arr-imgholder%20%7B%0A%20%20width%3A100%25%3B%0A%20%20height%3A100%25%3B%0A%20%20position%3Aabsolute%3B%0A%20%20top%3A0px%3B%0A%20%20left%3A0px%3B%0A%20%20background-position%3Acenter%20center%3B%0A%20%20background-size%3Acover%3B%0A%20%20border-radius%3A50%25%3B%0A%20%20transform%3Atranslatex%28-100%25%29%3B%0A%20%20-webkit-transform%3Atranslatex%28-100%25%29%3B%0A%20%20%20transition%3A%20all%200.3s%3B%0A%20%20-webkit-transition%3Aall%200.3s%3B%0A%20%20-moz-transition%3Aall%200.3s%3B%0A%0A%20%7D%0A%23rev_slider_3_1_wrapper%20.zeus.tp-rightarrow%20.tp-arr-imgholder%20%7B%0A%20%20%20%20transform%3Atranslatex%28100%25%29%3B%0A%20%20-webkit-transform%3Atranslatex%28100%25%29%3B%0A%20%20%20%20%20%20%7D%0A%23rev_slider_3_1_wrapper%20.zeus.tparrows%3Ahover%20.tp-arr-imgholder%20%7B%0A%20%20transform%3Atranslatex%280%29%3B%0A%20%20-webkit-transform%3Atranslatex%280%29%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%20%20%20%20%20%20%0A%23rev_slider_3_1_wrapper%20.zeus.tparrows%3Ahover%20.tp-title-wrap%20%7B%0A%20%20transform%3Ascale%281%29%3B%0A%20%20-webkit-transform%3Ascale%281%29%3B%0A%20%20opacity%3A1%3B%0A%7D%0A%20%0A"
                                            );
                                            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                            if (htmlDiv) {
                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                            } else {
                                                var htmlDiv = document.createElement('div');
                                                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                document.getElementsByTagName('head')[0].appendChild(htmlDiv
                                                    .childNodes[
                                                        0]);
                                            }
                                            </script>
                                            <script>
                                            var htmlDivCss = unescape("%0A%0A%0A%0A");
                                            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                            if (htmlDiv) {
                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                            } else {
                                                var htmlDiv = document.createElement('div');
                                                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                document.getElementsByTagName('head')[0].appendChild(htmlDiv
                                                    .childNodes[
                                                        0]);
                                            }
                                            </script>
                                        </rs-module-wrap>
                                        <!-- END REVOLUTION SLIDER -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width"></div>
                        <div class="vc_row wpb_row vc_row-fluid vc_custom_1462132343353">
                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_custom_1468855171122"
                                data-equalizer-watch>
                                <div class="wpb_wrapper">



                                    <section class="wd-section-blog text-center style2">
                                        <div class="wd-blog-post test  ">
                                            <img src="wp-content/uploads/2016/01/11.jpg" alt="icon" />
                                            <h4 class="wd-title-element">PETROLEUM ENGINEERING</h4>
                                            <p>
                                                <?php echo $name; ?> is one of the world’s largest international
                                                vertically integrated oil and gas companies with businesses located
                                                worldwide. </p>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_custom_1468854835303"
                                data-equalizer-watch>
                                <div class="wpb_wrapper">



                                    <section class="wd-section-blog text-center style2">
                                        <div class="wd-blog-post test  ">
                                            <img src="wp-content/uploads/2016/01/21.jpg" alt="icon" />
                                            <h4 class="wd-title-element">SOLAR ENERGY</h4>
                                            <p>
                                                We deliver hands-on experience, safety, and technical skills solar
                                                training to scale the workforce that impacts climate change. </p>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_custom_1468854850054"
                                data-equalizer-watch>
                                <div class="wpb_wrapper">



                                    <section class="wd-section-blog text-center style2">
                                        <div class="wd-blog-post test  ">
                                            <img src="wp-content/uploads/2016/01/31.jpg" alt="icon" />
                                            <h4 class="wd-title-element">POWER AND ENERGY</h4>
                                            <p>
                                                Pursuing the highest HSE standards, <?php echo $name; ?> pays great
                                                attention to its relations with the several nations in its supply of
                                                Power and Energy. </p>
                                        </div>
                                    </section>


                                </div>
                            </div>

                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_custom_1468854850054"
                                data-equalizer-watch>
                                <div class="wpb_wrapper">



                                    <section class="wd-section-blog text-center style2">
                                        <div class="wd-blog-post test  ">
                                            <img src="wp-content/uploads/2016/01/41.jpg" alt="icon" />
                                            <h4 class="wd-title-element">BUILDING AND CONSTRUCTION</h4>
                                            <p>
                                                We support companies, for example in cost reduction, managing large
                                                projects, financing/refinancing and doing business sustainably. </p>
                                        </div>
                                    </section>


                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_custom_1468854850054"
                                data-equalizer-watch>
                                <div class="wpb_wrapper">



                                    <section class="wd-section-blog text-center style2">
                                        <div class="wd-blog-post test  ">
                                            <img src="wp-content/uploads/2016/01/51.jpg" alt="icon" />
                                            <h4 class="wd-title-element">HYDRAULICS MACHINE CONTROL SYSTEM</h4>
                                            <p>
                                                <?php echo $name; ?> will provide surface hydraulic control systems
                                                (SHCS) for major oilfield services. </p>
                                        </div>
                                    </section>


                                </div>
                            </div>
                            <div class="wpb_column vc_column_container vc_col-sm-4 vc_custom_1468854850054"
                                data-equalizer-watch>
                                <div class="wpb_wrapper">



                                    <section class="wd-section-blog text-center style2">
                                        <div class="wd-blog-post test  ">
                                            <img src="wp-content/uploads/2016/01/61.jpg" alt="icon" />
                                            <h4 class="wd-title-element">AUTOMATION AGENCY</h4>
                                            <p>
                                                Field-proven automation solutions for control, safety, wellhead,
                                                SCADA,
                                                and metering applications. </p>
                                        </div>
                                    </section>


                                </div>
                            </div>

                        </div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1467215196765" style="color: #ffffff;">
                            <div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch>
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="darker-text wpb_column vc_column_container vc_col-sm-6 vc_custom_1467215521115"
                                            data-equalizer-watch>
                                            <div class="wpb_wrapper">

                                                <div class="">
                                                    <div class="large-12 columns  wd-title-section_l">
                                                        <h2>Our Capabilities!</h2>
                                                        <h5>In <?php echo $name; ?>, we believe in our continuous
                                                            improvement of performances and in customer
                                                            satisfaction.
                                                            Our vision is to become the market leader by providing
                                                            engineered turn-key systems to the Oil&Gas market,
                                                            performance, productivity and efficiency. Our facilities
                                                            are
                                                            equipped with “state – of the art” equipment for
                                                            complete
                                                            design, fabrication and in-house testing.</h5>

                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-6" data-equalizer-watch>
                                            <div class="wpb_wrapper">
                                                <div class="wpb_single_image wpb_content_element vc_align_right">

                                                    <figure class="wpb_wrapper vc_figure">
                                                        <div class="vc_single_image-wrapper   vc_box_border_grey">
                                                            <video width="600" muted="" autoplay="" loop=""
                                                                preload="auto" sizes="(max-width: 391px) 100vw, 391px">
                                                                <source src="wp-content/uploads/oil.mp4"
                                                                    type="video/mp4">
                                                            </video>
                                                            <p>Solutions for Oil & Gas, Power Generation, Petroleum
                                                                Industries World Wide.</p>
                                                        </div>

                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-animation-delay="300"
                            class="vc_row wpb_row vc_row-fluid text-center vc_custom_1463501233785 animation-parent">
                            <div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch>
                                <div class="wpb_wrapper">

                                    <div class="">
                                        <div class="large-12 columns  wd-title-section_c">
                                            <h2>We Provide Energy</h2>
                                            <h5><?php echo $name; ?> offers high-quality products and a wide range
                                                of
                                                services</h5>

                                        </div>
                                    </div>


                                    <div class="vc_row wpb_row vc_inner vc_row-fluid row">
                                        <div class="wpb_column vc_column_container vc_col-sm-3" data-equalizer-watch>
                                            <div class="wpb_wrapper">

                                                <div class="wd-section-text-icon">
                                                    <div class="wd-text-icon-style5  animated  " data-animated=fadeInUp>
                                                        <div class="box-icon">
                                                            <img src="wp-content/uploads/2016/01/icon11.jpg"
                                                                alt="icon" />
                                                        </div>
                                                        <div class="box-description">
                                                            Awesome Employees </a>
                                                        </div>


                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-3" data-equalizer-watch>
                                            <div class="wpb_wrapper">

                                                <div class="wd-section-text-icon">
                                                    <div class="wd-text-icon-style5  animated  " data-animated=fadeInUp>
                                                        <div class="box-icon">
                                                            <img src="wp-content/uploads/2016/01/icon81.jpg"
                                                                alt="icon" />
                                                        </div>
                                                        <div class="box-description">
                                                            Maximum Power </a>
                                                        </div>


                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-3" data-equalizer-watch>
                                            <div class="wpb_wrapper">

                                                <div class="wd-section-text-icon">
                                                    <div class="wd-text-icon-style5  animated  " data-animated=fadeInUp>
                                                        <div class="box-icon">
                                                            <img src="wp-content/uploads/2016/01/icon71.jpg"
                                                                alt="icon" />
                                                        </div>
                                                        <div class="box-description">
                                                            Oil Resources </a>
                                                        </div>


                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-3" data-equalizer-watch>
                                            <div class="wpb_wrapper">

                                                <div class="wd-section-text-icon">
                                                    <div class="wd-text-icon-style5  animated  " data-animated=fadeInUp>
                                                        <div class="box-icon">
                                                            <img src="wp-content/uploads/2016/01/icon61.jpg"
                                                                alt="icon" />
                                                        </div>
                                                        <div class="box-description">
                                                            Continues Development </a>
                                                        </div>


                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid row vc_custom_1451926431099">
                                        <div class="wpb_column vc_column_container vc_col-sm-3" data-equalizer-watch>
                                            <div class="wpb_wrapper">

                                                <div class="wd-section-text-icon">
                                                    <div class="wd-text-icon-style5  animated  " data-animated=fadeInUp>
                                                        <div class="box-icon">
                                                            <img src="wp-content/uploads/2016/01/icon51.jpg"
                                                                alt="icon" />
                                                        </div>
                                                        <div class="box-description">
                                                            Chemical Analysis </a>
                                                        </div>


                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-3" data-equalizer-watch>
                                            <div class="wpb_wrapper">

                                                <div class="wd-section-text-icon">
                                                    <div class="wd-text-icon-style5  animated  " data-animated=fadeInUp>
                                                        <div class="box-icon">
                                                            <img src="wp-content/uploads/2016/01/icon41.jpg"
                                                                alt="icon" />
                                                        </div>
                                                        <div class="box-description">
                                                            We Fight Polution </a>
                                                        </div>


                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-3" data-equalizer-watch>
                                            <div class="wpb_wrapper">

                                                <div class="wd-section-text-icon">
                                                    <div class="wd-text-icon-style5  animated  " data-animated=fadeInUp>
                                                        <div class="box-icon">
                                                            <img src="wp-content/uploads/2016/01/icon31.jpg"
                                                                alt="icon" />
                                                        </div>
                                                        <div class="box-description">
                                                            We Think About The Consumer </a>
                                                        </div>


                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-3" data-equalizer-watch>
                                            <div class="wpb_wrapper">

                                                <div class="wd-section-text-icon">
                                                    <div class="wd-text-icon-style5  animated  " data-animated=fadeInUp>
                                                        <div class="box-icon">
                                                            <img src="wp-content/uploads/2016/01/icon9.jpg"
                                                                alt="icon" />
                                                        </div>
                                                        <div class="box-description">
                                                            We Care About Environment </a>
                                                        </div>


                                                    </div>
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="vc_row-full-width"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1464105694792">
                            <div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch>
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid">
                                        <div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch>
                                            <div class="wpb_wrapper">
                                                <div
                                                    class="wpb_raw_code wpb_content_element wpb_raw_html content-highlited">
                                                    <div class="wpb_wrapper">
                                                        <h3><span class="quote">“</span>
                                                            <?php echo $name; ?> has cutting-edge conversion and
                                                            reforming capacities, and produce a wide range of high
                                                            quality petroleum / energy products.
                                                            <span class="quote">”</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="vc_row-full-width"></div>




                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                            data-animation-delay="300"
                            class="vc_row wpb_row vc_row-fluid vc_custom_1468961382681 animation-parent">
                            <div class="wpb_column vc_column_container vc_col-sm-12" data-equalizer-watch>
                                <div class="wpb_wrapper">
                                    <div class="vc_row wpb_row vc_inner vc_row-fluid row">
                                        <div class="wpb_column vc_column_container vc_col-sm-2" data-equalizer-watch>
                                            <div class="wpb_wrapper"></div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-8" data-equalizer-watch>
                                            <div class="wpb_wrapper">

                                                <div class="wd_empty_space" data-heightmobile="20"
                                                    data-heighttablet="30" data-heightdesktop="40">

                                                </div>






                                                <div role="form" class="wpcf7" id="wpcf7-f976-p883-o1" lang="en-US"
                                                    dir="ltr">
                                                    <div class="screen-reader-response">
                                                        <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                        <ul></ul>
                                                    </div>
                                                    <form action="#wpcf7-f976-p883-o1" method="post"
                                                        class="wpcf7-form init" novalidate="novalidate"
                                                        data-status="init">
                                                        <div style="display: none;">
                                                            <input type="hidden" name="_wpcf7" value="976" />
                                                            <input type="hidden" name="_wpcf7_version" value="5.4.2" />
                                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                            <input type="hidden" name="_wpcf7_unit_tag"
                                                                value="wpcf7-f976-p883-o1" />
                                                            <input type="hidden" name="_wpcf7_container_post"
                                                                value="883" />
                                                            <input type="hidden" name="_wpcf7_posted_data_hash"
                                                                value="" />
                                                        </div>
                                                        <div class="row">
                                                            <div class="large-12 columns  wd-title-section_c"
                                                                style="margin-bottom: 30px;">
                                                                <h2>Get Latest Offers</h2>
                                                                <h5>Sign up for newsletters.</h5>
                                                            </div>
                                                            <div class="large-4 columns"> <span
                                                                    class="wpcf7-form-control-wrap your-name"><input
                                                                        type="text" name="your-name" value="" size="40"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Your Name" /></span> </div>
                                                            <div class="large-4 columns"> <span
                                                                    class="wpcf7-form-control-wrap your-email"><input
                                                                        type="email" name="your-email" value=""
                                                                        size="40"
                                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email"
                                                                        aria-required="true" aria-invalid="false"
                                                                        placeholder="Your Email" /></span> </div>
                                                            <div class="large-4 columns"><input type="submit"
                                                                    value="Subscribe"
                                                                    class="wpcf7-form-control wpcf7-submit button alert small radius" />
                                                            </div>
                                                        </div>
                                                        <div class="wpcf7-response-output" aria-hidden="true"></div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wpb_column vc_column_container vc_col-sm-2" data-equalizer-watch>
                                            <div class="wpb_wrapper"></div>
                                        </div>
                                    </div>
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