
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Mon Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<main class="container my-5">
    <h1 class="mb-4">Bienvenue sur le blog</h1>

    <!-- Section Liste des Posts -->
    <section class="mb-5">
        <h2 class="h4 mb-3">Articles récents</h2>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 post-card" style="transition: box-shadow .2s;">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-2"><i class="bi bi-journal-richtext fs-3 text-primary"></i></div>
                            <h5 class="card-title mb-0 fw-bold">Le Minimalisme en Web Design</h5>
                        </div>
                        <small class="text-muted">12 Mai 2025</small>
                        <p class="card-text mt-2">Nous explorons les principes du design minimaliste et comment il améliore l'expérience utilisateur et la performance de votre site web.</p>
                        <a href="#" class="btn btn-outline-primary rounded-pill fw-bold"><i class="bi bi-arrow-right-circle"></i> Lire l'article</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 post-card" style="transition: box-shadow .2s;">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2">
                            <div class="me-2"><i class="bi bi-shield-lock fs-3 text-success"></i></div>
                            <h5 class="card-title mb-0 fw-bold">Sécurité des Applications PHP</h5>
                        </div>
                        <small class="text-muted">5 Avril 2025</small>
                        <p class="card-text mt-2">Découvrez les bonnes pratiques pour sécuriser vos applications PHP et protéger vos données.</p>
                        <a href="#" class="btn btn-outline-success rounded-pill fw-bold"><i class="bi bi-arrow-right-circle"></i> Lire l'article</a>
                    </div>
                </div>
            </div>
        </div>
        <style>
        .post-card {
            background: #fff;
            border-radius: 1rem;
        }
        .post-card:hover {
            box-shadow: 0 0.5rem 1.5rem rgba(0,0,0,0.12);
        }
        </style>
    </section>

    <!-- Section À propos -->
    <section class="mb-5">
        <div class="card border-0 shadow-sm bg-light">
            <div class="card-body text-center">
                <h2 class="h4 mb-3"><i class="bi bi-info-circle text-primary"></i> À propos</h2>
                <p class="mb-0">Ce blog partage des conseils, des tutoriels et des actualités sur le développement web, le design et les technologies modernes.</p>
            </div>
        </div>
    </section>

    <!-- Section Nos services -->
    <section class="mb-5">
        <h2 class="h4 mb-3">Nos services</h2>
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(135deg, #4e54c8 0%, #8f94fb 100%); color: #fff;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><i class="bi bi-laptop"></i> Création de sites web</h5>
                        <p class="card-text">Conception et développement de sites modernes et responsives.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(135deg, #ff512f 0%, #dd2476 100%); color: #fff;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><i class="bi bi-palette"></i> Design graphique</h5>
                        <p class="card-text">Identité visuelle, UI/UX et supports de communication.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card h-100 border-0 shadow-lg" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%); color: #fff;">
                    <div class="card-body">
                        <h5 class="card-title fw-bold"><i class="bi bi-people"></i> Conseil & Formation</h5>
                        <p class="card-text">Accompagnement, audit et formation en développement web.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Section Contact -->
    <section class="mb-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg" style="background: linear-gradient(135deg, #4e54c8 0%, #8f94fb 100%); color: #fff;">
                    <div class="card-body p-5">
                        <h2 class="h4 mb-4 text-center"><i class="bi bi-envelope-paper-heart-fill"></i> Contactez-nous</h2>
                        <form>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-3 mb-md-0">
                                    <label for="nom" class="form-label fw-bold"><i class="bi bi-person-circle"></i> Nom</label>
                                    <input type="text" class="form-control rounded-pill" id="nom" name="nom" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label fw-bold"><i class="bi bi-envelope-at"></i> Email</label>
                                    <input type="email" class="form-control rounded-pill" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label fw-bold"><i class="bi bi-chat-dots"></i> Message</label>
                                <textarea class="form-control rounded-4" id="message" name="message" rows="4" required></textarea>
                            </div>
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-light btn-lg rounded-pill text-primary fw-bold">
                                    <i class="bi bi-send-fill"></i> Envoyer le message
                                </button>
                            </div>
                        </form>
                        <div class="mt-4 text-center">
                            <i class="bi bi-geo-alt-fill"></i> Paris, France &nbsp; | &nbsp; <i class="bi bi-telephone-fill"></i> +33 1 23 45 67 89
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>