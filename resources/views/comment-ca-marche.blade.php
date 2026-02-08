<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Comment ça marche | Afrolia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-web.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .step-circle {
            width: 50px;
            height: 50px;
            background-color: #f3a67d;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 1.2rem;
            margin-bottom: 1rem;
            box-shadow: 0 4px 10px rgba(243, 166, 125, 0.3);
        }
        .process-line {
            position: relative;
        }
        @media (min-width: 992px) {
            .process-line::after {
                content: '';
                position: absolute;
                top: 25px;
                left: 10%;
                right: 10%;
                height: 2px;
                background: #eee;
                z-index: -1;
            }
        }
        .nav-pills .nav-link.active {
            background-color: #212529;
            color: #f3a67d;
        }
        .nav-link { color: #212529; font-weight: 600; }
    </style>
</head>

<body class="bg-light">

    <header class="hero-section d-flex align-items-center text-white text-center" style="min-height: 40vh;">
        <div class="container">
            <h1 class="display-4 fw-bold mb-3">
                L'expérience <span class="highlight-text">Afrolia</span>
            </h1>
            <p class="lead">Votre beauté, organisée en quelques clics.</p>
        </div>
    </header>

    <section class="py-5">
        <div class="container">

            <ul class="nav nav-pills justify-content-center mb-5 shadow-sm p-2 bg-white rounded-pill mx-auto" style="max-width: 400px;" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active rounded-pill px-4" id="pills-client-tab" data-bs-toggle="pill" data-bs-target="#pills-client" type="button" role="tab">Je suis une Cliente</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-pill px-4" id="pills-pro-tab" data-bs-toggle="pill" data-bs-target="#pills-pro" type="button" role="tab">Je suis Coiffeuse</button>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">

                <div class="tab-pane fade show active" id="pills-client" role="tabpanel">
                    <div class="row g-4 process-line text-center justify-content-center">
                        <div class="col-lg-2 col-md-4">
                            <div class="step-circle mx-auto">1</div>
                            <h5 class="fw-bold">Inscription</h5>
                            <p class="small text-muted">Créez votre profil gratuitement en 30 secondes.</p>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="step-circle mx-auto">2</div>
                            <h5 class="fw-bold">Recherche</h5>
                            <p class="small text-muted">Trouvez une experte selon vos critères précis.</p>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="step-circle mx-auto">3</div>
                            <h5 class="fw-bold">Sélection</h5>
                            <p class="small text-muted">Choisissez la prestation (tresses, soins, etc.).</p>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="step-circle mx-auto">4</div>
                            <h5 class="fw-bold">Réservation</h5>
                            <p class="small text-muted">Validez le créneau et payez en toute sécurité.</p>
                        </div>
                        <div class="col-lg-2 col-md-4">
                            <div class="step-circle mx-auto">5</div>
                            <h5 class="fw-bold">Avis</h5>
                            <p class="small text-muted">Savourez votre look et notez l'expérience.</p>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-primary btn-action btn-lg px-5 shadow">Commencer maintenant</a>
                    </div>
                </div>

                <div class="tab-pane fade" id="pills-pro" role="tabpanel">
                    <div class="row g-4 text-center justify-content-center">
                        <div class="col-lg-3">
                            <div class="step-circle mx-auto" style="background-color: #212529;">1</div>
                            <h5 class="fw-bold">Créez votre salon</h5>
                            <p class="small text-muted">Ajoutez vos photos, vos tarifs et vos diplômes.</p>
                        </div>
                        <div class="col-lg-3">
                            <div class="step-circle mx-auto" style="background-color: #212529;">2</div>
                            <h5 class="fw-bold">Gérez l'agenda</h5>
                            <p class="small text-muted">Définissez vos jours et heures de disponibilité.</p>
                        </div>
                        <div class="col-lg-3">
                            <div class="step-circle mx-auto" style="background-color: #212529;">3</div>
                            <h5 class="fw-bold">Recevez des RDV</h5>
                            <p class="small text-muted">Soyez notifiée dès qu'une cliente réserve.</p>
                        </div>
                        <div class="col-lg-3">
                            <div class="step-circle mx-auto" style="background-color: #212529;">4</div>
                            <h5 class="fw-bold">Encaissez</h5>
                            <p class="small text-muted">Recevez vos paiements directement sur votre compte.</p>
                        </div>
                    </div>
                    <div class="text-center mt-5">
                        <a href="#" class="btn btn-dark btn-action btn-lg px-5 shadow">Devenir Partenaire</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h2 class="fw-bold">Des questions ?</h2>
                    <p class="text-muted">Nous avons résumé les réponses les plus fréquentes pour vous aider à démarrer sereinement.</p>
                </div>
                <div class="col-lg-7">
                    <div class="accordion accordion-flush shadow-sm" id="faqAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                    Le paiement est-il sécurisé ?
                                </button>
                            </h2>
                            <div id="faq1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Oui, Afrolia utilise des protocoles de sécurité bancaire SSL. L'argent est conservé en séquestre et n'est versé à la coiffeuse qu'une fois la prestation terminée.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                    Puis-je annuler un rendez-vous ?
                                </button>
                            </h2>
                            <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                <div class="accordion-body text-muted">
                                    Oui, l'annulation est gratuite jusqu'à 24h avant le rendez-vous. Passé ce délai, des frais de retenue peuvent s'appliquer selon les conditions du salon.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
