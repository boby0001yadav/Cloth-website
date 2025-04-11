<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Trendy Threads</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .hero {
            background-image: url('https://via.placeholder.com/1920x500');
            background-size: cover;
            background-position: center;
            color: white;
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.7);
        }
        .hero h2 {
            background: rgba(0, 0, 0, 0.5);
            padding: 20px;
            border-radius: 10px;
        }
        .card {
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .footer-icons a {
            color: white;
            margin: 0 10px;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <header class="bg-primary text-white text-center py-4">
        <h1>About Us</h1>
    </header>
    <?php include 'navbar.php';
    ?>
    <section class="hero">
        <h2>Discover the World of Trendy Threads</h2>
    </section>
    <div class="container my-5">
        <div class="card p-4">
            <div class="card-body text-center">
                <h1 class="card-title text-primary">Welcome to Trendy Threads</h1>
                <p>Fashion is an expression, and we're here to inspire confidence while promoting eco-conscious practices.</p>
            </div>
        </div>
        <!-- New Meet Our Team Section -->
        <div class="mt-5">
            <h2 class="text-center text-primary mb-4">Meet Our Team</h2>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto" style="width: 100px;" alt="CEO">
                        <h4 class="mt-3">Jane Doe</h4>
                        <p class="text-muted">CEO</p>
                        <p class="card-text">Jane leads our vision and drives innovation with her passion for sustainable fashion.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto" style="width: 100px;" alt="Designer">
                        <h4 class="mt-3">John Smith</h4>
                        <p class="text-muted">Designer</p>
                        <p class="card-text">John crafts unique designs that merge modern trends with timeless elegance.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3">
                        <img src="https://via.placeholder.com/150" class="card-img-top rounded-circle mx-auto" style="width: 100px;" alt="Eco Specialist">
                        <h4 class="mt-3">Alex Johnson</h4>
                        <p class="text-muted">Eco Specialist</p>
                        <p class="card-text">Alex ensures our materials and processes align with eco-friendly practices.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="bg-primary text-white text-center py-4">
        <p>&copy; 2025 Trendy Threads. All Rights Reserved.</p>
        <div class="footer-icons">
            <a href="#"><i class="bi bi-facebook"></i></a>
            <a href="#"><i class="bi bi-twitter"></i></a>
            <a href="#"><i class="bi bi-instagram"></i></a>
        </div>
    </footer>
</body>
</html>