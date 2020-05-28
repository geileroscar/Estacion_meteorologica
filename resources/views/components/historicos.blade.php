<div>
    <div class="table-responsive" style="width:100%">
        <table id="example" class="table table-striped table-bordered dt-responsive  display responsive nowrap"
               style="width:100%">
            <thead>
            <tr>
                <th>Temperatura</th>
                <th>Velocidad del viento</th>
                <th>Radiación</th>
                <th>Presión atmosférica</th>
                <th>Humedad</th>
                <th>Precipitación</th>
                <th>Calidad del aire</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
            <tfoot>
            <tr>
                <th>Temperatura</th>
                <th>Velocidad del viento</th>
                <th>Radiación</th>
                <th>Presión atmosférica</th>
                <th>Humedad</th>
                <th>Precipitación</th>
                <th>Calidad del aire</th>
            </tr>
            </tfoot>
        </table>
        <input type="button" class="btn btn-info " value="hacer responsive" onclick="responsive()">
    </div>

    <script>
        var table = null;

        function responsive() {
            table.responsive.recalc();
        }

        $(document).ready(function () {

            axios.get('/sensores')
                .then(response => {
                    // Obtenemos los datos
                    if (response.status === 200) {
                        let cadena = "";
                        console.log("response", response);
                        for (let i = 0; i < response.data.length; i++) {
                            var sensores = response.data[i];
                            console.log("este es un sensor", sensores)
                            cadena += "<tr><td>" + sensores.temperatura + "</td>" +
                                "<td>" + sensores.velocidad_viento + "</td>" +
                                "<td>" + sensores.radiacion + "</td>" +
                                "<td>" + sensores.presion_atmoferica + "</td>" +
                                "<td>" + sensores.humedad + "</td>" +
                                "<td>" + sensores.precipitacion + "</td>" +
                                "<td>" + sensores.calidad_aire + "</td></tr>";
                        }

                        $("#example").append(cadena);
                        table = $('#example').DataTable({
                            lengthChange: false,
                            buttons: ['copy', 'excel', 'pdf'],
                            responsive: true,
                            "language": {
                                "lengthMenu": "Mostrar _MENU_ registros por pagina",
                                "zeroRecords": "No se encontraron resultados en su busqueda",
                                "searchPlaceholder": "Buscar registros",
                                "info": "Mostrando  de _START_ al _END_  de  _TOTAL_ registros",
                                "infoEmpty": "No existen registros",
                                "infoFiltered": "",
                                "search": "Buscar:",
                                "processing": "Procesando...:",
                                "paginate": {
                                    "first": "Primero",
                                    "last": "Último",
                                    "next": "Siguiente",
                                    "previous": "Anterior"
                                },
                            },
                        });

                        table.responsive.recalc();
                        table.buttons().container()
                            .appendTo('#example_wrapper .col-md-6:eq(0)');

                        $(".buttons-html5").addClass("btn-raised mr-1");
                        responsive();
                    }


                })
                .catch(e => {
                    table = $('#example').DataTable({
                        lengthChange: false,
                        responsive: true,
                        buttons: ['copy', 'excel', 'pdf']
                    });

                    table.buttons().container()
                        .appendTo('#example_wrapper .col-md-6:eq(0)');

                    $(".buttons-html5").addClass("btn-raised mr-1");
                    table.responsive.recalc();

                });

            $('#table').DataTable().on("draw", function () {
                console.log(table)
                responsive();
            })
        });

    </script>
</div>
