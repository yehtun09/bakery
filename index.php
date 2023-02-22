<?php
ob_start();
include_once "layout/header.php";
//include_once "controller/feedback_controller.php";
include_once "controller/baker_controller.php";
include_once "controller/promotion_controller.php";

// $feedbacksController = new feedbacksController();
// $feedbacks = $feedbacksController->Feedbacks();
// var_dump($feedbacks);

$bakerController = new BakerController();
$bakers = $bakerController->getBakers();
//var_dump($bakers);

$promotionController = new PromotionController();
$promotions = $promotionController->Promotions();
//var_dump($promotions);

?>

<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__item set-bg" data-setbg="img/hero/hero-1.jpg">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="hero__text">
                            <?php
                            //echo strtotime(date('d-m-Y'));
                            //echo date('d-m-Y');
                            echo "<h2>Making your life sweeter one bite at a time!</h2>";
                            for ($index = 0; $index < count($promotions); $index++) {
                                if ($promotions[$index]['start_date'] <= date('Y-m-d') && date('Y-m-d') <= $promotions[$index]['end_date']) {

                                    echo "<h4 style='color: #f08632;'><b>Enjoy " . $promotions[$index]['name'] . " and get " . $promotions[$index]['percentage'] . "% discount on every item.</b></h4><br>";

                                    
                            
                                    if ($promotions[$index]['start_date'] == $promotions[$index]['end_date']) {
                                        echo "<h3 class='p-1' style='color: #f08632;'>Promotion is only for today!!</h3>";
                                    } else{
                                        echo "<p style='color: #f08632;'>Promotion period is from " . date_format(date_create($promotions[$index]['start_date']), 'd/m/Y') . "  to " . date_format(date_create($promotions[$index]['end_date']), 'd/m/Y') . "</p>";
                                    }

                                }
                            }
                            ?>
                            <!-- <a href="#" class="primary-btn">Our cakes</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- About Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="about__text">
                    <div class="section-title">
                        <span>About Cake shop</span>
                        <h2>Cakes and bakes from the house of Queens!</h2>
                    </div>
                    <p>The "Cake Shop" is a Jordanian Brand that started as a small family business. The owners are
                        Dr. Iyad Sultan and Dr. Sereen Sharabati, supported by a staff of 80 employees.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="about__bar">
                    <div class="about__bar__item">
                        <p>Cake design</p>
                        <div id="bar1" class="barfiller">
                            <div class="tipWrap"><span class="tip"></span></div>
                            <span class="fill" data-percentage="95"></span>
                        </div>
                    </div>
                    <div class="about__bar__item">
                        <p>Cake Class</p>
                        <div id="bar2" class="barfiller">
                            <div class="tipWrap"><span class="tip"></span></div>
                            <span class="fill" data-percentage="80"></span>
                        </div>
                    </div>
                    <div class="about__bar__item">
                        <p>Cake Recipes</p>
                        <div id="bar3" class="barfiller">
                            <div class="tipWrap"><span class="tip"></span></div>
                            <span class="fill" data-percentage="90"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Categories Section Begin -->
<div class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <div class="categories__item">
                    <div class="categories__item__icon">
                        <span class="flaticon-029-cupcake-3"></span>
                        <h5>Cupcake</h5>
                    </div>
                </div>
                <div class="categories__item">
                    <div class="categories__item__icon">
                        <span class="flaticon-034-chocolate-roll"></span>
                        <h5>Butter</h5>
                    </div>
                </div>
                <div class="categories__item">
                    <div class="categories__item__icon">
                        <span class="flaticon-005-pancake"></span>
                        <h5>Red Velvet</h5>
                    </div>
                </div>
                <div class="categories__item">
                    <div class="categories__item__icon">
                        <span class="flaticon-030-cupcake-2"></span>
                        <h5>Biscuit</h5>
                    </div>
                </div>
                <div class="categories__item">
                    <div class="categories__item__icon">
                        <span class="flaticon-006-macarons"></span>
                        <h5>Donut</h5>
                    </div>
                </div>
                <div class="categories__item">
                    <div class="categories__item__icon">
                        <span class="flaticon-006-macarons"></span>
                        <h5>Cupcake</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Categories Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/shop/product-1.jpg">
                        <div class="product__label">
                            <span>Cupcake</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Dozen Cupcakes</a></h6>
                        <div class="product__item__price">$32.00</div>
                        <div class="cart_add">
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/shop/product-2.jpg">
                        <div class="product__label">
                            <span>Cupcake</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Cookies and Cream</a></h6>
                        <div class="product__item__price">$30.00</div>
                        <div class="cart_add">
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/shop/product-3.jpg">
                        <div class="product__label">
                            <span>Cupcake</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Gluten Free Mini Dozen</a></h6>
                        <div class="product__item__price">$31.00</div>
                        <div class="cart_add">
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/shop/product-4.jpg">
                        <div class="product__label">
                            <span>Cupcake</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Cookie Dough</a></h6>
                        <div class="product__item__price">$25.00</div>
                        <div class="cart_add">
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/shop/product-5.jpg">
                        <div class="product__label">
                            <span>Cupcake</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Vanilla Salted Caramel</a></h6>
                        <div class="product__item__price">$05.00</div>
                        <div class="cart_add">
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/shop/product-6.jpg">
                        <div class="product__label">
                            <span>Cupcake</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">German Chocolate</a></h6>
                        <div class="product__item__price">$14.00</div>
                        <div class="cart_add">
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/shop/product-7.jpg">
                        <div class="product__label">
                            <span>Cupcake</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Dulce De Leche</a></h6>
                        <div class="product__item__price">$32.00</div>
                        <div class="cart_add">
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/shop/product-8.jpg">
                        <div class="product__label">
                            <span>Cupcake</span>
                        </div>
                    </div>
                    <div class="product__item__text">
                        <h6><a href="#">Mississippi Mud</a></h6>
                        <div class="product__item__price">$08.00</div>
                        <div class="cart_add">
                            <a href="#">Add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- Class Section Begin -->
<section class="class spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="class__form mb-5">
                    <div class="section-title">
                        <span>Feedback Form</span>
                        <h2>We Want <br />Your Feedback</h2>
                    </div>
                    <form action="#">
                        <input type="text" placeholder="Name" name="name">
                        <input type="text" placeholder="Email" name="email">
                        <input type="text" name="address" id="" placeholder="address">
                        <select name="rate" id="" class="form-select">
                            <option value="" selected>Rating</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <textarea name="" id="" cols="30" rows="5" class="form-control"
                            placeholder="write feedback"></textarea> <br>
                        <button type="submit" class="site-btn" name="submit">registration</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="class__video set-bg mt-3" data-setbg="img/">
            <img src="img/feedback.jpg" alt="" height="500px" width="" style="border-radius:10px;" class="mt-5">
        </div>
    </div>
</section>
<!-- Class Section End -->

<!-- Team Section Begin -->
<section class="team spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-7">
                <div class="section-title">
                    <span>Our team</span>
                    <h2>Sweet Baker </h2>
                </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5">
                <div class="team__btn">
                    <a href="#" class="primary-btn">Join Us</a>
                </div>
            </div>
        </div>
        <div class="row">



            <?php
            for ($i = 0; $i < count($bakers); $i++) {
                echo "<div class='col-lg-3 col-md-6 col-sm-6'>";
                echo "<div class='team__item set-bg' data-setbg= 'admin/uploads/" . $bakers[$i]["image"] . "'>";
                echo "<div class='team__item__text'>";
                echo "<h6>" . $bakers[$i]["name"] . "</h6>";
                echo "<span>" . $bakers[$i]["position"] . "</span>";
                echo "<p>" . $bakers[$i]["note"] . "</p>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            // for ($i = 0; $i < count($bakers); $i++) {
            //     echo "<div class='col-lg-3 col-md-6 col-sm-6'>";
            //     echo "<div class='team__item set-bg' data-setbg= 'admin/uploads/" . $bakers[$i]["image"] . "'>";
            //     //echo "<div class="team__item__text">";
            
            //     echo "<h6>" . $bakers[$i]["name"] . "</h6>";
            //     echo "<span>" . $bakers[$i]["position"] . "</span>";
            //     echo "<p>" . $bakers[$i]["note"] . "</p>";
            // }
            ?>
        </div>
    </div>
    </div>
    <!-- <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="team__item set-bg" data-setbg="img/team/team-2.jpg">
            <div class="team__item__text">

                <h6>Randy Butler</h6>
                <span>Decorater</span>
                <div class="team__item__social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-youtube-play"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item set-bg" data-setbg="img/team/team-3.jpg">
                    <div class="team__item__text">
                        <h6>Randy Butler</h6>
                        <span>Decorater</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="team__item set-bg" data-setbg="img/team/team-4.jpg">
                    <div class="team__item__text">
                        <h6>Randy Butler</h6>
                        <span>Decorater</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div> -->
    </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <span>Testimonial</span>
                    <h2>Our client say</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial__slider owl-carousel">
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/testimonial/ta-1.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Kerry D.Silva</h5>
                                <span>New york</span>
                            </div>
                        </div>
                        <div class="rating">
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star-half_alt"></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/testimonial/ta-2.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Kerry D.Silva</h5>
                                <span>New york</span>
                            </div>
                        </div>
                        <div class="rating">
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star-half_alt"></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/testimonial/ta-1.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Ophelia Nunez</h5>
                                <span>London</span>
                            </div>
                        </div>
                        <div class="rating">
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star-half_alt"></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/testimonial/ta-2.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Kerry D.Silva</h5>
                                <span>New york</span>
                            </div>
                        </div>
                        <div class="rating">
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star-half_alt"></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/testimonial/ta-1.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Ophelia Nunez</h5>
                                <span>London</span>
                            </div>
                        </div>
                        <div class="rating">
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star-half_alt"></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="testimonial__item">
                        <div class="testimonial__author">
                            <div class="testimonial__author__pic">
                                <img src="img/testimonial/ta-2.jpg" alt="">
                            </div>
                            <div class="testimonial__author__text">
                                <h5>Kerry D.Silva</h5>
                                <span>New york</span>
                            </div>
                        </div>
                        <div class="rating">
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star"></span>
                            <span class="icon_star-half_alt"></span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua viverra lacus vel facilisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->

<!-- Instagram Section Begin -->
<section class="instagram spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="instagram__text">
                    <div class="section-title">
                        <span>Follow us on instagram</span>
                        <h2>Sweet moments are saved as memories.</h2>
                    </div>
                    <h5><i class="fa fa-instagram"></i> @sweetcake</h5>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic">
                            <img src="img/instagram/instagram-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic middle__pic">
                            <img src="img/instagram/instagram-2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic">
                            <img src="img/instagram/instagram-3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic">
                            <img src="img/instagram/instagram-4.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic middle__pic">
                            <img src="img/instagram/instagram-5.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                        <div class="instagram__pic">
                            <img src="img/instagram/instagram-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

<!-- Map Begin -->
<div class="map">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-7">
                <div class="map__inner">
                    <h6>COlorado</h6>
                    <ul>
                        <li>1000 Lakepoint Dr, Frisco, CO 80443, USA</li>
                        <li>Sweetcake@support.com</li>
                        <li>+1 800-786-1000</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="map__iframe">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d10784.188505644011!2d19.053119335158936!3d47.48899529453826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1543907528304"
            height="300" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>
<!-- Map End -->
<?php
include_once "layout/footer.php";

?>