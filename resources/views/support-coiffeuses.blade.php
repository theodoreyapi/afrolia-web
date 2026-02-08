<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Support professionnel | Afrolia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-web.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .support-card {
            border: none;
            border-radius: 20px;
            transition: all 0.3s ease;
            background: #fff;
        }
        .support-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.08) !important;
        }
        .icon-badge {
            width: 60px;
            height: 60px;
            background: #212529;
            color: #f3a67d;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .whatsapp-btn {
            background-color: #25D366;
            color: white;
            border: none;
        }
        .whatsapp-btn:hover {
            background-color: #128C7E;
            color: white;
        }
    </style>
</head>

<body class="bg-light">

    <header class="hero-section d-flex align-items-center text-center text-white" style="min-height: 45vh; background: linear-gradient(135deg, #212529 0%, #343a40 100%);">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">
                Votre succès est <span class="highlight-text">notre priorité</span>
            </h1>
            <p class="lead opacity-75">Une équipe dédiée pour accompagner la croissance de votre salon.</p>
        </div>
    </header>

    <section class="py-5 mt-n5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card support-card p-4 shadow-sm text-center">
                        <div class="icon-badge mx-auto"><i class="fab fa-whatsapp"></i></div>
                        <h4 class="fw-bold">WhatsApp Pro</h4>
                        <p class="small text-muted">Pour une réponse instantanée de notre équipe support.</p>
                        <a href="https://wa.me/votre_numero" class="btn whatsapp-btn rounded-pill px-4">Discuter sur WhatsApp</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card support-card p-4 shadow-sm text-center">
                        <div class="icon-badge mx-auto"><i class="fas fa-envelope"></i></div>
                        <h4 class="fw-bold">Email Dédié</h4>
                        <p class="small text-muted">Pour vos demandes administratives ou techniques complexes.</p>
                        <a href="mailto:pro@afrolia-ci.com" class="btn btn-dark rounded-pill px-4">Nous écrire</a>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-5">
                <div class="col-12 text-center mb-5">
                    <h2 class="fw-bold">Comment pouvons-nous vous aider ?</h2>
                    <div class="mx-auto bg-primary" style="height: 3px; width: 50px;"></div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-magic text-primary fs-4 me-3 mt-1"></i>
                        <div>
                            <h5 class="fw-bold">Configuration du profil</h5>
                            <p class="small text-muted">Aide au choix de vos photos, à la rédaction de votre bio et à l'ajout de vos tarifs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-credit-card text-primary fs-4 me-3 mt-1"></i>
                        <div>
                            <h5 class="fw-bold">Gestion des paiements</h5>
                            <p class="small text-muted">Suivi de vos virements, explications sur les factures et les commissions.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex align-items-start">
                        <i class="fas fa-balance-scale text-primary fs-4 me-3 mt-1"></i>
                        <div>
                            <h5 class="fw-bold">Médiation & Litiges</h5>
                            <p class="small text-muted">Intervention en cas d'absence d'une cliente ou de désaccord sur une prestation.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white border-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Besoin d'un guide rapide ?</h2>
                    <p class="text-muted mb-4">Consultez nos tutoriels vidéos et nos guides PDF pour apprendre à utiliser toutes les fonctionnalités de votre espace pro comme une experte.</p>
                    <a href="#" class="btn btn-outline-dark px-4">Accéder à l'Afrolia Academy <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="p-4 bg-light rounded-4 border text-center">
                        <i class="fas fa-play-circle display-4 text-primary mb-3"></i>
                        <h5>Vidéo : Gérer mon agenda</h5>
                        <p class="small text-muted">Apprenez à bloquer vos créneaux en 2 minutes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 bg-dark text-white-50 text-center small">
        <div class="container">
            <p class="mb-0"><i class="far fa-clock me-2"></i> Support disponible du Lundi au Samedi, de 08h00 à 19h00.</p>
        </div>
    </footer>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
