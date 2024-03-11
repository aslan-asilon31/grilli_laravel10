<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  @livewireStyles

  <!-- 
    - primary meta tags
  -->
  <title>Grilli - Amazing & Delicious Food</title>
  <meta name="title" content="Grilli - Amazing & Delicious Food">
  <meta name="description" content="">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="{{ asset('frontend/favicon.svg') }}" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="{{ asset('') }}frontend/assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="{{ asset('') }}frontend/assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="{{ asset('') }}frontend/assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="{{ asset('') }}frontend/assets/images/hero-slider-3.jpg">

</head>

<body id="top">

 

  {{ $slot }}


  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="{{asset('frontend/assets/js/script.js') }}"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  @livewireScripts

</body>

</html>