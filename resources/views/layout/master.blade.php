<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pix-placewise.vercel.app/home-6.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Feb 2024 16:39:09 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="landing page starter kit">
  <meta name="keywords" content="bootstrap 5, saas, landing page">
  <meta name="author" content="asaduzzaman">
  <title>شركة معالم للسياحة - الرئيسية</title>
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400&display=swap" rel="stylesheet">
  <!-- End fonts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('assets/css/fonts/material-icon.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/fonts/fontawesome.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/fonts/ff-1.css')}}">
  <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/png">
  <link rel="stylesheet" href="{{asset('assets/leftlet/leaflet.css')}}" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="">
  <link rel="stylesheet" href="{{asset('assets/css/plugins.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
  <style>
    a:hover{
      text-decoration: none !important;
    }
  </style>
  @yield('css')
</head>

<body>


  <!-- preloader -->
  <div class="preloader d-none">
    <div class="preloader__img">
      <img src="{{asset('assets/img/favicon.png')}}" alt="image">
    </div>
  </div>
  <!-- preloader End -->

  @include('layout.header')

 @yield('content')

  @include('layout.footer')
  <!-- scrpts -->
  <script src="{{asset('assets/leftlet/leaflet.js')}}" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
  <script src="{{asset('assets/js/plugins.js')}}"></script>
  <script src="{{asset('assets/js/app.js')}}"></script>
  <script>
    window.onload = function() {
        // Get today's date in the format yyyy-mm-dd
        var today = new Date().toISOString().split('T')[0];
        
        // Select all input elements of type date
        var dateInputs = document.querySelectorAll('input[type="date"]');
        
        // Loop through each input element and set its value to today's date
        dateInputs.forEach(function(input) {
            input.value = today;
        });
    };
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>


</html>