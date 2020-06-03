<div>

    <div class="row mb-5">

        <div class="col-md-4 col-lg-3  mb-5">
            <div class="card">
                <div class="card-header font-weight-bold h4">
                    Temperatura
                </div>
                <div class="card-body text-center">

                    <canvas id="canvas-temperatura"
                            data-type="linear-gauge"
                            data-width="120"
                            data-height="250"
                            data-border-radius="20"
                            data-units="°C"
                            data-min-value="-60"
                            data-start-angle="90"
                            data-ticks-angle="180"
                            data-max-value="100"
                            data-major-ticks="-60,-50,-40,-30,-20,-10,0,10,20,30,40,50,60,70,80,90,100"
                            data-minor-ticks="2"
                            data-stroke-ticks="true"
                            data-highlights='[ {"from": 50, "to": 100, "color": "rgba(200, 50, 50, .75)"} ]'
                            data-color-plate="#fff"
                            data-color-bar-stroke="#ff0000"
                            data-needle-type="arrow"
                            data-needle-width="2"
                            data-needle-circle-size="7"
                            data-needle-circle-outer="true"
                            data-needle-circle-inner="false"
                            data-animation-duration="1500"
                            data-animation-rule="linear"
                            data-bar-width="10"
                            data-value="0"
                    ></canvas>
                </div>
            </div>

        </div>

        <div class="col-md-8 col-lg-6 mb-5">
            <div class="card">
                <div class="card-header font-weight-bold h4">
                    Velocidad del viento
                </div>
                <div class="card-body text-center">
                    <canvas
                        id="canvas-velocidad-viento"
                        data-type="radial-gauge"
                        data-width="250"
                        data-height="250"
                        data-units="Km/h"
                        data-title="false"
                        data-value="0"
                        data-min-value="0"
                        data-max-value="650"
                        data-major-ticks="0,50,100,150,200,250,300,350,400,450,500,550,600,650"
                        data-minor-ticks="0"
                        data-stroke-ticks="false"
                        data-highlights='[
                            { "from": 0, "to": 50, "color": "rgba(0,255,0,.15)" },
                            { "from": 50, "to": 100, "color": "rgba(255,255,0,.15)" },
                            { "from": 100, "to": 150, "color": "rgba(255,30,0,.25)" },
                            { "from": 150, "to": 200, "color": "rgba(255,0,225,.25)" },
                            { "from": 200, "to": 220, "color": "rgba(0,0,255,.25)" }
                        ]'
                        data-color-plate="#222"
                        data-color-major-ticks="#f5f5f5"
                        data-color-minor-ticks="#ddd" data-color-title="#fff"
                        data-color-units="#ccc" data-color-numbers="#eee"
                        data-color-needle-start="rgba(240, 128, 128, 1)"
                        data-color-needle-end="rgba(255, 160, 122, .9)"
                        data-value-box="true"
                        data-animation-rule="bounce"
                        data-font-value="Led"
                        data-animated-value="true">

                    </canvas>
                </div>
            </div>

        </div>

        <div class="col-md-6 col-lg-3 mb-5">
            <div class="card">
                <div class="card-header font-weight-bold h4">
                    Radiación
                </div>
                <div class="card-body  text-center">
                    <canvas id="canvas-radiacion"
                            data-type="linear-gauge"
                            data-width="120"
                            data-height="250"
                            data-border-radius="20"
                            data-units="C/Kg"
                            data-min-value="0"
                            data-max-value="1000"
                            data-major-ticks="0,100,200,300,400,500,600,700,800,900,1000"
                            data-minor-ticks="2"
                            data-stroke-ticks="true"
                            data-highlights='[ {"from": 700, "to": 1000, "color": "rgba(200, 50, 50, .75)"} ]'
                            data-color-plate="#fff"
                            data-needle-type="arrow"
                            data-needle-width="2"
                            data-animation-duration="1500"
                            data-animation-rule="linear"
                            data-tick-side="left"
                            data-number-side="left"
                            data-needle-side="left"
                            data-bar-stroke-width="7"
                            data-bar-begin-circle="false"
                            data-value="0"
                    ></canvas>
                </div>
            </div>

        </div>

        <div class="col-md-6 col-lg-4 mb-5">
            <div class="card">
                <div class="card-header font-weight-bold h4">
                    Presión atmosférica
                </div>
                <div class="card-body text-center">
                    <canvas id="canvas-presion-atmoferica"
                            data-type="radial-gauge"
                            data-width="250"
                            data-height="250"
                            data-min-value="900"
                            data-max-value="1500"
                            data-major-ticks="900,1000,1100,1200,1300,1400,1500"
                            data-stroke-ticks="true"
                            data-highlights='[
                                {"from": 900, "to": 1100,"color": "rgba(0,255,0,.15)"}
                            ]'
                            data-minor-ticks="20">
                    </canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5">
            <div class="card">
                <div class="card-header font-weight-bold h4">
                    Humedad
                </div>
                <div class="card-body text-center">
                    <canvas id="canvas-humedad"
                            data-type="radial-gauge"
                            data-width="250"
                            data-height="250"
                            data-units="g/m3"
                            data-min-value="0"
                            data-max-value="100"
                            data-major-ticks="0,10,20,30,40,50,60,70,80,90,100"
                            data-minor-ticks="2"
                            data-stroke-ticks="true"
                            data-highlights='[
                                                        {"from": 80, "to": 100, "color": "rgba(200, 50, 50, .75)"}
                                                    ]'
                            data-color-plate="#fff"
                            data-needle-type="arrow"
                            data-needle-width="2"
                            data-needle-circle-size="7"
                            data-needle-circle-outer="true"
                            data-needle-circle-inner="false"
                            data-animation-duration="1500"
                            data-animation-rule="linear"
                    ></canvas>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-5">
            <div class="card">
                <div class="card-header font-weight-bold h4">
                    Precipitación
                </div>
                <div class="card-body text-center">
                    <canvas id="canvas-precipitacion" data-type="radial-gauge"
                            data-width="250"
                            data-height="250"
                            data-units="mm"
                            data-title="Precipitación"
                            data-min-value="0"
                            data-max-value="10000"
                            data-major-ticks="[0,1000,2000,3000,4000,5000,6000,7000,8000,9000,10000]"
                            data-minor-ticks="2"
                            data-stroke-ticks="true"
                            data-highlights='[
                                {"from": 0, "to": 3000, "color": "rgba(0,0, 255, .3)"},
                                {"from": 8000, "to": 10000, "color": "rgba(255, 0, 0, .3)"}
                            ]'
                            data-ticks-angle="225"
                            data-start-angle="67.5"
                            data-color-major-ticks="#ddd"
                            data-color-minor-ticks="#ddd"
                            data-color-title="#eee"
                            data-color-units="#ccc"
                            data-color-numbers="#eee"
                            data-color-plate="#222"
                            data-border-shadow-width="0"
                            data-borders="true"
                            data-needle-type="arrow"
                            data-needle-width="2"
                            data-needle-circle-size="7"
                            data-needle-circle-outer="true"
                            data-needle-circle-inner="false"
                            data-animation-duration="1500"
                            data-animation-rule="linear"
                            data-color-border-outer="#333"
                            data-color-border-outer-end="#111"
                            data-color-border-middle="#222"
                            data-color-border-middle-end="#111"
                            data-color-border-inner="#111"
                            data-color-border-inner-end="#333"
                            data-color-needle-shadow-down="#333"
                            data-color-needle-circle-outer="#333"
                            data-color-needle-circle-outer-end="#111"
                            data-color-needle-circle-inner="#111"
                            data-color-needle-circle-inner-end="#222"
                            data-value-box-border-radius="0"
                            data-color-value-box-rect="#222"
                            data-color-value-box-rect-end="#333"
                    ></canvas>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-5">
            <div class="card">
                <div class="card-header font-weight-bold h4">
                    Dirección de viento
                </div>
                <div class="card-body text-center">
                    <canvas id="canvas-direccion-viento"
                            data-type="radial-gauge"
                            data-width="250"
                            data-height="250"
                            data-min-value="0"
                            data-max-value="360"
                            data-major-ticks="N,NE,E,SE,S,SW,W,NW,N"
                            data-minor-ticks="22"
                            data-ticks-angle="360"
                            data-start-angle="180"
                            data-stroke-ticks="false"
                            data-highlights="false"
                            data-color-plate="#33a"
                            data-color-major-ticks="#f5f5f5"
                            data-color-minor-ticks="#ddd"
                            data-color-numbers="#ccc"
                            data-color-needle="rgba(240, 128, 128, 1)"
                            data-color-needle-end="rgba(255, 160, 122, .9)"
                            data-value-box="false"
                            data-value-text-shadow="false"
                            data-color-circle-inner="#fff"
                            data-color-needle-circle-outer="#ccc"
                            data-needle-circle-size="15"
                            data-needle-circle-outer="false"
                            data-animation-rule="linear"
                            data-needle-type="line"
                            data-needle-start="75"
                            data-needle-end="99"
                            data-needle-width="3"
                            data-borders="true"
                            data-border-inner-width="0"
                            data-border-middle-width="0"
                            data-border-outer-width="10"
                            data-color-border-outer="#ccc"
                            data-color-border-outer-end="#ccc"
                            data-color-needle-shadow-down="#222"
                            data-border-shadow-width="0"
                            data-animation-target="plate"
                            data-units="ᵍ"
                            data-title="DIRECCIÓN"
                            data-font-title-size="19"
                            data-color-title="#f5f5f5"
                            data-animation-duration="1500"
                    ></canvas>
                </div>
            </div>
        </div>
        <div class="col-12 mb-5">
            <div class="card">
                <div class="card-header font-weight-bold h4">
                    Calidad del aire
                </div>
                <div class="card-body text-center">
                    <canvas style="max-width: 100%;width: 100%;"
                            id="canvas-calidad-aire"
                            data-type="linear-gauge"
                            data-border-radius="20"
                            data-value-box="true"
                            data-height="150"
                            data-min-value="0"
                            data-max-value="400"
                            data-major-ticks="0,50,100,150,200,250,300,350,400"
                            data-highlights='[
                                { "from": 0, "to": 50, "color": "green" },
                                { "from": 51, "to": 100, "color": "yellow" },
                                { "from": 101, "to": 150, "color": "orange" },
                                { "from": 151, "to": 200, "color": "red" },
                                { "from": 201, "to": 300, "color": "purple" },
                                { "from": 301, "to": 400, "color": "brown" }
                            ]'
                            data-minor-ticks="10"
                            data-stroke-ticks="true"
                            data-bar-begin-circle="false"
                            data-tick-side="left"
                            data-number-side="left"
                            data-needle-side="left"
                            data-needle-type="line"
                            data-needle-width="6"
                            data-color-needle="#c92323"
                            data-color-needle-end="#222"
                            data-animation-duration="1500"
                            data-animation-rule="linear"
                            data-animation-target="plate"
                            data-bar-width="5"
                            data-ticks-width="30"
                            data-ticks-width-minor="10"
                            data-units="mg/m3"
                    ></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
