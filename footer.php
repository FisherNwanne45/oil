<section class="wd-footer">

    <div class="row animation-parent" data-animation-delay="180">


        <ul class="block large-4 medium-4 columns animated fadeInRight">

            <li>
                <div class="textwidget">
                    <div class="widget-logo">
                        <img alt="logo" src="wp-content/uploads/2016/05/logo1.png"></p>
                        <p><?php echo $name; ?> provides a range of petroleum engineering services focusing
                            primarily on stimulation design and operations and Production Technology related
                            projects. </p>
                        </p>
                    </div>
                </div>
            </li>
        </ul>

        <ul class="block large-4 medium-4 columns animated fadeInRight">

            <li>
                <h2 class="block-title">Get in Touch</h2>
                <div class="textwidget">
                    <section class="widget-info">

                        <ul>
                            <li>
                                <span><span>Phone:</span><?php echo $phone; ?></span>
                            </li>

                            <li>
                                <span><span>Email:</span><?php echo $email; ?></span>
                            </li>
                            <li>
                                <span><span>Address:</span> <?php echo $addr; ?></span>
                            </li>
                        </ul>
                    </section>
                </div>
            </li>
        </ul>





        <ul class="block large-4 medium-4 columns animated fadeInRight">

            <li>
                <h2 class="block-title">Newsletter</h2>
                <div class="textwidget">
                    <div class="wd-newsletter">
                        Sign up your newsletter

                        <div>
                            <input type="text" class="email-adress" placeholder="EMAIL ADRESS" size="20" value=""
                                name="email-adress">
                            <input type="submit" class="newslettersubmit" value="GO">
                            <ul class="inline-list">
                                <li class="flickr">
                                    <a href="https://www.flickr.com"><i class="fa fa-flickr"></i></a>
                                </li>
                                <li class="facebook">
                                    <a href="https://www.facebook.com/<?php echo $name; ?>"><i
                                            class="fa fa-facebook"></i></a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com/<?php echo $name; ?>"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="vimeo">
                                    <a href="https://vimeo.com/<?php echo $name; ?>"><i
                                            class="fa fa-vimeo-square"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>




    </div>

</section>

<!--/.footer-columns-->



<!--.l-footer-->

<footer class="wd-copyright">

    <div class="row">

        <div class="large-12 columns">

            <div class="copyright-menu">
                <ul id="menu-footer-menu" class="menu">
                    <li id="menu-item-966"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-883 current_page_item menu-item-966">
                        <a href="index.php" aria-current="page">Home</a>
                    </li>
                    <li id="menu-item-967"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-967"><a
                            href="about.php?page_id=6">About Us</a></li>
                    <li id="menu-item-968"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-968"><a
                            href="service.php?page_id=10">Services</a></li>
                    <li id="menu-item-969"
                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-969"><a
                            href="contact.php?page_id=8">Contact</a></li>
                </ul>
            </div>


        </div>

        <div class="copyright large-12 columns">


            <p>

                © 2022 Petroleum All rights reserved.
            </p>

        </div>

    </div>
    <!-- Move to Top Button -->
    <button id="toTopBtn" title="Go to top">↑</button>
    <style>
    #toTopBtn {
        position: fixed;
        bottom: 30px;
        right: 30px;
        z-index: 100;
        background-color: #ffba00;
        color: white;
        border: none;
        border-radius: 50%;
        padding: 12px 16px;
        font-size: 18px;
        cursor: pointer;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.3s ease;
    }

    #toTopBtn.show {
        opacity: 1;
        pointer-events: auto;
    }
    </style>
</footer>
<script>
const toTopBtn = document.getElementById("toTopBtn");

window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
        toTopBtn.classList.add("show");
    } else {
        toTopBtn.classList.remove("show");
    }
});

toTopBtn.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
</script>

<!--/.footer-->

<?php echo $tawk; ?>

<!--/.page -->



<script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script type="text/html" id="wpb-modifications"></script>
<link href="https://fonts.googleapis.com/css?family=Montserrat:700%2C400%2C900%7CRoboto:900%2C700" rel="stylesheet"
    property="stylesheet" media="all" type="text/css">

<script type="text/javascript">
(function() {
    var c = document.body.className;
    c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
    document.body.className = c;
})();
</script>
<script type="text/javascript">
if (typeof revslider_showDoubleJqueryError === "undefined") {
    function revslider_showDoubleJqueryError(sliderID) {
        var err = "<div class='rs_error_message_box'>";
        err += "<div class='rs_error_message_oops'>Oops...</div>";
        err += "<div class='rs_error_message_content'>";
        err +=
            "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
        err +=
            "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
        err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
        err += "</div>";
        err += "</div>";
        var slider = document.getElementById(sliderID);
        slider.innerHTML = err;
        slider.style.display = "block";
    }
}
</script>
<script type='text/javascript' src='wp-includes/js/dist/vendor/regenerator-runtime.minb36a.js?ver=0.13.7'
    id='regenerator-runtime-js'></script>
<script type='text/javascript' src='wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'>
</script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {
    "api": {
        "root": "http:\/\/themes.webdevia.com\/petroleum-gas\/index.php?rest_route=\/",
        "namespace": "contact-form-7\/v1"
    }
};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/index7661.js?ver=5.4.2'
    id='contact-form-7-js'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min6b25.js?ver=2.1.4'
    id='js-cookie-js'>
</script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {
    "ajax_url": "\/petroleum-gas\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/petroleum-gas\/?wc-ajax=%%endpoint%%"
};
/* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min7e15.js?ver=5.5.4'
    id='woocommerce-js'>
</script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {
    "ajax_url": "\/petroleum-gas\/wp-admin\/admin-ajax.php",
    "wc_ajax_url": "\/petroleum-gas\/?wc-ajax=%%endpoint%%",
    "cart_hash_key": "wc_cart_hash_0f9c13794aade0814f60b3922edcc587",
    "fragment_name": "wc_fragments_0f9c13794aade0814f60b3922edcc587",
    "request_timeout": "5000"
};
/* ]]> */
</script>
<script type='text/javascript'
    src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min7e15.js?ver=5.5.4'
    id='wc-cart-fragments-js'></script>
<script type='text/javascript'
    src='wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.minbdeb.js?ver=6.7.0'
    id='isotope-js'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.min69c8.js?ver=5.8.4' id='wp-embed-js'></script>
<script type='text/javascript'
    src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.minbdeb.js?ver=6.7.0'
    id='wpb_composer_front_js-js'></script>
<script type='text/javascript'
    src='wp-content/plugins/js_composer/assets/lib/bower/skrollr/dist/skrollr.minbdeb.js?ver=6.7.0'
    id='vc_jquery_skrollr_js-js'></script>

</body>


<!-- Mirrored from themes.webdevia.com/petroleum-gas/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 15 Jul 2022 17:52:10 GMT -->

</html>