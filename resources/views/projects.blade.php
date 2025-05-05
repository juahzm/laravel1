@extends('master')
@section('title', 'projects')
@section('content')

<!-- Projects Section-->
<section class="py-5">
    <div class="container px-5 mb-5">
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Des Projets</span></h1>
        </div>
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-11 col-xl-9 col-xxl-8">
                <!-- Project Card 1-->
                <div class="card overflow-hidden shadow rounded-4 border-0 mb-5">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">Stampee</h2>
                                <p>Ce projet a été construit selon une architecture <strong>MVC (Modèle-Vue-Contrôleur)</strong>, ce qui permet une séparation claire des responsabilités entre la gestion des données, l’affichage et la logique métier. Il s'agit d'une plateforme d'enchères en ligne dédiée à la vente et à l'achat de timbres, où les utilisateurs peuvent consulter les lots disponibles et placer des mises en temps réel.
                                    <br></br>
                                    L’interface utilisateur est dynamique : du <strong>JavaScript "vanille"</strong> a été utilisé pour effectuer des requêtes fetch vers le serveur, ce qui permet de charger et d’afficher les contenus selon les besoins de l'utilisateur, sans recharger la page. Cela améliore l'expérience utilisateur en rendant la navigation plus fluide et interactive.
                                </p>
                            </div>
                            <img class="img-fluid" src="assets/projet_1.png" alt="MVC" />
                        </div>
                    </div>
                </div>
                <!-- Project Card 2-->
                <div class="card overflow-hidden shadow rounded-4 border-0">
                    <div class="card-body p-0">
                        <div class="d-flex align-items-center">
                            <div class="p-5">
                                <h2 class="fw-bolder">API-NASA</h2>
                                <p>Ce projet permet de récupérer des données depuis l'API de la NASA, en particulier l'image astronomique du jour <strong>(APOD - Astronomy Picture of the Day).</strong> L'utilisateur peut sélectionner une date spécifique pour consulter l’image correspondante ainsi que sa description. Développé avec <strong> Node.js </strong> et en utilisant des bibliothèques publiques, ce projet constitue un excellent outil pédagogique pour les écoles, tout en étant également destiné aux passionnés de l’espace et de l’astronomie.</p>
                            </div>
                            <img class="img-fluid" src="assets/projet_2.png" alt="API" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call to action section-->
<section class="py-5 bg-gradient-primary-to-secondary text-white">
    <div class="container px-5 my-5">
        <div class="text-center">
            <h2 class="display-4 fw-bolder mb-4">Construisons ensemble votre idée</h2>
            <a class="btn btn-outline-light btn-lg px-5 py-3 fs-6 fw-bolder" href="contact.html">contactez-nous</a>
        </div>
    </div>
</section>
</main>
@endsection