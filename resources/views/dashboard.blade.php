@extends('template')

@section('title', 'Dashboard')
@section('heading', 'Dashboard')

@section('content')

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Ganancias (Mensuales)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">40.000 €</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Ganancias (Anuales)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">215.000 €</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tareas</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$trello->totalTasks()}}%</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: {{$trello->totalTasks()}}%" aria-valuenow="{{$trello->totalTasks()}}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        @isset($tickets)
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tickets Pendientes</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$tickets->count()}}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endisset
    </div>

    <!-- Content Row -->










    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Ingresos mensuales</h6>
                </div>
                <!-- Card Body -->

                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://app.powerbi.com/view?r=eyJrIjoiMGE4MWY3NmQtNDMyNy00OWMxLTlmZmMtMmQ0NGRjYzY3NmM5IiwidCI6IjdjOWM3MWQ3LTAwZjktNDc2ZC04ZDA1LWY1MWFiZDRlYzIyYSIsImMiOjh9" allowfullscreen></iframe>
                    </div>
                    <!--<div class="chart-area">

                        <canvas id="myAreaChart"></canvas>
                    </div>-->
            </div>
        </div>

        <!-- Pie Chart -->
        <div class="col-xl-6 col-lg-6">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Fuentes de Ingresos</h6>
                </div>

                <!-- Card Body -->
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://app.powerbi.com/view?r=eyJrIjoiMWIzMDdkMDYtOTdjZi00ZThiLWI2ZTItYzEzOWNhYzM0NmM5IiwidCI6IjdjOWM3MWQ3LTAwZjktNDc2ZC04ZDA1LWY1MWFiZDRlYzIyYSIsImMiOjh9" allowfullscreen></iframe>
                </div>

                <!--<div class="card-body">
                    <div class="chart-pie pt-4 pb-2">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <div class="mt-4 text-center small">
                    <span class="mr-2">
                      <i class="fas fa-circle text-primary"></i> Directa
                    </span>
                        <span class="mr-2">
                      <i class="fas fa-circle text-success"></i> Social
                    </span>
                        <span class="mr-2">
                      <i class="fas fa-circle text-info"></i> Referida
                    </span>
                    </div>
                </div>-->
            </div>
        </div>
    </div>














    <!-- Content Row -->
    <div class="row">

        <!-- Content Column -->
        <div class="col-lg-6 mb-4">

            <!-- Project Card Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tareas pendientes en Trello</h6>
                </div>
                <div class="card-body">
                    @foreach($trello->pendingTasks() as $name => $percent)
                            @php
                                $complete = false;
                                $color = 'bg-';
                                if($percent <= 20 ) $color .= 'danger';
                                else if($percent <= 40) $color .= 'warning';
                                else if($percent <= 60) $color .= 'primary';
                                else if($percent < 100) $color .= 'info';
                                else{
                                    $color .= 'success';
                                    $complete = true;
                                }
                            @endphp
                            <h4 class="small font-weight-bold">{{$name}} <span class="float-right">{{($complete) ? '¡Completado!' : $percent.'%'}}</span></h4>
                            <div class="progress mb-4">
                                <div class="progress-bar {{$color}}" role="progressbar" style="width: {{$percent}}%" aria-valuenow="{{$percent}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>

                    @endforeach
                </div>
            </div>

            <!-- Color System -->
            <!--<div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="card bg-primary text-white shadow">
                        <div class="card-body">
                            Primary
                            <div class="text-white-50 small">#4e73df</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-success text-white shadow">
                        <div class="card-body">
                            Success
                            <div class="text-white-50 small">#1cc88a</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-info text-white shadow">
                        <div class="card-body">
                            Info
                            <div class="text-white-50 small">#36b9cc</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-warning text-white shadow">
                        <div class="card-body">
                            Warning
                            <div class="text-white-50 small">#f6c23e</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-danger text-white shadow">
                        <div class="card-body">
                            Danger
                            <div class="text-white-50 small">#e74a3b</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="card bg-secondary text-white shadow">
                        <div class="card-body">
                            Secondary
                            <div class="text-white-50 small">#858796</div>
                        </div>
                    </div>
                </div>
            </div>-->

        </div>

        <div class="col-lg-6 mb-4">

            <!-- Illustrations -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Agenda Corporativa</h6>
                </div>
                <div class="card-body">
                    <iframe src="https://calendar.google.com/calendar/embed?src=consultups%40gmail.com&ctz=Europe%2FMadrid" style="border: 0" width="100%" height="500px" frameborder="0" scrolling="no"></iframe>
                </div>
            </div>

            <!-- Illustrations -->
            <!--<div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Illustrations</h6>
                </div>
                <div class="card-body">
                    <div class="text-center">
                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 25rem;" src="img/undraw_posting_photo.svg" alt="">
                    </div>
                    <p>Add some quality, svg illustrations to your project courtesy of <a target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a constantly updated collection of beautiful svg images that you can use completely free and without attribution!</p>
                    <a target="_blank" rel="nofollow" href="https://undraw.co/">Browse Illustrations on unDraw &rarr;</a>
                </div>
            </div>-->

            <!-- Approach -->
            @isset($tickets)
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Última incidencia</h6>
                </div>
                <div class="card-body">
                    @php
                        $ticket = $tickets->getTicket();
                        $client = new \App\Thirdparty($ticket['socid']);
                    @endphp
                    <p>Cliente: {{$client->getName()}}</p>
                    <p>Mensaje: {{$ticket['message']}}</p>
                    <div class="row">
                        <div class="col-6">
                            <form method="POST" action="{{route('call.update',$ticket['id'])}}" target="_blank">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="phone" value="{{$client->getPhone()}}">
                                <button type="submit" class="btn btn-danger"><i class="fas fa-phone-alt text-white mr-2"></i>Llamar al cliente</button>
                            </form>
                        </div>
                        <div class="col-6">
                            <form method="POST" action="{{route('call.update', $ticket['id'])}}">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-success float-right"><i class="fas fa-check text-white mr-2"></i>Incidencia resuelta</button>
                            </form>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <a href="{{route('erp.tickets')}}" class="col-6">Ver todas las incidencias ({{$tickets->count()}})</a>
                        <a href="https://erp.consultups.tech/ticket/index.php" class="col-6 text-right">Gestionar tickets en Dolibarr</a>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>
    





@endsection