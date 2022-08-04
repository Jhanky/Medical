@extends('layouts.main')

@section('base')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold">Hola</h6>
        </div>
        <div class="card-body">

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="contacta">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Opciones</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Jhan Carlos Martinesz Gomez</td>
                            <td>21</td>

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
