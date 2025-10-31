<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
          rel="stylesheet" 
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
          crossorigin="anonymous">
          
    <title>Mon Blog Moderne - [Titre de la Page]</title>

    <style>
        :root { --bs-font-sans-serif: 'Helvetica Neue', Helvetica, Arial, sans-serif; }
        .blog-header { background-color: #f8f9fa; border-bottom: 1px solid #e9ecef; }
        .footer-blog { background-color: #343a40; color: #ffffff; padding: 2rem 0; }
        .card-post { transition: transform 0.2s; }
        .card-post:hover { transform: translateY(-5px); box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .titre-nav{transform: translateY(7px);}
    </style>
</head>
<body>

<header class="p-3 blog-header sticky-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light container">
       <div class="navbar-brand fw-bold fs-5 d-flex gap-1">
         <a class="text-dark" href="index.html">
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-rainbow" viewBox="0 0 16 16">
                <path d="M8 4.5a7 7 0 0 0-7 7 .5.5 0 0 1-1 0 8 8 0 1 1 16 0 .5.5 0 0 1-1 0 7 7 0 0 0-7-7m0 2a5 5 0 0 0-5 5 .5.5 0 0 1-1 0 6 6 0 1 1 12 0 .5.5 0 0 1-1 0 5 5 0 0 0-5-5m0 2a3 3 0 0 0-3 3 .5.5 0 0 1-1 0 4 4 0 1 1 8 0 .5.5 0 0 1-1 0 3 3 0 0 0-3-3m0 2a1 1 0 0 0-1 1 .5.5 0 0 1-1 0 2 2 0 1 1 4 0 .5.5 0 0 1-1 0 1 1 0 0 0-1-1"/>
            </svg>
        </a>
            <h5 class="fs-5 fw-light titre-nav">Booking</h5>
       </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.html">Accueil</a></li>
                <li class="nav-item"><a class="nav-link" href="categorie.html">Catégories</a></li>
                <li class="nav-item"><a class="nav-link" href="/r=about">À Propos</a></li>
                <li class="nav-item"><a class="nav-link btn btn-outline-primary ms-2" href="#">S'abonner</a></li>
            </ul>
        </div>
    </nav>
</header>

<main class="container my-5">
    <?= $contentpage?>
</main>
<footer class="footer-blog mt-5">
    <div class="container text-center">
        <p class="mb-2">&copy; 2025 Mon Blog Moderne. Tous droits réservés.</p>
        <p class="mb-0 text-muted small">Design minimaliste propulsé par Bootstrap 5.</p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous">
</script>

</body>
</html>