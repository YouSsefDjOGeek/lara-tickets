@extends('public.templates.publictemplate')
@section('title') ITExtra - le site Officiel @endsection
@section('content')



    <section id="reseaux">
        <div class="container">

            <header class="section-header">
                <h3>Cloud</h3>
            </header>

            <div class="row reseaux-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <br>
                    <br>
                    <br>
                    <br>
                    <p>
                        Si vous posez cette question à différentes personnes, vous risquez avoir autant de réponse que d’interlocuteurs. Alors, je ne vais pas vous donnez une nouvelle définition, mais plutôt utiliser celle formulée par le NIST (National Institute of Standards and Technology )
                    </p>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="{{asset('img/cloud.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- #reseaux -->

@endsection