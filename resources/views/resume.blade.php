@extends('master')
@section('title', 'resume')
@section('content')

<!-- Page Content-->
<div class="container px-5 my-5">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bolder mb-0"><span class="text-gradient d-inline">Résumé</span></h1>
    </div>
    <div class="row gx-5 justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-8">
            <!-- Experience Section-->
            <section>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h2 class="text-primary fw-bolder mb-0">Expérience professionnelle</h2>
                    <!-- Download resume button-->
                    <!-- Note: Set the link href target to a PDF file within your project-->
                    <a class="btn btn-primary px-4 py-3" href="#!">
                        <div class="d-inline-block bi bi-download me-2"></div>
                        Téléversez le résumé.
                    </a>
                </div>
                <!-- Experience Card 1-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">2022 - Présent</div>
                                    <div class="small fw-bolder">Soutien informatique</div>
                                    <div class="small text-muted">Intact</div>
                                    <div class="small text-muted">Montréal, CA</div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div>La résolution de problèmes informatiques fait partie de mon quotidien en tant que technicien en soutien informatique. J’interviens avec efficacité pour diagnostiquer et résoudre les incidents sur les systèmes Mac et Windows. Je maîtrise également les principaux logiciels de bureautique (Microsoft Office, Google Workspace, etc.), ce qui me permet d’accompagner les utilisateurs de manière rapide et fiable.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Experience Card 2-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-primary fw-bolder mb-2">2020 - 2021</div>
                                    <div class="small fw-bolder">Administrateur informatique</div>
                                    <div class="small text-muted">Electronic Arts</div>
                                    <div class="small text-muted">Montréal, CA</div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div>En tant qu'Administrateur des postes de travail, j’étais responsable de l'installation et de la gestion des applications sur les systèmes des utilisateurs. J'ai créé et déployé des images système à l’aide d'Ivanti Manager, garantissant une configuration personnalisée selon les besoins de l'entreprise. Mon rôle inclut également le dépannage matériel, le remplacement de composants défectueux, ainsi que l'upgrade des cartes graphiques, de la mémoire et des disques SSD pour optimiser la performance des stations de travail.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Education Section-->
            <section>
                <h2 class="text-secondary fw-bolder mb-4">Education</h2>
                <!-- Education Card 1-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-secondary fw-bolder mb-2">2024-2025</div>
                                    <div class="mb-2">
                                        <div class="small fw-bolder">Collège Maison Neuve</div>
                                        <div class="small text-muted">Montréal, CA</div>
                                    </div>
                                    <div class="fst-italic">
                                        <div class="small text-muted">AEC</div>
                                        <div class="small text-muted">Developement Web</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div>Une maîtrise des notions de base liées à la <strong> création de pages web </strong> a été acquise, comprenant la structure et la mise en forme, l'algorithmique, ainsi que le traitement des médias. La conception d’interfaces interactives a également été étudiée, avec un focus sur la programmation côté client (front-end) et l’amélioration de l’expérience utilisateur. L'implémentation de fonctionnalités serveur (back-end) a été abordée, incluant l'utilisation de <strong> bases de données </strong> pour le stockage et la gestion des informations. Enfin, l’utilisation de cadriciels et de systèmes de gestion de contenus couramment utilisés sur le marché a été explorée pour faciliter le développement web.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Education Card 2-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <div class="row align-items-center gx-5">
                            <div class="col text-center text-lg-start mb-4 mb-lg-0">
                                <div class="bg-light p-4 rounded-4">
                                    <div class="text-secondary fw-bolder mb-2">2018 - 2019</div>
                                    <div class="mb-2">
                                        <div class="small fw-bolder">Collège Teccart</div>
                                        <div class="small text-muted">Montréal, CA</div>
                                    </div>
                                    <div class="fst-italic">
                                        <div class="small text-muted">DEP</div>
                                        <div class="small text-muted">Soutien informatique</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div>Une maîtrise <strong>d'Active Directory</strong> a été acquise, avec l'apprentissage du déploiement d'un contrôleur de domaine, ainsi que de la gestion des utilisateurs et des groupes. Des compétences de base en <strong>réseaux</strong> ont été développées, incluant la configuration et la gestion des connexions réseau. La résolution de problèmes liés à l'infrastructure et aux systèmes a également été étudiée, avec une approche pragmatique pour diagnostiquer et corriger les incidents. En parallèle, une formation en programmation <strong> Java </strong> a permis de développer des applications robustes et évolutives.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Divider-->
            <div class="pb-5"></div>
            <!-- Skills Section-->
            <section>
                <!-- Skillset Card-->
                <div class="card shadow border-0 rounded-4 mb-5">
                    <div class="card-body p-5">
                        <!-- Professional skills list-->
                        <div class="mb-5">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-tools"></i></div>
                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Compétences professionnelles</span></h3>
                            </div>
                            <div class="row row-cols-1 row-cols-md-3 mb-4">
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Résolution de problèmes</div>
                                </div>
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Conception et UX/UI </div>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Gestion de version (Git)</div>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-md-3">
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Gestion de base de données </div>
                                </div>
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Esprit d’analyse</div>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Collaboration en équipe</div>
                                </div>
                            </div>
                        </div>
                        <!-- Languages list-->
                        <div class="mb-0">
                            <div class="d-flex align-items-center mb-4">
                                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 me-3"><i class="bi bi-code-slash"></i></div>
                                <h3 class="fw-bolder mb-0"><span class="text-gradient d-inline">Languages</span></h3>
                            </div>
                            <div class="row row-cols-1 row-cols-md-3 mb-4">
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">HTML</div>
                                </div>
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">CSS</div>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">JavaScript</div>
                                </div>
                            </div>
                            <div class="row row-cols-1 row-cols-md-3">
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">React</div>
                                </div>
                                <div class="col mb-4 mb-md-0">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Laravel</div>
                                </div>
                                <div class="col">
                                    <div class="d-flex align-items-center bg-light rounded-4 p-3 h-100">Node.js</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
</main>
@endsection