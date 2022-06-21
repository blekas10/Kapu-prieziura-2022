<footer class="footer-copy full-view-footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <p>
          Visos teisės saugomos
        </p>
      </div>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- owl carousel js -->
<script src="js/owl.carousel.min.js"></script>
<!-- magnific-popup -->
<script src="js/jquery.fancybox.min.js"></script>

<!-- scrollIt js -->
<script src="js/scrollIt.min.js"></script>

<!-- isotope.pkgd.min js -->
<script src="js/isotope.pkgd.min.js"></script>
<script>
  $(window).on("scroll", function() {
    var bodyScroll = $(window).scrollTop(),
      navbar = $(".navbar");

    if (bodyScroll > 130) {
      navbar.addClass("nav-scroll");
      $(".navbar-logo img").attr("src", "images/logo-black.png");
    } else {
      navbar.removeClass("nav-scroll");
      $(".navbar-logo img").attr("src", "images/logo-black.png");
    }
  });

  $(window).on("load", function() {
    var bodyScroll = $(window).scrollTop(),
      navbar = $(".navbar");

    if (bodyScroll > 130) {
      navbar.addClass("nav-scroll");
      $(".navbar-logo img").attr("src", "images/logo-black.png");
    } else {
      navbar.removeClass("nav-scroll");
      $(".navbar-logo img").attr("src", "images/logo-white.png");
    }

    /* smooth scroll
  -------------------------------------------------------*/
    $.scrollIt({
      easing: "swing", // the easing function for animation
      scrollTime: 900, // how long (in ms) the animation takes
      activeClass: "active", // class given to the active nav element
      onPageChange: null, // function(pageIndex) that is called when page is changed
      topOffset: -63,
    });

    /* isotope
-------------------------------------------------------*/
    var $gallery = $(".gallery").isotope({});
    $(".gallery").isotope({
      // options
      itemSelector: ".item-img",
      transitionDuration: "0.5s",
    });

    $(".gallery .single-image").fancybox({
      transitionIn: "elastic",
      transitionOut: "elastic",
      speedIn: 600,
      speedOut: 200,
      overlayShow: false,
    });

    /* filter items on button click
-------------------------------------------------------*/
    $(".filtering").on("click", "button", function() {
      var filterValue = $(this).attr("data-filter");

      $gallery.isotope({
        filter: filterValue
      });
    });

    $(".filtering").on("click", "button", function() {
      $(this).addClass("active").siblings().removeClass("active");
    });
  });

  $(function() {
    $(".cover-bg").each(function() {
      var attr = $(this).attr("data-image-src");

      if (typeof attr !== typeof undefined && attr !== false) {
        $(this).css("background-image", "url(" + attr + ")");
      }
    });

    /* sections background color from data background
  -------------------------------------------------------*/
    $("[data-background-color]").each(function() {
      $(this).css(
        "background-color",
        $(this).attr("data-background-color")
      );
    });

    /* Owl Caroursel testimonial
  -------------------------------------------------------*/

    $(".testimonials .owl-carousel").owlCarousel({
      loop: true,
      autoplay: true,
      items: 1,
      margin: 30,
      dots: true,
      nav: false,
    });
  });
  /* Owl Caroursel services
  -------------------------------------------------------*/

  $(".services .owl-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    margin: 30,
    dots: true,
    autoplayTimeout: 3000,
    nav: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      }
    }
  });
  $(".new.owl-carousel").owlCarousel({
    loop: true,
    autoplay: true,
    margin: 30,
    dots: true,
    nav: false,
    autoplayTimeout: 3000,
    responsive: {
      0: {
        items: 1
      }
    }

  });
</script>
</body>

</html>