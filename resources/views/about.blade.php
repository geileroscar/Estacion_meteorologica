@extends('layouts.app')

@section('content')
    <div class="" style="margin-top: -30px">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3 font-weight-bold">Estación Meteorológica</h1>
                <p class="lead">Digitales III</p>
                <p>
                    Este proyecto fue realizado por el grupo de digitales III del periodo
                    académico 2020-1, el proyecto consta básicamente de la creación y el diseño de una estación la cual
                    detecte
                    o permita medir cierta cantidad de parámetros ambientales y enviarlos a un servidor remoto, estos
                    datos se
                    podrán observar o visualizar en una página web y en una aplicación móvil, cada cambio que se realice
                    en estos parámetros será visualizado en tiempo real
                </p>
                <p><a class="btn btn-primary btn-lg btn-raised" href="/home" role="button">ver informe »</a></p>
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row mb-5">
                <div class="col-md-4">
                    <h2>Calidad del aire</h2>
                    <div class="text-justify">
                        En la legislación española y europea, el <strong>microgramo/metro cúbico</strong> es la unidad
                        empleada para
                        cuantificar la calidad del aire. Con esta unidad se miden muchos de los valores de referencia de
                        gases
                        nocivos presentes en el ambiente,&nbsp;como pueden ser los valores límite o los umbrales de
                        información. Los
                        <a class="btn btn-primary" data-toggle="collapse" href="#colapse-calidad-aire" role="button"
                           aria-expanded="false" aria-controls="multiCollapseExample1">
                            Ver más »
                        </a>
                        <div class="collapse multi-collapse" id="colapse-calidad-aire">
                            <div>
                                <strong>contaminantes</strong> con más antigüedad en lo que se refiere a su estudio
                                científico,
                                como son el
                                SO2 o los óxidos de nitrógeno se expresan en <strong>microgramo/m3</strong>. Sin embargo
                                el
                                monóxido de
                                carbono (CO), es el único cuyos niveles de concentración se miden normalmente en
                                <strong>miligramos/m3. </strong>Para otros contaminantes con porcentajes muy bajos de
                                presencia
                                en el aire
                                como las Dioxinas o los Hidrocarburos Policíclicos Aromáticos, se utilizan submúltiplos
                                todavía
                                más pequeños
                                que el gramo:<span id="more-1976"></span>

                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente
                                ea proident.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2>Presión atmosférica</h2>
                    <p class="text-justify">La presión atmosférica es el peso de la columna de aire que hay sobre
                        cualquier punto o lugar de
                        la tierra y
                        es por tanto el peso por unidad de superficie.</p>
                    <div class="text-justify">
                        <img class="aligncenter size-medium wp-image-2837"
                             alt="Presión atmosférica"
                             src="{{asset('images/presionAtmosferica.png')}}"
                             width="300" height="60" data-id="2837"/>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse-presion-atmosferica"
                           role="button"
                           aria-expanded="false" aria-controls="collapse-presion-atmosferica">
                            Ver más »
                        </a>
                        <div class="collapse multi-collapse" id="collapse-presion-atmosferica">
                            Cuanto mayor es la altura,
                            menor es la presión atmosférica y cuanto menor es la altura y más se acerque a nivel del
                            mar,
                            mayor será la
                            presión.
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <h2>Radiación</h2>
                    <p class="text-justify">Los científicos miden la radiación de maneras diferentes. Algunas veces,
                        miden la dosis que
                        recibe una
                        persona de una fuente radiactiva y, otras veces, miden la cantidad de radiactividad en el agua,
                        el suelo o
                        el aire. Cada medida describe un aspecto distinto de la radiación y cada una tiene su propia
                        unidad.</p>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapse-radiacion" role="button"
                       aria-expanded="false" aria-controls="collapse-radiacion">
                        Ver más »
                    </a>
                    <div class="collapse multi-collapse" id="collapse-radiacion">
                        <ul>
                            <li class="text-justify"><strong>La radiactividad</strong> se refiere a la cantidad de
                                radiación
                                ionizante emitida
                                por un material.
                                Ya sea si emite partículas alfa o beta, rayos gamma, rayos X o neutrones, la cantidad de
                                material radiactivo
                                se expresa en términos de su radiactividad (o simplemente su actividad). Esto representa
                                la
                                cantidad de
                                átomos en la desintegración del material en un período dado. Las unidades de medición
                                para
                                la radiactividad
                                son el curie (Ci, unidad estadounidense) y el becquerel (Bq, unidad internacional).
                            </li>
                            <li class="text-justify"><strong>La exposición </strong> describe la cantidad de radiación
                                que
                                se desplaza por el
                                aire. Muchos tipos
                                de monitores de la radiación miden la exposición. Las unidades para la exposición son el
                                roentgen (R, unidad
                                estadounidense) y el culombio/kilogramo (C/kg, unidad internacional).
                            </li>
                            <li class="text-justify"><strong>La dosis absorbida </strong> describe la cantidad de
                                radiación
                                absorbida por un
                                objeto o persona. La
                                unidad para la dosis absorbida es el rad (unidad estadounidense) o el gray (Gy, unidad
                                internacional). Un
                                gray equivale a 100 rads.
                            </li>
                            <li class="text-justify">​<strong>La dosis efectiva</strong>describe la cantidad de
                                radiación
                                absorbida por una
                                persona, ajustada
                                para representar el tipo de radiación recibida y el efecto en órganos específicos. La
                                unidad
                                utilizada para
                                la dosis efectiva es el rem (unidad estadounidense) o el sievertio (Sv, unidad
                                internacional).<br><br>
                                Un sievertio equivale a 100 rems. Más comúnmente, la dosis se mide en unidades mucho más
                                pequeñas: milirrems
                                o milisievertios. Un milirrem (mrem) es una milésima parte de un rem. Un milisievertio
                                es
                                una milésima parte
                                de un sievertio. Usar la calculadora de dosis de radiación para estimar su dosis anual
                                de
                                fuentes de
                                radiación ionizante.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4">
                    <h2>Humedad</h2>
                    <div class="text-justify">
                        <p>
                            <strong>La humedad es la cantidad de vapor de agua que se encuentra en la atmósfera</strong>.
                            Juega un papel
                            muy importante en la formación de las nubes; de hecho, de no haber vapor de agua éstas no se
                            podrían formar.
                        </p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse-humedad" role="button"
                           aria-expanded="false" aria-controls="collapse-humedad">
                            Ver más »
                        </a>
                        <div class="collapse multi-collapse" id="collapse-humedad">
                            <p>
                                Se distinguen varios tipos, los cuales son necesarios conocer si se quieren tener más
                                conocimientos sobre el
                                clima de una zona, o sobre el tiempo que hace en un determinado día. Sepamos más sobre
                                ella.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <h2>Precipitación</h2>
                    <div class="text-justify">
                        <div style="text-align: justify;">Los líquidos y los gases son medidos en unidades de volumen.
                            Este volumen se
                            compone, como es lógico, de una medida de altura, una de longitud y otra de ancho de un
                            cubo. De esta
                            manera, se tiene una altura por una superficie (ancho por largo).
                        </div>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse-precipitacion" role="button"
                           aria-expanded="false" aria-controls="collapse-precipitacion">
                            Ver más »
                        </a>
                        <div class="collapse multi-collapse" id="collapse-precipitacion">
                            <div style="text-align: justify;">Cuando se indican las medidas de precipitación es habitual
                                encontrar unidades
                                en milímetros (mm) o en litros por metro cuadrado (l/m2 o litros que caen en un área de
                                un
                                metro por un
                                metro). Estas dos unidades son equivalentes y tienen un ratio de 1, esto es, una medida
                                de
                                1mm es lo mismo
                                que 1 l/m2, y esto es así debido a que un litro en un cubo de un metro de ancho y un
                                metro
                                de largo ocupa en
                                volumen exactamente un mm de altura. Sólo hay que pensar en que, como es habitual
                                conocer,
                                un cubo de 1
                                metro cúbico (un metro de alto, uno de ancho y uno de alto) tiene una capacidad de 1000
                                litros. Si un metro
                                de altura son 1000 milímetros (mm), un mm corresponderá, por tanto, a un litro.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <h2>Temperatura</h2>
                    <div class="text-justify">
                        Recordemos que es una&nbsp;
                        <strong>
                            magnitud que mide el&nbsp;nivel&nbsp;térmico o el&nbsp;calor&nbsp;que
                            un cuerpo posee.&nbsp;
                        </strong>
                        Toda sustancia en determinado&nbsp;estado&nbsp;de agregación (sólido,líquido o gas), está
                        constituida por&nbsp;
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse-temperatura"
                           role="button"
                           aria-expanded="false" aria-controls="collapse-temperatura">
                            Ver más »
                        </a>
                        <div class="collapse multi-collapse" id="collapse-temperatura">
                            <strong>
                                moléculas que se encuentran en continuo
                                movimiento.
                            </strong>&nbsp;
                            La suma de las energías de todas las moléculas del cuerpo se conoce
                            como&nbsp;
                            <strong>
                                energía térmica
                            </strong>;y
                            <strong>
                                la temperatura es la medida de esa energía
                                promedio.
                            </strong>


                            <p>
                                Actualmente se&nbsp;usan tres escalas de temperatura;&nbsp;
                                <strong>
                                    grados Fahrenheit (ºF),
                                    Celsius (ºC) y
                                    Kelvin (ºK).&nbsp;
                                </strong>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-md-4">
                    <h2>Velocidad del viento</h2>
                    <div class="text-justify">
                        <p>Dado que el viento tiene una masa, puede mover objetos, que algunos de los instrumentos de
                            medición para
                            medir el viento (anemómetro) toman ventaja. La velocidad del viento puede ser determinada
                            por la velocidad
                            de una hélice. Alternativamente, diferentes dispositivos de medición miden la velocidad del
                            viento por el
                            reflejo o la velocidad de las ondas (sonido, luz) (ver métodos de medición).</p>
                        <a class="btn btn-primary" data-toggle="collapse" href="#collapse-velocidad-viento"
                           role="button"
                           aria-expanded="false" aria-controls="collapse-velocidad-viento">
                            Ver más »
                        </a>
                        <div class="collapse multi-collapse" id="collapse-velocidad-viento">
                            <p>Los valores de velocidad por hora son promedios de intervalos de 6 a 10 minutos. Estos
                                intervalos de 10
                                minutos consisten en 4&nbsp;mediciones por segundo, que se agregan a 10 minutos. Las
                                velocidades máxima y
                                mínima se derivan de intervalos de 3 segundos que consisten en 12 mediciones
                                individuales.</p>
                            <p>La dirección puede determinarse, por ejemplo, mediante una veleta de viento, que emite un
                                valor medido cada
                                segundo. Estos también se promedian durante 10 minutos y luego se agregan a valores por
                                hora.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center my-5">
            <h1 class="mb-4">Desarrollo web</h1>
        </div>
        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4 text-center">
                    <img class="rounded-circle"
                         src="{{asset("images/avatars/cristiancuriel.jpg")}}"
                         alt="Generic placeholder image" width="140" height="140">
                    <h2>Cristian Curiel</h2>
                </div>
                <div class="col-lg-4 text-center">
                    <img class="rounded-circle"
                         src="{{asset("images/avatars/geilerradillo.jpg")}}"
                         alt="Generic placeholder image" width="140" height="140">
                    <h2>Geiler Radillo</h2>

                </div>
                <div class="col-lg-4 text-center">
                    <img class="rounded-circle img-fluid"
                         src="{{asset("images/avatars/rafaelmanjarez.jpg")}}"
                         alt="Generic placeholder image" width="140" height="140">
                    <p class="display-4">Rafael Majarez</p>

                </div>
            </div>

        </div>
    </div>
@endsection
