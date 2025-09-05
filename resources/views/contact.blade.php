<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Trixie’s Café</title>
        <link rel="icon" type="image/x-icon" href="../../../landing-page/assets/favicon.ico" />

        <link href="../../../landing-page/assets/logooo.png" rel="icon">
        <link href="../../../landing-page/img/apple-touch-icon.png" rel="apple-touch-icon">

        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../../../landing-page/css/styles.css" rel="stylesheet" />
    </head>
    <body>
      <header>
  <h1 class="site-heading text-center text-faded d-none d-lg-block">
    <span class="site-heading-upper text-primary mb-3">Your Daily Cup of Warmth & Good Vibes</span>
    <span class="site-heading-lower">Trixie’s Café</span>
  </h1>
</header>

      <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
    <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Trixie’s Café</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('welcome')}}">Home</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('page.about')}}">About Us</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('page.menu')}}">Menu</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('page.products')}}">Products</a></li>
          <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('page.storage')}}">Store</a></li>
        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('page.contact')}}">Contact</a></li>
        <li  class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
        <form action="{{route('logout')}}" id="logout-form" method="POST">@csrf</form>
      </ul>
    </div>
  </div>
</nav>

<!-- Intro Section -->
<!-- Contact Us Section -->
<section class="page-section contact">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-heading mb-4">
        <span class="section-heading-upper">Get In Touch</span>
        <span class="section-heading-lower">Contact Trixie’s Café</span>
      </h2>
      <p class="lead mb-0">We’d love to hear from you! Drop us a message below or give us a call your next cup is waiting!</p>
    </div>
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <form>
          <div class="form-group mb-3">
            <input type="text" class="form-control" placeholder="Your Name *" required>
          </div>
          <div class="form-group mb-3">
            <input type="email" class="form-control" placeholder="Your Email *" required>
          </div>
          <div class="form-group mb-3">
            <textarea class="form-control" rows="5" placeholder="Your Message *" required></textarea>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary btn-xl">Send Message</button>
          </div>
        </form>
      </div>
    </div>
    <div class="text-center mt-5">
      <p class="mb-1"><strong>Visit Us:</strong> Villarreal St. Catalina, Bayawan City Negros Oriental</p>
      <p class="mb-1"><strong>Call:</strong>09811791540</p>
      <p><strong>Email:</strong> hello@trixiescafe.com</p>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="page-section cta">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="cta-inner bg-faded text-center rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Our Promise</span>
            <span class="section-heading-lower">To You</span>
          </h2>
          <p class="mb-0">At Trixie’s Café, you’re family. We promise friendly service, a warm atmosphere, and delicious coffee made with only the best ingredients. Not happy? Let us make it right your satisfaction is our priority!</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="footer text-faded text-center py-5">
  <div class="container">
    <p class="m-0 small">&copy; Trixie’s Café 2025</p>
  </div>
</footer>

<!-- Bootstrap core JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS -->
<script src="js/scripts.js"></script>
