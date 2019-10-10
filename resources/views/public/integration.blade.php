@extends('public.templates.publictemplate')
@section('title') ITExtra - le site Officiel @endsection
@section('content')



    <section id="reseaux">
        <div class="container">

            <header class="section-header">
                <h3>Reseaux</h3>
            </header>

            <div class="row reseaux-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <p>
                        La réussite de votre projet d’infrastructure réseau multi-sites nécessite une maîtrise parfaite de la distribution des applications et des utilisateurs entre les sites. L’application des règles strictes de configuration, optimisation et sécurisation des liens entre les sites sont autant des facteurs clés d’une infrastructure réseau réussite. EXTRA IT Services vous propose une prestation globale :
                    </p>
                    <h4>1 -  Audit de votre infrastructure réseau </h4>
                    <p>Une démarche basée sur la compréhension de vos besoins actuels et futurs sur 4 aspects essentiels au bon déroulement de votre projet, fonctionnel, technique, organisationnel et budgétaire.
                    </p>
                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="img/res2.jpg" class="img-fluid" alt="">
                </div>
            </div>

            <div class="row reseaux-extra">
                <div class="col-lg-6 wow fadeInUp">
                    <img src="img/res.jpg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                    <h4>2 -  Définition de votre projet d’infrastructure réseau</h4>
                    <p>
                        Après l’analyse des informations collectées nous en faisons un diagnostic et définissons tous éléments nécessaires à la mise en œuvre de votre infrastructure réseau :
                        <br> -   Plan de migration et de déploiement
                        <br> -  Définition des tests fonctionnels
                        <br> -  Un modèle économique comprenant les actions pour l’optimisation des coûts
                        <br> -  Les règles de sécurité
                        <br> -  Les choix techniques
                        <br> -  Maquettages réalisés par nos ingénieurs certifiés
                    </p>
                </div>
            </div>

            <div class="row reseaux-extra">
                <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
                    <img src="{{asset('img/res3.jpg')}}" class="img-fluid" alt="">
                </div>

                <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
                    <h4>3 -  Phase de test</h4>
                    <p>
                        Après validation commune de votre projet d’intégration de solution réseau nous procédons aux tests fonctionnels et techniques préalables au déploiement.
                    </p>
                    <h4>4 -  Déploiement de votre solution de réseau</h4>
                    <p>
                        Partenaire qualifié pour l’ensemble de la gestion et l’intégration de vos projets d’infrastructure réseau, EXTRA IT SERVICES assure l’intégralité de la mise en œuvre opérationnelle de vos solutions réseaux. EXTRA IT SERVICES met à votre disposition une équipe de spécialistes techniques, composées d’ingénieurs et techniciens dédiés à l’infrastructure réseau. Notre offre Réseaux couvre les domaines suivants :
                        <br>  -  Réseaux locaux et centraux
                        <br>  -  Interconnexion de sites
                        <br>  -  Accès Internet et distant
                    </p>
                </div>

            </div>

        </div>
    </section><!-- #reseaux -->

    <!--========================== Contact Section ============================-->

    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->



@endsection