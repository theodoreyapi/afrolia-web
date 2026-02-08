<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Tarification Partenaires | Afrolia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-web.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .pricing-box {
            border: 2px solid #f3a67d;
            border-radius: 25px;
            background: #fff;
            transition: transform 0.3s ease;
        }
        .commission-circle {
            width: 120px;
            height: 120px;
            background: #212529;
            color: #f3a67d;
            border-radius: 50%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: -60px auto 20px;
            border: 5px solid #fff;
        }
        .benefit-icon {
            color: #f3a67d;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
    </style>
</head>

<body class="bg-light">

    <header class="hero-section d-flex align-items-center text-center text-white" style="min-height: 45vh;">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">
                Un modèle basé sur votre <span class="highlight-text">succès</span>
            </h1>
            <p class="lead">Pas d'abonnement, pas de frais fixes. Nous grandissons ensemble.</p>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center mt-5">
                    <div class="pricing-box p-5 shadow-lg">
                        <div class="commission-circle shadow">
                            <span class="h2 fw-bold mb-0">15%</span>
                            <small class="text-uppercase" style="font-size: 0.6rem;">Commission</small>
                        </div>
                        <h2 class="fw-bold mb-3">Sur chaque réservation</h2>
                        <p class="text-muted mb-4">
                            L'accès à tous nos outils professionnels est gratuit. Nous prélevons une commission uniquement sur les prestations que nous vous aidons à réaliser.
                        </p>
                        <hr class="my-4">
                        <div class="row text-start g-3">
                            <div class="col-12 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Zéro frais d'inscription</span>
                            </div>
                            <div class="col-12 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Zéro abonnement mensuel</span>
                            </div>
                            <div class="col-12 d-flex align-items-center">
                                <i class="fas fa-check-circle text-success me-2"></i>
                                <span>Support technique inclus</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">À quoi sert cette commission ?</h2>
                <p class="text-muted">Elle nous permet de vous offrir le meilleur service possible.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4 text-center">
                    <i class="fas fa-ad benefit-icon"></i>
                    <h5 class="fw-bold">Marketing & Publicité</h5>
                    <p class="small text-muted">Nous investissons pour attirer de nouvelles clientes sur votre profil chaque jour.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-laptop-code benefit-icon"></i>
                    <h5 class="fw-bold">Maintenance Technique</h5>
                    <p class="small text-muted">Votre agenda, vos paiements et votre profil sont sécurisés et mis à jour en permanence.</p>
                </div>
                <div class="col-md-4 text-center">
                    <i class="fas fa-headset benefit-icon"></i>
                    <h5 class="fw-bold">Service Client</h5>
                    <p class="small text-muted">Nous gérons les litiges et les questions des clientes pour que vous restiez concentrée sur votre art.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="bg-dark text-white p-5 rounded-4 shadow">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h3 class="fw-bold mb-3">Exemple concret :</h3>
                        <p class="opacity-75">Pour une coiffure à 20 000 CFA :</p>
                        <ul class="list-unstyled">
                            <li class="mb-2 d-flex justify-content-between border-bottom pb-2">
                                <span>Prestation encaissée</span>
                                <strong>20 000 CFA</strong>
                            </li>
                            <li class="mb-2 d-flex justify-content-between border-bottom pb-2">
                                <span>Commission Afrolia (15%)</span>
                                <span class="text-danger">- 3 000 CFA</span>
                            </li>
                            <li class="mt-3 d-flex justify-content-between h4">
                                <span class="text-primary">Ce que vous recevez</span>
                                <strong class="text-primary">17 000 CFA</strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-center mt-4 mt-lg-0">
                        <p class="small opacity-50 italic">"Je ne paie rien si je n'ai pas de rendez-vous. C'est le partenaire idéal pour lancer mon activité sans risque."</p>
                        <p class="fw-bold mb-0">— Sarah, Coiffeuse partenaire depuis 2 ans</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-center">
        <div class="container">
            <h2 class="fw-bold mb-4">Démarrez gratuitement dès aujourd'hui</h2>
            <a href="#" class="btn btn-primary btn-action btn-lg px-5">Ouvrir mon salon</a>
        </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
