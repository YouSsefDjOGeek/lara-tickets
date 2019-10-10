@extends('public.templates.publictemplate')
@section('title') ITExtra - le site Officiel @endsection
@section('content')



    <section id="backup">
        <div class="container">

            <header class="section-header">
                <h3>Backup et Restauration</h3>
            </header>

            <div class="row backup-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <p>
                        Nous vous accompagne dans la définition et la mise en oeuvre de votre politique de sécurisation de données.              </p>
                    <h4>1 - Stockage </h4>
                    <p>On propose une large gamme de solutions de stockage du serveur de stockage NAS/SAN d’entrée de gamme aux solutions de « cluster de stockage » haute-disponibilité (mono ou multi-sites) pour la mise en œuvre d’un PRA/PCA.
                    </p>
                    <h4>2 - Sauvegarde </h4>
                    <p>Votre solution de sauvegarde doit être adaptée à votre entreprise, plus précisément au volume d’informations à sauvegarder. On vous propose une offre complète de solutions de sauvegarde sur disques ou sur bandes.
                    </p>
                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="{{asset'img/backup.png'}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="row backup-extra">
                <div class="col-lg-6 wow fadeInUp">
                    <img src="{{asset('img/backup2.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                    <h4>3 -  Archivage</h4>
                    <p>
                        Archivage de messagerie comprenant l’archivage personnel ou l’archivage d’entreprise.
                    </p>
                    <h4>4 -   Restauration  </h4>
                    <p>
                        Récupération des données suite à un incident ou perte de données.
                    </p>
                </div>
            </div>


        </div>
    </section><!-- #backup -->

@endsection