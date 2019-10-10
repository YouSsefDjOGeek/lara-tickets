
@extends('public.templates.publictemplate')
@section('title') ITExtra - le site Officiel @endsection
@section('content')

    <section id="reseaux">
        <div class="container">

            <header class="section-header">
                <h3>Infogerance</h3>
            </header>
            <div class="row reseaux-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <br>

                    <p>
                        Nos experts définissent avec vous une stratégie informatique via un Plan d'Action qui répond à vos besoins et à votre budget. Pour vous assurer une efficacité permanente et une mise à niveau de vos infrastructures informatiques, nous vous conseillons sur le renouvellement de votre parc et nous nous engageons à vous fournir un devis respectant les meilleurs standards du marché tunisien.
                        standards du marché tunisien. L'infogérance consiste à vous assurez : </p> <br>
                    <h4> 1 -  CONSEIL ET SUIVI </h4>
                    <p>C’est une véritable démarche d'accompagnement à nous clients. Nous nous engageons à vous apporter des conseils et un suivi opérationnel pour faire progresser votre système d'information.
                        <br>
                    </p>
                    <h4> 2 - PROACTIVITE</h4>
                    <p>
                        Un suivre quotidienne et en temps réel de l’état de fonctionnement de vos systèmes. Nos experts sont ainsi capables d'anticiper les failles et de proposer des solutions pour éviter tout dysfonctionnement.</p>

                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="{{asset('img/info.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

        </div>
    </section><!-- #reseaux -->


@endsection