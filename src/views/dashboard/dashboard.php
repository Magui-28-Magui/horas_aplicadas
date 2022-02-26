<div class="container mt-4">
    <div class="row">
        <!-- INFO CARDS -->
        <div class="col-md-4 mb-4">
            <div class="card card-raised border-start bg-primary border-4">
                <div class="card-body px-4">
                    <div class="d-flex justify-content-between text-white align-items-center mb-2">
                        <div class="me-2">
                            <div class="display-5 text-white">Asistencia</div>
                            <div class="card-text">Lorem ipsum dolor.</div>
                        </div>
                        <div class="icon-circle bg-white-50 text-white"><i class="material-icons">assignment_turned_in</i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-raised border-start bg-secondary border-4">
                <div class="card-body px-4">
                    <div class="d-flex justify-content-between text-white align-items-center mb-2">
                        <div class="me-2">
                            <div class="display-5 text-white">Movimientos</div>
                            <div class="card-text">Lorem ipsum dolor.</div>
                        </div>
                        <div class="icon-circle bg-white-50 text-white"><i class="material-icons">swap_vert</i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card card-raised border-start bg-info border-4">
                <div class="card-body px-4">
                    <div class="d-flex justify-content-between text-white align-items-center mb-2">
                        <div class="me-2">
                            <div class="display-5 text-white">Tiempo extra</div>
                            <div class="card-text">Lorem ipsum dolor.</div>
                        </div>
                        <div class="icon-circle bg-white-50 text-white"><i class="material-icons">watch_later</i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card bg-white shadow">
            <div class="row p-2 mb-5">
                <!--FORM -->
                <div class="col-md-8"></div>
                <div class="col-md-4 mb-4 mt-4">
                    <label for="t_extra" class="form-label">Selecciona Planta</label>
                    <select class="form-select" id="t_extra" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <h5 class="text-center">Asistencia</h5>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Fecha</label>
                        <input type="date" class="form-control" id="date" aria-describedby="date">
                    </div>
                    <div class="mb-3">
                        <label for="planta" class="form-label">Planta</label>
                        <select class="form-select" id="planta" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="turno" class="form-label">Turno</label>
                        <select class="form-select" id="turno" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="linea" class="form-label">Linea</label>
                        <select class="form-select" id="linea" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="operadores" class="form-label">Operadores</label>
                        <input type="text" class="form-control" id="operadores" aria-describedby="oeradores">
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="text-center">Movimientos</h5>
                    <hr>
                    <div class="mb-3">
                        <label for="linea" class="form-label">Cambio de Linea</label>
                        <select class="form-select" id="linea" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="de_planta" class="form-label">de Planta</label>
                        <select class="form-select" id="de_planta" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="a_planta" class="form-label">a Planta</label>
                        <select class="form-select" id="a_planta" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="linea" class="form-label">Linea</label>
                        <select class="form-select" id="linea" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="operadores" class="form-label">Operadores</label>
                        <input type="text" class="form-control" id="operadores" aria-describedby="oeradores">
                    </div>
                    <div class="mb-3">
                        <label for="cant_hrs" class="form-label">Cantidad de horas</label>
                        <input type="text" class="form-control" id="cant_hrs" aria-describedby="oeradores">
                    </div>
                </div>
                <div class="col-md-4">
                    <h5 class="text-center">Tiempo extra</h5>
                    <hr>
                    <div class="mb-3">
                        <label for="t_extra" class="form-label">Tiempo extra en Linea</label>
                        <select class="form-select" id="t_extra" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="operadores" class="form-label">Operadores</label>
                        <input type="text" class="form-control" id="operadores" aria-describedby="oeradores">
                    </div>
                    <div class="mb-3">
                        <label for="operadores" class="form-label">Cantidad de H oras</label>
                        <input type="text" class="form-control" id="operadores" aria-describedby="oeradores">
                    </div>
                    <div class="mb-3">
                        <label for="t_extra" class="form-label">En planta</label>
                        <select class="form-select" id="t_extra" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-success" type="button">Guardar cambios</button>
                </div>
            </div>
        </div>
    </div>
</div>