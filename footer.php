<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Papes
 */

?>

<div class="footer wf-section">
  <div class="mw-1260 w-container">
    <div class="footer-pl">
      <a href="https://www.pepes.co.uk" class="footer-logo-link w-inline-block"><img
          src="images/pepes-logo-secondary.svg" loading="lazy" alt="" class="image-12"></a>
    </div>
    <div class="footer-pr">
      <div class="f-pr-top">
        <ul role="list" class="footer-menu w-list-unstyled">
          <li class="footer-menu-item"><a class="footer-menu-link" href="https://www.pepes.co.uk/franchising">
              Franchising</a></li>
          <li class="footer-menu-item"><a class="footer-menu-link"
              href="https://www.pepes.co.uk/nutritions-allergens">Nutrition and Allergens</a></li>
          <li class="footer-menu-item"><a class="footer-menu-link" href="https://www.pepes.co.uk/pepes-news">What's
              New</a></li>
          <li class="footer-menu-item"><a class="footer-menu-link" href="https://www.pepes.co.uk/job-vacancies">Jobs</a>
          </li>
          <li class="footer-menu-item"><a class="footer-menu-link" href="https://www.pepes.co.uk/contact-us">Contact
              Us</a></li>
        </ul>
        <ul role="list" class="footer-soc-list w-list-unstyled">
          <li class="footer-soc-item">
            <a target="_blank" href="https://www.tiktok.com/@pepespiripiri" class="footer-soc-link"><i
                class="fa-brands fa-tiktok"></i></a>
          </li>
          <li class="footer-soc-item">
            <a target="_blank" href="https://www.facebook.com/pepespiripiri" class="footer-soc-link"><i
                class="fa-brands fa-facebook-f"></i></a>
          </li>
          <li class="footer-soc-item">
            <a target="_blank" href="https://www.instagram.com/pepespiripiri/" class="footer-soc-link"><i
                class="fa-brands fa-instagram"></i></a>
          </li>
        </ul>
      </div>
      <div class="f-pr-bottom">
        <div class="mw-400" style="width: 100%;">
          <h3 class="footer-subscribe-heading">Become a Pepe’s Fan</h3>
          <div class="subscribe-form w-form">
            <form id="email-form" name="email-form" data-name="Email Form" method="get"
              class="subscribe-form-container">
              <div class="subscribe-input-container">
                <input type="text" id="email_footer" class="input-default w-input" maxlength="256" name="email_footer"
                  data-name="Email 2" placeholder="Enter your email address" id="email-2" required="">
                <input type="submit" onClick="EmailValidationHeader('footer'); return false;" value="Join"
                  data-wait="Please wait..." class="submit-button w-button">
              </div>
            </form>
            <div class="w-form-done" id="successMSG_footer">
              <div style="font-size: 14px; text-align: left;">Thank you for subscribing to our Fan mail</div>
            </div>
            <div class="w-form-fail" id="errorMSG_footer">
              <div style="font-size: 14px; text-align: left;">Oops! Something went wrong while submitting the form.
              </div>
            </div>
          </div>
          <p class="mt-10 text-white fz-11">By joining you agree to our <a href="https://www.pepes.co.uk/privacy-policy"
              class="text-white">privacy policy</a>
            <!--              and <a href="--><!--" class="text-white">terms and conditions</a>-->
          </p>
        </div>
        <div class="div-block-13">
          <ul role="list" class="footer-soc-list-mobile w-list-unstyled">
            <li class="footer-soc-item">
              <a target="_blank" href="https://www.tiktok.com/@pepespiripiri" class="footer-soc-link"><i
                  class="fa-brands fa-tiktok"></i></a>
            </li>
            <li class="footer-soc-item">
              <a target="_blank" href="https://www.facebook.com/pepespiripiri" class="footer-soc-link"><i
                  class="fa-brands fa-facebook-f"></i></a>
            </li>
            <li class="footer-soc-item">
              <a target="_blank" href="https://www.instagram.com/pepespiripiri/" class="footer-soc-link"><i
                  class="fa-brands fa-instagram"></i></a>
            </li>
          </ul>
          <h4 class="fz-16 text-yellow text-end">Download the Pepe’s App</h4>
          <div class="d-flex justify-content-end">
            <a href="https://apps.apple.com/gb/app/pepes/id6444842080" target="_blank"
              class="app-link w-inline-block"><img src="images/download-on-the-app-store-badge-us-uk-blk-092917.svg"
                loading="lazy" alt=""></a>
            <a href="https://play.google.com/store/apps/details?id=com.threespos.sales.apps.loyalty.pepe"
              target="_blank" class="app-link w-inline-block"><img src="images/play-store.svg" loading="lazy"
                alt=""></a>
          </div>
          <div>
            <ul role="list" class="copyrights d-flex w-list-unstyled" style="">
              <li class="list-item-4">
                <p class="m-0 ml-10 fz-12">
                  <a href="https://www.pepes.co.uk/privacy-policy" class="fz-12 text-white">Privacy Policy</a>
                </p>
              </li>
              <li style="display: none">
                <p class="m-0 fz-12">
                  <a href="https://www.pepes.co.uk/terms-conditions" class="fz-12 text-white">Terms and Conditions</a>
                </p>
              </li>
              <li class="list-item-3">
                <p class="m-0 p-0 fz-12">© Copyright Pepe&#x27;s Piri Piri</p>
                <p class="m-0 p-0 fz-12" style="font-size: 10px; margin-top: 13px; text-transform: capitalize;">Site
                  Credit: <a href="https://www.thedesignfactory.co.uk/" target="_blank" style="color: inherit;">The
                    Design Factory</a></p>
              </li>
            </ul>
            <style type="text/css">
              @media (min-width: 768px) {
                .copyrights.d-flex.w-list-unstyled {
                  align-items: flex-start;
                }

              }

              .list-item-3 {
                text-align: end;
              }

              @media (max-width: 767px) {
                .list-item-3 {
                  text-align: center;
                  margin-right: 0;
                }

                .m-0.p-0.fz-12 {
                  margin-left: 0;
                }
              }
            </style>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=639afb250c5a45228bb7b6a4"
  type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
<script src="js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

<script src="https://cdn.scaleflex.it/plugins/js-cloudimage-responsive/latest/js-cloudimage-responsive.min.js"></script>
<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWVS8znIcUWUgzohJo8iq4UQxhK63Qt_c&amp;libraries=places&amp;callback=initPlaces"
  async defer></script>
<script language="javascript" type="text/javascript" src="scripts/ajax.js"></script>
<script>
  const ciResponsive = new window.CIResponsive({
    token: 'cajjhieqsa',
    apiVersion: null
  });
  function c(c) {
    console.log(c);
  }
</script>
<script type="text/javascript">

  // sticky header
  window.onscroll = function () { stickyHeader() };
  var header = document.getElementById("top");

  // Get the offset position of the navbar
  var sticky = header.offsetTop;

  // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function stickyHeader() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }
</script>
<script type="text/javascript" src="js/scripts.js"></script>
<script type="text/javascript" src="js/back-to-top.js"></script>
<script>
  function initialize() {

    var country_code = '';
    country_code = 'uk';
    var input = document.getElementById('searchTextField');
    var options = {};

    if (country_code != '') {
      options = {
        types: ['geocode'],
        fields: ['formatted_address', 'geometry'], // Specify which data to retrieves        }
        componentRestrictions: { country: country_code }
      };
    }

    autocomplete = new google.maps.places.Autocomplete(input, options);
    google.maps.event.addListener(autocomplete,
      "place_changed", function () {
      var place = autocomplete.getPlace(),
        address = place.address_components,
        lat = place.geometry.location.lat(),
        lng = place.geometry.location.lng();
      $('#lat').val(lat);
      $('#lng').val(lng);
      $('#map_stores').html(place.name);

      // localStorage.setItem("lat",$('#lat').val());
      // localStorage.setItem("lng",$('#lng').val());
      // localStorage.setItem("q",$('#searchTextField').val());
      $('#store_search_btn').trigger('click');
    }
    );
  }

  var storeXhr = null;
  function getStores() {
    var lat = $('#lat').val();
    var lng = $('#lng').val();
    var map_stores = $('#searchTextField').val();
    if (lat == '' || lng == '') {
      return false;
    }
    if (storeXhr != null) {
      storeXhr.abort();
    }
    $('#store-list').html('Loading ...');
    storeXhr = $.ajax({
      type: 'POST',
      url: 'ajax_store_list.php',
      data: { lat: lat, lng: lng, loc_name: map_stores },
      success: function (r) {
        $('#store-list').html(r);
        let target = document.querySelector("#store-list");
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });

  }
  function EmailValidationHeader(location) {

    $('#successMSG_' + location).css('display', 'none')
    $('#errorMSG_' + location).css('display', 'none')

    var error = '';
    //document.getElementById("errorMSG_"+location).style.display = 'none';
    //document.getElementById("successMSG_"+location).style.display = 'none';

    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var address = document.getElementById("email_" + location).value;

    if (document.getElementById("email_" + location).value == '') {
      document.getElementById("email_" + location).focus();
      error = 'Please enter your email address.'
      document.getElementById("errorMSG_" + location).innerHTML = error;
      document.getElementById("errorMSG_" + location).style.display = 'block';
      return false;
    } else if (reg.test(address) == false) {
      document.getElementById("email_" + location).focus();
      error = 'Please enter your valid email address.'
      document.getElementById("errorMSG_" + location).innerHTML = error;
      document.getElementById("errorMSG_" + location).style.display = 'block';
      return false;
    }

    document.getElementById("successMSG_" + location).innerHTML = "Please wait...";
    document.getElementById("successMSG_" + location).style.display = 'block';


    var url = "AJAX_NewsLetter.php?email=" + address;
    LoadSimpleContents(url, document.getElementById("successMSG_" + location), location);
    return false;

    return false;
  }
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<meta name="facebook-domain-verification" content="pu0ftiuixalgfx2oeqcye5lmz6droa" />

<!-- Meta Pixel Code -->
<script>
  !function (f, b, e, v, n, t, s) {
    if (f.fbq) return; n = f.fbq = function () {
      n.callMethod ?
      n.callMethod.apply(n, arguments) : n.queue.push(arguments)
    };
    if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
    n.queue = []; t = b.createElement(e); t.async = !0;
    t.src = v; s = b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t, s)
  }(window, document, 'script',
    'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '866895004724164');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=866895004724164&ev=PageView&noscript=1" /></noscript>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!--  slick slider start  -->

<script>
  $(document).ready(function () {
    $('.section-slider .slide-list').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      prevArrow: '<button class="slick-prev slick-arrow slick-disabled" aria-label="Previous" type="button" aria-disabled="true" style="background: transparent; display: inline-flex; width: 40px; height: 40px; align-items: center; justify-content: center; position: absolute; z-index: 2; top: calc(50% - 50px); left: 15px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" style="width: 20px;"><path d="M206.7 464.6l-183.1-191.1C18.22 267.1 16 261.1 16 256s2.219-11.97 6.688-16.59l183.1-191.1c9.152-9.594 24.34-9.906 33.9-.7187c9.625 9.125 9.938 24.37 .7187 33.91L73.24 256l168 175.4c9.219 9.5 8.906 24.78-.7187 33.91C231 474.5 215.8 474.2 206.7 464.6z" fill="#ffffff"></path></svg></button>',
      nextArrow: '<button class="slick-next slick-arrow" aria-label="Next" type="button" style="background: transparent; display: inline-flex; width: 40px; height: 40px; align-items: center; justify-content: center; position: absolute; z-index: 2; top: calc(50% - 50px); right: 15px" aria-disabled="false"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" style="width: 20px;"><path fill="#ffffff" d="M113.3 47.41l183.1 191.1c4.469 4.625 6.688 10.62 6.688 16.59s-2.219 11.97-6.688 16.59l-183.1 191.1c-9.152 9.594-24.34 9.906-33.9 .7187c-9.625-9.125-9.938-24.38-.7187-33.91l168-175.4L78.71 80.6c-9.219-9.5-8.906-24.78 .7187-33.91C88.99 37.5 104.2 37.82 113.3 47.41z" style="width: 20px;"></path></svg></button>',
      dots: true,
      autoplay: true,
      autoplaySpeed: 3000,
      responsive: [{
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 575,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      ]
    });
  });
</script>
<!--  slick slider end  -->
<!--  skew up animation script start  -->
<script src="https://kit.fontawesome.com/b489bf301b.js" crossorigin="anonymous"></script>
<script src="https://unpkg.com/split-type"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
<script>
  let addAnimation = function () {
    $(".skew-up").each(function (index) {
      const text = new SplitType($(this), {
        types: "lines, words",
        lineClass: "word-line"
      });
      let textInstance = $(this);
      let line = textInstance.find(".word-line");
      let word = line.find(".word");
      let tl = gsap.timeline({
        scrollTrigger: {
          trigger: textInstance,
          start: "top 85%",
          end: "top 85%",
          onComplete: function () {
            $(textInstance).removeClass("skew-up");
          }
        }
      });
      tl.set(textInstance, {
        opacity: 1
      }).from(word, {
        y: "100%",
        skewX: "-6",
        duration: 2,
        stagger: 0.1,
        ease: "expo.out"
      });
    });
  };
  addAnimation();
  window.addEventListener("resize", function (event) {
    if ($(window).width() >= 992) {
      addAnimation();
    }
  });
</script>
<!--  skew up animation script end  -->
<?php wp_footer(); ?>
</body>

</html>