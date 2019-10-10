
@extends('public.templates.publictemplate')
@section('title') ITExtra - le site Officiel @endsection
@section('content')

    <section id="reseaux">
        <div class="container">

            <header class="section-header">
                <h3>VOIP - Telecom</h3>
            </header>

            <div class="row reseaux-container">

                <div class="col-lg-6 content order-lg-1 order-2">
                    <p>La voix sur IP, ou « VoIP » pour Voice over IP, est une technique qui permet de communiquer par la voix (ou via des flux multimedia : audio ou vidéo) sur des réseaux compatibles IP, qu'il s'agisse de réseaux privés ou d'Internet, filaire (câble/ADSL/optique) ou non (satellite, Wi-Fi, GSM, UMTS ou LTE).
                        La VoIP concerne le transport de la voix sur un réseau IP. Cette technologie est complémentaire de la téléphonie sur IP (« ToIP » pour Telephony over Internet Protocol). La ToIP concerne les fonctions réalisées par un autocommutateur téléphonique IPBX.

                    </p>

                    <p>
                    <ol> <li> Augmenter la productivité des employés</li>
                        <li> Optimiser le temps des employés </li>
                        <li>  Travailler importe où, à tout moment, tout dispositif</li>
                        <li> Adaptable aux changements </li>
                        <li>Travailler à l’echelle Expertise</li>
                        <li> bout en bout collaboration </li>
                        <li> Enregistrements à temps réel et suivis </li>
                        <li> satisfait </li>
                        <li>Automatiser les tâches </li>
                        <li> Contrôle des coûts </li>
                        <li> Mettre en valeur la société </li>
                        <li>Mobilité (accessible à distance) </li>
                        <li>Message instantané </li>
                        <li>Processus & temps de réponse plus  </li>  </ol> </p>
                </div>

                <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
                    <img src="{{asset('img/voip.jpg')}}" class="img-fluid" alt="">
                </div>
            </div>

            <div class="row reseaux-extra">
                <div class="col-lg-6 wow fadeInUp">
                    <img src="{{asset('img/telecom.jpg')}}" class="img-fluid" alt="">
                    <img src="{{asset('img/telecom.jpg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
                    <p>Retrouvez dans cette rubrique toutes les informations nécessaires pour vous lancer dans le secteur de l'informatique, des Télécoms et d'Internet : les réseaux professionnels, les formalités, où s'implanter, les adresses pour l'accompagnement et les aides financières, des témoignages</p>
                </div>
            </div>


        </div>

        </div>
    </section><!-- #reseaux -->
@endsection