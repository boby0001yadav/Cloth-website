<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Trendy Threads</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <header class="bg-gradient bg-primary text-white text-center py-5 shadow-sm">
        <h1>Contact Us</h1>
        <p class="mt-2">We'd love to hear from you!</p>
    </header>
    <?php include 'navbar.php';
    ?>
    <div class="container my-5">
        <h2 class="text-center mb-4">Get in Touch</h2>
        <div class="row">
            <div class="col-lg-6">
                <div class="card shadow-sm p-4">
                    <h4 class="card-title">Reach Us</h4>
                    <p class="card-text">Feel free to ask us anything. We're here to help!</p>
                    <ul class="list-unstyled">
                        <li><strong>Address:</strong> 123 Fashion Street, Stylish City</li>
                        <li><strong>Email:</strong> support@trendythreads.com</li>
                        <li><strong>Phone:</strong> +1 234 567 890</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <form class="row g-3 shadow p-4 rounded bg-light">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2025 Trendy Threads. All Rights Reserved. | Follow us on 
            <a href="#" class="text-light">Facebook</a>, <a href="#" class="text-light">Twitter</a>, <a href="#" class="text-light">Instagram</a>.
        </p>
    </footer>
</body>
</html>