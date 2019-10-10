@extends('public.templates.publictemplate')
@section('title') ITExtra - le site Officiel @endsection
@section('content')



    <section id="reseaux">
        <div class="container">

            <header class="section-header">
                <h3>Assistance sur site client</h3>
            </header>
            <div class="row reseaux-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <br>
                    <p>Que vous soyez une TPE, PME, PMI, administration ou grand compte, votre système informatique et parc d’impression sont des facteurs de performance de votre entreprise. Des petites pannes informatiques au dysfonctionnement majeur, chaque défaillance de votre système informatique et d’impression est critique pour la productivité de votre entreprise. Parce que la continuité de votre activité est notre priorité, l’assistance et la maintenance sont des services essentiels chez EXTRA IT Services Afin de s’adapter au plus près des besoins de votre entreprise, EXTRA IT Services vous propose deux types de contrats : <br> </p>
                    <h5> *  Pack Maintenance</h5>
                    <h5> *  Pack Infogérance </h5>
                    <p> Parce que chaque entreprise a des besoins particuliers, chaque contrat de maintenance est adapté à vos besoins. Nous vous proposons également la mise à disposition d’un ou plusieurs intervenants techniques</p>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="{{asset('img/alarme.jpg'}}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- #reseaux -->


@endsection