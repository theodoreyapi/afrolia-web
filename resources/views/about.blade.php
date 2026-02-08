<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>À propos | Afrolia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-web.css') }}">
    <style>
        .about-content-text {
            line-height: 1.8;
            color: #4a4a4a;
            font-size: 1.1rem;
        }
        .about-content-text h2, .about-content-text h3 {
            color: #212529;
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }
        .vision-card {
            border-left: 5px solid #f3a67d; /* Ta couleur highlight */
            background-color: #fffaf8;
        }
    </style>
</head>

<body>

    <header class="hero-section d-flex align-items-center text-white" style="min-height: 45vh; background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ URL::asset('assets/images/about-hero.jpg') }}') center/cover;">
        <div class="container text-center">
            <p class="brand-text mb-2"><span class="star-icon me-2">✨</span>L'histoire d'Afrolia</p>
            <h1 class="display-3 fw-bold">
                Plus qu'une plateforme, <br><span class="highlight-text">une mission</span>
            </h1>
        </div>
    </header>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <div class="col-md-5">
                    <div class="vision-card p-4 shadow-sm h-100 rounded-3">
                        <span class="fs-1">🎯</span>
                        <h3 class="h4 fw-bold mt-2">Notre Mission</h3>
                        <p class="text-muted">Valoriser l'expertise de la coiffure Afro et simplifier l'accès à des soins de qualité pour toutes.</p>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="vision-card p-4 shadow-sm h-100 rounded-3">
                        <span class="fs-1">🚀</span>
                        <h3 class="h4 fw-bold mt-2">Notre Vision</h3>
                        <p class="text-muted">Devenir la référence mondiale de la beauté Afro connectée, unissant technologie et savoir-faire traditionnel.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="text-center mb-5">
                        <h2 class="display-6 fw-bold text-dark">Ce qui nous définit</h2>
                        <div class="mx-auto bg-primary" style="height: 3px; width: 60px;"></div>
                    </div>

                    <div class="about-content-text shadow-sm p-4 p-md-5 border rounded-4 bg-white">
                        {!! $condition->about !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <h2 class="display-4 fw-bold highlight-text mb-0">500+</h2>
                    <p class="lead">Experts certifiés</p>
                </div>
                <div class="col-md-4">
                    <h2 class="display-4 fw-bold highlight-text mb-0">10k+</h2>
                    <p class="lead">Clientes ravies</p>
                </div>
                <div class="col-md-4">
                    <h2 class="display-4 fw-bold highlight-text mb-0">4.8/5</h2>
                    <p class="lead">Note moyenne</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 my-5 text-center">
        <div class="container">
            <h2 class="fw-bold mb-4">Prêt(e) à faire partie de l'aventure ?</h2>
            <div class="d-flex justify-content-center gap-3">
                <a href="#" class="btn btn-primary btn-action px-4 py-2">Rejoindre Afrolia</a>
                <a href="{{url('contact')}}" class="btn btn-outline-secondary px-4 py-2">Nous contacter</a>
            </div>
        </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
