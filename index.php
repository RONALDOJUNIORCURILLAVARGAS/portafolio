<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>DRSociety</title>
    <link rel="shortcut icon" href="img/icon.png" >
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="51">
    <!-- Navbar Start -->
    <nav class="navbar fixed-top shadow-sm navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.html" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5"><span class="text-primary">DR</span>Society</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="#home" class="nav-item nav-link active">Inicio</a>
                <a href="#about" class="nav-item nav-link">Sobre</a>
                <a href="#qualification" class="nav-item nav-link">Calidad</a>
                <a href="#skill" class="nav-item nav-link">Habilidades</a>
                <a href="#certification" class="nav-item nav-link">Certificaciones</a>
                <a href="#service" class="nav-item nav-link">Servicio</a>
                <!-- 
                <a href="#portfolio" class="nav-item nav-link">Portafolio</a>
                <a href="#testimonial" class="nav-item nav-link">Revisar</a>
                 -->

                <a href="#blog" class="nav-item nav-link">Proyectos</a>
                <a href="#contact" class="nav-item nav-link">Contáctame</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Video Modal Start -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/9Zj0JOHJR-s" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal End -->


    <!-- Header Start -->
    <div class="container-fluid bg-primary d-flex align-items-center mb-5 py-5" id="home" style="min-height: 100vh;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 px-5 pl-lg-0 pb-5 pb-lg-0">
                    <img class="img-fluid w-100 rounded-circle shadow-sm" src="img/perfil_ron.jpg" alt="">
                </div>
                <div class="col-lg-7 text-center text-lg-left">
                    <h3 class="text-white font-weight-normal mb-3">Soy</h3>
                    <h1 class="display-3 text-uppercase text-primary mb-2" style="-webkit-text-stroke: 2px #ffffff;">Ronaldo Junior Curilla Vargas </h1>
                    <h1 class="typed-text-output d-inline font-weight-lighter text-white"></h1>
                    <div class="typed-text d-none">Desarrollador de Software, Desarrollador Web , Desarrollador Full Stack , Analista de datos , Soporte de TI </div>
                    
                    <div class="d-flex align-items-center justify-content-center justify-content-lg-start pt-5">
                        <a href="./archives/cv.pdf" download="Curriculum vitae - Ronaldo Junior Curilla Vargas" class="btn btn-outline-light mr-5">Descarga CV</a>
                        <!-- 
                        <button type="button" class="btn-play" data-toggle="modal"
                            data-src="https://www.youtube.com/embed/9Zj0JOHJR-s" data-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="font-weight-normal text-white m-0 ml-4 d-none d-sm-block">Reproducir Video</h5>
 -->
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Sobre</h1>
                <h1 class="position-absolute text-uppercase text-primary">Sobre Mí</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5 pb-4 pb-lg-0">
                    <img class="img-fluid rounded w-100" src="img/perfil_ron.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <h3 class="mb-4">Desarrollador de Software & Analista de datos</h3>
                    <p>Busco establecerme y consolidarme en
                        una empresa que me otorgue
                        estabilidad laboral, aplicar
                        conocimientos en las distintas
                        áreas de la empresa, y
                        desarrollarme profesionalmente
                        para el buen desempeño de las
                        funciones asignadas</p>
                    <div class="row mb-3">
                        <div class="col-sm-6 py-2"><h6>Nombre: <span class="text-secondary">Ronaldo Junior Curilla Vargas</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Cumpleaños: <span class="text-secondary">20 Julio 2000</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Estado: <span class="text-secondary">Estudiante Universitario</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Carrera: <span class="text-secondary">Ingeniería de Sistemas</span></h6></div>
                        
                        <!-- 
                        <div class="col-sm-6 py-2"><h6>Experiencia: <span class="text-secondary">2 Años</span></h6></div>
                         -->

                        <div class="col-sm-6 py-2"><h6>Celular: <span class="text-secondary">+51 923 475 461</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Email: <span class="text-secondary"> ronaldocurillavargas@gmail.com</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Dirección: <span class="text-secondary">Ca. San Andres, Lima, Perú</span></h6></div>
                        <div class="col-sm-6 py-2"><h6>Freelance: <span class="text-secondary">disponible</span></h6></div>
                    </div>
                    <a href="#contact" class="btn btn-outline-primary mr-4">Contáctame</a>
                    <!-- <a href="" class="btn btn-outline-primary">Learn More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Qualification Start -->
    <div class="container-fluid py-5" id="qualification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Calidad</h1>
                <h1 class="position-absolute text-uppercase text-primary">Educación & Experiencia</h1>
            </div>
            <div class="row align-items-center ">
                <div class="col-lg-6">
                    <h3 class="mb-4">Mi educación</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">

                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"> Ingeniería de Sistemas</h5>
                            <p class="mb-2"><strong>UNIVERSIDAD NACIONAL FEDERICO VILLAREAL</strong> | <small>2017 - Actualidad</small></p>
                            <p> Ciclo actual: 9    </p>
                        </div>
                        <!-- Completar con mas registros de educacion educaciones -->
                        <!-- <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Master In CSE</h5>
                            <p class="mb-2"><strong>Cambridge University</strong> | <small>2000 - 2050</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet lorem diam</p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Master In CSE</h5>
                            <p class="mb-2"><strong>Cambridge University</strong> | <small>2000 - 2050</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet lorem diam</p>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <h3 class="mb-4">Mi Experiencia</h3>

                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Practicante Pre Profesionales de Tecnología y Transformaciónr</h5>
                            <p class="mb-2"><strong>LSF SERVICIOS GENERALES S.A.C., San Miguel, Lima </strong> | <small>2022(Enero) - 2022(Abril)</small></p>
                            <p>Diseñar soluciones de Tecnología de información y mejorar el sistema de la empresa</p>
                        </div>
                        <!-- Añadir mas puntos de experiencia -->
                        <!-- 
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Web Designer</h5>
                            <p class="mb-2"><strong>Soft Company</strong> | <small>2000 - 2050</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet lorem diam</p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Web Designer</h5>
                            <p class="mb-2"><strong>Soft Company</strong> | <small>2000 - 2050</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet lorem diam</p>
                        </div>
                         -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Qualification End -->


    <!-- Skill Start -->
    <div class="container-fluid py-5" id="skill">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Skills</h1>
                <h1 class="position-absolute text-uppercase text-primary">Mis habilidades</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">HTML</h6>
                            <h6 class="font-weight-bold">70%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">CSS</h6>
                            <h6 class="font-weight-bold">50%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">PHP</h6>
                            <h6 class="font-weight-bold">50%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">SQL server</h6>
                            <h6 class="font-weight-bold">80%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">My SQL</h6>
                            <h6 class="font-weight-bold">80%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">PostgreSQL</h6>
                            <h6 class="font-weight-bold">50%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">OracleSQL</h6>
                            <h6 class="font-weight-bold">50%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Firebase</h6>
                            <h6 class="font-weight-bold">30%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Power BI</h6>
                            <h6 class="font-weight-bold">40%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Javascript</h6>
                            <h6 class="font-weight-bold">90%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Vue JS</h6>
                            <h6 class="font-weight-bold">80%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">C++</h6>
                            <h6 class="font-weight-bold">85%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Python</h6>
                            <h6 class="font-weight-bold">60%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Django</h6>
                            <h6 class="font-weight-bold">50%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Flask</h6>
                            <h6 class="font-weight-bold">30%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">React js</h6>
                            <h6 class="font-weight-bold">30%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Java</h6>
                            <h6 class="font-weight-bold">50%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="skill mb-4">
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-bold">Dart</h6>
                            <h6 class="font-weight-bold">30%</h6>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skill End -->


    <!-- Certification Start -->
    <div class="container-fluid py-5" id="certification">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Certificación</h1>
                <h1 class="position-absolute text-uppercase text-primary">Conocimiento & certificaciones</h1>
            </div>
            <div class="row align-items-center ">
                <div class="col-lg-6">
                    <h3 class="mb-4">Mis conocimientos</h3>
                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"> Introducción a la Seguridad Cibernética</h5>
                            <p class="mb-2"><strong>Cisco Networking Academy</strong> | <small>Expedición: 2022(Abril)</small></p>
                            <p> <a href="https://drive.google.com/file/d/1bq0tvG3BoqMBVBgpOt83Il3XVx2VTvT1/view" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>

                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"> Gestión de la ciberseguridad</h5>
                            <p class="mb-2"><strong>Seguridad Cero</strong> | <small>Expedición: 2021(Junio)</small></p>
                            <p> <a href="https://drive.google.com/file/d/1pcDGUgZiaJaHeqGFCOGJPb-YAx0mDWH8/view" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>

                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"> Curador de datos</h5>
                            <p class="mb-2"><strong>Fundación Carlos Slim</strong> | <small>Expedición: 2022(Mayo)</small></p>
                            <p> <a href="https://capacitateparaelempleo.org/verifica/sc096a8hi/" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>

                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"> Administrador de bases de datos</h5>
                            <p class="mb-2"><strong>Fundación Carlos Slim</strong> | <small>Expedición: 2020(Enero)</small></p>
                            <p> <a href="https://capacitateparaelempleo.org/verifica/hiseo23k6/" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>

                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"> Análisis de datos con Power BI</h5>
                            <p class="mb-2"><strong>DMC Perú</strong> | <small>Expedición: 2022(Mayo)</small></p>
                            <p> <a href="https://drive.google.com/file/d/1PZ9hZWK0svs3tDWlWLgulSxEQ3gYFL58/view" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Los bits y bytes de las redes informáticas </h5>
                            <p class="mb-2"><strong>Google</strong> | <small>Expedición: 2022(Mayo)</small></p>
                            <p> <a href="https://www.coursera.org/account/accomplishments/verify/4TQQ49KQ4JY7" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Python 101 for Data Science </h5>
                            <p class="mb-2"><strong>Cognitive Class </strong> | <small>Expedición: 2021(Noviembre)</small></p>
                            <p> <a href="https://courses.cognitiveclass.ai/certificates/6ae9094ea0924783808e72781dad3e5c" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>
                        <!-- Completar con mas registros de educacion educaciones -->
                        <!-- <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Master In CSE</h5>
                            <p class="mb-2"><strong>Cambridge University</strong> | <small>2000 - 2050</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet lorem diam</p>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <h3 class="mb-4"> ⏱	<!-- REda --></h3>

                    <div class="border-left border-primary pt-2 pl-4 ml-2">
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Programación con Javascript </h5>
                            <p class="mb-2"><strong>Fundación Telefónica</strong> | <small>Expedición: 2021(Agosto)</small></p>
                            <p> <a href="https://drive.google.com/file/d/1vlkOlzRZPmnRyiOcApzzpQ2DIpL6MhFZ/view" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>

                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1"> C++ : Básico a Avanzado </h5>
                            <p class="mb-2"><strong>Udemy</strong> | <small>Expedición: 2019(Marzo)</small></p>
                            <p> <a href="https://www.udemy.com/certificate/UC-UADQ7QHA/" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>

                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Aspectos básicos de la asistencia técnica </h5>
                            <p class="mb-2"><strong>Google</strong> | <small>Expedición: 2021(Octubre)</small></p>
                            <p> <a href="https://www.coursera.org/account/accomplishments/verify/EFTHHQZGUJZV" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Analisis de datos con Google Analytics</h5>
                            <p class="mb-2"><strong>DMC Perú</strong> | <small>Expedición: 2021(Septiembre)</small></p>
                            <p> <a href="https://drive.google.com/file/d/13CmaF-Uzbk80fIfliZLOran3R3MRHQQE/view" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Excel Intermedio</h5>
                            <p class="mb-2"><strong>Campus Romero</strong> | <small>Expedición: 2021(Agosto)</small></p>
                            <p> <a href="https://cursos.campusromero.pe/certificates/0ff59c81bdc44681b5899b8e6b3a570f" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Power Point Intermedio</h5>
                            <p class="mb-2"><strong>Campus Romero</strong> | <small>Expedición: 2021(Agosto)</small></p>
                            <p> <a href="https://cursos.campusromero.pe/certificates/ce44f59b2a894605b8d9901ab6009450" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Word Intermedio</h5>
                            <p class="mb-2"><strong>Campus Romero</strong> | <small>Expedición: 2021(Agosto)</small></p>
                            <p> <a href="https://cursos.campusromero.pe/certificates/ab4e456aaf854938b83ebae6c9a41eee" target="_blank" class="stretched-link btn btn-outline-primary mr-2">Mostrar credencial</a> </p>
                        </div>
                        <!-- Añadir mas puntos de experiencia -->
                        <!-- 
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Web Designer</h5>
                            <p class="mb-2"><strong>Soft Company</strong> | <small>2000 - 2050</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet lorem diam</p>
                        </div>
                        <div class="position-relative mb-4">
                            <i class="far fa-dot-circle text-primary position-absolute" style="top: 2px; left: -32px;"></i>
                            <h5 class="font-weight-bold mb-1">Web Designer</h5>
                            <p class="mb-2"><strong>Soft Company</strong> | <small>2000 - 2050</small></p>
                            <p>Tempor eos dolore amet tempor dolor tempor. Dolore ea magna sit amet dolor eirmod. Eos ipsum est tempor dolor. Clita lorem kasd sed ea lorem diam ea lorem eirmod duo sit ipsum stet lorem diam</p>
                        </div>
                         -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Certification End -->

    <!-- Services Start -->
    <div class="container-fluid pt-5" id="service">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Servicio</h1>
                <h1 class="position-absolute text-uppercase text-primary">Mis servicios</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Desarrollo de software</h4>
                    </div>
                    <p>Desarrollar aplicaciones de escritorio en base a los requerimientos que se soliciten y su aprobación</p>
                    <!-- 
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                    -->
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-laptop-code service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Desarrollo Web</h4>
                    </div>
                    <p>Desarrollar aplicaciones web responsive con bases de datos relaciones o no relacionales en base a sus funcionalidades</p>
                    <!-- 
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                     -->
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-database service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Analista de datos</h4>
                    </div>
                    <p>Extraer, procesar y agrupar datos, analizar estas agrupaciones y generar informes a partir de ello</p>
                    <!-- 
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                     -->
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fab fa-2x fa-apple service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Soporte de TI</h4>
                    </div>
                    <p>Instalar y configurar la tecnología a ser empleada en la empresa, realizar el mantenimiento periódico de sistemas y brindar asistencia a los empleados o clientes acerca de tecnología; </p>
                    <!-- 
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                     -->
                </div>
                <!-- Añadir mas empleos -->
                <!-- 
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-search service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">Practicante ciberseguridad</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div>
                <div class="col-lg-4 col-md-6 text-center mb-5">
                    <div class="d-flex align-items-center justify-content-center mb-4">
                        <i class="fa fa-2x fa-edit service-icon bg-primary text-white mr-3"></i>
                        <h4 class="font-weight-bold m-0">practicante auditoria TI</h4>
                    </div>
                    <p>Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem lorem lorem est amet labore eirmod erat clita</p>
                    <a class="border-bottom border-primary text-decoration-none" href="">Read More</a>
                </div> -->

            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Portfolio Start -->
   

    <!-- 
    <div class="container-fluid pt-5 pb-3" id="portfolio">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Gallery</h1>
                <h1 class="position-absolute text-uppercase text-primary">My Portfolio</h1>
            </div>
            <div class="row">
                <div class="col-12 text-center mb-2">
                    <ul class="list-inline mb-4" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-primary m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".first">Design</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".second">Development</li>
                        <li class="btn btn-sm btn-outline-primary m-1" data-filter=".third">Marketing</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="img/portfolio-1.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-1.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="img/portfolio-2.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-2.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="img/portfolio-3.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-3.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="img/portfolio-4.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-4.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="img/portfolio-5.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-5.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
                    <div class="position-relative overflow-hidden mb-2">
                        <img class="img-fluid rounded w-100" src="img/portfolio-6.jpg" alt="">
                        <div class="portfolio-btn bg-primary d-flex align-items-center justify-content-center">
                            <a href="img/portfolio-6.jpg" data-lightbox="portfolio">
                                <i class="fa fa-plus text-white" style="font-size: 60px;"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     
     -->
    
     <!-- Portfolio End -->


    <!-- Testimonial Start -->
    <!-- 
    <div class="container-fluid py-5" id="testimonial">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Review</h1>
                <h1 class="position-absolute text-uppercase text-primary">Clients Say</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="img/testimonial-1.jpg" style="width: 80px; height: 80px;">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="img/testimonial-2.jpg" style="width: 80px; height: 80px;">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="text-center">
                            <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet accusam amet eirmod eos, labore diam clita</h4>
                            <img class="img-fluid rounded-circle mx-auto mb-3" src="img/testimonial-3.jpg" style="width: 80px; height: 80px;">
                            <h5 class="font-weight-bold m-0">Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

     -->
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5" id="blog">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Proyectos</h1>
                <h1 class="position-absolute text-uppercase text-primary">Últimos proyectos</h1>
            </div>
            <div class="row">
                
                <div class="col-lg-4 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="img/blog-1.jpg" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Junio</small>
                        </div>
                    </div>
                    <h5 class="font-weight-medium mb-4">Calendarios de Tareas</h5>
                    <a class="btn btn-sm btn-outline-primary py-2" href="https://github.com/RONALDOJUNIORCURILLAVARGAS/Calendario-de-Tareas" target="_blank">Ver proyecto</a>
                </div>

                <div class="col-lg-4 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100 " src="img/pokem.jpg" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Marzo</small>
                        </div>
                    </div>
                    <h5 class="font-weight-medium mb-4">Juego de Pokemon</h5>
                    <a class="btn btn-sm btn-outline-primary py-2" href="https://github.com/RONALDOJUNIORCURILLAVARGAS/Vue.JS-04-PokemonGame" target="_blank">Ver proyecto</a>
                </div>

                <div class="col-lg-4 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="img/reserve.png" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Abril</small>
                        </div>
                    </div>
                    <h5 class="font-weight-medium mb-4">Sistema de sugerencia de estacionamiento para el control de congestion vehicular en centros comerciales</h5>
                    <a class="btn btn-sm btn-outline-primary py-2" href="https://github.com/RONALDOJUNIORCURILLAVARGAS/RealPlaza_estacionamiento" target="_blank">Ver proyecto</a>
                </div>

            </div>
        </div>
    </div>
    <!-- Blog End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5" id="contact">
        <div class="container">
            <div class="position-relative d-flex align-items-center justify-content-center">
                <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Contacto</h1>
                <h1 class="position-absolute text-uppercase text-primary">Contáctame</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="contact-form text-center">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="form-row">
                                <div class="control-group col-sm-6">
                                    <input type="text" class="form-control p-4" id="name" placeholder="Nombre"
                                        required="required" data-validation-required-message="Por favor ingrese su nombre" />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group col-sm-6">
                                    <input type="email" class="form-control p-4" id="email" placeholder="Email"
                                        required="required" data-validation-required-message="Por favor ingrese su email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control p-4" id="subject" placeholder="Asunto"
                                    required="required" data-validation-required-message="Por favor ingrese su asunto" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control py-3 px-4" rows="5" id="message" placeholder="Mensaje"
                                    required="required"
                                    data-validation-required-message="Por favor ingrese su mensaje"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Enviar mensaje</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-primary text-white mt-5 py-5 px-sm-3 px-md-5">
        <div class="container text-center py-5">
            <div class="d-flex justify-content-center mb-4">
                <a class="btn btn-light btn-social mr-2" href="https://github.com/RONALDOJUNIORCURILLAVARGAS" target="_blank"><i class="fab fa-github"></i></a>
                <a class="btn btn-light btn-social mr-2" href="https://www.facebook.com/ronaldojunior.curillavargas/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mr-2" href="https://www.linkedin.com/in/ronaldo-junior-curilla-vargas-51056b141/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
               <!-- 
                <a class="btn btn-light btn-social" href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                 -->
            </div>
<!-- 
            <div class="d-flex justify-content-center mb-3">
                <a class="text-white" href="#">Privacy</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Terms</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">FAQs</a>
                <span class="px-3">|</span>
                <a class="text-white" href="#">Help</a>
            </div> -->

            <p class="m-0">&copy; <a class="text-white font-weight-bold" href="#">ronaldojcv</a>. Todos los derechos reservados. Diseñado por <a class="text-white font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
            </p>
        </div>
    </div>
    
    <!-- Footer End -->

    <!-- Scroll to Bottom -->
    <i class="fa fa-2x fa-angle-down text-white scroll-to-bottom"></i>

    <!-- Back to Top -->
    <a href="#" class="btn btn-outline-dark px-0 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/typed/typed.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>