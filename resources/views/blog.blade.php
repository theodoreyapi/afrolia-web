<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Blog & Conseils | Afrolia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-web.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .blog-card {
            transition: all 0.3s ease;
            border: none;
        }

        .blog-card:hover {
            transform: translateY(-10px);
        }

        .category-badge {
            background-color: #f3a67d;
            color: white;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.8rem;
            text-transform: uppercase;
            font-weight: bold;
        }

        .featured-blog {
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            min-height: 400px;
            display: flex;
            align-items: flex-end;
        }

        .featured-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), transparent);
            width: 100%;
            padding: 40px;
        }
    </style>
</head>

<body class="bg-light">

    <header class="py-5 bg-white border-bottom">
        <div class="container text-center">
            <p class="tagline-clientele text-uppercase mb-2">Conseils & Tendances</p>
            <h1 class="display-4 fw-bold text-dark">Le Mag <span class="highlight-text">Afrolia</span></h1>
            <p class="lead text-muted">Tout ce qu'il faut savoir pour sublimer vos cheveux afro au quotidien.</p>
        </div>
    </header>

    <main class="container py-5">

        <div class="d-flex justify-content-center flex-wrap gap-2 mb-5">
            <button class="btn btn-dark rounded-pill px-4">Tous les articles</button>
            <button class="btn btn-outline-dark rounded-pill px-4">Soins Capillaires</button>
            <button class="btn btn-outline-dark rounded-pill px-4">Tendances</button>
            <button class="btn btn-outline-dark rounded-pill px-4">Tutoriels</button>
            <button class="btn btn-outline-dark rounded-pill px-4">Interviews</button>
        </div>

        <div class="row mb-5">
            <div class="col-12">
                <div class="featured-blog shadow-lg"
                    style="background: url('{{ URL::asset('assets/images/blog-main.jpg') }}') center/cover;">
                    <div class="featured-overlay text-white">
                        <span class="category-badge mb-3 d-inline-block">Conseil du mois</span>
                        <h2 class="display-5 fw-bold mb-3">Comment entretenir vos tresses pour qu'elles durent plus
                            longtemps</h2>
                        <p class="mb-4 d-none d-md-block">Découvrez nos 5 secrets pour garder vos tresses fraîches et
                            hydratées pendant plusieurs semaines...</p>
                        <a href="#" class="btn btn-primary btn-action px-4">Lire l'article</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4">

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 blog-card shadow-sm">
                    <img src="{{ URL::asset('assets/images/blog-1.jpg') }}" class="card-img-top rounded-top"
                        alt="Article">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="category-badge">Soins</span>
                            <small class="text-muted"><i class="far fa-clock me-1"></i> 5 min</small>
                        </div>
                        <h4 class="fw-bold mb-3">Le guide complet de l'hydratation</h4>
                        <p class="text-muted small">Vos cheveux sont secs ? Voici les étapes indispensables pour
                            retrouver de la souplesse.</p>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <a href="#" class="text-dark fw-bold text-decoration-none">Lire la suite <i
                                class="fas fa-arrow-right ms-2 text-primary"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 blog-card shadow-sm">
                    <img src="{{ URL::asset('assets/images/blog-2.jpg') }}" class="card-img-top rounded-top"
                        alt="Article">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="category-badge">Tendances</span>
                            <small class="text-muted"><i class="far fa-clock me-1"></i> 3 min</small>
                        </div>
                        <h4 class="fw-bold mb-3">Top 10 des coiffures protectrices 2024</h4>
                        <p class="text-muted small">Inspiration pour votre prochain passage chez votre coiffeuse
                            Afrolia.</p>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <a href="#" class="text-dark fw-bold text-decoration-none">Lire la suite <i
                                class="fas fa-arrow-right ms-2 text-primary"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card h-100 blog-card shadow-sm">
                    <img src="{{ URL::asset('assets/images/blog-3.jpg') }}" class="card-img-top rounded-top"
                        alt="Article">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="category-badge">Lifestyle</span>
                            <small class="text-muted"><i class="far fa-clock me-1"></i> 8 min</small>
                        </div>
                        <h4 class="fw-bold mb-3">Témoignage : Mon retour au naturel</h4>
                        <p class="text-muted small">Amina nous raconte son parcours, ses doutes et ses victoires
                            capillaires.</p>
                    </div>
                    <div class="card-footer bg-white border-0 p-4 pt-0">
                        <a href="#" class="text-dark fw-bold text-decoration-none">Lire la suite <i
                                class="fas fa-arrow-right ms-2 text-primary"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <nav class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled"><a class="page-link shadow-none" href="#">Précédent</a></li>
                <li class="page-item active"><a class="page-link shadow-none" href="#">1</a></li>
                <li class="page-item"><a class="page-link shadow-none" href="#">2</a></li>
                <li class="page-item"><a class="page-link shadow-none" href="#">Suivant</a></li>
            </ul>
        </nav>
    </main>

    <section class="py-5 bg-white border-top border-bottom">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h3 class="fw-bold mb-3">Ne manquez aucun conseil</h3>
                    <p class="text-muted mb-4">Inscrivez-vous à la newsletter pour recevoir nos astuces et offres
                        exclusives.</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control form-control-lg border-light bg-light"
                            placeholder="Votre email">
                        <button class="btn btn-dark px-4">S'abonner</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
