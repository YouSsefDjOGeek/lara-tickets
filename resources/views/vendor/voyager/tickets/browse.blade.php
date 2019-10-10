@section('css')

    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">

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
							@can('isClient')      
							<h3 class="box-title">Mes demandes d'assistance</h3>

							@endcan	
							@can('isTechnican')      
							<h3 class="box-title">Demande d'assistance affecté a moi</h3>

							@endcan				
							@can('isAdmin')      
							<h3 class="box-title">Liste des demandes d'assistance</h3>

							@endcan
                            </div>
							<div class="row">
            <div class="col-lg-3 col-md-4 col-lg-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3" style="font-size: 5em;">
                                <i class="voyager-ticket"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h1>{{$count}}</h1>
                                <div>Total tickets</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3" style="font-size: 5em;">
                                <i class="voyager-settings"></i>
                            </div>
                            <div class="col-xs-9 text-right">
							<?php 
							$nonresolved=0;

							foreach($tickets as $ticket) {
							if($ticket->etat == "non résolu")
								
									$nonresolved = $nonresolved+1;
							} 
							?>
								
                                <h1>{{$nonresolved}}</h1>
                                <div>Tickets en cours</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3" style="font-size: 5em;">
                                <i class="voyager-check-circle"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <h1>{{$count-$nonresolved}}</h1>
                                <span>Tickets fermé</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="tickets" class="table table-bordered table-striped">
                                    <thead>



                                        <tr>
                                        <th>Numéro Ticket</th>

                                        <th>Sujet</th>
                                         <th>Service</th>
                                        <th>Crée le</th>
                                        <th>Date Dernier intervenant</th>
                                        <th>Etat</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($tickets as $ticket)

                                            <tr>

                                        <td>



                                            {{$ticket->slug_ticket}}</td><!--- ID -->
                                        <td>
                                            {{$ticket->titre_ticket}}
                                        </td>
                                        <td>

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



                                        </td>
                                         <td>{{$ticket->created_at}}</td>
                                         <td>{{$ticket->updated_at}}</td>

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
                                        <td><a href="{{route('showTicket',[$ticket->id])}}">Details</a>
                                            <a href="{{route('cancelTicket',[$ticket->id])}}" class="text-danger"> <i class="fas fa-trash"></i>Annuler </a>

                                        </td>
                                            </tr>
                                    @endforeach



                                    </tbody>

                                 

                                </table>
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