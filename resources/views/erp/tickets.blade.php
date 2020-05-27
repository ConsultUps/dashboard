@extends('template')

@section('title', 'Ultimas incidencias')
@section('heading')
    Ultimas incidencias <span class="badge badge-pill badge-primary">{{$tickets->count()}} pendientes</span>
@endsection

@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Ref.</th>
                <th scope="col">Nombre</th>
                <th scope="col">Mensaje</th>
                <th scope="col">Asignado</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tickets->getTickets() as $ticket)
                @php
                    $client = new \App\Thirdparty($ticket['socid']);

                    if($ticket['fk_user_assign'] != null){
                        $employee = new \App\Profile($ticket['fk_user_assign']);
                    }
                    else{
                        $employee = null;
                    }
                @endphp
                    <tr>
                        <th scope="row">{{$ticket['ref']}}</th>
                        <td>{{$client->getName()}}</td>
                        <td>{{$ticket['message']}}</td>
                        <td class="text-center">@if($employee != null) {{$employee->getFullName()}} @else Nadie @endif</td>
                        <td>
                            <div class="row">
                                <div class="col-6">
                                    <form method="POST" action="{{route('call.update',$ticket['id'])}}" target="_blank">
                                        @csrf
                                        @method('PUT')
                                        <input type="hidden" name="phone" value="{{$client->getPhone()}}">
                                        <button type="submit" class="btn btn-sm btn-light" title="Llamar al cliente"> <i class="fas fa-phone-alt text-danger mr-2"></i></button>
                                    </form>
                                </div>
                                <div class="col-6">
                                    <form method="POST" action="{{route('call.update', $ticket['id'])}}">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class="btn btn-sm btn-light" title="Cerrar ticket"><i class="fas fa-check text-success"></i></button>
                                    </form>
                                </div>
                            </div>


                        </td>
                    </tr>

            @endforeach
            </tbody>
        </table>
        <p class="text-right">
        <a href="https://erp.consultups.tech/ticket/index.php" class="text-right">Gestionar tickets en Dolibarr</a>
        </p>
    </div>
@endsection