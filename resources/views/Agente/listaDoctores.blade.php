@extends('layouts.layoutAgente')

@section('base')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">List of doctors
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="contacta">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Speciality</th>
                            <th scope="col">Diary</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>8:00</td>
                            <td>X2</td>
                            <td class="text-center">
                                <a class="btn" style="background-color: #969696; color:white"
                                    href="/Agente/datos">See</a>
                            </td>
                        </tr>
                        <tr>
                            <td>9:00</td>
                            <td>X2</td>
                            <td class="text-center">
                                <a class="btn" style="background-color: #969696; color:white"
                                    href="/Agente/datos">See</a>
                            </td>
                        </tr>
                        <tr>
                            <td>10:00</td>
                            <td>X2</td>
                            <td class="text-center">
                                <a class="btn" style="background-color: #969696; color:white"
                                    href="/Agente/datos">See</a>
                            </td>

                        </tr>
                        <tr>
                            <td>11:00</td>
                            <td>X2</td>
                            <td class="text-center">
                                <a class="btn" style="background-color: #969696; color:white"
                                    href="/Agente/datos">See</a>
                            </td>

                        </tr>
                        <tr>
                            <td>12:00</td>
                            <td>X2</td>
                            <td class="text-center">
                                <a class="btn" style="background-color: #969696; color:white"
                                    href="/Agente/datos">See</a>
                            </td>

                        </tr>
                        <tr>
                            <td>1:00</td>
                            <td>X2</td>
                            <td class="text-center">
                                <a class="btn" style="background-color: #969696; color:white"
                                    href="/Agente/datos">See</a>
                            </td>

                        </tr>
                        <tr>
                            <td>2:00</td>
                            <td>X2</td>
                            <td class="text-center">
                                <a class="btn" style="background-color: #969696; color:white"
                                    href="/Agente/datos">See</a>
                            </td>
                        </tr>
                        <tr>
                            <td>3:00</td>
                            <td>X2</td>
                            <td class="text-center">
                                <a class="btn" style="background-color: #969696; color:white"
                                    href="/Agente/datos">See</a>
                            </td>
                        </tr>
                        <tr>
                            <td>4:00</td>
                            <td>X2</td>
                            <td class="text-center">
                                <a class="btn" style="background-color: #969696; color:white"
                                    href="/Agente/datos">See</a>
                            </td>

                        </tr>
                        <tr>
                            <td>5:00</td>
                            <td>X2</td>
                            <td class="text-center">
                                <a class="btn" style="background-color: #969696; color:white"
                                    href="/Agente/datos">See</a>
                            </td>

                        </tr>
                        <tr>
                            <td>6:00</td>
                            <td>X2</td>
                            <td class="text-center">
                                <a class="btn" style="background-color: #969696; color:white"
                                    href="/Agente/datos">See</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
