<header id="header" class="fixed-top">
        <div class="container">

            <div class="logo float-left">
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
                <a href="{{route('home')}}" class="scrollto"><img src="{{asset('img/logo1.png')}}" width="150"  alt="" class="img-fluid"></a>
            </div>

            <nav class="main-nav float-right d-none d-lg-block">
                <ul>
                    <!--<li class="active"><a href="#intro">Acceil</a></li>-->
                    <li class="drop-down"><a href="">Nos Prestations</a>
                        <ul>
                            <li><a href="{{route('consulting')}}">Consulting</a></li>
                            <li><a href="{{route('integration')}}">Integration</a></li>
                            <li><a href="{{route('commissioning')}}">Commissioning</a></li>
                            <li><a href="{{route('training')}}">Training et accompagnemment</a></li>
                            <li class="drop-down"><a href="">Helpdesk</a>
                                <ul>
                                    <li><a href="{{route('infogerance')}}">Infogerance a Distance</a></li>
                                    <li><a href="{{route('assistance')}}">Assistance sur site client</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="">Nos Solutions</a>
                        <ul>
                            <li><a href="{{route('reseaux')}}">Reseaux</a>
                            <li><a href="{{route('securite')}}">Securite de Infrastructure IT</a></li>
                            <li><a href="{{route('ondulation')}}">Ondulation et securite electrique</a></li>
                            <li><a href="{{route('voip')}}">VOIP - Telecom</a></li>
                            <li><a href="{{route('videosurveillance')}}">Videosurveillance ( CCTV )</a></li>
                            <li><a href="{{route('alarme')}}">Alarme intrusion</a></li>
                            <li><a href="{{route('detection')}}">Detection incendine</a></li>
                            <li><a href="{{route('controle')}}">Controle d'acces</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="">Expertise</a>
                        <ul>
                            <li><a href="{{route('microsoft')}}">Solution Microsoft</a></li>
                            <li><a href="{{route('backup')}}">Backup et Restauration</a></li>
                            <li><a href="{{route('virtulisation')}}">Virtulisation</a></li>
                            <li><a href="{{route('cloud')}}">Cloud</a></li>
                        </ul>
                    </li>
                    <li class="drop-down"><a href="">Suivez nous</a>
                        <ul>
                            <li><a href="#contact">Contact</a></li>
                            <li><a href="#client">Ils nous font confiance...</a></li>
                            <li><a href="{{route('home')}}">Nos Partenaires</a></li>
                        </ul>
                    </li>
                    <li><a href={{url('http://127.0.0.1:8080/')}} target="_blank"><i class="fa fa-shopping-cart"></i> &nbsp;E-Shop</a> </li>
                    <li><a href="{{url('/clientarea')}}"><button class="mbtn red">Espace Client</button></a></li>
                    <!--<li><a href="#contact">English</a></li>-->
                </ul>
            </nav><!-- .main-nav -->
        </div>
    </header><!-- #header -->
