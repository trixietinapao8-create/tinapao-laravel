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
      <!-- Menu Section -->
<section class="page-section menu">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="section-heading mb-4">
        <span class="section-heading-upper">Our Favorites</span>
        <span class="section-heading-lower">Trixie’s Café Menu</span>
      </h2>
      <p class="lead mb-0">Crafted with love, served with warmth. Take a peek at what we’re brewing and baking today!</p>
    </div>

    <div class="row">
      <!-- Menu Item -->
       <h3 class="menu-category mt-5 mb-4 text-center">Coffee & Tea</h3>

      <div class="col-md-6 mb-4">
        <div class="menu-item p-4 bg-faded rounded">
          <h4 class="mb-1">Espresso</h4>
          <p class="mb-2 text-muted">A classic shot of rich, dark coffee.</p>
          <span class="menu-price">₱90</span>
        </div>
      </div>

      <!-- Menu Item -->
      <div class="col-md-6 mb-4">
        <div class="menu-item p-4 bg-faded rounded">
          <h4 class="mb-1">Café Americano</h4>
          <p class="mb-2 text-muted">Espresso diluted with hot water.</p>
          <span class="menu-price">₱100</span>
        </div>
      </div>

      <!-- Menu Item -->
      <div class="col-md-6 mb-4">
        <div class="menu-item p-4 bg-faded rounded">
          <h4 class="mb-1">Café Latte</h4>
          <p class="mb-2 text-muted">Smooth espresso with steamed milk.</p>
          <span class="menu-price">₱130</span>
        </div>
      </div>

      <!-- Menu Item -->
      <div class="col-md-6 mb-4">
        <div class="menu-item p-4 bg-faded rounded">
          <h4 class="mb-1">Caramel Macchiato</h4>
          <p class="mb-2 text-muted">Sweet caramel layered latte</p>
          <span class="menu-price">₱150</span>
        </div>
         </div>

          <!-- Menu Item -->
      <div class="col-md-6 mb-4">
        <div class="menu-item p-4 bg-faded rounded">
          <h4 class="mb-1">Cappuccino</h4>
          <p class="mb-2 text-muted">Espresso, steamed milk & foamed milk</p>
          <span class="menu-price">₱130</span>
        </div>
         </div>

         <!-- Menu Item -->
      <div class="col-md-6 mb-4">
        <div class="menu-item p-4 bg-faded rounded">
          <h4 class="mb-1">Iced Coffee</h4>
          <p class="mb-2 text-muted">Chilled brew, light and refreshing</p>
          <span class="menu-price">₱110</span>
        </div>
         </div>

          <!-- Menu Item -->
      <div class="col-md-6 mb-4">
        <div class="menu-item p-4 bg-faded rounded">
          <h4 class="mb-1">Cold Brew</h4>
          <p class="mb-2 text-muted">Slow steeped for a smooth finish</p>
          <span class="menu-price">₱140</span>
        </div>
         </div>

          <!-- Menu Item -->
      <div class="col-md-6 mb-4">
        <div class="menu-item p-4 bg-faded rounded">
          <h4 class="mb-1">Lemon Iced Tea</h4>
          <p class="mb-2 text-muted">Freshly brewed with a splash of citrus</p>
          <span class="menu-price">₱100</span>
        </div>
         </div>

         <!-- Menu Item -->
      <div class="col-md-6 mb-4">
        <div class="menu-item p-4 bg-faded rounded">
          <h4 class="mb-1">Salabat (Ginger Tea)</h4>
          <p class="mb-2 text-muted">Classic Filipino ginger tea, great hot or iced</p>
          <span class="menu-price">₱90</span>
        </div>
         </div>
        
           <!-- Menu Item -->
      <div class="col-md-6 mb-4">
        <div class="menu-item p-4 bg-faded rounded">
          <h4 class="mb-1">Green Tea</h4>
          <p class="mb-2 text-muted">Lightly brewed, calming and smooth</p>
          <span class="menu-price">₱90</span>
        </div>
         </div>
         
           <!-- Menu Item -->
      <div class="col-md-6 mb-4">
        <div class="menu-item p-4 bg-faded rounded">
          <h4 class="mb-1">Black Tea</h4>
          <p class="mb-2 text-muted">Robust flavor, served hot or cold</p>
          <span class="menu-price">₱90</span>
        </div>
         </div>

           <!-- Menu Item -->
      <div class="col-md-6 mb-4">
        <div class="menu-item p-4 bg-faded rounded">
          <h4 class="mb-1">Milk Tea (Classic Pearl)	</h4>
          <p class="mb-2 text-muted">Local favorite with chewy pearls	</p>
          <span class="menu-price">₱120</span>
        </div>
         </div>

           <!-- Menu Item -->
      <div class="col-md-6 mb-4">
        <div class="menu-item p-4 bg-faded rounded">
          <h4 class="mb-1">Herbal Tea</h4>
          <p class="mb-2 text-muted">Chamomile, peppermint, or lemongrass</p>
          <span class="menu-price">₱90</span>
        </div>
         </div>
        

<!-- Category Heading -->
<h3 class="menu-category mt-5 mb-4 text-center">Hearty Breakfast & Lunch</h3>

      <!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Adobo Rice Bowl</h4>
    <p class="mb-2 text-muted">Tender pork adobo, garlic rice, and fried egg.</p>
    <span class="menu-price">₱200</span>
  </div>
</div>

  <!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Adobo Rice Bowl</h4>
    <p class="mb-2 text-muted">Tender pork adobo, garlic rice, and fried egg.</p>
    <span class="menu-price">₱200</span>
  </div>
</div>
      <!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Chicken Pesto Pasta</h4>
    <p class="mb-2 text-muted">Al dente pasta with homemade pesto sauce.</p>
    <span class="menu-price">₱200</span>
  </div>
</div>

 <!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Breakfast Burrito</h4>
    <p class="mb-2 text-muted">Eggs, cheese, bacon, and salsa in wrap</p>
    <span class="menu-price">₱180</span>
  </div>
</div>

<!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Tuna Pesto Panini</h4>
    <p class="mb-2 text-muted">Warm, pressed sandwich with pesto</p>
    <span class="menu-price">₱160</span>
  </div>
</div>

<!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Adobo Rice Bowl</h4>
    <p class="mb-2 text-muted">Tender pork adobo, garlic rice, egg</p>
    <span class="menu-price">₱200</span>
  </div>
</div>

<!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Eggplant Omelette</h4>
    <p class="mb-2 text-muted">Tortang talong with garlic rice</p>
    <span class="menu-price">₱150</span>
  </div>
</div>

<!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Grilled Bangus Plate</h4>
    <p class="mb-2 text-muted">Boneless milkfish, egg, garlic rice</p>
    <span class="menu-price">₱200</span>
  </div>
</div>

<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Grilled Chicken Salad</h4>
    <p class="mb-2 text-muted">Fresh greens with grilled chicken and vinaigrette.</p>
    <span class="menu-price">₱180</span>
  </div>
</div>

      <!-- Menu Item -->
<h3 class="menu-category mt-5 mb-4 text-center">Fresh Pastries & Snacks</h3>
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Ube Cheese Pandesal</h4>
    <p class="mb-2 text-muted">Soft pandesal with ube and melty cheese inside.</p>
    <span class="menu-price">₱75</span>
  </div>
</div>
      <!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Ensaymada</h4>
    <p class="mb-2 text-muted">Soft, fluffy pastry topped with butter and cheese.</p>
    <span class="menu-price">₱75</span>
  </div>
</div>

  <!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Butter Croissant	</h4>
    <p class="mb-2 text-muted">Flaky, buttery goodness baked fresh daily</p>
    <span class="menu-price">₱85</span>
  </div>
</div>

 <!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Banana Bread</h4>
    <p class="mb-2 text-muted">Moist loaf with local bananas and walnuts</p>
    <span class="menu-price">₱90</span>
  </div>
</div>

<!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Chocolate Chip Muffin</h4>
    <p class="mb-2 text-muted">Light, fluffy, and chocolatey</p>
    <span class="menu-price">₱80</span>
  </div>
</div>

<!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Cinnamon Roll</h4>
    <p class="mb-2 text-muted">Soft swirl with sweet icing</p>
    <span class="menu-price">₱90</span>
  </div>
</div>

<!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Apple Pie Slice</h4>
    <p class="mb-2 text-muted">Classic pie with cinnamon & apples</p>
    <span class="menu-price">₱95</span>
  </div>
</div>

<!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Brownie Bar</h4>
    <p class="mb-2 text-muted">Chewy, chocolatey goodness</p>
    <span class="menu-price">₱80</span>
  </div>
</div>

<!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Mango Tart	</h4>
    <p class="mb-2 text-muted">Sweet mango-filled pastry</p>
    <span class="menu-price">₱90</span>
  </div>
</div>

<!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Tuna Melt Panini</h4>
    <p class="mb-2 text-muted">Warm sandwich with cheesy tuna filling</p>
    <span class="menu-price">₱150</span>
  </div>
</div>

      <!-- Menu Item -->
<div class="col-md-6 mb-4">
  <div class="menu-item p-4 bg-faded rounded">
    <h4 class="mb-1">Club Sandwich</h4>
    <p class="mb-2 text-muted">Layers of ham, chicken, egg, and fresh veggies.</p>
    <span class="menu-price">₱180</span>
  </div>
</div>


    </div>
  </div>
</section>


        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small"> &copy;  Trixie’s Café 2025</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
