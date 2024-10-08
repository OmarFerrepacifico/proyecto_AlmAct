

<!DOCTYPE html>
<html>
<head>
	<title>inicio</title>
	
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
	<style>
		<style>
        .table-container {
            overflow-x: auto; 
        }
        .table {
            max-width: 100%;
            width: 100%;
        }
   
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .hide {
            display: none;
        }
        #video-container {
      position: relative;
      width: 100%;
      height: : 100%;
      margin: auto;
    }
    #barcode-detector {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 70%;
      height: 50%;
        border: 5px solid rgb(221, 2, 2);
      box-sizing: border-box;
    }
    :root {
    --color-green: #00a878;
    --color-red: #fe5e41;
    --color-button: #fdffff;
    --color-black: #000;
}
.switch-button {
    display: inline-block;
}
.switch-button .switch-button__checkbox {
    display: none;
}
.switch-button .switch-button__label {
    background-color: var(--color-red);
    width: 5rem;
    height: 3rem;
    border-radius: 3rem;
    display: inline-block;
    position: relative;
}
.switch-button .switch-button__label:before {
    transition: .2s;
    display: block;
    position: absolute;
    width: 3rem;
    height: 3rem;
    background-color: var(--color-button);
    content: '';
    border-radius: 50%;
    box-shadow: inset 0px 0px 0px 1px var(--color-black);
}
.switch-button .switch-button__checkbox:checked + .switch-button__label {
    background-color: var(--color-green);
}
.switch-button .switch-button__checkbox:checked + .switch-button__label:before {
    transform: translateX(2rem);
}
.responsive-table {
      width: 100%;
      overflow-x: auto;
}

.responsive-table th, .responsive-table td {
      padding: 8px;
      text-align: left;
      border-top: 1px solid #ddd;
}

.responsive-table th {
      background-color: #ffedd7;
}

.responsive-table tbody tr:nth-child(even) {
      background-color: #ffedd7;

}

/* Estilo para el botón */
.btn-primary {
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary {
    padding: 10px 20px;
    font-size: 16px;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Estilo para el modal */
.modal {
    display: none; /* Oculto por defecto */
    position: fixed;
    z-index: 1; /* Asegúrate de que esté por encima del contenido */
    left: 0;
    top: 0;
    width: 60%;
    height: 60%;
    overflow: auto; /* Agrega scroll si es necesario */
    background-color: rgba(0,0,0,0.4); /* Fondo con opacidad */
}

/* Contenido del modal */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto; /* Ajusta el margen superior e inferior para mayor separación */
    padding: 20px;
    border: 1px solid #888;
    width: 100%; /* Ancho del modal */
    max-width: 400px; /* Ancho máximo del modal */
    height: 30vh; /* Altura del modal en relación a la ventana */
    position: relative;
    border-radius: 8px; /* Opcional: Bordes redondeados */
}

/* Ajustes para el contenido del video */
#video-container {
    width: 100%;
    height: 100%;
}

#barcode-scanner {
    width: 100%;
    height: 100%; /* Ajusta la altura del video */
    background-color: black; /* Fondo negro para el video */
}

/* El canvas puede ser opcional, ajusta según tus necesidades */


/* Botón para cerrar el modal */
.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
#camera {
            width: 100%;
            height: 400px;
            position: relative;
            overflow: hidden;
            border: 2px solid blue;
            border: 2px solid blue; 
        }


         
       
        #scanner-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: black;
        }
        #line {
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    border-top: 8px dotted red; /* Ajusta el grosor y estilo de la línea */
    transform: translateY(-50%);
}
        #alert {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            background: white;
            border: 2px solid #ccc;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.5);
            z-index: 1000;
            text-align: center;
        }
        #alert-text {
            font-size: 18px;
            margin-bottom: 20px;
        }
        #alert button {
            font-size: 18px;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #approve-button {
            background-color: #4CAF50;
            color: white;
        }
        #reject-button {
            background-color: #f44336;
            color: white;
        }
        #approve-button:hover {
            background-color: #45a049;
        }
        #reject-button:hover {
            background-color: #e53935;
        }
        

        
        
    </style>
</head>

<body id="page-top">
<div id="modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <div id="video-container">
            
				
               
    <div id="camera">
     
        <div id="scanner-container"></div>
        <div id="line"></div>
    </div>
    <div id="alert">
        <p id="alert-text"></p>
        <div class="row">
        <button id="approve-button">Aprobar</button>
        <button id="reject-button">Rechazar</button>
        </div>
        <div class="row">

        <a class="btn btn-warning form-control" href="Valida_articulo.php">
                  
                  <span>Validar codigo de barras</span></a>
                  
        </div>
    </div>
    
  

            </div>
			

        </div>
    </div>
    <div class="container">
        <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <?php
            
                ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    </div>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                
                <div class="sidebar-brand-text mx-3"> </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                  
                    <span>Localizar artículo</span></a>
            </li>

 <li class="nav-item active">
                <a class="nav-link" href="Valida_articulo.php">
                  
                    <span>Validar codigo de barras</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
          

            <!-- Nav Item - Pages Collapse Menu -->
      

            <!-- Nav Item - Utilities Collapse Menu -->
         

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
          
           
       
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

       

        </ul>
        <!-- End of Sidebar -->
	
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
	
            <!-- Main Content -->
            <div id="content">
                <form>
             
                </form>
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                     
                    </ul>

                </nav>
                <!-- End of Topbar -->
			
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="col-xl-12 col-md-12 col-sm-12  col-xs-12  mb-12">
				
                            <div class="card-body">
                              
                                    <div class="container mt-5">
                                        <div class="row">
                                          <div class="col-md-6 offset-md-3 text-center">
                                 
                                          
                                            <div class="mt-3">
                                              <button id="start-scan" class="btn btn-primary">Escanear con Camara</button>
											 
                                            </div>
                                      
                                            <div class="mt-3">

                                            <div class="switch-button">
    <!-- Checkbox -->   <label>código para mostrar</label>
    <input type="checkbox" name="switch-button" id="switch-label" class="switch-button__checkbox">
    <!-- Botón -->
    <label for="switch-label" class="switch-button__label"></label>
    <label>nombre del articulo</label>
</div>
                                            </div>


                                          

                                      <div class="mt-3" id="buscar_nombre"> 
                                        
                                        <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar por nombre"
                                        aria-label="Buscar por codigo" aria-describedby="basic-addon2" id="item_nombre">
                                        <input type="hidden" class="form-control bg-light border-0 small" placeholder="Buscar por nombre"
                                        aria-label="Buscar por codigo" aria-describedby="basic-addon2" id="item_nombre_id">
                                        
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button" id="busqueda" onclick='btnMinformacion_name();'> 
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                              </div>
                                          
                                        </div>
                                       
                                        <ol id="ol_nombre" class="olol">
                                 
                                 </ol>
                                  
                                </div>

                                            <div class="mt-3" id="buscar_codigo">
                                              
                                                    <div class="input-group">
                                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar"
                                                            aria-label="Search" aria-describedby="basic-addon2" id="item">
                                                        <div class="input-group-append">
                                                            <button class="btn btn-primary" type="button" id="busqueda" onclick='btnMinformacion();'>
                                                                <i class="fas fa-search fa-sm"></i>
                                                            </button>
                                                          </div>
                                                    </div>
                                                
                                              
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                               
                            </div>
                 
                    </div>




                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Datos</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Articulo
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800" id="articulo"></div>
                                                </div>
                                                <div class="col">
                                                  
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                       
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Existencias</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="existencias"></div>
                                        </div>
                                        <div class="col-auto">
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-2 col-md-4 mb-3">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               Ubicación con más existencia</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="almacen_masExistencias"></div>
                                        </div>
                                        <div class="col-auto">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



<!---------precios------->
<div class="col-xl-2 col-md-4 mb-3">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              precio mas alto  </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="prec_alt"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

						<div class="col-xl-2 col-md-4 mb-3">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                              precio mas bajo  </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" id="prec_bajo"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        

                        <!-- Earnings (Monthly) Card Example -->
                       
                        <!-- Pending Requests Card Example -->
                       

                    <!-- Content Row -->

                    <div class="row">

                        <!-- Area Chart -->
                        <div class="col-xl-5 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">detalles</h6>
                                   
                                </div>
                                <!-- Card Body -->
                            
                                <div id="pantalla_grande">
                                    <div class="container">
                                        <div class="row" >
                                        <table  class="table table-striped ">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Ubicación</th>
													<th>Existencia</th>
                                                 
                                                  
                                                </tr>
                                            </thead>
                                            <tbody id="cuerpo_tabla">
                                                
                                             
                                            </tbody>
                                        </table>
                                         </div>
                            </div>
                                </div>
                            </div>
                        </div>


                        <!-- Pie Chart -->
                        <div class="col-xl-7 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Lista de precios</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
											
                                        
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div >
									<div class="table-container">
									<table  class="table table-striped " id="resultsTable" class="display nowrap table table-sm table-bordered table-hover table-responsive-sm table table-striped ">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Ubicación</th>
													<th>Precio</th>
                                                    
                                                  
                                                </tr>
                                            </thead>
                                            <tbody id="cuerpo_tabla_precio">
                                                
                                             
                                            </tbody>
                                        </table>
										</div>
                                    </div>
                              
                                </div>
                            </div>
                        </div>
                      <input type="text" id="busquedas">
                    </div>

                    <!-- Content Row -->
                 

                            <!-- Color System -->
                        

                        <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                       

                            <!-- Approach -->
                       

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
          
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/sb-admin-2.min.js"></script>


    <script src="vendor/chart.js/Chart.min.js"></script>


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quagga"></script>
  
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
        <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">
    <!-- DataTables Buttons CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
    <!-- DataTables Buttons JS -->
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <!-- Buttons Flash JS -->
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.flash.min.js"></script>
    <!-- JSZip for Excel export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <!-- PDFMake for PDF export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <!-- Buttons HTML5 export -->
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <!-- Buttons print -->
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
     <script>

const modal = document.getElementById("modal");
const btn = document.getElementById("start-scan");
const span = document.getElementsByClassName("close")[0];



let isCodeDetected = false;  // Bandera para verificar si ya se detectó un código

const beepSound = new Audio('beep.mp3'); 
// Cuando el usuario haga clic en el botón, abre el modal
btn.onclick = function() {
    modal.style.display = "block";

    if (!isCodeDetected) {
        // Configuración del flujo de entrada
        let constraints = {
            facingMode: 'environment',
            width: { ideal: 1280, min: 640 },
            height: { ideal: 720, min: 480 }
        };

        // Inicializa Quagga
        Quagga.init({
            inputStream: {
                type: 'LiveStream',
                constraints: constraints,
                target: document.querySelector('#scanner-container')
            },
            decoder: {
                readers: [
                    'upc_reader', 
                    'code_128_reader', 
                    'ean_reader', 
                    'ean_8_reader', 
                    'code_39_reader', 
                    'codabar_reader', 
                    'i2of5_reader'
                ]
            },
            locator: {
                patchSize: 'large',
                halfSample: true
            }
        }, function(err) {
            if (err) {
                console.log(err);
                return;
            }
            Quagga.start();
        });

        // Manejo de la detección del código
        Quagga.onDetected(function(data) {
            if (!isCodeDetected) {
                isCodeDetected = true;
                Quagga.stop();
                beepSound.play();

                document.getElementById('alert-text').textContent = 'Código detectado: ' + data.codeResult.code;
                document.getElementById('alert').style.display = 'block';

                document.getElementById('approve-button').addEventListener('click', function() {
                    document.getElementById('item').value = data.codeResult.code;
                    document.getElementById('alert').style.display = 'none';
                    document.getElementById('modal').style.display = 'none';
                    isCodeDetected = false;
                    setTimeout(() => Quagga.start(), 1000);
                });

                document.getElementById('reject-button').addEventListener('click', function() {
                    document.getElementById('alert').style.display = 'none';
                    isCodeDetected = false;
                    modal.style.display = "none";
                    setTimeout(() => Quagga.start(), 1000);
                });
            }
        });
    }
}


// Cuando el usuario haga clic en el botón de cerrar (x), cierra el modal
span.onclick = function() {
    modal.style.display = "none";
    
}

// Cuando el usuario haga clic fuera del contenido del modal, cierra el modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
       
   

const div_nombre = document.getElementById('buscar_nombre');
            const div_codigo = document.getElementById('buscar_codigo');
            div_nombre.style.display = 'none';
document.getElementById('switch-label').addEventListener('change', function(event) {
    // Obtén el valor del checkbox
    var isChecked = event.target.checked;
    
    // Puedes hacer lo que necesites con el valor
    console.log(isChecked + (isChecked ? "marcado" : "desmarcado"));

if(isChecked==true){
    const div_codigo = document.getElementById('buscar_codigo');
    const div_nombre = document.getElementById('buscar_nombre');
    div_codigo.style.display = 'none';
    div_nombre.style.display = 'block';
}
else if(isChecked==false){
    const div_codigo = document.getElementById('buscar_codigo');
    const div_nombre = document.getElementById('buscar_nombre');
    div_nombre.style.display = 'none';
    div_codigo.style.display = 'block';
}

   
    /*const div_nombre = document.getElementById('buscar_nombre');
            const div_codigo = document.getElementById('buscar_codigo');
            div_nombre.style.display = 'none';*/
});
  

    $('#clearButton').click(function() {
                $('#cuerpo_tabla_precio').empty();
                table.clear().draw();
            });
            function truncateToDecimal(value, decimals) {
    var factor = Math.pow(10, decimals);
    return Math.floor(value * factor) / factor;
}
////////////////////////////////////
function btnMinformacion_name(){
				var precios="";
                var validacion =$("#busquedas").val();	
     console.log("validacion " + validacion)
     if(validacion==1){
        $('#cuerpo_tabla_precio').empty();
     
        document.getElementById('cuerpo_tabla_precio').innerHTML = '';
     }
		var articulo= $('#item_nombre_id').val();
	
				var arreglo=[];
				var id =0;
				$.get("reportes/reporte/tablaTransaccionesDiariasporVendedores.php",{articulo:articulo},
				function(htmlexterno){
                    console.log(htmlexterno);
				var articulo=	htmlexterno[0][0].description ;
				id = htmlexterno[0][0].id;
                console.log(id);
				$.get("reportes/reporte/tablatoplow.php",{id:id},
				function(htmlexterno){

					var data = JSON.parse(htmlexterno);

// Extrae el array de precios del primer objeto
 precios = data[0].precios;


var precioMax = -Infinity;
            var nombreMax = '';
            var precioMin = Infinity;
            var nombreMin = '';

$.each(precios, function(index, item) {
                var nombrePrecio = item.nombre_precio;
                var valorPrecio =  parseFloat(item.precio)*parseFloat(0.16);
                
                var iva =  item.precio*0.16;
                var moneda = item.moneda;

                // Añade los datos al div

"<p>Sucursal con el precio más alto: " + nombreMax + " con $" + precioMax.toFixed(2) + "</p>" +
                "<p>Sucursal con el precio más bajo: " + nombreMin + " con $" + precioMin.toFixed(2) + "</p>"
               

        // Añade los datos al div solo si contiene "mostrador"
   

  
				
				if (valorPrecio > precioMax) {
                    precioMax = valorPrecio;
                    nombreMax = nombrePrecio;
                }
                if (valorPrecio < precioMin) {
                    precioMin = valorPrecio;
                    nombreMin = nombrePrecio;
                }
             
           

            });
           
		// Inicializa el DataTable

// Inicializa DataTables
if ($.fn.DataTable.isDataTable('#resultsTable')) {
    // Si la tabla ya está inicializada, destrúyela
    $('#resultsTable').DataTable().destroy();
}
var table = $('#resultsTable').DataTable({
    data: precios,
    columns: [
        { data: 'nombre_precio', title: 'Ubicación' },
        { 
            data: 'precio', 
            title: 'Precio', 
            render: function(data, type, row) {
                // Supongamos que el IVA es del 21%
                var iva = 0.16;
                var precioConIva = (data*iva )+ (data);
                var precioTruncado = truncateToDecimal(precioConIva, 2);
                // Formateo manual del número con separador de miles y dos decimales
                return '$' + precioTruncado.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            },
            type: 'num'  // Asegúrate de que DataTables interpreta los valores como números
        }
    ],
    dom: 'Bfrtip',
    buttons: [
        'excel'
    ],
    order: [[1, 'asc']],  // Ordenar por la segunda columna (índice 1) por defecto, en orden ascendente
    pageLength: 50,  // Establece el número de filas por página en 10
    paging: true  // Asegúrate de que la paginación está habilitada
});

// Función de filtrado personalizada
$.fn.dataTable.ext.search.push(
    function(settings, data, dataIndex) {
        // `data[0]` es el contenido de la columna 'Ubicación' (según el índice de la columna)
        var ubicacion = data[0].toLowerCase(); 
        
        // Filtra los registros que contengan alguna de las palabras "mostrador", "mayoreo" o "construcción"
        return ubicacion.includes('mostrador') || 
               ubicacion.includes('mayoreo') || 
               ubicacion.includes('construcción');
    }
);

// Aplica el filtrado
table.draw();

$("#busquedas").val(1);	  
		
			
		
					});
				$("#articulo").html(articulo);
				var total_de_inv = 0;
				var maxInv = -Infinity;
				var sucursalConMaxInv = '';
for (var i = 0; i < htmlexterno.length; i++) {
    // Iterar sobre los subarreglos
	var description="";
    document.getElementById('cuerpo_tabla').innerHTML = '';
	var inv =0;
	var sucursal ="";
    for (var j = 0; j < htmlexterno[i].length; j++) {
         description = htmlexterno[i][j].description;
   
        
        
     
        
         inv = htmlexterno[i][j].inv;
      
        
         sucursal = htmlexterno[i][j].sucursal;

        

		
        // Sumar el valor de 'inv' a 'total_de_inv'
        total_de_inv += inv;
		if (inv > maxInv) {
            maxInv = inv;
            sucursalConMaxInv = sucursal;
        }
		$("#cuerpo_tabla").append("<tr><td>"+sucursal+"</td><td>"+inv+"</td></tr>");	
       
    }
	
}

$("#existencias").html(total_de_inv);

$("#almacen_masExistencias").html(sucursalConMaxInv +" con " +  maxInv);


				});
				
		// Obtener todas las filas del cuerpo de la tabla
// Selecciona el nodo objetivo (el cuerpo de la tabla)
// Selecciona el nodo objetivo (el cuerpo de la tabla)
const targetNode = document.getElementById('cuerpo_tabla_precio');

// Configura el observer para observar los cambios en el hijo del nodo
const config = { childList: true, subtree: true };

// Crea una función callback para manejar los cambios
const callback = (mutationsList) => {
    // Recorrer cada mutación
    for (const mutation of mutationsList) {
        if (mutation.type === 'childList') {
            // Una vez que se detecta un cambio, ejecutar la función para encontrar los precios máximo y mínimo
            findMinMaxPrices();
        }
    }
};

// Crea una instancia de MutationObserver y pasa el callback
const observer = new MutationObserver(callback);

// Comienza a observar el objetivo con la configuración
observer.observe(targetNode, config);

// Función para encontrar y mostrar el precio máximo y mínimo


// Llamar a la función una vez al principio si la tabla ya está llena
findMinMaxPrices();


			
		}
////////////////////////////////////

    const inputElement = document.getElementById('item_nombre');

// Agrega un escuchador para el evento 'input'
inputElement.addEventListener('input', function(event) {
    // Obtén el valor actual del campo de entrada
    const currentValue = event.target.value;
    
    // Verifica si el valor no está vacío
    if (currentValue.trim() !== '') {
        // Ejecuta la acción deseada con el valor actual


        
        var art=currentValue.toUpperCase();
        console.log('El valor actual del input es:', art);
        $.get("reportes/reporte/consulta_bsArt.php",{art:art},
        function(htmlexterno){
            for (var i = 0; i < htmlexterno.length; i++) {
    // Iterar sobre los subarreglos
	var description="";

	var inv =0;
	var sucursal ="";
    $('#ol_nombre').empty();
    for (var j = 0; j < htmlexterno[i].length; j++) {


        
        var id=	htmlexterno[i][j].displayname ;
            var itemid=	htmlexterno[i][j].itemid ;
           
            $("#ol_nombre").append("<li><a class='dato_nm' data-id='" + id + "' data-itemid='" + itemid + "'>" + itemid + "</a></li>");

    }
    }
            
        });
     
    // Si el valor está vacío, no hagas nada o puedes manejar el caso aquí si es necesario

    }
});

$(document).on('click', '.dato_nm', function(event) {
    // Previene la acción por defecto del enlace (si es necesario)
    event.preventDefault();

    // Obtiene los valores de los atributos data
    var idValue = $(this).data('id');
    var itemIdValue = $(this).data('itemid');

    $("#item_nombre").val(itemIdValue);
    $("#item_nombre_id").val(idValue);
    // Asigna los valores a los campos de entrada
    console.log(idValue);
    console.log(itemIdValue);
    $('#ol_nombre').empty();

});
			function btnMinformacion(){
				var precios="";
                var validacion =$("#busquedas").val();	
     console.log("validacion " + validacion)
     if(validacion==1){
        $('#cuerpo_tabla_precio').empty();
     
        document.getElementById('cuerpo_tabla_precio').innerHTML = '';
     }
		var articulo= $('#item').val();
	
				var arreglo=[];
				var id =0;
				$.get("reportes/reporte/tablaTransaccionesDiariasporVendedores.php",{articulo:articulo},
				function(htmlexterno){
				var articulo=	htmlexterno[0][0].description ;
				id = htmlexterno[0][0].id;
                console.log(id);
				$.get("reportes/reporte/tablatoplow.php",{id:id},
				function(htmlexterno){

					var data = JSON.parse(htmlexterno);

// Extrae el array de precios del primer objeto
 precios = data[0].precios;


var precioMax = -Infinity;
            var nombreMax = '';
            var precioMin = Infinity;
            var nombreMin = '';

$.each(precios, function(index, item) {
                var nombrePrecio = item.nombre_precio;
                var valorPrecio =  parseFloat(item.precio)*parseFloat(0.16);
                
                var iva =  item.precio*0.16;
                var moneda = item.moneda;

                // Añade los datos al div

"<p>Sucursal con el precio más alto: " + nombreMax + " con $" + precioMax.toFixed(2) + "</p>" +
                "<p>Sucursal con el precio más bajo: " + nombreMin + " con $" + precioMin.toFixed(2) + "</p>"
               

        // Añade los datos al div solo si contiene "mostrador"
   

  
				
				if (valorPrecio > precioMax) {
                    precioMax = valorPrecio;
                    nombreMax = nombrePrecio;
                }
                if (valorPrecio < precioMin) {
                    precioMin = valorPrecio;
                    nombreMin = nombrePrecio;
                }
             
           

            });
           
		// Inicializa el DataTable

// Inicializa DataTables
if ($.fn.DataTable.isDataTable('#resultsTable')) {
    // Si la tabla ya está inicializada, destrúyela
    $('#resultsTable').DataTable().destroy();
}
var table = $('#resultsTable').DataTable({
    data: precios,
    columns: [
        { data: 'nombre_precio', title: 'Ubicación' },
        { 
            data: 'precio', 
            title: 'Precio', 
            render: function(data, type, row) {
                // Supongamos que el IVA es del 21%
                var iva = 0.16;
                var precioConIva = (data*iva )+ (data);
                var precioTruncado = truncateToDecimal(precioConIva, 2);
                // Formateo manual del número con separador de miles y dos decimales
                return '$' + precioTruncado.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ',');
            },
            type: 'num'  // Asegúrate de que DataTables interpreta los valores como números
        }
    ],
    dom: 'Bfrtip',
    buttons: [
        'excel'
    ],
    order: [[1, 'asc']],  // Ordenar por la segunda columna (índice 1) por defecto, en orden ascendente
    pageLength: 50,  // Establece el número de filas por página en 10
    paging: true  // Asegúrate de que la paginación está habilitada
});

// Función de filtrado personalizada
$.fn.dataTable.ext.search.push(
    function(settings, data, dataIndex) {
        // `data[0]` es el contenido de la columna 'Ubicación' (según el índice de la columna)
        var ubicacion = data[0].toLowerCase(); 
        
        // Filtra los registros que contengan alguna de las palabras "mostrador", "mayoreo" o "construcción"
        return ubicacion.includes('mostrador') || 
               ubicacion.includes('mayoreo') || 
               ubicacion.includes('construcción');
    }
);

// Aplica el filtrado
table.draw();

$("#busquedas").val(1);	  
		
			
		
					});
				$("#articulo").html(articulo);
				var total_de_inv = 0;
				var maxInv = -Infinity;
				var sucursalConMaxInv = '';
for (var i = 0; i < htmlexterno.length; i++) {
    // Iterar sobre los subarreglos
	var description="";
    document.getElementById('cuerpo_tabla').innerHTML = '';
	var inv =0;
	var sucursal ="";
    for (var j = 0; j < htmlexterno[i].length; j++) {
         description = htmlexterno[i][j].description;
   
        
        
     
        
         inv = htmlexterno[i][j].inv;
      
        
         sucursal = htmlexterno[i][j].sucursal;

        

		
        // Sumar el valor de 'inv' a 'total_de_inv'
        total_de_inv += inv;
		if (inv > maxInv) {
            maxInv = inv;
            sucursalConMaxInv = sucursal;
        }
		$("#cuerpo_tabla").append("<tr><td>"+sucursal+"</td><td>"+inv+"</td></tr>");	
       
    }
	
}

$("#existencias").html(total_de_inv);

$("#almacen_masExistencias").html(sucursalConMaxInv +" con " +  maxInv);


				});
				
		// Obtener todas las filas del cuerpo de la tabla
// Selecciona el nodo objetivo (el cuerpo de la tabla)
// Selecciona el nodo objetivo (el cuerpo de la tabla)
const targetNode = document.getElementById('cuerpo_tabla_precio');

// Configura el observer para observar los cambios en el hijo del nodo
const config = { childList: true, subtree: true };

// Crea una función callback para manejar los cambios
const callback = (mutationsList) => {
    // Recorrer cada mutación
    for (const mutation of mutationsList) {
        if (mutation.type === 'childList') {
            // Una vez que se detecta un cambio, ejecutar la función para encontrar los precios máximo y mínimo
            findMinMaxPrices();
        }
    }
};

// Crea una instancia de MutationObserver y pasa el callback
const observer = new MutationObserver(callback);

// Comienza a observar el objetivo con la configuración
observer.observe(targetNode, config);

// Función para encontrar y mostrar el precio máximo y mínimo


// Llamar a la función una vez al principio si la tabla ya está llena
findMinMaxPrices();


			
		}
        // Función para encontrar y mostrar el precio máximo
// Función para encontrar y mostrar el precio máximo y mínimo
function findMinMaxPrices() {
    // Obtener todas las filas del cuerpo de la tabla
    const rows = document.querySelectorAll('#cuerpo_tabla_precio tr');

    // Inicializar variables para el seguimiento del precio máximo y mínimo
    let maxPrice = -Infinity;
    let minPrice = Infinity;
    let maxLocations = [];
    let minLocations = [];

    // Recorrer cada fila
    rows.forEach(row => {
        // Obtener el precio de la fila actual
        const priceText = row.cells[1].textContent.trim();
        const price = parseFloat(priceText.replace('$', '').replace(',', ''));

        // Obtener la ubicación de la fila actual
        const location = row.cells[0].textContent.trim();

        // Comprobar si el precio actual es mayor que el precio máximo encontrado
        if (price > maxPrice) {
            maxPrice = price;
            maxLocations = [location];
        } else if (price === maxPrice) {
            maxLocations.push(location);
        }

        // Comprobar si el precio actual es menor que el precio mínimo encontrado
        if (price < minPrice) {
            minPrice = price;
            minLocations = [location];
        } else if (price === minPrice) {
            minLocations.push(location);
        }
    });

    // Mostrar los resultados
    console.log('Precio máximo:', `$${maxPrice.toFixed(2)}`);
    console.log('Ubicaciones con el precio máximo:', maxLocations.join(', '));
    console.log('Precio mínimo:', `$${minPrice.toFixed(2)}`);
    console.log('Ubicaciones con el precio mínimo:', minLocations.join(', '));

    $("#prec_alt").html(maxLocations +" con " +  maxPrice.toFixed(2));
    $("#prec_bajo").html(minLocations +" con " +  minPrice.toFixed(2));
}

// Configura un intervalo para verificar la tabla cada 500 milisegundos
const checkInterval = setInterval(() => {
    const rows = document.querySelectorAll('#cuerpo_tabla_precio tr');
    if (rows.length > 0) {
        findMinMaxPrices();
        clearInterval(checkInterval); // Detener el intervalo una vez que se haya llenado la tabla
    }
}, 500);




 

document.getElementById('start-button').addEventListener('click', function() {

});


    // Manejo del clic en el botón de cerrar modal
    $('.close').click(function() {
        $('#modal').hide();
        codeReader.reset(); // Detener el escaneo cuando se cierra el modal
    });

 </script>

</body>

</html>
<?php 
	}else{
		header("location:../index.php");
	}
 ?>



