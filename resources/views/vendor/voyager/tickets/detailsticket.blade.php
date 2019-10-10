@section('css')

    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    @endsection


@extends('voyager::master')


@section('page_header')
    <div class="container-fluid">
        <h1 class="page-title">
            <i class="icon voyager-question"></i>Support Technique
        </h1>

        @can('isClient')
        <a href="{{route('create_ticket')}}" class="btn btn-success btn-add-new">
            <i class="voyager-plus"></i> <span>Créer un nouveau Ticket</span>
        </a>
    @endcan
    </div>
@stop

@section('content')
    <div class="page-content browse container-fluid">
        @include('voyager::alerts')
        @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-bordered">
                    <div class="panel-body">

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Details Ticket N0 : {{$ticket->slug_ticket}}</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">


                                <table class="table table-hover table-striped">
                                    <tr><td>Numéro Ticket</td><td>{{$ticket->slug_ticket}}</td></tr>
                                    <tr><td>Sujet</td><td>{{$ticket->titre_ticket}}</td></tr>
                                    <tr><td>Client demandé</td><td>{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</td></tr>
                                    <tr><td>Service</td><td>
                                            @switch($ticket->service)
                                                @case(0)
                                                Réseaux
                                                @break
                                                @case(1)
                                                Sécurité Infrastructure IT
                                                @break

                                                @case(2)
                                                Ondulation et Sécurité Electrique
                                                @break


                                                @case(3)

                                                VOIP - Telecom
                                                @break


                                                @case(4)
                                                Videosurveillance(CCTV)
                                                @break


                                                @case(5)
                                                Alarme intrusion
                                                @break

                                                @case(6)
                                                Detection incendie
                                                @break

                                                @case(7)
                                                Controle d'acces
                                                @break


                                                @case(8)
                                                Autre
                                                @break



                                            @endswitch
                                        </td></tr>
                                    <tr>
                                        <td>Etat</td>
                                        <td>

                                            @switch($ticket->etat)
                                                @case('non résolu')
                                                <span class="badge badge-pill badge-light">Non résolu</span>

                                                @break
                                                @case('résolu')
                                                <span class="badge badge-pill badge-success">Résolu</span>
                                                @break

                                            @endswitch
                                        </td>
                                    </tr>
                                    <tr><td>Technicien affecté</td>

                                        <td><?php
                                            if (isset($technicienNom['0']))
                                                echo $technicienNom['0'];
                                                 else echo'<span class="badge badge-pill badge-warning">Non affecté </span>';
                                            ?>
                                            </td>
                                        <td></td>

                                    </tr>
                                    <tr>
                                        <td>Pièce Jointe</td>
                                        <td>
                                            @if($ticket->attachment_file == '')
                                                <span class="badge badge-pill badge-pill">pas de fichier</span>
                                                @else
                                            <a href="{{$ticket->attachment_file}}" target="_blank">Télécharger le fichier</a>
                                                @endif

                                        </td>
                                    </tr>

                                    <tr><td>Crée le</td>     <td>{{$ticket->created_at}}</td>
                                    <tr><td>Dernier mise a jour le</td>     <td>{{$ticket->updated_at}}</td></tr>
                                    <tr><td colspan="2">Details</td>
                                        <tr>

                                             <td colspan="2">{!! $ticket->details !!}</td>
                                    </tr>


                                </table>
                            </div>
                            <a style="margin-right: 5px" href="{{route('cancelTicket',[$ticket->id])}}" class="btn  pull-right btn-danger">
                                <i class="voyager-trash"></i> <span>Annuler Ticket</span>
                            </a>
                            @switch($ticket->etat)
                                @case('résolu')
                                <a style="margin-right: 5px" href="{{route('notresolve',[$ticket->id])}}" class="btn  pull-right btn-outline-secondary">
                                    <i class="voyager-x"></i> <span>Marquer Comme Non résolu</span>
                                </a>

                                @break
                                @case('non résolu')
                                <a style="margin-right: 5px" href="{{route('marquerresolu',[$ticket->id])}}" class="btn  pull-right btn-success">
                                    <i class="voyager-check"></i> <span>Marquer Comme résolu</span>
                                </a>
                                @break

                            @endswitch

                        @can('isAdmin')
                            <a style="margin-right: 5px" href="{{route('affecterTicket',[$ticket->id])}}" class="btn  pull-right btn-info margin-5">
                                <i class="fas fa-user-tag"></i> <span>Affecter à un Technicien</span>
                            </a>
                            @endcan
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->


                    </div>





                </div>

                <div class="panel panel-bordered">
                    <div class="panel-body">

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Discussion</h3>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <form class="form" method="post" action="{{route('ReplyTicket',[$ticket->id])}}">
                                    @csrf


                                <div class="col-lg-9 form-group">
                                        <textarea  name="reply_body" class="form-control">

                                        </textarea>

                                    <small id="passwordHelpBlock" class="form-text text-muted">Pour répondre, utilisez la zone de texte ci-dessus pour compléter le fil puis cliquez sur le bouton "répondre".
                                    </small>




                                </div>
                                <div class="col-lg-3 form-group">
                                    <input type="submit" class="btn btn-primary" value="Répondre"/>
                                </div>
                                </form>


                            </div>
                        <!-- /.box-body -->
                        </div>
                        <!-- /.box -->

                        <div class="box-header">
                            <h3 class="box-title">Historique</h3>
                            @foreach($replies as $reply)

                            <div class="card">

                                <div class="card-body">

                                    <h5 class="card-title">Envoyée par :
                                        @if(
                                        $reply->author_id == \Illuminate\Support\Facades\Auth::id()
                                        )
                                        Vous @else Destinataire @endif </h5>
                                    <p class="card-text">{{$reply->reply_body}}</p>
                                    <a href="#" class="btn btn-secondary">Date : {{$reply->created_at}}</a>
                                </div>
                                    @endforeach
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>

    {{-- Single delete modal --}}
@stop



@section('js')
    <!-- DataTables -->
    <script src="{{{asset('js/jquery.dataTables.min.js')}}}"></script>
    <script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('js/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('js/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('js/demo.js')}}"></script>
    <!-- page script -->
    <script>
        $(function () {
            $('#tickets').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            })
        })
    </script>
    @endsection