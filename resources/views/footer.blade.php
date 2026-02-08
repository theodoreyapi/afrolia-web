    <footer class="main-footer py-5">
        <div class="container">
            <div class="row gy-4">

                <div class="col-lg-4 col-md-12">
                    <p class="footer-brand"><span class="star-icon">✨</span>Afrolia</p>
                    <p class="footer-tagline">La coiffure Afro à portée de main</p>
                    <div class="social-icons d-flex mt-3">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2">
                    <h5 class="footer-heading">Pour les clientes</h5>
                    <ul class="footer-list list-unstyled mt-3">
                        <li><a href={{ url('trouver-coiffeuse') }}>Trouver une coiffeuse</a></li>
                        <li><a href={{ url('comment-ca-marche') }}>Comment ça marche</a></li>
                        <li><a href={{ url('tarifs-clientes') }}>Tarifs</a></li>
                        <li><a href={{ url('faq-clientes') }}>FAQ</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <h5 class="footer-heading">Pour les coiffeuses</h5>
                    <ul class="footer-list list-unstyled mt-3">
                        <li><a href={{ url('devenir-coiffeuse') }}>Devenir partenaire</a></li>
                        <li><a href={{ url('avantages-coiffeuses') }}>Avantages</a></li>
                        <li><a href={{ url('tarification-coiffeuses') }}>Tarification</a></li>
                        <li><a href={{ url('support-coiffeuses') }}>Support pro</a></li>
                    </ul>
                </div>

                <div class="col-6 col-md-4 col-lg-3">
                    <h5 class="footer-heading">Entreprise</h5>
                    <ul class="footer-list list-unstyled mt-3">
                        <li><a href="{{ url('/') }}">Accueil</a></li>
                        <li><a href="{{ url('about') }}">À propos</a></li>
                        <li><a href={{ url('blog') }}>Blog</a></li>
                        <li><a href={{ url('carrieres') }}>Carrières</a></li>
                        <li><a href={{ url('contact') }}>Contact</a></li>
                    </ul>
                </div>
            </div>

            <hr class="footer-divider my-4">

            <div class="row align-items-center">
                <div class="col-md-6 text-md-start text-center mb-2 mb-md-0">
                    <p class="copyright-text">© {{ date('Y') }} Afrolia. Tous droits réservés.</p>
                </div>
                <div class="col-md-6 text-md-end text-center">
                    <p class="legal-links mb-0">
                        <!-- <a href="#">Mentions légales</a> • -->
                        <a href="{{ url('security') }}">Confidentialité</a> •
                        <a href="{{ url('condition') }}">CGU</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>
