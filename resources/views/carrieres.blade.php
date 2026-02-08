<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Carrières | Afrolia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-web.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .job-card {
            border: 1px solid #eee;
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .job-card:hover {
            border-color: #f3a67d;
            box-shadow: 0 10px 20px rgba(0,0,0,0.05);
            transform: translateY(-5px);
        }
        .job-type {
            font-size: 0.75rem;
            padding: 4px 12px;
            border-radius: 20px;
            font-weight: 600;
        }
        .type-cdi { background: #e3f2fd; color: #0d6efd; }
        .type-freelance { background: #f3e5f5; color: #9c27b0; }
        .type-stage { background: #e8f5e9; color: #2e7d32; }
    </style>
</head>

<body class="bg-light">

    <header class="hero-section d-flex align-items-center text-white" style="min-height: 50vh; background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ URL::asset('assets/images/team-work.jpg') }}') center/cover;">
        <div class="container text-center">
            <h1 class="display-3 fw-bold mb-3">Construisons le futur de la <span class="highlight-text">Beauté Afro</span></h1>
            <p class="lead mb-4">Rejoignez une équipe passionnée et aidez-nous à révolutionner l'industrie de la coiffure.</p>
            <a href="#openings" class="btn btn-primary btn-action btn-lg">Voir les postes ouverts</a>
        </div>
    </header>

    <section class="py-5 bg-white">
        <div class="container">
            <div class="row g-4 text-center">
                <div class="col-md-4">
                    <div class="p-4">
                        <div class="fs-1 mb-3">🌍</div>
                        <h3 class="h5 fw-bold">Impact Réel</h3>
                        <p class="text-muted small">Nous aidons des milliers de coiffeuses à vivre de leur passion et à développer leur autonomie financière.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4">
                        <div class="fs-1 mb-3">💡</div>
                        <h3 class="h5 fw-bold">Innovation</h3>
                        <p class="text-muted small">Relevez des défis techniques et créatifs au sein d'une startup en pleine hyper-croissance.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4">
                        <div class="fs-1 mb-3">🏠</div>
                        <h3 class="h5 fw-bold">Flexibilité</h3>
                        <p class="text-muted small">Télétravail partiel, horaires flexibles et une culture basée sur la confiance et le résultat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="openings" class="py-5">
        <div class="container">
            <div class="d-md-flex justify-content-between align-items-end mb-5">
                <div>
                    <h2 class="display-6 fw-bold">Postes ouverts</h2>
                    <p class="text-muted">Explorez nos opportunités et trouvez votre prochain défi.</p>
                </div>
                <div class="mb-2">
                    <select class="form-select border-0 shadow-sm">
                        <option selected>Tous les départements</option>
                        <option>Technologie</option>
                        <option>Marketing & Growth</option>
                        <option>Customer Success</option>
                    </select>
                </div>
            </div>

            <div class="row g-3">

                <div class="col-12">
                    <div class="card job-card p-4 rounded-4 bg-white">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h3 class="h5 fw-bold mb-1">Développeur Fullstack (Laravel / Vue.js)</h3>
                                <div class="d-flex gap-3 text-muted small">
                                    <span><i class="fas fa-map-marker-alt me-1"></i> Paris / Hybride</span>
                                    <span><i class="fas fa-briefcase me-1"></i> Technologie</span>
                                </div>
                            </div>
                            <div class="col-md-4 text-md-center mt-3 mt-md-0">
                                <span class="job-type type-cdi">CDI</span>
                            </div>
                            <div class="col-md-2 text-md-end mt-3 mt-md-0">
                                <a href="#" class="btn btn-outline-dark rounded-pill px-4">Postuler</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card job-card p-4 rounded-4 bg-white">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h3 class="h5 fw-bold mb-1">Social Media & Community Manager</h3>
                                <div class="d-flex gap-3 text-muted small">
                                    <span><i class="fas fa-map-marker-alt me-1"></i> Abidjan / Dakar</span>
                                    <span><i class="fas fa-briefcase me-1"></i> Marketing</span>
                                </div>
                            </div>
                            <div class="col-md-4 text-md-center mt-3 mt-md-0">
                                <span class="job-type type-freelance">Freelance</span>
                            </div>
                            <div class="col-md-2 text-md-end mt-3 mt-md-0">
                                <a href="#" class="btn btn-outline-dark rounded-pill px-4">Postuler</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card job-card p-4 rounded-4 bg-white">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h3 class="h5 fw-bold mb-1">Product Designer (UX/UI)</h3>
                                <div class="d-flex gap-3 text-muted small">
                                    <span><i class="fas fa-map-marker-alt me-1"></i> Remote</span>
                                    <span><i class="fas fa-briefcase me-1"></i> Technologie</span>
                                </div>
                            </div>
                            <div class="col-md-4 text-md-center mt-3 mt-md-0">
                                <span class="job-type type-stage">Stage (6 mois)</span>
                            </div>
                            <div class="col-md-2 text-md-end mt-3 mt-md-0">
                                <a href="#" class="btn btn-outline-dark rounded-pill px-4">Postuler</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="mt-5 p-5 bg-dark text-white rounded-4 text-center">
                <h3 class="fw-bold mb-3">Vous ne trouvez pas votre bonheur ?</h3>
                <p class="mb-4 text-white-50">Nous sommes toujours à la recherche de talents exceptionnels. Envoyez-nous votre CV !</p>
                <a href="mailto:jobs@afrolia-ci.com" class="btn btn-primary btn-action px-5">Candidature spontanée</a>
            </div>
        </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
