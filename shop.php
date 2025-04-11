<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop - Trendy Threads</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="bg-primary text-white text-center py-4">
        <h1>Shop Our Collection</h1>
    </header>
    <?php include 'navbar.php';
    ?>
    <div class="container my-5">
        <h2 class="text-center mb-4">Featured Products</h2>
        <div class="row">
            <!-- Product 1 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="./ASSETS/shirt.jpg" class="card-img-top" alt="Classic Shirt">
                    <div class="card-body text-center">
                        <h5 class="card-title">Classic Shirt</h5>
                        <p class="card-text">$25.99</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 2 -->
            <div class="col-md-3 ">
                <div class="card">
                    <img src="./ASSETS/Elegant Dress.jpg" class="card-img-top" alt="Elegant Dress">
                    <div class="card-body text-center">
                        <h5 class="card-title">Elegant Dress</h5>
                        <p class="card-text">$45.99</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 3 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="./ASSETS/2.jpg" class="card-img-top" alt="Casual Jeans">
                    <div class="card-body text-center">
                        <h5 class="card-title">Casual Jeans</h5>
                        <p class="card-text">$35.99</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 4 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="./ASSETS/Stylish Jacket.jpg" class="card-img-top" alt="Stylish Jacket">
                    <div class="card-body text-center">
                        <h5 class="card-title">Stylish Jacket</h5>
                        <p class="card-text">$55.99</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 5 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="./ASSETS/Summer T-shirt.jpg" class="card-img-top" alt="Summer T-shirt">
                    <div class="card-body text-center">
                        <h5 class="card-title">Summer T-shirt</h5>
                        <p class="card-text">$20.99</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 6 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="./ASSETS/Winter Coat.jpg" class="card-img-top" alt="Winter Coat">
                    <div class="card-body text-center">
                        <h5 class="card-title">Winter Coat</h5>
                        <p class="card-text">$75.99</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 7 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="./ASSETS/Formal Pants.jpg" class="card-img-top" alt="Formal Pants">
                    <div class="card-body text-center">
                        <h5 class="card-title">Formal Pants</h5>
                        <p class="card-text">$40.99</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
            <!-- Product 8 -->
            <div class="col-md-3">
                <div class="card">
                    <img src="./ASSETS/Casual Hoodie.jpg" class="card-img-top" alt="Casual Hoodie">
                    <div class="card-body text-center">
                        <h5 class="card-title">Casual Hoodie</h5>
                        <p class="card-text">$30.99</p>
                        <button class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-primary text-white text-center py-3">
        <p>&copy; 2025 Trendy Threads. All Rights Reserved.</p>
    </footer>
</body>
</html>
