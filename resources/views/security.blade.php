<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Politique de Confidentialité | Afrolia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style-web.css') }}">
</head>

<body>

    <header class="hero-section d-flex align-items-center" style="min-height: 50vh;">
        <div class="container text-white">
            <h1 class="display-5 fw-bold">
                Politique de <span class="highlight-text">Confidentialité</span>
            </h1>
            <p class="lead mt-3">
                Protection de vos données personnelles
            </p>
        </div>
    </header>

    <section class="py-5">
        <div class="container">

            {!! $condition->politicy !!}

        </div>
    </section>

    @include('footer')

</body>

</html>
