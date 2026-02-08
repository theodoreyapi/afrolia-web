<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Avantages | Afrolia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-web.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .advantage-card {
            border: none;
            border-radius: 1.5rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            background: #ffffff;
        }
        .advantage-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,0.1) !important;
        }
        .icon-wrapper {
            width: 70px;
            height: 70px;
            background-color: #fff4ef;
            color: #f3a67d;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 1.8rem;
            margin-bottom: 1.5rem;
        }
        .cta-box {
            background-color: #212529;
            color: white;
            border-radius: 2rem;
            padding: 4rem 2rem;
        }
    </style>
</head>

<body class="bg-light">

    <header class="hero-section d-flex align-items-center text-center text-white" style="min-height: 45vh;">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">
                Prenez une longueur <span class="highlight-text">d'avance</span>
            </h1>
            <p class="lead">Découvrez les outils conçus pour propulser votre talent.</p>
        </div>
    </header>

    <section class="py-5 mt-n5">
        <div class="container">
            <div class="row g-4 justify-content-center">

                <div class="col-md-6 col-lg-3">
                    <div class="card advantage-card p-4 h-100 shadow-sm text-center">
                        <div class="icon-wrapper mx-auto">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="fw-bold h5">Nouvelle Clientèle</h4>
                        <p class="text-muted small">Accédez à une communauté de milliers d'utilisatrices en quête de votre expertise.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card advantage-card p-4 h-100 shadow-sm text-center">
                        <div class="icon-wrapper mx-auto">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="fw-bold h5">Paiements Sécurisés</h4>
                        <p class="text-muted small">Finies les annulations sans frais. Vos revenus sont garantis et versés rapidement.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card advantage-card p-4 h-100 shadow-sm text-center">
                        <div class="icon-wrapper mx-auto">
                            <i class="fas fa-magic"></i>
                        </div>
                        <h4 class="fw-bold h5">Outils Pro</h4>
                        <p class="text-muted small">Agenda intelligent, gestion de catalogue et statistiques de vente en temps réel.</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3">
                    <div class="card advantage-card p-4 h-100 shadow-sm text-center">
                        <div class="icon-wrapper mx-auto">
                            <i class="fas fa-hand-holding-heart"></i>
                        </div>
                        <h4 class="fw-bold h5">Zéro Engagement</h4>
                        <p class="text-muted small">Aucun abonnement obligatoire. Vous êtes libre de gérer votre salon comme vous l'entendez.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4 h1">Plus qu'une plateforme, <br><span class="text-primary">votre partenaire</span>.</h2>
                    <p class="text-muted mb-4">
                        Afrolia a été pensé pour éliminer les barrières entre les professionnelles de la beauté afro et leur clientèle. Nous gérons la technologie, vous gérez votre art.
                    </p>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-check text-success me-3"></i>
                        <span class="fw-bold">Visibilité locale ciblée</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-check text-success me-3"></i>
                        <span class="fw-bold">Support dédié 7j/7</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-check text-success me-3"></i>
                        <span class="fw-bold">Marketing automatisé</span>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{ URL::asset('assets/images/advantages-illustration.svg') }}" alt="Avantages Afrolia" class="img-fluid" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="cta-box text-center shadow-lg">
                <h2 class="display-6 fw-bold mb-3">Prête à rejoindre l'aventure ?</h2>
                <p class="mb-5 opacity-75">L'inscription prend moins de 2 minutes.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="#" class="btn btn-primary btn-action btn-lg px-5 shadow">Ouvrir mon salon</a>
                    <a href="/contact" class="btn btn-outline-light btn-lg px-5">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
