<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Devenir coiffeuse partenaire | Afrolia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-web.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .pro-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ URL::asset('assets/images/pro-header.jpg') }}') center/cover;
            min-height: 60vh;
        }
        .benefit-card {
            border: none;
            border-radius: 20px;
            background: #fff;
            transition: all 0.3s ease;
        }
        .benefit-card:hover {
            box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
            transform: translateY(-5px);
        }
        .icon-box {
            width: 50px;
            height: 50px;
            background: #f3a67d;
            color: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-bottom: 20px;
        }
        .stats-pro {
            background-color: #212529;
            border-radius: 30px;
            padding: 40px;
        }
    </style>
</head>

<body class="bg-light">

    <header class="pro-hero d-flex align-items-center text-white">
        <div class="container text-center">
            <span class="badge bg-primary mb-3 px-3 py-2 rounded-pill">Espace Professionnel</span>
            <h1 class="display-4 fw-bold">Transformez votre talent en <span class="highlight-text">succès</span></h1>
            <p class="lead mt-3 mx-auto" style="max-width: 700px;">
                Rejoignez la première communauté de coiffeuses expertes et gérez votre activité de A à Z avec nos outils digitaux.
            </p>
            <div class="mt-4">
                <a href="#" class="btn btn-primary btn-action btn-lg px-5">Ouvrir mon salon en ligne</a>
            </div>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Pourquoi choisir <span class="text-primary">Afrolia Pro</span> ?</h2>
                <p class="text-muted">Tout ce dont vous avez besoin pour briller.</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card benefit-card shadow-sm p-4 h-100">
                        <div class="icon-box"><i class="fas fa-rocket"></i></div>
                        <h4 class="fw-bold">Visibilité Max</h4>
                        <p class="text-muted small">Soyez vue par des milliers de clientes qui recherchent activement votre savoir-faire dans votre secteur.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card benefit-card shadow-sm p-4 h-100">
                        <div class="icon-box"><i class="fas fa-calendar-alt"></i></div>
                        <h4 class="fw-bold">Zéro Stress</h4>
                        <p class="text-muted small">Un agenda intelligent qui travaille pour vous. Finis les rendez-vous oubliés ou les appels en plein milieu d'une prestation.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card benefit-card shadow-sm p-4 h-100">
                        <div class="icon-box"><i class="fas fa-wallet"></i></div>
                        <h4 class="fw-bold">Revenus Sécurisés</h4>
                        <p class="text-muted small">Encaissez vos prestations en toute sécurité. Protégez-vous contre les annulations de dernière minute.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="display-6 fw-bold mb-4">Un tableau de bord conçu <span class="text-primary">pour vous</span></h2>
                    <ul class="list-unstyled">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                            <div><strong>Gestion de catalogue :</strong> Modifiez vos tarifs et vos photos en un instant.</div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                            <div><strong>Analyses :</strong> Suivez l'évolution de votre chiffre d'affaires chaque mois.</div>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-success mt-1 me-3"></i>
                            <div><strong>Avis Clients :</strong> Construisez votre réputation grâce aux retours de vos clientes.</div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <img src="{{ URL::asset('assets/images/dashboard-preview.png') }}" alt="Dashboard Pro Afrolia" class="img-fluid rounded-4 shadow-lg border">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="stats-pro text-white text-center">
                <h3 class="display-6 fw-bold mb-3">L'inscription est gratuite !</h3>
                <p class="mb-4 opacity-75">Nous ne gagnons de l'argent que lorsque vous en gagnez. Pas d'abonnement mensuel caché.</p>
                <div class="row g-4 justify-content-center">
                    <div class="col-6 col-md-3">
                        <h4 class="fw-bold text-primary h2 mb-0">0 CFA</h4>
                        <small>Frais d'entrée</small>
                    </div>
                    <div class="col-6 col-md-3">
                        <h4 class="fw-bold text-primary h2 mb-0">24/7</h4>
                        <small>Prises de RDV</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 text-center">
        <div class="container py-4">
            <h2 class="fw-bold mb-4">Prête à booster votre carrière ?</h2>
            <p class="text-muted mb-5">Il ne vous faut que 5 minutes pour configurer votre salon.</p>
            <a href="#" class="btn btn-primary btn-action btn-lg px-5 shadow">Créer mon profil pro</a>
        </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
