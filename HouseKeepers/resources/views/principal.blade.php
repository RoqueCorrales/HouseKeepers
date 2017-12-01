
@extends('layouts.app')

@section('content')

<div class="container">
 
    <br>
    <br>
    <br>
    <div class="row">

     <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">
        <h2 class="text-center blanco">Buscar empleada</h2>
       
       <form class="form-horizontal" method="POST"  >
                        {{ csrf_field() }} 
        <div class="input-group">                        
                             
                        <input class="form-control" placeholder="Buscar empleada" type="text">
                    
                        <span class="input-group-btn">
                            <!--<button class="btn btn-primary"  type="submit"><span class="glyphicon glyphicon-search"></span> BUSCAR</button>-->
                            <a class="btn btn-primary" href="{{ url('vista') }}" role="button">BUSCAR</a>	

                        </span>
                    </div>
                    </form>
                    <br>
                    <br>
                    <br>


                    </div>
    </div>
</div

   <!-- Card -->
   <div class="container container mt-4 mb-5">
        <h3 class="display-4 text-center blanco"> Nuestras empleadas </h3>
        <hr class="bg-dark mb-4 w-26">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/1.jpg') }}" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">ESTUDIOS</h4>
                        <p class="card-text">
                          Podras encontrar empleadas con estudios por si tienes en mente que ayuden a tus hijos con las tareas
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/2.jpg') }}" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">HORARIOS</h4>
                        <p class="card-text">Encuentra empleadas que trabajen tiempo completo o acomode su horario a su necesidad y hacen muy  bien su trabajo.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/3.jpg') }}" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">COCINA</h4>
                        <p class="card-text">
                            Lograras encontrar empleadas que su especialidad es la cocina y tambien logran su trabajo de limpieza muy bien
                        </p>
                       
                    </div>
                </div>
            </div>
        
            
        </div>
    </div>
    
    <!-- Card -->

    <div class="container mb-5">
        <div class="row">
            <div class="col-md-12">
                <h3 class="display-4 text-center blanco">Informacion</h3>
                <hr class="bg-dark mb-8 w-26">
                <p class="lead blanco">
                    Helpers trata de solucionar el problema de muchas personas que no tienen tiempo para mantener su cas ordenada y/o ayudar a sus hijos en sus tareas o para hacerles comida.
                </p>
                <p class="blanco">
                    En esta pagina usted puede contratar a una empleada de confianza para que realice todos esos trabajos que usted no puede,acomodar,cocinar,planchar...,es una gran 
                </p>
                <ul class="list-unstyled pl-4 blaco">
                    <li><i class="fa fa-check"></i>Horarios</li>
                    <li><i class="fa fa-check"></i>Cotizacion</li>
                    <li><i class="fa fa-check"></i>Informacion</li>

                </ul>
                
            </div>
            </div>
                
            </div>
            <!-- Card -->
   <div class="container container mt-4 mb-5">
        <h3 class="display-4 text-center blanco"> ¿PORQUE ESCOGERNOS? </h3>
        <hr class="bg-dark mb-4 w-26">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/5.jpg') }}" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">ANTECEDENTES DELICTIVOS</h4>
                        <p class="card-text">
                            Nos encargamos de hacer una comprobación minuciosa de antecedentes delictivos. 
                            La Hoja de Delincuencia debe de estar al día y se debe renovar cada dos meses 
                            para continuar en nuestras listas.
                        </p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/6.jpg') }}" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">REFERENCIAS</h4>
                        <p class="card-text">Solo referimos colaboradores que tengan experiencia 
                            previa en el Servicio Doméstico. Comprobamos que hayan trabajado con anterioridad en
                             otras casas y que puedan desempeñar las labores encomendadas como cocinar o cuidar de niños.
                             Comprobamos las referencias que presentan en todos los casos.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="{{ asset('images/7.jpg') }}" alt="Card image cap">
                    <div class="card-block p-3">
                        <h4 class="card-title">ENTREVISTA PREVIA</h4>
                        <p class="card-text">
                            Hacemos una minuciosa entrevista previa al personal que le enviamos para así 
                            conocer la persona, ver como se expresa y hacerle
                             preguntas importantes que nos ayudan a descartar aquellas personas que no
                              se ajustan a nuestros requerimientos.
                        </p>
                       
                    </div>
                </div>
            </div>
        
            
        </div>
    </div>
    
<br>
<br>
<br>

     

   
@endsection
