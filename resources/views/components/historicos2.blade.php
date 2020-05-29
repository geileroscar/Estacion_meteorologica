<div>
    <!-- He who is contented is rich. - Laozi -->
    <div class="card mb-5">
        <figure class="highcharts-figure">
            <div id="temperatura"></div>
        </figure>
    </div>

    <div class="card mb-5">
        <figure class="highcharts-figure">
            <div id="VelocidadViento"></div>
        </figure>
    </div>
    <div class="card mb-5">
        <figure class="highcharts-figure">
            <div id="Radiacion"></div>
        </figure>
    </div>
    <div class="card mb-5">
        <figure class="highcharts-figure">
            <div id="PresionAtmoferica"></div>
        </figure>
    </div>
    <div class="card mb-5">
        <figure class="highcharts-figure">
            <div id="Humedad"></div>
        </figure>
    </div>
    <div class="card mb-5">
        <figure class="highcharts-figure">
            <div id="Precipitacion"></div>
        </figure>
    </div>
    <div class="card mb-5">
        <figure class="highcharts-figure">
            <div id="CalidadAire"></div>
        </figure>
    </div>
    <script>
        $(document).ready(function () {
            var temperatura = []
            var velocidadViento = [];
            var radiacion = [];
            var presionAtmoferica = [];
            var humedad = [];
            var precipitacion = [];
            var calidadAire = [];
            axios.get('/sensores')
                .then(response => {
                    // Obtenemos los datos
                    if (response.status === 200) {

                        console.log("response", response);
                        for (let i = 0; i < response.data.length; i++) {
                            var sensores = response.data[i];
                            console.log("este es un sensor", sensores);
                            temperatura.push(parseFloat(sensores.temperatura));
                            velocidadViento.push(parseFloat(sensores.velocidad_viento));
                            radiacion.push(parseFloat(sensores.radiacion));
                            presionAtmoferica.push(parseFloat(sensores.presion_atmoferica));
                            humedad.push(parseFloat(sensores.humedad));
                            precipitacion.push(parseFloat(sensores.precipitacion));
                            calidadAire.push(parseFloat(sensores.calidad_aire));

                        }
                        console.log("Datos a graficar",
                            temperatura
                            , velocidadViento
                            , radiacion
                            , presionAtmoferica
                            , humedad
                            , precipitacion
                            , calidadAire);
                        Highcharts.chart('temperatura', {
                            title: {
                                text: 'Gráfica de la temperatura'
                            },

                            subtitle: {
                                text: 'Esta es la gráfica de la temperatura registrada'
                            },

                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle'
                            },

                            plotOptions: {
                                series: {
                                    label: {
                                        connectorAllowed: false
                                    },
                                }
                            },

                            series: [{
                                name: 'Temperatura',
                                data: temperatura
                            }],

                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            layout: 'horizontal',
                                            align: 'center',
                                            verticalAlign: 'bottom'
                                        }
                                    }
                                }]
                            }

                        });
                        Highcharts.chart('VelocidadViento', {
                            title: {
                                text: 'Gráfica de la Velocidad del Viento'
                            },

                            subtitle: {
                                text: 'Esta es la gráfica de la Velocidad del Viento registrada'
                            },

                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle'
                            },

                            plotOptions: {
                                series: {
                                    label: {
                                        connectorAllowed: false
                                    },
                                }
                            },

                            series: [{
                                name: 'Velocidad del Viento',
                                data: velocidadViento
                            }],

                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            layout: 'horizontal',
                                            align: 'center',
                                            verticalAlign: 'bottom'
                                        }
                                    }
                                }]
                            }

                        });
                        Highcharts.chart('Radiacion', {
                            title: {
                                text: 'Gráfica de la Radiación'
                            },

                            subtitle: {
                                text: 'Esta es la gráfica de la Radiación registrada'
                            },

                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle'
                            },

                            plotOptions: {
                                series: {
                                    label: {
                                        connectorAllowed: false
                                    },
                                }
                            },

                            series: [{
                                name: 'Radiacion',
                                data: radiacion
                            }],

                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            layout: 'horizontal',
                                            align: 'center',
                                            verticalAlign: 'bottom'
                                        }
                                    }
                                }]
                            }

                        });
                        Highcharts.chart('PresionAtmoferica', {
                            title: {
                                text: 'Gráfica de la PresionAtmoferica'
                            },

                            subtitle: {
                                text: 'Esta es la Presión Atmosférica registrada'
                            },

                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle'
                            },

                            plotOptions: {
                                series: {
                                    label: {
                                        connectorAllowed: false
                                    },
                                }
                            },

                            series: [{
                                name: 'Presión Atmosférica',
                                data: presionAtmoferica
                            }],

                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            layout: 'horizontal',
                                            align: 'center',
                                            verticalAlign: 'bottom'
                                        }
                                    }
                                }]
                            }

                        });
                        Highcharts.chart('Humedad', {
                            title: {
                                text: 'Gráfica de la Humedad'
                            },

                            subtitle: {
                                text: 'Esta es la Humedad registrada'
                            },


                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle'
                            },

                            plotOptions: {
                                series: {
                                    label: {
                                        connectorAllowed: false
                                    },
                                }
                            },

                            series: [{
                                name: 'Humedad',
                                data: humedad
                            }],

                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            layout: 'horizontal',
                                            align: 'center',
                                            verticalAlign: 'bottom'
                                        }
                                    }
                                }]
                            }

                        });
                        Highcharts.chart('Precipitacion', {
                            title: {
                                text: 'Gráfica de la Precipitación'
                            },

                            subtitle: {
                                text: 'Esta es la Precipitación registrada'
                            },


                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle'
                            },

                            plotOptions: {
                                series: {
                                    label: {
                                        connectorAllowed: false
                                    },
                                }
                            },

                            series: [{
                                name: 'Precipitación',
                                data: precipitacion
                            }],

                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            layout: 'horizontal',
                                            align: 'center',
                                            verticalAlign: 'bottom'
                                        }
                                    }
                                }]
                            }

                        });
                        Highcharts.chart('CalidadAire', {
                            title: {
                                text: 'Gráfica de la Calidad del Aire'
                            },

                            subtitle: {
                                text: 'Esta es la CalidadAire registrada'
                            },

                            legend: {
                                layout: 'vertical',
                                align: 'right',
                                verticalAlign: 'middle'
                            },

                            plotOptions: {
                                series: {
                                    label: {
                                        connectorAllowed: false
                                    },
                                }
                            },

                            series: [{
                                name: 'Calidad del Aire',
                                data: calidadAire
                            }],

                            responsive: {
                                rules: [{
                                    condition: {
                                        maxWidth: 500
                                    },
                                    chartOptions: {
                                        legend: {
                                            layout: 'horizontal',
                                            align: 'center',
                                            verticalAlign: 'bottom'
                                        }
                                    }
                                }]
                            }

                        });
                    }
                })
                .catch(e => {
                    console.log("error de conexion")
                });
        });
    </script>
</div>

