<?php 
include("header.php");
// include("header.php");
// include("header.php");
// include("header.php");
 ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Welcome to my page</h2>
            <p>Include include_once require require_once these all fucntions will use for getting one file data to other</p>
            <p>if we use include() and we load same file multiple times it will excute multiple time </p>
            <p>includes gives warning only not affecting execution Warning: include(): Failed opening 'header1.php' </p>
            <p> setcookie("CookieName", "CookieValue");/* defining name and value only*/ </p>
            <p> setcookie("CookieName", "CookieValue", time()+1*60*60);//using expiry in 1 hour(1*60*60 seconds or 3600 seconds) </p>
            <p> setcookie("CookieName", "CookieValue", time()+1*60*60, "/mypath/", "mydomain.com", 1); </p>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="images/1.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make.</p>
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
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>