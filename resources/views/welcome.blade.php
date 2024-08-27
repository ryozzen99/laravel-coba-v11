<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Add Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Your Website</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container">
            <!-- Rest of your content goes here -->

            <!-- portfolio -->
            <section id="portfolio">
                <h2>Portfolio</h2>
                <p>This is the portfolio section of your website.</p>
                
                <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="portfolio-item">
                        <h3>Portfolio Item <?php echo $i; ?></h3>
                        <p>Description of portfolio item <?php echo $i; ?></p>
                        <img src="https://source.unsplash.com/random/300x200?sig=<?php echo $i; ?>" alt="Portfolio Image">
                    </div>
                <?php } ?>
                <h2>portofolio Arroyan Ilham Nafian</h2>
                <p> ini adalah portofolio saya.</p>
                

            </section>

            <!-- contact -->
        </div>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">This is the footer of your website.</span>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Add Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
