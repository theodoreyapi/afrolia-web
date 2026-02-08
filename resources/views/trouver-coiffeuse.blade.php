<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Trouver une coiffeuse | Afrolia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-web.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .search-mockup {
            background: white;
            padding: 20px;
            border-radius: 50px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.15);
            margin-top: -40px;
            position: relative;
            z-index: 10;
        }
        .feature-icon-circle {
            width: 60px;
            height: 60px;
            background: #fffaf8;
            border: 1px solid #f3a67d;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        .trust-section {
            background-color: #212529;
            color: white;
            border-radius: 20px;
        }
    </style>
</head>

<body>

    <header class="hero-section d-flex align-items-center text-white text-center" style="min-height: 55vh;">
        <div class="container py-5">
            <h1 class="display-4 fw-bold mb-3">
                Trouver la coiffeuse <span class="highlight-text">parfaite</span>
            </h1>
            <p class="lead mb-0">Découvrez des expertes passionnées près de chez vous, quel que soit votre style.</p>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="search-mockup d-none d-md-flex align-items-center gap-3 px-4">
                    <div class="flex-grow-1 border-end">
                        <small class="text-muted d-block ps-2">Où ?</small>
                        <input type="text" class="form-control border-0 bg-transparent" placeholder="Votre ville (ex: Abidjan, Paris...)">
                    </div>
                    <div class="flex-grow-1 border-end">
                        <small class="text-muted d-block ps-2">Quel style ?</small>
                        <input type="text" class="form-control border-0 bg-transparent" placeholder="Tresses, perruque, locks...">
                    </div>
                    <button class="btn btn-primary btn-action px-5 py-3 rounded-pill">Rechercher</button>
                </div>
            </div>
        </div>
    </div>

    <section class="py-5 mt-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold h1">Une recherche simple et intelligente</h2>
                <p class="text-muted lead">Plus besoin de chercher des heures sur les réseaux sociaux.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-3 text-center">
                    <div class="feature-icon-circle mx-auto">📍</div>
                    <h4 class="h5 fw-bold">Par géolocalisation</h4>
                    <p class="small text-muted">Trouvez des professionnelles dans votre commune ou quartier en un clic.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="feature-icon-circle mx-auto">🏷️</div>
                    <h4 class="h5 fw-bold">Selon votre budget</h4>
                    <p class="small text-muted">Filtrez les résultats par gamme de prix pour respecter votre portefeuille.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="feature-icon-circle mx-auto">🛡️</div>
                    <h4 class="h5 fw-bold">Profils vérifiés</h4>
                    <p class="small text-muted">Chaque coiffeuse est rigoureusement sélectionnée pour garantir son talent.</p>
                </div>
                <div class="col-md-3 text-center">
                    <div class="feature-icon-circle mx-auto">💬</div>
                    <h4 class="h5 fw-bold">Avis vérifiés</h4>
                    <p class="small text-muted">Fiez-vous aux photos réelles et aux notes laissées par la communauté.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="trust-section p-4 p-md-5 shadow-lg">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <h2 class="display-6 fw-bold mb-3">Pourquoi réserver via <span class="highlight-text">Afrolia</span> ?</h2>
                        <div class="d-flex mb-3">
                            <span class="text-success fs-4 me-3">✓</span>
                            <p class="mb-0">Paiement sécurisé et garanti jusqu'à la fin de la prestation.</p>
                        </div>
                        <div class="d-flex mb-3">
                            <span class="text-success fs-4 me-3">✓</span>
                            <p class="mb-0">Service client disponible 7j/7 pour vous accompagner.</p>
                        </div>
                        <div class="d-flex mb-3">
                            <span class="text-success fs-4 me-3">✓</span>
                            <p class="mb-0">Historique de vos coiffures et factures centralisé.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 text-center">
                        <img src="{{ URL::asset('assets/images/search-preview.png') }}" alt="Recherche Afrolia" class="img-fluid rounded shadow-sm">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-center">
        <div class="container py-5">
            <h2 class="fw-bold mb-4 h1">Prête à changer de look ?</h2>
            <p class="lead text-muted mb-5">Rejoignez plus de 10 000 clientes satisfaites.</p>
            <div class="d-flex justify-content-center gap-3 flex-wrap">
                <a href="#" class="btn btn-primary btn-action btn-lg px-5">Commencer ma recherche</a>
                <a href="#" class="btn btn-outline-dark btn-lg px-5">Créer un compte</a>
            </div>
        </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
