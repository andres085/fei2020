<?php

use yii\helpers\Html;
use yii\web\View;

$this->title = 'Hoja de Personaje';
$this->params['breadcrumbs'][] = $this->title;



$this->registerJsFile('https://cdn.jsdelivr.net/npm/vue/dist/vue.js', ['position' => View::POS_HEAD]);
$this->registerJsFile("https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js", ['position' => View::POS_HEAD]);
?>

<div class="container-fluid">

    <!-- NOMBRE -->
    <div class="d-flex my-3 justify-content-center">
        <h1>{{ nombre }}</h1>
    </div>

    <hr>

    <ul class="nav nav-pills nav-fill mb-3" id="pills-tab" role="tablist">

        <li class="nav-item">
            <a class="nav-link active" id="pills-info-tab" data-toggle="pill" href="#pills-info" role="tab" aria-controls="pills-info" aria-selected="true">Información</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="pills-trasfonde-tab" data-toggle="pill" href="#pills-trasfondo" role="tab" aria-controls="pills-trasfondo" aria-selected="false">Trasfondo</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="pills-objetos-tab" data-toggle="pill" href="#pills-objetos" role="tab" aria-controls="pills-objetos" aria-selected="false">Objetos</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" id="pills-diario-tab" data-toggle="pill" href="#pills-diario" role="tab" aria-controls="pills-diario" aria-selected="false">Diario</a>
        </li>

    </ul>

   
    <div class="tab-content" id="pills-tabContent">

         <!-- INFORMACION -->
        <div class="tab-pane fade show active" id="pills-info" role="tabpanel" aria-labelledby="pills-info-tab">
            
            <!-- RAZA -->
            <div class="d-flex my-3">
                <button class="btn btn-block btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapse-raza" aria-expanded="false" aria-controls="collapseExample">
                <h3>{{raza}}</h3>
                </button>

                <div class="collapse" id="collapse-raza">
                    <div class="card card-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis minima quam expedita, nesciunt fugiat numquam exercitationem quo voluptas eaque. Veritatis dolor, neque pariatur porro alias harum iusto? Temporibus, laboriosam sit.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, sint, similique molestiae ea quia exercitationem perspiciatis, aperiam ipsam nobis laboriosam doloribus! Quasi ullam expedita optio incidunt at? Quod, consequuntur atque.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis reprehenderit, consequatur itaque et rerum modi cupiditate sed iusto ducimus ipsa nulla voluptates blanditiis accusamus mollitia deleniti consequuntur harum eum iste.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, excepturi distinctio ipsa repellat alias animi dolore ad aspernatur ut, suscipit aliquid unde possimus delectus! Sit ea aperiam sed in? Adipisci?
                    </div>
                </div>
            
            </div>

            <hr>

            <!-- CLASE -->
            <div class="d-flex my-3">
                <button class="btn btn-block btn-outline-dark" type="button" data-toggle="collapse" data-target="#collapse-clase" aria-expanded="false" aria-controls="collapseExample">
                <h3>{{clase}}</h3>
                </button>

                <div class="collapse" id="collapse-clase">
                    <div class="card card-body">
                        
                        <h5>Dado de Golpe:</h5>

                        <h5>Rasgos de la clase:</h5>

                        <div style="width: 800px;" id="accordion">
                            <div class="card">
                                <div class="card-header" id="headingOne">
                                    <h5 class="mb-0" style="text-align: center;">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#rasgo1" aria-expanded="true" aria-controls="collapseOne">
                                        Rasgo #1
                                        </button>
                                    </h5>
                                </div>

                                <div id="rasgo1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <h5 class="mb-0" style="text-align: center;">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#rasgo2" aria-expanded="false" aria-controls="collapseTwo">
                                        Rasgo #2
                                        </button>
                                    </h5>
                                </div>
                                <div id="rasgo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <h5 class="mb-0" style="text-align: center;">
                                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#rasgo3" aria-expanded="false" aria-controls="collapseThree">
                                        Rasgo #3
                                        </button>
                                    </h5>
                                </div>
                                <div id="rasgo3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <hr>

            <!-- CARACTERISTICAS -->

            <div class="d-flex my-3 justify-content-center">
                <h3>Atributos</h3>
            </div>

            <div class="row">

                <div class="col-md-2">

                    <div class="card">
                    
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-title">Fuerza</h5>
                            <hr>
                            <h5 class="card-text">15</h5>
                            <h6 class="card-text">+3</h6>
                            
                        </div>
                        
                    </div>

                </div>

                <div class="col-md-2">

                    <div class="card">
                    
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-title">Destreza</h5>
                            <hr>
                            <h5 class="card-text">15</h5>
                            <h6 class="card-text">+3</h6>
                            
                        </div>
                        
                    </div>

                </div>

                <div class="col-md-2">

                    <div class="card">
                    
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-title">Constitución</h5>
                            <hr>
                            <h5 class="card-text">15</h5>
                            <h6 class="card-text">+3</h6>
                            
                        </div>
                        
                    </div>

                </div>

                <div class="col-md-2">

                    <div class="card">
                    
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-title">Inteligencia</h5>
                            <hr>
                            <h5 class="card-text">15</h5>
                            <h6 class="card-text">+3</h6>
                            
                        </div>
                        
                    </div>

                </div>

                <div class="col-md-2">

                    <div class="card">
                    
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-title">Sabiduria</h5>
                            <hr>
                            <h5 class="card-text">15</h5>
                            <h6 class="card-text">+3</h6>
                            
                        </div>
                        
                    </div>

                </div>

                <div class="col-md-2">

                    <div class="card">
                    
                        <div class="card-body" style="text-align: center;">
                            <h5 class="card-title">Carisma</h5>
                            <hr>
                            <h5 class="card-text">15</h5>
                            <h6 class="card-text">+3</h6>
                            
                        </div>
                        
                    </div>

                </div>

            </div>

        </div>

        <!-- TRASFONDO -->
        <div class="tab-pane fade" id="pills-trasfondo" role="tabpanel" aria-labelledby="pills-trasfondo-tab">
            
            <div>
                <h3><b>Trasfondo:</b> {{trasfondo}} </h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut deleniti voluptate placeat mollitia qui, voluptatibus, numquam accusantium minus quis voluptates quo. Est facere sit, iusto in nulla doloribus officia officiis.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis consectetur totam ut quis repellat amet mollitia tenetur omnis. Numquam labore ad perferendis. Earum ab atque voluptatibus doloremque. Numquam, accusantium tempore.
                </p>

                <div class="row">
                    <div class="col-md-4">
                        <h6><b>Competencia con Habilidades:</b></h6>
                        <ul class="list-unstyled">
                            <li> {{competencia1}} </li>
                            <li> {{competencia2}} </li>
                        </ul>

                        <h6><b>Competencia con Equipo:</b></h6>
                        <ul class="list-unstyled">
                            <li> {{competencia1}} </li>
                            <li> {{competencia2}} </li>
                        </ul>
                    </div>

                    <div class="col-md-8">
                        <h6><b>Rasgo:</b> {{nombre_rasgo}} </h6>

                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, officia! Sequi illum odit perferendis molestias veniam modi ipsa laborum laudantium? Voluptatum magnam ipsum repellendus facilis nemo quas dolor quasi esse.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit ab facilis id itaque incidunt natus quasi reiciendis aliquam officiis veniam velit voluptatem facere necessitatibus dolorum assumenda, sint, a esse? Pariatur?
                        </p>

                        <h6><b>Especialidad:</b> {{onmbre_especialidad}} </h6>

                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Distinctio recusandae minus eos earum dicta ducimus beatae, tempore, obcaecati cumque mollitia labore pariatur incidunt ad autem optio suscipit inventore ex quod.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse laborum aut tempore nemo ullam, aperiam deserunt iure qui asperiores est accusamus amet assumenda libero mollitia iusto alias quidem ab accusantium?
                        </p>
                    </div>
            </div>


            <div>
                <h3><b>Personalidad</b></h3>

                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente repellendus ea, labore reprehenderit assumenda praesentium totam aliquam! Dolorum debitis autem perferendis a iste deleniti numquam? Aperiam numquam quas necessitatibus blanditiis!
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos facere, repellendus deleniti voluptatibus in pariatur maiores, illo quo quidem ipsam blanditiis aperiam recusandae vero accusantium totam et eius odio error?
                </p>
            </div>

            <hr>

            <div>
                <h3><b>Ideales:</b></h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti natus ipsam nemo similique ullam voluptates id quam nihil rerum temporibus perferendis earum beatae dolores nobis cum, eaque consequuntur ut maiores?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dicta aliquam culpa atque ab obcaecati modi perspiciatis dolore iste accusamus excepturi quibusdam fugiat, molestiae voluptas, exercitationem a accusantium odit? Consequatur!
                </p>
            </div>

            <hr>

            <div>
                <h3><b>Vinculos:</b></h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti natus ipsam nemo similique ullam voluptates id quam nihil rerum temporibus perferendis earum beatae dolores nobis cum, eaque consequuntur ut maiores?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dicta aliquam culpa atque ab obcaecati modi perspiciatis dolore iste accusamus excepturi quibusdam fugiat, molestiae voluptas, exercitationem a accusantium odit? Consequatur!
                </p>
            </div>

            <hr>

            <div>
                <h3><b>Defectos:</b></h3>

                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti natus ipsam nemo similique ullam voluptates id quam nihil rerum temporibus perferendis earum beatae dolores nobis cum, eaque consequuntur ut maiores?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit dicta aliquam culpa atque ab obcaecati modi perspiciatis dolore iste accusamus excepturi quibusdam fugiat, molestiae voluptas, exercitationem a accusantium odit? Consequatur!
                </p>
            </div>



        </div>

        <!-- OBJETOS -->
        <div class="tab-pane fade" id="pills-objetos" role="tabpanel" aria-labelledby="pills-objetos-tab">
            
        </div>

        <!-- DIARIO -->
        <div class="tab-pane fade" id="pills-diario" role="tabpanel" aria-labelledby="pills-diario-tab">
            
        </div>
    </div>
    

    
</div>