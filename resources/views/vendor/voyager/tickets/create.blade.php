@extends('voyager::master')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('skins/lightgray/content.min.css')}}"/>
<link rel="stylesheet" href="{{asset('skins/lightgray/skin.min.css')}}"/>
<link rel="stylesheet" href="{{asset('clientarea/skins/lightgray/content.min.css')}}"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="icon voyager-question"></i>Support Technique
        </h1>

      

    </div>
@stop


@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Créer un nouveau ticket</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">

                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <strong>Désolé !</strong> <p>veillez vérifier les champs suivants.<br/><br/></p>
                                        <br><ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li><br/>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form action="{{route('store_Ticket')}}" method="post" onsubmit="return validateForm()" enctype="multipart/form-data" name="creerTicketForm">

                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="text" class="control-label">Client</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-user-circle"></i>
                                            </div>
                                            <input disabled id="text" value="" name="id_client" placeholder="{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
                                                    " type="text" aria-describedby="textHelpBlock" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="select" class="control-label">Service concerné :</label>
                                        <select id="select" name="service" class="select form-control">
                                            <option value="0">Réseaux</option>
                                            <option value="1">Sécurité Infrastructure IT</option>
                                            <option value="2">Ondulation et Sécurité Electrique</option>
                                            <option value="3">VOIP - Telecom</option>
                                            <option value="4">Videosurveillance(CCTV)</option>
                                            <option value="5">Alarme intrusion</option>
                                            <option value="6">Detection incendie</option>
                                            <option value="7">Controle d'acces</option>
                                            <option value="8">Autre</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="text1" class="control-label">Sujet</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-align-justify"></i>
                                            </div>
                                            <input id="text1" name="titre_ticket" type="text" required="required" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="details" class="control-label">Description détailé</label>
                                        <textarea id="details" name="details" cols="40" rows="5"  class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="details" class="control-label">Joindre un fichier</label>
                                        <input type="file" name="file_pathURL" id="file_pathURL" class="form-control"/>
                                        <span id="textHelpBlock" class="form-text text-muted">Types autorisés : Doc, Docx, xls, xlsx, PDF, ZIP, RAR, PPTX, PPT,</span>
                                        <span id="textHelpBlock" class="form-text text-muted">Taille Maximale accepté : 64Mb</span>
                                    </div>
                                    <div class="form-group">
                                        <button name="submit" type="submit" class="btn btn-primary">Créer Ticket</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
@stop



    @section('content')




        @endsection
@section('javascript')
    <script>

        function validateForm() {
            var detailsTicket = document.getElementById('tinymce').value;
            alert(detailsTicket);
            if (detailsTicket == '') {
                swal({
                    icon: "error",
                    title: "Erreur!",
                    text: "Veillez indiquez les details Si'il vous plait."
                });
                return false;
            }
        }
        tinymce.init({
            selector: '#details'
        });
    </script>
    @stop