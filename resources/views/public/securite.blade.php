
@extends('public.templates.publictemplate')
@section('title') ITExtra - le site Officiel @endsection
@section('content')

    <section id="reseaux">
        <div class="container">

            <header class="section-header">
                <h3>Securite des Infrastructure IT</h3>
            </header>
            <div class="row reseaux-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <p>
                        Actuellement, les menaces informatiques évoluent et varient chaque jour plus vite. Les risques pour vos utilisateurs, vos données, votre système informatique augmentent au même rythme.
                        <br>
                        Afin de protéger votre infrastructure informatique, les solutions de sécurité OCI sont testées et éprouvées par nos experts. Les logiciels malveillants ne devraient jamais vous mettre à mal !              </p>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="{{asset('img/infra.png')}}" class="img-fluid" alt="">
                </div>
            </div>


        </div>
    </section><!-- #Securite -->

@endsection