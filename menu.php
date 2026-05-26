<?php
session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Swadishta</title>
    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">

    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand logo" href="#">
                <img src="logo.png" alt="logo" />
            </a>

            <!-- Hamburger Button -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Items -->
            <div
                class="collapse navbar-collapse justify-content-end"
                id="navbarNav">
                <ul class="navbar-nav gap-5">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">SIGN UP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="menu.php">MENU</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mycart.php">MY CART</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="visitus.html">VISIT-US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <section class="menu-section">
        <div class="menu-container">
            <div class="menu-grid">
                <!-- FOOD CARD 1 -->
                <form action="manage_cart.php" method="POST">
                    <div class="food-card">
                        <div class="card">
                            <img src="p3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Chanadal puranpoli</h5>
                                <span class="tag">⭐ Best Seller</span>
                                <p class="food-desc">
                                    Authentic traditional puranpoli served with pure homemade ghee.
                                </p>
                                <!-- Variant Selection -->
                                <label>Select Type:</label>
                                <select class="variant-select" name="Price">
                                    <option value="40">Jaggery - ₹40</option>
                                    <option value="40">Sugar - ₹40</option>
                                    <option value="50">Sugar-Free - ₹50</option>
                                </select>
                                <label>Select your extras ..</label>
                                <div class="toppings-section">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="extraStuffing">
                                        <label class="form-check-label" for="extraStuffing">
                                            🥄 Extra Stuffing (+₹15)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="extraGhee">
                                        <label class="form-check-label" for="extraGhee">
                                            🧈 Extra Ghee (+₹10)

                                        </label>
                                    </div>
                                </div>
                                <div class="special-addon">

                                    <h4>✨Custom Request</h4>

                                    <p class="addon-desc">
                                        Tell us your special preference (optional)
                                    </p>

                                    <textarea
                                        placeholder="Example: Extra ghee, less sugar, cut in 4 pieces, pack separately..."></textarea>

                                </div>
                                <button type="submit" name="Add_To_Cart" class="add-cart-btn">
                                    🛒 Add to Cart
                                </button>
                                <input type="hidden" name="Item_Name" value="Chanadal Puranpoli">


                            </div>
                        </div>
                    </div>
                </form>
                <!-- FOOD CARD 2 -->
                <form action="manage_cart.php" method="POST">
                    <div class="food-card">
                        <div class="card">
                            <img src="k1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Khava Puranpoli</h5>
                                <span class="tag">⭐ Premium Puranpoli</span>
                                <p class="food-desc">
                                    Stuffed with rich, milky khava and sugar. ✨
                                </p>
                                <!-- Variant Selection -->
                                <label>Select Type:</label>
                                <select class="variant-select" name="Price">
                                    <option value="40">Sugar - ₹40</option>
                                    <option value="50">Sugar-Free - ₹50</option>
                                </select>
                                <label>Select your extras ..</label>
                                <div class="toppings-section">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="extraStuffing">
                                        <label class="form-check-label" for="extraStuffing">
                                            🥄 Extra Stuffing (+₹15)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="extraGhee">
                                        <label class="form-check-label" for="extraGhee">
                                            🧈 Extra Ghee (+₹10)

                                        </label>
                                    </div>
                                </div>
                                <div class="special-addon">

                                    <h4>✨Custom Request</h4>

                                    <p class="addon-desc">
                                        Tell us your special preference (optional)
                                    </p>

                                    <textarea
                                        placeholder="Example: Extra ghee, less sugar, cut in 4 pieces, pack separately..."></textarea>

                                </div>
                                <button type="submit" name="Add_To_Cart" class="add-cart-btn">
                                    🛒 Add to Cart
                                </button>
                                <input type="hidden" name="Item_Name" value="Khava Puranpoli">

                            </div>
                        </div>
                    </div>
                </form>

                <!-- FOOD CARD 3 -->
                <form action="manage_cart.php" method="POST">
                    <div class="food-card">
                        <div class="card">
                            <img src="t1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Til Puranpoli</h5>
                                <span class="tag">🥥 Special Puranpoli</span>
                                <p class="food-desc">
                                    Stuffed with roasted sesame (til) and jaggery, offering a nutty flavor. ✨.
                                </p>
                                <!-- Variant Selection -->
                                <label>Select Type:</label>
                                <select class="variant-select" name="Price">
                                    <option value="40">Jaggery - ₹40</option>

                                </select>
                                <label>Select your extras ..</label>
                                <div class="toppings-section">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="extraStuffing">
                                        <label class="form-check-label" for="extraStuffing">
                                            🥄 Extra Stuffing (+₹15)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="extraGhee">
                                        <label class="form-check-label" for="extraGhee">
                                            🧈 Extra Ghee (+₹10)

                                        </label>
                                    </div>
                                </div>
                                <div class="special-addon">

                                    <h4>✨Custom Request</h4>

                                    <p class="addon-desc">
                                        Tell us your special preference (optional)
                                    </p>

                                    <textarea
                                        placeholder="Example: Extra ghee, less sugar, cut in 4 pieces, pack separately..."></textarea>

                                </div>
                                <button type="submit" name="Add_To_Cart" class="add-cart-btn">
                                    🛒 Add to Cart
                                </button>
                                <input type="hidden" name="Item_Name" value="Til Puranpoli">

                            </div>
                        </div>
                    </div>
                </form>

                <!-- FOOD CARD 4 -->

                <form action="manage_cart.php" method="POST">
                    <div class="food-card">
                        <div class="card">
                            <img src="k1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Dry Fruits Puranpoli</h5>
                                <span class="tag">⭐ Premium Puranpoli</span>
                                <p class="food-desc">
                                    Stuffed with mava and nutty dry fruits.
                                </p>
                                <!-- Variant Selection -->
                                <label>Select Type:</label>
                                <select class="variant-select" name="Price">
                                    <option value="40">Sugar - ₹40</option>
                                    <option value="50">Sugar-Free - ₹50</option>
                                </select>
                                <label>Select your extras ..</label>
                                <div class="toppings-section">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="extraStuffing">
                                        <label class="form-check-label" for="extraStuffing">
                                            🥄 Extra Stuffing (+₹15)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="extraGhee">
                                        <label class="form-check-label" for="extraGhee">
                                            🧈 Extra Ghee (+₹10)

                                        </label>
                                    </div>
                                </div>
                                <div class="special-addon">

                                    <h4>✨Custom Request</h4>

                                    <p class="addon-desc">
                                        Tell us your special preference (optional)
                                    </p>

                                    <textarea
                                        placeholder="Example: Extra ghee, less sugar, cut in 4 pieces, pack separately..."></textarea>

                                </div>
                                <button type="submit" name="Add_To_Cart" class="add-cart-btn">
                                    🛒 Add to Cart
                                </button>
                                <input type="hidden" name="Item_Name" value="Dry Fruits Puranpoli">

                            </div>
                        </div>
                    </div>
                </form>
                <!-- FOOD CARD 5 -->
                <form action="manage_cart.php" method="POST">
                    <div class="food-card">
                        <div class="card">
                            <img src="c2.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Chocolate Puranpoli</h5>
                                <span class="tag">🍫 Premium Puranpoli</span>
                                <p class="food-desc">
                                    Stuffed with pure compound chocolate.
                                </p>
                                <!-- Variant Selection -->
                                <label>Select Type:</label>
                                <select class="variant-select" name="Price">
                                    <option value="40">dark-chocolate- ₹50</option>
                                    <option value="40">milk compound- ₹50</option>
                                </select>
                                <label>Select your extras ..</label>
                                <div class="toppings-section">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="extraStuffing">
                                        <label class="form-check-label" for="extraStuffing">
                                            🥄 Extra Stuffing (+₹15)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="extraGhee">
                                        <label class="form-check-label" for="extraGhee">
                                            🧈 Extra Ghee (+₹10)

                                        </label>
                                    </div>
                                </div>
                                <div class="special-addon">

                                    <h4>✨Custom Request</h4>

                                    <p class="addon-desc">
                                        Tell us your special preference (optional)
                                    </p>

                                    <textarea
                                        placeholder="Example: Extra ghee, less sugar, cut in 4 pieces, pack separately..."></textarea>

                                </div>
                                <button type="submit" name="Add_To_Cart" class="add-cart-btn">
                                    🛒 Add to Cart
                                </button>
                                <input type="hidden" name="Item_Name" value="Chocolate Puranpoli">

                            </div>
                        </div>
                    </div>
                </form>

                <!-- FOOD CARD 6 -->
                <form action="manage_cart.php" method="POST">
                    <div class="food-card">
                        <div class="card">
                            <img src="m4.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Moongdal Puranpoli</h5>

                                <p class="food-desc">
                                    Stuffed with authentic moongdal and jaggery.
                                </p>
                                <!-- Variant Selection -->
                                <label>Select Type:</label>
                                <select class="variant-select" name="Price">
                                    <option value="40">Jaggery - ₹40</option>
                                    <option value="40">Sugar - ₹40</option>
                                    <option value="50">Sugar-Free - ₹50</option>
                                </select>
                                <label>Select your extras ..</label>
                                <div class="toppings-section">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="extraStuffing">
                                        <label class="form-check-label" for="extraStuffing">
                                            🥄 Extra Stuffing (+₹15)
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="extraGhee">
                                        <label class="form-check-label" for="extraGhee">
                                            🧈 Extra Ghee (+₹10)

                                        </label>
                                    </div>
                                </div>
                                <div class="special-addon">

                                    <h4>✨Custom Request</h4>

                                    <p class="addon-desc">
                                        Tell us your special preference (optional)
                                    </p>

                                    <textarea
                                        placeholder="Example: Extra ghee, less sugar, cut in 4 pieces, pack separately..."></textarea>

                                </div>
                                <button type="submit" name="Add_To_Cart" class="add-cart-btn">
                                    🛒 Add to Cart
                                </button>
                                <input type="hidden" name="Item_Name" value="Moongdal Puranpoli">

                            </div>
                        </div>
                    </div>
                </form>

                <!-- FOOD CARD 7 -->
                <form action="manage_cart.php" method="POST">
                    <div class="food-card">
                        <div class="card">
                            <img src="chapti.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Chapati</h5>
                                <p class="food-desc">
                                    Soft wheat flour rolled with non refined oil .
                                </p>
                                <label>Select Type:</label>
                                <select class="variant-select" name="Price">
                                    <option value="50">THREE FOLD - ₹50</option>
                                    <option value="50">SIMPLE - ₹50</option>

                                </select>

                                <div class="special-addon">

                                    <h4>✨Custom Request</h4>

                                    <p class="addon-desc">
                                        Tell us your special preference (optional)
                                    </p>

                                    <textarea
                                        placeholder="Example: Extra ghee, less sugar, cut in 4 pieces, pack separately..."></textarea>

                                </div>
                                <button type="submit" name="Add_To_Cart" class="add-cart-btn">
                                    🛒 Add to Cart
                                </button>
                                <input type="hidden" name="Item_Name" value="Chapati">

                            </div>
                        </div>
                    </div>
                </form>

                <!-- FOOD CARD 8 -->
                <form action="manage_cart.php" method="POST">
                    <div class="food-card">
                        <div class="card">
                            <img src="m2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Ukdiche modak</h5>

                                <p class="food-desc">
                                    Festive special , Freshly prepared rice flour jaggery , shredded coconut.
                                </p>
                                <label>Select Type:</label>
                                <select class="variant-select" name="Price">
                                    <option value="50">sugar - ₹50</option>
                                    <option value="50">jaggery- ₹50</option>

                                </select>
                                <div class="special-addon">

                                    <h4>✨Custom Request</h4>

                                    <p class="addon-desc">
                                        Tell us your special preference (optional)
                                    </p>

                                    <textarea
                                        placeholder="Example: Extra ghee, less sugar, cut in 4 pieces, pack separately..."></textarea>

                                </div>
                                <button type="submit" name="Add_To_Cart" class="add-cart-btn">
                                    🛒 Add to Cart
                                </button>
                                <input type="hidden" name="Item_Name" value="Ukdiche Modak">

                            </div>
                        </div>
                    </div>
                </form>

                <!-- FOOD CARD 9 -->
                <form action="manage_cart.php" method="POST">
                    <div class="food-card">
                        <div class="card">
                            <img src="s1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Crunchy Snacks</h5>
                                <span class="tag">⭐ Best Seller</span>
                                <p class="food-desc">
                                    Crunchy feshly prepared Snacks with zero palm oil .
                                </p>
                                <!-- Variant Selection -->
                                <label>Select Type:</label>
                                <select class="variant-select" name="Price">
                                    <option value="50">plain-Chakli - ₹50</option>
                                    <option value="50">Moong-Chakli - ₹50</option>
                                    <option value="50">Ragi-Chakli - ₹50</option>
                                    <option value="50">Bakarwadi- small - ₹50</option>
                                    <option value="50">Bakarwadi- big - ₹50</option>
                                    <option value="50">Garlic-Chivda - ₹50</option>
                                    <option value="50">Nachos peri-peri - ₹50</option>
                                </select>

                                <div class="special-addon">

                                    <h4>✨Custom Request</h4>
                                    <textarea
                                        placeholder="Example: Extra ghee, less sugar, cut in 4 pieces, pack separately..."></textarea>

                                </div>
                                <button type="submit" name="Add_To_Cart" class="add-cart-btn">
                                    🛒 Add to Cart
                                </button>
                                <input type="hidden" name="Item_Name" value="Crunchy Snacks">

                            </div>
                        </div>
                    </div>
                </form>
                <!-- FOOD CARD 10 -->
                <form action="manage_cart.php" method="POST">
                    <div class="food-card">
                        <div class="card">
                            <img src="p3.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">AAMTI</h5>

                                <div class="special-addon">

                                    <h4>✨Custom Request</h4>

                                    <p class="addon-desc">
                                        Tell us your special preference (optional)
                                    </p>

                                    <textarea
                                        placeholder="Example: Extra ghee, less sugar, cut in 4 pieces, pack separately..."></textarea>

                                </div>
                                <button type="submit" name="Add_To_Cart" class="add-cart-btn">
                                    🛒 Add to Cart
                                </button>
                                <<input type="hidden" name="Item_Name" value="Aamti">

                            </div>
                        </div>
                    </div>
                </form>

                <!-- continue all cards here -->
            </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>