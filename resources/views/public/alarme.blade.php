@extends('public.templates.publictemplate')
@section('title') ITExtra - le site Officiel @endsection
@section('content')



    <section id="reseaux">
        <div class="container">

            <header class="section-header">
                <h3>Alarme intrusion</h3>
            </header>
            <div class="row reseaux-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <br>
                    <br>
                    <br>
                    <br>
                    <H3>
                        NB
                    </H3>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="{{asset('img/alarme.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- #reseaux -->

@endsection