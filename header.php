

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Hurricane&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
   $(document).ready(function() {
      // Slider 1
      $("#slider-1-carousal").owlCarousel({
         items: 1,
         margin: 4,
         loop: true,
         autoplay: false,
         autoplayTimeout: 2000,
         autoplayHoverPause: false,
         responsive: {
            0: { 
              items: 1,
               nav: true 
            },
            700: {
               items: 2,
                nav: true
               },
            1000: {
               items: 4,
                nav: true 
              }
         }
      });

      // Slider 2
      $("#slider-2-news").owlCarousel({
         items: 1,
         loop: true,
         margin: 5,
         autoplay: false,
         autoplayTimeout: 3000,
         autoplayHoverPause: false,
         responsive: {
            0: { items: 1, nav: true },
            700: { items: 2, nav: true },
            1000: { items: 3, nav: true }
         }
      });

      // Slider 3
      $("#slider-3-hero1").owlCarousel({
         items: 1,
         loop: true,
         margin: 5,
         autoplay: true,
         autoplayTimeout: 3500,
         autoplayHoverPause: false,
         responsive: {
            0: { items: 1, nav: true },
            700: { items: 1, nav: true },
            1000: { items: 1, nav: true }
         }
      });

      // Slider 4
      $("#slider-4-exp").owlCarousel({
         items: 1,
         loop: true,
         margin: 5,
         autoplay: false,
         autoplayTimeout: 3000,
         autoplayHoverPause: false,
         responsive: {
            0: { items: 2, nav: true },
            700: { items: 3, nav: true },
            1000: { items: 3, nav: true }
         }
      });

      // Slider 5
      $("#slider-5-product").owlCarousel({
         items: 1,
         loop: true,
         margin: 5,
         autoplay: true,
         autoplayTimeout: 3000,
         autoplayHoverPause: false,
         responsive: {
            0: { items: 2, nav: true },
            700: { items: 3, nav: true },
            1000: { items: 4, nav: true }
         }
      });

      // Slider 6
      $("#slider-6-product").owlCarousel({
         items: 1,
         loop: true,
         margin: 5,
         autoplay: false,
         autoplayTimeout: 3000,
         autoplayHoverPause: false,
         responsive: {
            0: { items: 1, nav: true },
            700: { items: 1, nav: true },
            1000: { items: 1, nav: true }
         }
      });
   });
</script>



    <title>Hello, world!</title>
    <?php wp_head(); ?>
  </head>
  <body  <?php body_class(); ?>>
   
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
   
  </body>
</html>