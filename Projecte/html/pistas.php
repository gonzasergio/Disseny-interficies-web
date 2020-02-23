<html>
<?php include '../templates/head.html'?>
<body>
<?php include '../templates/navbarLogueado.html'?>

<!-- CONTENIDO -->

<main class="p-5">
    <div class="mb-3">
        <form class="form-inline">
            <div class="form-group">
                <label for="date" class="mr-2">Fecha:  </label>
                <input type="date" id="date" class="form-control" name="trip-start" min="2019-01-01" max="2020-12-31">
            </div>
        </form>
    </div>
    <div class="table-responsive">
        <table class="table text-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Pista 1</th>
                    <th scope="col">Pista 2</th>
                    <th scope="col">Pista 3</th>
                    <th scope="col">Pista 4</th>
                    <th scope="col">Pista 5</th>
                    <th scope="col">Pista 6</th>
                    <th scope="col">Pista 7</th>
                    <th scope="col">Pista 8</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="bg-light">14:00</th>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                </tr>
                <tr>
                    <th scope="row" class="bg-light">15:00</th>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                </tr>
                <tr>
                    <th scope="row" class="bg-light">16:00</th>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                </tr>
                <tr>
                    <th scope="row" class="bg-light">17:00</th>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                </tr>
                <tr>
                    <th scope="row" class="bg-light">18:00</th>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                </tr>
                <tr>
                    <th scope="row" class="bg-light">19:00</th>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                </tr>
                <tr>
                    <th scope="row" class="bg-light">20:00</th>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                </tr>
                <tr>
                    <th scope="row" class="bg-light">21:00</th>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                </tr>
                <tr>
                    <th scope="row" class="bg-light">22:00</th>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-danger">Ocupada</td>
                </tr>
                <tr>
                    <th scope="row" class="bg-light">23:00</th>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-danger">Ocupada</td>
                    <td class="text-success">Libre</td>
                    <td class="text-success">Libre</td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--<div class="d-flex justify-content-end mt-2">
        <button type="button" id="reservar" class="btn btn-success">Reservar</button>
    </div>-->

    <!-- MODAL -->

    <div id="modalReserva" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <!-- header modal -->

                <div class="modal-header">
                    <h5 class="modal-title">Reserva Pista</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- body modal -->

                <div class="modal-body">
                    <form>
                        <div class="form-row form-group">
                            <div class="col-2">
                                <label> Pista:</label>
                                <input class="form-control" type="text" readonly="readonly" id="pista" placeholder="0">
                            </div>
                            <div class="col-5">
                                <label> Fecha:</label>
                                <input class="form-control" type="text" readonly="readonly" id="fecha" placeholder="00/00/0000">
                            </div>
                            <div class="col-5">
                                <label> Hora:</label>
                                <input class="form-control" type="text" readonly="readonly" id="hora" placeholder="00:00">
                            </div>
                        </div>
                        <div class="form-row form-group">
                            <div class="col-9">
                                <label> Nombre:</label>
                                <input class="form-control" type="text" id="nombre" placeholder="Nombre">
                            </div>
                            <div class="col-3">
                                <label> Personas:</label>
                                <input class="form-control" type="text" id="personas" placeholder="0">
                            </div>
                        </div>
                    </form>
                </div>

                <!-- footer modal -->

                <div class="modal-footer">
                    <button id="submitInsertIn" type="button" class="btn btn-info">Confirmar</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include '../templates/footer.html'?>

<script>
    $(document).ready(function () {
        $("td").click(function () {
            if ($(this).text() == 'Libre'){
                let col = $(this).parent().children().index($(this));
                let row = $(this).parent().parent().children().index($(this).parent());
                console.log(col, row);
                $("#modalReserva").modal();
            }
        });
    });
</script>
</body>
</html>