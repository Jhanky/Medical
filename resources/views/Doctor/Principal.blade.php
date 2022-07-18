 @extends('layouts.layoutDoctor')

 @section('base')
     <div class="card shadow mb-4">
         <div class="card-header py-3">
             <h6 class="m-0 font-weight-bold">Hola</h6>
         </div>
         <div class="card-body">
             <div class="container">
                 <div class="row">
                     <div class="col-9">
                         <div class="border border-dark">
                             <div class="container">
                                 <div class="row">
                                     <div class="col-3">
                                         <img src=" {{ asset('img/avatar.jpg') }}" class="img-fluid"
                                             alt="Responsive image" width="150" height="150"
                                             style="margin-bottom: 5px;">
                                     </div>
                                     <div class="col-9" style="text-align:left">
                                         <p>Nombre: Jhan Martines Gomez</p>
                                         <p>Edad: 21</p>
                                         <p>Tipo de tratamiento: expecial</p>
                                         <a class="btn btn-secondary btn-sm float-right" style="margin-bottom: 5px;" href="/Doctor/datos">See more</a>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <div class="col-3">
                        <div class="card">
                            <div class="card-body">
                              <h5 class="card-title"><i class="fa-solid fa-clipboard-list"></i> Pending appointments</h5>
                              <h3 class="card-subtitle mb-2 text-muted text-center"> <b>12</b></h3>


                            </div>
                          </div>
                     </div>
                 </div>
                 <br>
                 <div class="row">
                    <div class="col-9">
                        <div class="border border-dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <img src=" {{ asset('img/avatar.jpg') }}" class="img-fluid"
                                            alt="Responsive image" width="150" height="150"
                                            style="margin-bottom: 5px;">
                                    </div>
                                    <div class="col-9" style="text-align:left">
                                        <p>Nombre: Jhan Martines Gomez</p>
                                        <p>Edad: 21</p>
                                        <p>Tipo de tratamiento: expecial</p>
                                        <a class="btn btn-secondary btn-sm float-right" style="margin-bottom: 5px;" href="/Doctor/datos">See more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-9">
                        <div class="border border-dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <img src=" {{ asset('img/avatar.jpg') }}" class="img-fluid"
                                            alt="Responsive image" width="150" height="150"
                                            style="margin-bottom: 5px;">
                                    </div>
                                    <div class="col-9" style="text-align:left">
                                        <p>Nombre: Jhan Martines Gomez</p>
                                        <p>Edad: 21</p>
                                        <p>Tipo de tratamiento: expecial</p>
                                        <a class="btn btn-secondary btn-sm float-right" style="margin-bottom: 5px;" href="/Doctor/datos">See more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">

                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-9">
                        <div class="border border-dark">
                            <div class="container">
                                <div class="row">
                                    <div class="col-3">
                                        <img src=" {{ asset('img/avatar.jpg') }}" class="img-fluid"
                                            alt="Responsive image" width="150" height="150"
                                            style="margin-bottom: 5px;">
                                    </div>
                                    <div class="col-9" style="text-align:left">
                                        <p>Nombre: Jhan Martines Gomez</p>
                                        <p>Edad: 21</p>
                                        <p>Tipo de tratamiento: expecial</p>
                                        <a class="btn btn-secondary btn-sm float-right" style="margin-bottom: 5px;" href="/Doctor/datos">See more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">

                    </div>
                </div>
             </div>
         </div>
     </div>
 @endsection
