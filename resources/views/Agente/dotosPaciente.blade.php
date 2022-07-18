@extends('layouts.layoutAgente')

@section('base')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Infoamation of the patiente</h6>
        </div>
        <div class="card-body">
            <div class="container">
                <div class="row">
                    <div class="col-3">
                        <h4>Jhan Martinez</h4>
                        <img src=" {{ asset('img/avatar.jpg') }}" class="img-fluid" alt="Responsive image" width="200"
                            height="200">
                    </div>
                    <div class="col-9" style="text-align:left">
                        <p>Nombre: Jhan Martines Gomez</p>
                        <p>Edad: 21</p>
                        <p>Tipo de tratamiento: expecial</p>
                    </div>
                </div>
                <br>
                <div>
                    <textarea class="form-control" rows="3" Placeholder="Descricion"></textarea>
                </div>
                <br>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead class="contacta">
                            <tr>
                                <th scope="col">Day</th>
                                <th scope="col">Reason</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Opciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>17 Julio 2022</td>
                                <td>Tratamienti</td>
                                <td>Juan Peres</td>
                                <td class="text-center">
                                    <a class="btn" style="background-color: #969696; color:white"
                                        href="/Agente/datos">See</a>

                                    <a class="btn" style="background-color: #969696; color:white"
                                        href="/Agente/datos">See</a>
                                </td>
                            </tr>
                            <tr>
                                <td>17 Julio 2022</td>
                                <td>Tratamienti</td>
                                <td>Juan Peres</td>
                                <td class="text-center">
                                    <a class="btn" style="background-color: #969696; color:white"
                                        href="/Agente/datos">See</a>

                                    <a class="btn" style="background-color: #969696; color:white"
                                        href="/Agente/datos">See</a>
                                </td>
                            </tr>
                            <tr>
                                <td>17 Julio 2022</td>
                                <td>Tratamienti</td>
                                <td>Juan Peres</td>
                                <td class="text-center">
                                    <a class="btn" style="background-color: #969696; color:white"
                                        href="/Agente/datos">See</a>

                                    <a class="btn" style="background-color: #969696; color:white"
                                        href="/Agente/datos">See</a>
                                </td>
                            </tr>
                            <tr>
                                <td>17 Julio 2022</td>
                                <td>Tratamienti</td>
                                <td>Juan Peres</td>
                                <td class="text-center">
                                    <a class="btn" style="background-color: #969696; color:white"
                                        href="/Agente/datos">See</a>

                                    <a class="btn" style="background-color: #969696; color:white"
                                        href="/Agente/datos">See</a>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                    <br>
                    <button>Cancelar</button>
                </div>
            </div>
        </div>
    @endsection
