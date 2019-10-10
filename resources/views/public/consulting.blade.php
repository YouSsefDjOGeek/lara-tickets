@extends('public.templates.publictemplate')
@section('title') ITExtra - le site Officiel @endsection
@section('content')



    <section id="reseaux">
        <div class="container">

            <header class="section-header">
                <h3>Consulting</h3>
            </header>
            <div class="row reseaux-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <br>
                    <br>
                    <br>
                    <p>

                    <h4>Consulting : définition et activités </h4>
                    Conseiller, consultant, coach entreprise ou encore prestataire de services en conseil, le consulting rassemble de nombreuses appellations. Quelle est la définition exacte du consulting ? Zoom sur cette vaste activité.</p>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="{{asset('img/cons.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section>

        <!--========================== Contact Section ============================-->

    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->



@endsection