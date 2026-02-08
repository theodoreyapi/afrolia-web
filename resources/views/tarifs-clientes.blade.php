<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Tarifs & Transparence | Afrolia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-web.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .pricing-hero {
            background: linear-gradient(135deg, #212529 0%, #343a40 100%);
            padding: 80px 0;
        }
        .free-badge {
            background-color: #f3a67d;
            color: #fff;
            padding: 5px 20px;
            border-radius: 50px;
            font-weight: bold;
            display: inline-block;
            margin-bottom: 1rem;
        }
        .price-card {
            border: none;
            border-radius: 20px;
            transition: transform 0.3s ease;
        }
        .price-card:hover {
            transform: translateY(-5px);
        }
        .feature-list {
            list-style: none;
            padding-left: 0;
        }
        .feature-list li {
            padding: 10px 0;
            border-bottom: 1px solid #f8f9fa;
        }
        .feature-list li i {
            color: #28a745;
            margin-right: 10px;
        }
    </style>
</head>

<body class="bg-light">

    <header class="pricing-hero text-center text-white">
        <div class="container">
            <span class="free-badge">100% Gratuit pour les clientes</span>
            <h1 class="display-4 fw-bold">Des tarifs <span class="highlight-text">clairs</span></h1>
            <p class="lead opacity-75">Aucun abonnement, aucun frais d'inscription, juste de la beauté.</p>
        </div>
    </header>

    <section class="py-5" style="margin-top: -50px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card price-card shadow-lg p-4 p-md-5 bg-white">
                        <div class="text-center mb-5">
                            <h2 class="fw-bold">Comment ça fonctionne ?</h2>
                            <p class="text-muted">Afrolia simplifie votre mise en beauté sans ajouter de frais supplémentaires à votre facture.</p>
                        </div>

                        <div class="row g-4">
                            <div class="col-md-6 border-end">
                                <div class="p-3">
                                    <h4 class="fw-bold h5 mb-3 text-primary"><i class="fas fa-user-plus me-2"></i> Inscription & Accès</h4>
                                    <p class="small text-muted">L'accès à la plateforme, la recherche de coiffeuses et la consultation des avis sont gratuits à vie.</p>
                                    <span class="fw-bold text-dark">0 CFA / mois</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-3">
                                    <h4 class="fw-bold h5 mb-3 text-primary"><i class="fas fa-wallet me-2"></i> Prestations</h4>
                                    <p class="small text-muted">Vous payez uniquement le montant affiché sur le profil de la coiffeuse pour la coiffure choisie.</p>
                                    <span class="fw-bold text-dark">Prix de la coiffeuse</span>
                                </div>
                            </div>
                        </div>

                        <hr class="my-5">

                        <h3 class="h4 fw-bold mb-4 text-center">Ce qui est inclus dans chaque réservation</h3>
                        <ul class="feature-list">
                            <li><i class="fas fa-check-circle"></i> <strong>Paiement sécurisé :</strong> Vos fonds sont protégés jusqu'à la fin de la prestation.</li>
                            <li><i class="fas fa-check-circle"></i> <strong>Confirmation instantanée :</strong> Finis les échanges interminables par messages.</li>
                            <li><i class="fas fa-check-circle"></i> <strong>Support Client :</strong> Une équipe dédiée pour vous aider en cas de litige ou d'imprévu.</li>
                            <li><i class="fas fa-check-circle"></i> <strong>Historique de beauté :</strong> Retrouvez toutes vos factures et vos styles préférés.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Vos questions sur les paiements</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="accordion accordion-flush bg-transparent" id="pricingFAQ">
                        <div class="accordion-item bg-transparent">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q1">
                                    Qui fixe les prix des coiffures ?
                                </button>
                            </h2>
                            <div id="q1" class="accordion-collapse collapse" data-bs-parent="#pricingFAQ">
                                <div class="accordion-body">
                                    Chaque coiffeuse est indépendante et fixe ses propres tarifs en fonction de son expertise, de la complexité du travail et des produits utilisés.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-transparent">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed bg-transparent fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#q2">
                                    Y a-t-il des frais de commission pour moi ?
                                </button>
                            </h2>
                            <div id="q2" class="accordion-collapse collapse" data-bs-parent="#pricingFAQ">
                                <div class="accordion-body">
                                    Non, Afrolia ne facture aucun frais de service aux clientes. Le prix que vous voyez sur la prestation est le prix que vous payez.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark text-white text-center">
        <div class="container">
            <h2 class="fw-bold mb-4">Prête à réserver ?</h2>
            <p class="mb-4">Créez votre compte gratuitement et accédez aux meilleures expertes.</p>
            <a href="#" class="btn btn-primary btn-action btn-lg px-5">M'inscrire gratuitement</a>
        </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
