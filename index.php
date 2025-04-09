
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FoodDash</title>
    <link rel="stylesheet" href="../css/style.css">
    </head>

<body>
    <header>
        <div class="header-block">
            <div class="logo-header">
                <img src="../resources/logo.svg" alt="Логотип FoodDash">
            </div>
            <nav>
                <ul class="links-header">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="Offers">Offers</a></li>
                    <li><a href="Service">Service</a></li>
                    <li><a href="About Us">About Us</a></li>
                </ul>
            </nav>
            <div class="button-header">
                <a href="#" aria-label="Search">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22" fill="none">
                        <path
                            d="M14.3333 14.3333L21 21M8.77778 16.5556C4.48223 16.5556 1 13.0733 1 8.77778C1 4.48223 4.48223 1 8.77778 1C13.0733 1 16.5556 4.48223 16.5556 8.77778C16.5556 13.0733 13.0733 16.5556 8.77778 16.5556Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path> 
                    </svg>
                </a>
                <a href="authorization.php" aria-label="User Profile" style="width: 50px; height: 50px;">
                    <img src="../resources/user.svg" alt="Фото пользователя">
                </a>
            </div>
        </div>
    </header>
    <main>
        <section class="block-welcome-color">
            <div class="block-welcome">
                <div class="block-welcome-text">
                    <h1>Quick <span>and</span> Tasty <br>
                        Food Delivered <span>with</span> a Dash of <span>Speed</span>
                    </h1>
                    <button>Order now</button>
                    <button>Track Order</button>
                </div>
                <div class="block-welcome-img">
                    <img src="../resources/dish.svg" alt="Изображение еды">
                </div>
            </div>
        </section>

        <section class="block-advantages">
            <div class="block-advantages-container">
                <img src="..\resources\fast-delivery 1.svg" alt="Первое преимущество иконка">
                <h1><span>Fast Delivery</span><br> Promise To Deliver Within 30 Mins</h1>
            </div>
            <div class="block-advantages-container">
                <img src="..\resources\fresh.svg" alt="Второе преимущество иконка">
                <h1><span>Fresh Food</span><br> Your Food Will Be Delivered 100% Fresh To Your Home. </h1>
            </div>
            <div class="block-advantages-container">
                <img src="..\resources\box 1.svg" alt="Третье преимущество иконка">
                <h1><span>Free Delivery</span><br> Your Food Delivery Is Absolutely Free. No Cost Just Order</h1>
            </div>
        </section>

        <section class="block-best">
            <div class="block-best-text">
                <h1>Our <span>Best Delivered</span> <br>
                    Indian Dish
                </h1>
                <h1>It’s Not Just About Bringing You Good Food <br> From Restaurants, We Deliver You Experience</h1>
            </div>
            <div class="block-best-dish">
                <div class="dish">
                    <img src="..\resources\dish 1.svg" alt="Первое блюдо">
                    <h1>Indian Vegetable 
                        Pulao</h1>
                    <a href="#">Order Now ></a>
                </div>
                <div class="dish">
                    <img src="..\resources\dish 2.svg" alt="Второе блюдо">
                    <h1>Indian Vegetable 
                        Pulao</h1>
                    <a href="#">Order Now ></a>
                </div>
                <div class="dish">
                    <img src="..\resources\dish 3.svg" alt="Третье блюдо">
                    <h1>Indian Vegetable 
                        Pulao</h1>
                    <a href="#">Order Now ></a>
                </div>
            </div>
            <div class="block-best-stars">
                <div class="block-best-stars-container">
                    <img src="..\resources\star.svg" alt="Звезда">
                    <h1>Rajasthan</h1>
                </div>
                <div class="block-best-stars-container">
                    <img src="..\resources\star.svg" alt="Звезда">
                    <h1>South Indian</h1>
                </div>
                <div class="block-best-stars-container">
                    <img src="..\resources\star.svg" alt="Звезда">
                    <h1>Gujarat</h1>
                </div>
                <div class="block-best-stars-container">
                    <img src="..\resources\star.svg" alt="Звезда">
                    <h1>Maharashtra</h1>
                </div>
            </div>
            <div class="menu-text">
                <div class="menu-text-btn-h1">
                    <h1>Our <span>Regular</span> Menu</h1>
                <button>See All</button>
                </div>
                <h3>There Are Our Regular Menus. <br>
                    You Can Order Anything You Like. </h3>
            </div>
            <div class="menu-container">

                <div class="menu-dish">
                    <div class="background-menu"></div>
                    <img src="../resources/regular-dish-first.svg" alt="Angoori Rasmalai">
                    <div class="dish-info">
                        <div class="dish-name-and-fb">
                            <h1><span>Indian Dessert</span> <br>Angoori Rasmalai</h1>
                        </div>
                        <span><img src="../resources/fb-star.svg" alt="star"></span>
                        <div class="menu-cost">
                            <h3>₹250</h3>
                            <button class="btn-buy">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="menu-dish">
                    <div class="background-menu"></div>
                    <img src="../resources/regular-dish-second.svg" alt="Indian Tea Time Snacks">
                    <div class="dish-info">
                        <div class="dish-name-and-fb">
                            <h1><span>Indian</span> Tea Time <br>Snacks</h1>
                        </div>
                        <img src="../resources/fb-star.svg" alt="star">
                        <div class="menu-cost">
                            <h3>₹250</h3>
                            <button class="btn-buy">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="menu-dish">
                    <div class="background-menu"></div>
                    <img src="../resources/regular-dish-third.svg" alt="Indian Tea Time Snacks">
                    <div class="dish-info">
                        <div class="dish-name-and-fb">
                            <h1><span>Indian</span> Tea <br>Time Snacks</h1>
                        </div>
                        <img src="../resources/fb-star.svg" alt="star">
                        <div class="menu-cost">
                            <h3>₹200</h3>
                            <button class="btn-buy">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="menu-container">
                <div class="menu-dish">
                    <div class="background-menu"></div>
                    <img src="..\resources\regular-dish-fourh.svg" alt="Angoori Rasmalai">
                    <div class="dish-info">
                        <div class="dish-name-and-fb">
                            <h1><span>South Indian</span> <br>
                                Masala Dosa</h1>
                        </div>
                        <div class="raiting-comment">
                           <img src="../resources/fb-star.svg" alt="star">
                             <span>(50)</span>
                        </div>
                        <div class="menu-cost">
                            <h3>₹150</h3>
                            <button class="btn-buy">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="menu-dish">
                    <div class="background-menu"></div>
                    <img src="..\resources\regular-dish-fifthd.svg" alt="Indian Tea Time Snacks">
                    <div class="dish-info">
                        <div class="dish-name-and-fb">
                            <h1><span>Gujarati</span> <br>
                                Pav Bhaji</h1>
                        </div>
                        <img src="../resources/fb-star.svg" alt="star">
                        <div class="menu-cost">
                            <h3>₹250</h3>
                            <button class="btn-buy">Buy Now</button>
                        </div>
                    </div>
                </div>
                <div class="menu-dish">
                    <div class="background-menu"></div>
                    <img src="..\resources\regular-dish-sixth.svg" alt="Indian Tea Time Snacks">
                    <div class="dish-info">
                        <div class="dish-name-and-fb">
                            <h1><span>Rajasthan</span> <br>
                                Dal Bati Churma</h1>
                        </div>
                        <img src="../resources/fb-star.svg" alt="star">
                        <div class="menu-cost">
                            <h3>₹450</h3>
                            <button class="btn-buy">Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="block-marketing">
            <div class="market-container">
                <img src="..\resources\market1.svg" alt="">
                <div class="market-container-col">
                    <img src="..\resources\market2.svg" alt="">
                    <img src="..\resources\market3.svg" alt="">
                </div>
            </div>
        </section>
    </main>
    <footer class="block-footer">
        <div class="block-footer-container">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="6">
                <line x1="0" y1="3" x2="100%" y2="3" stroke="#ff4e0e" stroke-width="6" stroke-dasharray="10 10" stroke-linecap="round" />
            </svg>
            <div class="block-footer-container-text">
                <div class="block-footer-left">
                    <div class="block-footer-left-one">
                        <h1><span>FOOD</span> DASH <span>.</span></h1>
                        <h3>Food Dash ©2023 All Rights Reserved</h3>
                        <h3>By - Piyush Prajapat</h3>
                    </div>
                    <div class="block-footer-left-two">
                        <h1 style="color: var(--main-color);">Follow Us On</h1>
                        <div>
                            <a href="#" aria-label="Instagram"><img src="../resources/inst.svg" alt="Instagram"></a>
                            <a href="#" aria-label="LinkedIn"><img src="../resources/in.svg" alt="LinkedIn"></a>
                            <a href="#" aria-label="Facebook"><img src="../resources/f.svg" alt="Facebook"></a>
                            <a href="#" aria-label="Twitter"><img src="../resources/twitter.svg" alt="Twitter"></a>
                            <a href="#" aria-label="Dribbble"><img src="../resources/ball.svg" alt="Dribbble"></a>
                        </div>
                    </div>
                </div>

                <div class="block-footer-right">
                    <div class="footer-menu">
                        <h2>Menu</h2>
                        <a href="">Home</a>
                        <a href="">Offers</a>
                        <a href="">Service</a>
                        <a href="">About Us</a>
                    </div>
                    <div class="footer-information">
                        <h2>Information</h2>
                        <a href="">Menu</a>
                        <a href="">Quality</a>
                        <a href="">Make A Choice</a>
                        <a href="">Fast Delivery</a>
                    </div>
                    <div class="footer-contact">
                        <h2>Contact</h2>
                        <h3>+123456789</h3>
                        <h3>Explore</h3>
                        <h3>Info@FoodDash.com</h3>
                        <h3>12, Maharashtra, Indian</h3>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </body>
</html>