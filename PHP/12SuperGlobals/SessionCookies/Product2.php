<?php
include("header.php");
// include("header.php");
// include("header.php");
// include("header.php");

if (isset($_POST['prod1-submit'])) {
  // echo "<pre>";
  // print_r($_REQUEST); 
  // $_SESSION['UserData'] = $_COOKIE['uname'];
  $_SESSION['cartData']['cartdata1'] = array("Productname" => $_REQUEST['prod_title'], "Productprice" => $_REQUEST['prod_price'], "Productquantity" => $_REQUEST['prod_quantity']);
  // $_SESSION['cartdata1'] = array( "Productprice" => $_COOKIE['pprice']);
  // $_SESSION['cartdata1'] = array( "Productquantity" => $_COOKIE['pquantity']);
 header("location:cart.php");
}
if (isset($_POST['prod2-submit'])) {
  // echo "<pre>";
  // print_r($_REQUEST); 
  // $_SESSION['UserData'] = $_COOKIE['uname'];
  $_SESSION['cartData']['cartdata2'] = array("Productname" => $_REQUEST['prod_title'], "Productprice" => $_REQUEST['prod_price'], "Productquantity" => $_REQUEST['prod_quantity']);
  // $_SESSION['cartdata1'] = array( "Productprice" => $_COOKIE['pprice']);
  // $_SESSION['cartdata1'] = array( "Productquantity" => $_COOKIE['pquantity']);
 header("location:cart.php");
}
?>
<section style="background-color: #eee;">

  <div class="container py-5">
    <div class="row">
      <div class="col-md-12 col-lg-4 mb-4 mb-lg-0">
        <div class="card text-black">
          <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/iphone-13-mini-blue-witb-2021_FMT_WHH?wid=560&hei=744&fmt=jpeg&qlt=90&.v=1638579083000" class="card-img-top" alt="iPhone" />
          <div class="card-body">
            <div class="text-center mt-1">
              <h4 class="card-title">iPhone X</h4>
              <h5 class="card-title">Product2 </h5>

              <h6 class="text-primary mb-1 pb-3">Starting at $399</h6>
            </div>

            <div class="text-center">
              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                <h5 class="mb-0">Quick Look</h5>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">5.8″</span>
                <span>Super Retina HD display1</span>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">
                  <i class="fas fa-camera-retro"></i>
                </span>
                <ul class="list-unstyled mb-0">
                  <li aria-hidden="true">—</li>
                  <li>Wide</li>
                  <li>Telephoto</li>
                  <li aria-hidden="true">—</li>
                </ul>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">2x</span>
                <span>Optical zoom range</span>
              </div>

              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                <h5 class="mb-0">Capacity</h5>
              </div>

              <div class="d-flex flex-column mb-4 lead">
                <span class="mb-2">64GB</span>
                <span class="mb-2">256GB</span>
                <span style="color: transparent;">0</span>
              </div>
            </div>

            <div class="d-flex flex-row">
              <form method="post">
                <div class="row">
                  <div class="col">
                    <span>&#8377;1235</span>
                  </div>
                  <div class="col">
                    <input type="hidden" name="prod_title" value="prod1" id="">
                    <input type="hidden" name="prod_price" value="1235" id="">
                    <input type="hidden" name="prod_image" value="1.jpg" id="">
                    <input type="number" class="form-control" name="prod_quantity" value="1" id="">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <button class="btn btn-sm btn-primary" type="submit" name="prod1-submit">Add To cart <i class="fa-solid fa-cart-shopping"></i></button>
                  </div>
                </div>
              </form>
              <!-- <button type="button" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                Learn more
              </button> -->
              <!-- <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button> -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
        <div class="card text-black">
          <img src="https://rukminim2.flixcart.com/image/850/1000/xif0q/mobile/6/x/j/-original-imaghxejqvpwfqh2.jpeg?q=90" class="card-img-top" alt="iPhone" />
          <div class="card-body">
            <div class="text-center mt-1">
              <h4 class="card-title">iPhone 11</h4>
              <h6 class="text-primary mb-1 pb-3">Starting at $499</h6>
            </div>

            <div class="text-center">
              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                <h5 class="mb-0">Quick Look</h5>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">6.1″</span>
                <span>Liquid Retina HD display1</span>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">
                  <i class="fas fa-camera-retro"></i>
                </span>
                <ul class="list-unstyled mb-0">
                  <li aria-hidden="true">Ultra Wide</li>
                  <li>Wide</li>
                  <li aria-hidden="true">—</li>
                  <li aria-hidden="true">—</li>
                </ul>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">2x</span>
                <span>Optical zoom range</span>
              </div>

              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                <h5 class="mb-0">Capacity</h5>
              </div>

              <div class="d-flex flex-column mb-4 lead">
                <span class="mb-2">64GB</span>
                <span class="mb-2">128GB</span>
                <span>256GB</span>
              </div>
            </div>

            <div class="d-flex flex-row">
              <form method="post">
                <div class="row">
                  <div class="col">
                    <span>&#8377;1235</span>
                  </div>
                  <div class="col">
                    <input type="hidden" name="prod_title" value="prod1" id="">
                    <input type="hidden" name="prod_price" value="1235" id="">
                    <input type="hidden" name="prod_image" value="1.jpg" id="">
                    <input type="number" class="form-control" name="prod_quantity" value="1" id="">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <button class="btn btn-sm btn-primary" type="submit" name="prod2-submit">Add To cart <i class="fa-solid fa-cart-shopping"></i></button>
                  </div>
                </div>
              </form>
              <!-- <button type="button" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                Learn more
              </button> -->
              <!-- <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button> -->
            </div>
            <!-- <div class="d-flex flex-row">
              <button type="button" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                Learn more
              </button>
              <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button>
            </div> -->
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-4 mb-4 mb-md-0">
        <div class="card text-black">
          <img src="https://www.apple.com/newsroom/images/product/iphone/standard/Apple_iphone13_design_09142021_big.jpg.slideshow-large.jpg" class="card-img-top" alt="iPhone" />
          <div class="card-body">
            <div class="text-center mt-1">
              <h4 class="card-title">iPhone 11 Pro</h4>
              <h6 class="text-primary mb-1 pb-3">Starting at $599</h6>
            </div>

            <div class="text-center">
              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                <h5 class="mb-0">Quick Look</h5>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">5.8″</span>
                <span>Super Retina HD display1</span>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">
                  <i class="fas fa-camera-retro"></i>
                </span>
                <ul class="list-unstyled mb-0">
                  <li aria-hidden="true">Ultra Wide</li>
                  <li>Wide</li>
                  <li>Telephoto</li>
                  <li aria-hidden="true">—</li>
                </ul>
              </div>

              <div class="d-flex flex-column mb-4">
                <span class="h1 mb-0">4x</span>
                <span>Optical zoom range</span>
              </div>

              <div class="p-3 mx-n3 mb-4" style="background-color: #eff1f2;">
                <h5 class="mb-0">Capacity</h5>
              </div>

              <div class="d-flex flex-column mb-4 lead">
                <span class="mb-2">64GB</span>
                <span class="mb-2">256GB</span>
                <span>512GB</span>
              </div>
            </div>

            <div class="d-flex flex-row">
              <button type="button" class="btn btn-primary flex-fill me-1" data-mdb-ripple-color="dark">
                Learn more
              </button>
              <button type="button" class="btn btn-danger flex-fill ms-1">Buy now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>