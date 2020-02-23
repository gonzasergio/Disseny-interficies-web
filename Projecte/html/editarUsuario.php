<html>
<?php include '../templates/head.html'?>
<body>
<?php include '../templates/navbarLogueado.html'?>

<!-- CONTENIDO -->

<main role="main" class="container-fluid m-main py-5">
    <div class="row mx-0 mx-lg-5">
        <div class="col-md-3 ">
            <h3><i class="fas fa-user-cog"></i> Editar</h3>
            <hr>
            <div class="list-group my-3 nav nav-tab" id="Tab" role="tablist">
                <a id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true" class="list-group-item list-group-item-action active">Informacio personal</a>
              <a id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security" aria-selected="false" class="list-group-item list-group-item-action">Seguretat</a>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <div class="row tab-content">
                        <div role="tabpanel" aria-labelledby="info-tab" id="info" class="col-md-12 tab-pane active">
                            <form>
                                <div class="form-group row">
                                    <label for="nom" class="col-sm-4 col-form-label">Nombre*</label>
                                    <div class="col-sm-8">
                                        <input id="nom" name="nom" placeholder="Nombre" class="form-control" required="required" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="apellidos" class="col-sm-4 col-form-label">Apellidos*</label>
                                    <div class="col-sm-8">
                                        <input id="apellidos" name="apellidos" placeholder="Apellidos" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-4 col-form-label">Email*</label>
                                    <div class="col-sm-8">
                                        <input id="email" name="email" placeholder="Email" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="dni" class="col-sm-4 col-form-label">DNI</label>
                                    <div class="col-sm-8">
                                        <input id="dni" name="dni" placeholder="DNI" class="form-control" required="required" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telefono" class="col-sm-4 col-form-label">Teléfono</label>
                                    <div class="col-sm-8">
                                        <input id="telefono" name="telefono" placeholder="Teléfono" class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Fecha de nacimiento</label>
                                    <div class="col-sm-8">
                                        <div class="form-row">
                                            <div class="col">
                                                <select class="form-control" aria-label="dia" title="dia">
                                                    <option>Dia</option>
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                    <option>6</option>
                                                    <option>7</option>
                                                    <option>8</option>
                                                    <option>9</option>
                                                    <option>10</option>
                                                    <option>11</option>
                                                    <option>12</option>
                                                    <option>13</option>
                                                    <option>14</option>
                                                    <option>15</option>
                                                    <option>16</option>
                                                    <option>17</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-control">
                                                    <option>Mes</option>
                                                    <option>Enero</option>
                                                    <option>Febrero</option>
                                                    <option>Marzo</option>
                                                    <option>Abril</option>
                                                    <option>Mayo</option>
                                                    <option>Junio</option>
                                                    <option>Julio</option>
                                                    <option>Agosto</option>
                                                    <option>Septiembre</option>
                                                    <option>Octubre</option>
                                                    <option>Noviembre</option>
                                                    <option>Diciembre</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <select class="form-control">
                                                    <option>Año</option>
                                                    <option>2020</option>
                                                    <option>2019</option>
                                                    <option>2018</option>
                                                    <option>2017</option>
                                                    <option>2016</option>
                                                    <option>2015</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Sexo</label>
                                    <div class="col-sm-8">
                                        <div class="form-row">
                                            <div class="col-12 col-sm mb-1 mb-sm-0">
                                                <input id="hombre" name="hombre" class="form-control" type="button" value="Hombre">
                                            </div>
                                            <div class="col-12 col-sm mb-1 mb-sm-0">
                                                <input id="mujer" name="mujer" class="form-control" type="button" value="Mujer">
                                            </div>
                                            <div class="col-12 col-sm">
                                                <input id="otro" name="otro" class="form-control" type="button" value="Prefiero no decirlo">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="offset-sm-4 col-sm-8">
                                        <button type="button" class="btn btn-blue">Guardar cambios</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div role="tabpanel" aria-labelledby="security-tab" id="security" class="col-12 tab-pane">
                            <form>
                                <div class="form-group row">
                                    <label for="passactual" class="col-12 col-sm-4 col-form-label">Contraseña actual</label>
                                    <div class="col-12 col-sm-8">
                                        <input id="passactual" name="passactual" placeholder="Contraseña actual" class="form-control here" required="required" type="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="passnew" class="col-12 col-sm-4 col-form-label">Contraseña nueva</label>
                                    <div class="col-12 col-sm-8">
                                        <input id="passnew" name="passnew" placeholder="Contraseña nueva" class="form-control here" type="password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="repeatpassnew" class="col-12 col-sm-4 col-form-label">Repetir Contraseña nueva</label>
                                    <div class="col-12 col-sm-8">
                                        <input id="repeatpassnew" name="repeatpassnew" placeholder="Repetir Contraseña nueva" class="form-control here" type="password">
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col col-sm-8 offset-sm-4">
                                        <button name="submit" type="submit" class="btn btn-blue">Guardar cambios</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include '../templates/footer.html'?>
</body>
</html>
