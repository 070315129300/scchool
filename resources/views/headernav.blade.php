<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School</title>
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> -->
     
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <!-- <script   type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script> -->
    <script   type="text/javascript" src="bootstrap/js/bootstrap.bundle.min.js"></script>
     <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">
</head>

@include('styles')

<body>

<div class="container-fliud">
    <div class='row' style="background-color: blue;">
        <div class='col-4'>
            <img src="images/tel.png" alt="" width="30px" style="margin-left: 20%;"> +234-7031512930 
        
            <img src="images/map.jpg" alt="" width='30px'> 57 Popoola street shomolu lagos
        </div>
        <div class="col-4 col-md-"></div>
        <div class='col-2 col-md-'>
            <img src="{{asset('images/facebook.png')}}" width="30px" alt="facebook logo"> 
            <img src="images/instagram.png" width="30px" alt="instagram logo"> 
            <img src="images/twitter.png" width="30px" alt="twitter logo"> 
           <img src="images/thumbsup.png" width="30px" alt="facebook logo"> 
            <img src="images/youtube.jfif" width='30px' alt="youtube">
        </div>
    </div>
    <div class="row">
        <div class="col"> 
<nav class="navbar navbar-expand-lg bg-dark ">
  <div class="container-fluid">
     <h3 style="color: blue;">School</h3> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">ok</span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" href="/">Home</a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('/about')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/primary">Primary</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="/secondary">Secondary</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="/admission">Admission</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
      </ul>
     
    </div>
  </div>
</nav>
        </div>
    </div>




</div>   