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
        <link href="../../../landing-page/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.html">Trixie’s Café</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                         <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('welcome')}}">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{route('page.about')}}">About</a></li>
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
       <!-- Coffees & Teas Section -->
<!-- Coffees & Teas Section -->
<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex ms-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">Brewed with Love</span>
            <span class="section-heading-lower">Our Coffees & Teas</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
        src="../../../landing-page/assets/img/products/1.jpg"
        alt="Signature coffees and teas at Trixie’s Café" />
      <div class="product-item-description d-flex me-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">
            Every cup at Trixie’s Café is brewed with care and heart. From our smooth house blend,
            creamy lattes, and rich cappuccinos to refreshing iced teas and local favorites like
            Calamansi or Pandan Tea there’s always something warm (or cold!) waiting for you.
            Each sip is a taste of our passion for good coffee and genuine connection.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bakery & Kitchen Section -->
<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex me-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">Freshly Baked, Always Delicious</span>
            <span class="section-heading-lower">Bakery & Kitchen</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
        src="../../../landing-page/assets/img/products/2.jpg"
        alt="Fresh baked goods and hearty meals at Trixie’s Café" />
      <div class="product-item-description d-flex ms-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">
            Start your day with our soft pastries — ensaymada, cheese rolls, croissants or enjoy
            a satisfying meal like our all day silogs, sandwiches, and pasta. At Trixie’s Café,
            everything is made fresh with ingredients from local farmers and trusted suppliers.
            It’s our way of serving you goodness in every bite.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bulk Specialty Blends Section -->
<section class="page-section">
  <div class="container">
    <div class="product-item">
      <div class="product-item-title d-flex">
        <div class="bg-faded p-5 d-flex ms-auto rounded">
          <h2 class="section-heading mb-0">
            <span class="section-heading-upper">Take Us Home</span>
            <span class="section-heading-lower">Specialty Beans & Blends</span>
          </h2>
        </div>
      </div>
      <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0"
        src="../../../landing-page/assets/img/products/3.jpg"
        alt="Bulk specialty coffee blends at Trixie’s Café" />
      <div class="product-item-description d-flex me-auto">
        <div class="bg-faded p-5 rounded">
          <p class="mb-0">
            Love our coffee? Take the experience home! We offer our signature blends in small
            bags or bulk perfect for brewing your favorite cup any time. Our beans are responsibly
            sourced from local growers and trusted coffee regions worldwide. Visit Trixie’s Café to
            choose your blend, ask for tips, and bring the magic home.
          </p>
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
