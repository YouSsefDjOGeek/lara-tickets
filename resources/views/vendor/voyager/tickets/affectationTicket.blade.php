@section('css')

    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script>

        function validateForm() {
            var x = document.AffectationTicketForm.id_technicien.value;
            if (x == "0") {
                swal({
                    icon: "error",
                    title: "Erreur!",
                    text: "Veillez indiquer un Technicien Si'il vous plait."
                });
                return false;
            }
        }

    </script>


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

        @if(session()->get('error'))
            <div class="alert alert-success">
                {{ session()->get('error') }}
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
                                    <tr><td>Etat</td>     <td>

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


                                    <tr><td>Technicien affecté</td>     <td>
                                                <form name="AffectationTicketForm" onsubmit="return validateForm()"  method="post" action="{{route('affecterTicket',[$ticket->id])}}">

                                                    @csrf


                                                    <div class="form-group">

                                                        <select required name="id_technicien" class="form-control">

                                                            @if(!isset($ticket->id_technicien))
                                                                <option value="0" selected >Choisir un Technicien </option>

                                                            @endif
                                                            @foreach($techniciens as $technicien)
                                                                <option
                                                                        @if($ticket->id_technicien == $technicien->id ) selected @endif
                                                                        value="{{$technicien->id}}">{{$technicien->name}} ({{($technicien->email)}})</option>

                                                            @endforeach

                                                        </select>


                                                    </div>

                                        </td>
                                        <td></td>

                                    </tr>

                                    <tr><td>Crée le</td>     <td>{{$ticket->created_at}}</td>
                                    <tr><td>Dernier mise a jour le</td>     <td>{{$ticket->updated_at}}</td>
                                    <tr><td>Dernier mise a jour le</td>     <td>{{$ticket->updated_at}}</td>
                                    <tr><td colspan="2">Details</td>
                                    <tr>

                                        <td colspan="2">{!! $ticket->details !!}</td>
                                    </tr>


                                </table>
                            </div>
                            <a href="{{route('showTicket',[$ticket->id])}}" class="btn  pull-right btn-outline-secondary">
                                <i class="voyager-angle-left"></i> <span>Retour</span>
                            </a>

                            <input type="submit"   class="btn  pull-right btn-primary" value="Enregister"/>


                        </form>
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