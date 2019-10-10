<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
   <title> @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{asset('img/logo.png')}}" rel="icon">
    <link href="{{asset('img/logo.png')}} " rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/slider.css')}}" rel="stylesheet">


</head>
<body>
@include('includes.header')
@yield('content')

<section id="client" class="section-bg">

 <div class="container">

  <div class="section-header">
   <h3>Ils nous font confiance...</h3>
   <p>description .</p>
  </div>

  <div class="row no-gutters clients-wrap clearfix wow fadeInUp">

   <div class="col-lg-3 col-md-4 col-xs-6">
    <div class="client-logo">
     <img src="{{asset('img/logo.png')}}" class="img-fluid" alt="">
    </div>
   </div>

   <div class="col-lg-3 col-md-4 col-xs-6">
    <div class="client-logo">
     <img src="{{asset('img/clients/client-1.png')}}" class="img-fluid" alt="">
    </div>
   </div>

   <div class="col-lg-3 col-md-4 col-xs-6">
    <div class="client-logo">
     <img src="{{asset('img/clients/client-2.png')}}" class="img-fluid" alt="">
    </div>
   </div>

   <div class="col-lg-3 col-md-4 col-xs-6">
    <div class="client-logo">
     <img src="{{asset('img/clients/client-3.png')}}" class="img-fluid" alt="">
    </div>
   </div>

   <div class="col-lg-3 col-md-4 col-xs-6">
    <div class="client-logo">
     <img src="{{asset('img/clients/client-4.png')}}" class="img-fluid" alt="">
    </div>
   </div>

   <div class="col-lg-3 col-md-4 col-xs-6">
    <div class="client-logo">
     <img src="{{asset('img/clients/client-5.png')}}" class="img-fluid" alt="">
    </div>
   </div>

   <div class="col-lg-3 col-md-4 col-xs-6">
    <div class="client-logo">
     <img src="{{asset('img/clients/client-6.png')}}" class="img-fluid" alt="">
    </div>
   </div>

   <div class="col-lg-3 col-md-4 col-xs-6">
    <div class="client-logo">
     <img src="{{asset('img/clients/client-7.png')}}" class="img-fluid" alt="">
    </div>
   </div>

   <div class="col-lg-3 col-md-4 col-xs-6">
    <div class="client-logo">
     <img src="{{asset('img/clients/client-8.png')}}" class="img-fluid" alt="">
    </div>
   </div>

  </div>

 </div>

</section>


<section id="contact">
 <div class="container-fluid">

  <div class="section-header">
   <h3>Contact</h3>
  </div>

  <div class="row wow fadeInUp">

   <div class="col-lg-6">
    <div class="map mb-4 mb-lg-0">
     <iframe src="https://www.google.com/maps/d/embed?mid=1g8Pa_WA-8flJLzLy--hbJFKUY5E" width="500" height="520"></iframe>            </div>
   </div>

   <div class="col-lg-6">
    <p>29 Av. de L'independace,Residence Meryem Bloc B - App BR1<br>Cote Centre Urbain Nord - 2080 Ariana</p>

    <strong>Tel :</strong> +216 71 723 301<br>
    <strong>Fax :</strong> +216 71 723 301<br>
    <strong>Mob :</strong> +216 22 577 085<br>
    <strong>Email : Commercial@extra.com.tn</strong><br>
    </p>

    <div class="social-links">
     <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
     <a href="https://www.facebook.com/extra.it.services" class="facebook"><i class="fa fa-facebook"></i></a>
     <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
     <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
     <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
    </div>

    <div class="form">
     <div id="sendmessage">Your message has been sent. Thank you!</div>
     <div id="errormessage"></div>
     <form action="{{route('sendMail')}}" method="post" role="form" class="contactForm">
      <div class="form-row">
       <div class="form-group col-lg-6">
        <input type="text" name="mailName" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
        <div class="validation"></div>
       </div>
       <div class="form-group col-lg-6">
        <input type="email" class="form-control" name="mailAdress" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
        <div class="validation"></div>
       </div>
      </div>
      <div class="form-group">
       <input type="text" class="form-control" name="mailSubject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
       <div class="validation"></div>
      </div>
      <div class="form-group">
       <textarea class="form-control" name="mailBody" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
       <div class="validation"></div>
      </div>
      <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
     </form>
    </div>
   </div>

  </div>

 </div>
</section>
<!-- +++++++++++++++++++++++ #contact ++++++++++++++++++++ -->

<!--========================== Footer ============================-->
<footer id="footer">

 <div class="container">
  <div class="copyright">
   &copy; Copyright <strong>Extra IT Services</strong>. All Rights Reserved
  </div>
 </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('lib/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('lib/mobile-nav/mobile-nav.js') }}"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('contactform/contactform.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>

</body>
</html>
