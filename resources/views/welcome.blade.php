@extends('layouts.app')
<style>
    .bg-img {
        /* The image used */
        background-image: url(https://www.darwinfoundation.org/images/news/20151230_history_meteorological_station/meteorological_DSC02679_1080x608.JPG);
        /* Full height */
        height: 100%;
        /* Center and scale the image nicely */
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        opacity: .9;

    }
    #app>main {
        padding-bottom: 0 !important;
        padding-top: 0 !important;
    }
</style>
@section('content')
<div class="bg-img" style="margin-top: 0">
    <div class="container">


        <div class="d-flex align-items-start align-self-end flex-column" style="min-height: 80vh;">

            <div class="mt-auto">
                <div style="background-color: rgba(0, 0, 0, 0.54); border-radius: 5px; padding: 4px 10px 4px 10px">
                    <p>
                        <h1 class="display-2 font-weight-bold text-white">
                            <strong>Estacion Meteorologica</strong>
                        </h1>
                    </p>
                    <p class="display-3 font-weight-bold text-white">Digitales III</p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
