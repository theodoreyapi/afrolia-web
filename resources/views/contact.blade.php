<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Contact | Afrolia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-web.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>

    <header class="hero-section d-flex align-items-center text-white" style="min-height: 40vh; background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('{{ URL::asset('assets/images/contact-bg.jpg') }}') center/cover;">
        <div class="container text-center">
            <h1 class="display-4 fw-bold mb-3">
                Contactez-<span class="highlight-text">nous</span>
            </h1>
            <p class="lead">Une question ? Un partenariat ? Notre équipe vous répond sous 24h.</p>
        </div>
    </header>

    <section class="py-5 mt-n5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-5">
                    <div class="contact-info-card p-4 rounded-4 shadow-sm bg-light h-100">
                        <h2 class="h4 fw-bold mb-4 text-dark">Nos coordonnées</h2>

                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box-small me-3">📍</div>
                            <div>
                                <p class="fw-bold mb-0">Siège Social</p>
                                <p class="text-muted mb-0">Paris, France (ou votre ville)</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box-small me-3">📧</div>
                            <div>
                                <p class="fw-bold mb-0">Email</p>
                                <p class="text-muted mb-0">contact@afrolia-ci.com</p>
                            </div>
                        </div>

                        <div class="d-flex align-items-center mb-4">
                            <div class="icon-box-small me-3">📞</div>
                            <div>
                                <p class="fw-bold mb-0">Téléphone / WhatsApp</p>
                                <p class="text-muted mb-0">+33 1 23 45 67 89</p>
                            </div>
                        </div>

                        <hr class="my-4">

                        <h3 class="h6 fw-bold mb-3">Suivez-nous</h3>
                        <div class="d-flex gap-3">
                            <a href="#" class="btn btn-outline-dark btn-sm rounded-circle"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-outline-dark btn-sm rounded-circle"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-outline-dark btn-sm rounded-circle"><i class="fab fa-tiktok"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <div class="card border-0 shadow-lg p-4 p-md-5 rounded-4">
                        <h2 class="h4 fw-bold mb-4">Envoyez un message</h2>
                        <form action="#" method="POST">
                            @csrf <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">Nom complet</label>
                                    <input type="text" class="form-control form-control-lg border-light bg-light" placeholder="Ex: Amina Diallo" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label fw-semibold">Email</label>
                                    <input type="email" class="form-control form-control-lg border-light bg-light" placeholder="amina@email.com" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Sujet</label>
                                <select class="form-select form-control-lg border-light bg-light">
                                    <option selected>Demande d'information</option>
                                    <option>Support technique</option>
                                    <option>Devenir coiffeuse partenaire</option>
                                    <option>Autre</option>
                                </select>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Votre message</label>
                                <textarea class="form-control border-light bg-light" rows="5" placeholder="Comment pouvons-nous vous aider ?" required></textarea>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-action btn-lg shadow-sm">
                                    Envoyer le message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
