<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>FAQ | Afrolia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-web.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .accordion-item { border: none; margin-bottom: 15px; border-radius: 12px !important; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
        .accordion-button:not(.collapsed) { background-color: #fffaf8; color: #f3a67d; box-shadow: none; }
        .accordion-button:focus { box-shadow: none; border-color: rgba(0,0,0,.125); }
        .faq-category-card { border: none; transition: all 0.3s ease; cursor: pointer; }
        .faq-category-card:hover { transform: translateY(-5px); background-color: #f3a67d !important; color: white !important; }
        .faq-category-card:hover i { color: white !important; }
    </style>
</head>

<body class="bg-light">

    <header class="hero-section d-flex align-items-center text-center text-white" style="min-height: 45vh;">
        <div class="container">
            <h1 class="display-5 fw-bold mb-3">Questions <span class="highlight-text">fréquentes</span></h1>
            <p class="lead mb-4">Comment pouvons-nous vous aider aujourd'hui ?</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="input-group input-group-lg shadow-sm rounded-pill overflow-hidden">
                        <span class="input-group-text bg-white border-0 ps-4"><i class="fas fa-search text-muted"></i></span>
                        <input type="text" class="form-control border-0 py-3" placeholder="Rechercher une réponse...">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div class="row g-4 mb-5">
                <div class="col-md-4">
                    <div class="card faq-category-card shadow-sm p-4 text-center bg-white h-100">
                        <i class="fas fa-calendar-check fs-2 text-primary mb-3"></i>
                        <h5 class="fw-bold">Réservations</h5>
                        <p class="small text-muted mb-0">Annulations, modifications et planning.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card faq-category-card shadow-sm p-4 text-center bg-white h-100">
                        <i class="fas fa-credit-card fs-2 text-primary mb-3"></i>
                        <h5 class="fw-bold">Paiements</h5>
                        <p class="small text-muted mb-0">Moyens de paiement et remboursements.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card faq-category-card shadow-sm p-4 text-center bg-white h-100">
                        <i class="fas fa-user-shield fs-2 text-primary mb-3"></i>
                        <h5 class="fw-bold">Sécurité</h5>
                        <p class="small text-muted mb-0">Gestion du compte et confidentialité.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="accordion shadow-none" id="accordionFAQ">

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                    Puis-je annuler une réservation ?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body text-muted">
                                    Oui, vous pouvez annuler votre réservation via votre tableau de bord. Veuillez noter que les conditions d'annulation (remboursement total ou partiel) dépendent de la politique définie par la coiffeuse au moment de la réservation.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                    Quels moyens de paiement sont acceptés ?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body text-muted">
                                    Pour votre sécurité, Afrolia accepte les paiements par <strong>Carte Bancaire (Visa, Mastercard)</strong> ainsi que les solutions de <strong>Mobile Money</strong> (Orange Money, MTN, Wave selon votre pays).
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-bold py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                    Comment contacter le support client ?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFAQ">
                                <div class="accordion-body text-muted">
                                    Notre équipe est disponible 7j/7. Vous pouvez nous contacter via le bouton "Aide" dans votre espace personnel, ou directement par email via notre page <a href="/contact" class="text-primary">Contact</a>.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white border-top">
        <div class="container text-center">
            <h3 class="fw-bold mb-3">Vous n'avez pas trouvé votre réponse ?</h3>
            <p class="text-muted mb-4">Posez-nous votre question directement, nous vous répondrons en moins de 24h.</p>
            <a href="/contact" class="btn btn-dark btn-action px-5 py-3">Contacter l'assistance</a>
        </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
