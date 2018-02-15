<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Pangolin" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <title>My Pizza Workshop</title>

</head>

<body>
    <header class="header">
        <div class="header-text">
            <h1>Pizza workshop</h1>
        </div>
        <div class="header-color">
            <div class="header-color-green"></div>
            <div class="header-color-white"></div>
            <div class="header-color-red"></div>
        </div>
    </header>
    <nav class="navbar">
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a href="">Home</a>
                </li>
                <li class="nav-item">
                    <a href="">Products</a>
                </li>
                <li class="nav-item">
                    <a href="">Gallary</a>
                </li>
                <li class="nav-item">
                    <a href="">About</a>
                </li>
                <li class="nav-item">
                    <a href="">Contact</a>
                </li>
                <li class="nav-item">
                    <a href="">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <main>
        <div class="section product">
            <div class="container">
                <img src="../img/veggie.png" alt="veggie" class="product-img" />
                <aside>
                    <h1>Veggie</h1>
                    <p>Our Veggie recipe is perfect for those who love all the colors of the vegetable spectrum – tomato sauce,
                        100% real cheese, red onions, green peppers, mushrooms and black olives.</p>
                    <h2>$14.99</h2>
                    <form class="product-form" action="https://titan.csit.rmit.edu.au/~e54061/wp/processing.php?ref=product" method="post">
                        <label for="option">Way of Delivery</label>
                        <select name="option" id="method">
                            <option value="takeaway">Take Away</option>
                            <option value="delivery">Delivery</option>
                        </select>
                        <label for="qty">Number of Pizzas</label>
                        <input style="display: none" name="id" value="1" />
                        <button id="minus">-</button>
                        <input value=1 name="qty" id="quantity" />
                        <button id="plus">+</button>
                        <input type="submit" value="add" />
                    </form>
                </aside>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <p>
                Pizza Workshop All rights Reserved &copy; 2018
            </p>
            <p>Studnet: Dongnan Zhang</p>
            <p>ID: 3682306</p>
        </div>
    </footer>
    <script src="js/product.js"></script>
</body>

</html>