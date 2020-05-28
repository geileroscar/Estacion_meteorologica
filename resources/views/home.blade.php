@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-11">
                <div class="card">
                    <ul class="nav nav-tabs bg-primary " id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                               aria-controls="home" aria-selected="true">
                                Actual
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#datos-historicos" role="tab"
                               aria-controls="datos-historicos" aria-selected="false">
                                Datos históricos
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#datos-historicos2" role="tab"
                               aria-controls="datos-historicos" aria-selected="false">
                               Gráficas
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content py-4 px-4" id="myTabContent" style="min-height: 60vh">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <x-actuales/>
                        </div>
                        <div class="tab-pane fade" id="datos-historicos" role="tabpanel" aria-labelledby="datos-historicos-tab">
                            <x-historicos/>
                        </div>
                        <div class="tab-pane fade" id="datos-historicos2" role="tabpanel" aria-labelledby="datos-historicos2-tab">
                            <x-historicos2/>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
