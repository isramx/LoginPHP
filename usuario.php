<?php
session_start();

if (
    !isset($_SESSION['id_usuario']) ||
    !isset($_SESSION['tipo_usuario']) ||
    $_SESSION['tipo_usuario'] !== 'usuario'
) {
    header("Location: index.php");
    exit;
}

$nombre = $_SESSION['nombre_usuario'] ?? 'Usuario';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Panel de Usuario</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />


		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="admin.php" class="navbar-brand">
						<small>
							<i class="fa fa-leaf"></i>
							PRUEBA
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="purple dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-bell icon-animated-bell"></i>
								<span class="badge badge-important">1</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									NOTIFICACIONES
								</li>

								<li class="dropdown-footer">
									<a href="https://static.vecteezy.com/system/resources/previews/007/126/739/non_2x/question-mark-icon-free-vector.jpg">
										PRUEBA
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green dropdown-modal">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-graduation-cap icon-animated-vertical"></i>
								<span class="badge badge-success">1</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-graduation-cap"></i>
									CAPACITACIÓN DEL USUARIO
								</li>


								<li class="dropdown-footer">
									<a href="inducciones.php">
										Ingresa a la inducción de tu puesto solicitado
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/images/avatars/avatar2.png" />
								<span class="user-info">
									<small>Bienvenid@</small>
									<!-- Mostrar Nombre del Usuario Logueado-->
									<?php echo htmlspecialchars($nombre); ?>		
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">


								<li>
									<a href="#">
										<i class="ace-icon fa fa-user"></i>
										Perfil
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="salir.php"> 
										<i class="ace-icon fa fa-power-off"></i>
										Salir
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list"><!-- Menu Lateral -->

				<!-- MOSTRAR EL MENU  -->

				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="usuario.php">Home</a>
							</li>
							<li class="active">Panel de Usuario</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Buscar ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">
							<div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
								<i class="ace-icon fa fa-cog bigger-130"></i>
							</div>

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Cambiar Color</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								¡HOLA! BUEN DÍA
								<small>
									<i class="ace-icon fa fa-angle-double-right"></i>

								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
<?php
date_default_timezone_set("America/Mexico_City");
$mensaje = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["codigo"])) {
    $codigo = htmlspecialchars($_POST["codigo"]);
    $tipo = htmlspecialchars($_POST["tipo"]);
    $hora = date("Y-m-d H:i:s");
    
    // Guardar en archivo CSV
    $registro = "$codigo,$tipo,$hora\n";
    file_put_contents("registros.csv", $registro, FILE_APPEND);

    $mensaje = "✅ Marcado <strong>$tipo</strong> a las <strong>$hora</strong> para el código: <strong>$codigo</strong>";
}
?>
<div class="widget-box">
    <div class="widget-header widget-header-green">
        <h4 class="widget-title">📦 Inventario por Código</h4>
    </div>
    <div class="widget-body">
        <div class="widget-main">

<?php
$archivo = 'inventario.csv';
$carpeta_imagenes = 'imagenes/';

// Asegura que exista la carpeta de imágenes
if (!is_dir($carpeta_imagenes)) {
    mkdir($carpeta_imagenes, 0755, true);
}

// Leer el inventario
$inventario = [];
if (file_exists($archivo)) {
    $file = fopen($archivo, 'r');
    while (($data = fgetcsv($file)) !== false) {
        $inventario[$data[0]] = [
            'codigo' => $data[0],
            'nombre' => $data[1],
            'cantidad' => intval($data[2]),
            'fecha' => $data[3],
            'imagen' => isset($data[4]) ? $data[4] : ''
        ];
    }
    fclose($file);
}

?>



<hr>

<h5 class="header smaller lighter green" style="margin-top:20px;">📋 Inventario Actual</h5>
<div class="table-responsive">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Código</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Última modificación</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($inventario)): ?>
                <tr><td colspan="5" class="text-center">No hay registros</td></tr>
            <?php else: ?>
                <?php foreach ($inventario as $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item['codigo']); ?></td>
                        <td><?php echo htmlspecialchars($item['nombre']); ?></td>
                        <td><?php echo $item['cantidad']; ?></td>
                        <td><?php echo $item['fecha']; ?></td>
                        <td>
                            <?php if (!empty($item['imagen']) && file_exists($carpeta_imagenes . $item['imagen'])): ?>
                                <img src="<?php echo $carpeta_imagenes . $item['imagen']; ?>" alt="Imagen" style="max-width: 80px;">
                            <?php else: ?>
                                Sin imagen
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
</div>

        </div>
    </div>
</div>



<div class="widget-box" style="margin-top: 30px;">
    <div class="widget-header widget-header-blue">
        <h4 class="widget-title">🕒 Registro PRUEBA</h4>
    </div>
    <div class="widget-body">
        <div class="widget-main">

            <div id="reloj" style="font-size: 24px; font-weight: bold; text-align: center; margin-bottom: 20px;"></div>

            <form method="POST" class="form-inline text-center">
                <div class="form-group">
                    <label for="codigo">Código PRUEBA:</label>
                    <input type="text" name="codigo" class="form-control" required />
                </div>
                <div class="form-group">
                    <button name="tipo" value="Entrada" class="btn btn-success">Entrada</button>
                    <button name="tipo" value="Salida" class="btn btn-danger">Salida</button>
                    <button name="tipo" value="Comida" class="btn btn-warning">Comida</button>
                </div>
            </form>

            <?php if ($mensaje): ?>
                <div class="alert alert-info" style="margin-top: 15px;"><?php echo $mensaje; ?></div>
            <?php endif; ?>

        </div>
    </div>
</div>

<script>
function actualizarReloj() {
    const ahora = new Date();
    document.getElementById("reloj").innerText = ahora.toLocaleTimeString();
}
setInterval(actualizarReloj, 1000);
actualizarReloj();
</script>
<?php
// Leer registros del archivo CSV
$registros = [];
if (file_exists("registros.csv")) {
    $archivo = fopen("registros.csv", "r");
    while (($linea = fgetcsv($archivo)) !== false) {
        $registros[] = $linea;
    }
    fclose($archivo);
}
?>

<div class="widget-box">
    <div class="widget-header widget-header-small">
        <h5 class="widget-title">📋 Historial de Registros</h5>
    </div>
    <div class="widget-body">
        <div class="widget-main no-padding">
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Código PRUEBA</th>
                        <th>Tipo PRUEBA</th>
                        <th>Fecha y Hora PRUEBA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($registros)): ?>
                        <tr><td colspan="3" class="text-center">Sin registros aún.</td></tr>
                    <?php else: ?>
                        <?php foreach (array_reverse($registros) as $r): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($r[0]); ?></td>
                                <td><?php echo htmlspecialchars($r[1]); ?></td>
                                <td><?php echo htmlspecialchars($r[2]); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

        <!-- Aquí comienza el contenido nuevo -->
        <div class="widget-box">
            <div class="widget-header widget-header-flat">
                <h4 class="widget-title">PRUEBA</h4>
                <div class="widget-toolbar">
                    <a href="#" data-action="collapse">
                        <i class="ace-icon fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="widget-body">
                <div class="widget-main">
                    <div class="row">
                        <!-- Columna para el texto -->
                        <div class="col-md-8">
                            <p class="lead">
                                PRUEBA


                            </p>
                            <p>
                                <strong>PRUEBA</strong> PRUEBA
                            </p>
                            <p>
                               
                            </p>
                        </div>

                        <!-- Columna para la imagen -->
                        <div class="col-md-4">
                            <!-- Aquí puedes colocar tu imagen -->
                            <div class="text-center" style="margin-top: 20px;">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAdVBMVEX///8AAAD8/PwZGRkqKiry8vL29vYxMTHZ2dlLS0vj4+ONjY1ERES+vr5ra2tfX19XV1fPz8/r6+tSUlLMzMyurq60tLQdHR16enrFxcWlpaWFhYUICAhzc3M7Ozujo6OUlJRGRkZdXV0+Pj4bGxuRkZEjIyNKheWaAAAElklEQVR4nO3da1PqQAwGYMultEULFJSLAgWV//8TDxVFkCa7vRx2k3mf78wkU9vNZtP68AAAAAAAAAAAAAAAAAAAAAAAAPDfdFwH8H90kslTvkhH42kcT8f7dD1cLaPMdVRt6c/y/SAo0d2MtrO+6/CaylbTsuQuxKvEdZD1hc87Q3onm5XMK5m8WqV3so5ch1tZsqiQX2E0cR1yJeGwYn6FVNANOevVSPAodx24rSo34LWdiDUy29VO8OjJdfhm0aFJgkGwdZ2ASfTWLMEgeHWdAi9qmp/vKWaNr2Ahd50GrV9aYVf34joRUtpOgkHgaw23aivB4D10nUuppLUEg+DTdTKlxi1mGPhYoy7bTDDYu06nRMNa5i//HjZPVnF/9A5duwxHrhO6ERtjnuazJAv7WbR8fbRI0bc70ViuDS8j7kTmpdO3EvyTD3d9s/GLNoYMdy7SYPDxlu76TJ0cv/5M2T/SN+K5aOgF+FWdPnOhkl00/mZc3DMBIy7WZ/JXIbsXie8Yv1HnnQ6UW9jYOmjuUyc8YwJlHxjsqYZPjTfmQZOyP3zhMvSpcGMCXbI/5C6+4af3taXDNJz5cvWbT8vFjIzS9EAcMRmu7hK7Hfqxb+phc4WNV5XphAhybfohd0jl0zU8PjLW8+6NR/OdxF1DulRwpHPD4kdcMSTglMYCt3GWdSpM6M+ZDP3aPtXEFaZvPlVtta2ZDB81DIixbXK+ohWCu4SeLYf10MVewaetRU19tjm8UXAb8kN9Q9fhNcfehBr+SA3t0rHr+JoKTW196SVbZjqb8aqVWIP5NFX4XWiezfR6asgoYdrH3wZ+zmLY6TB9ubOZ6ygbiHYWCXrVgqrIaqjIr0OnSoyL4BfBa31iNdgnOEG72VPB+16qaXxN8EI4sRquFbyvTz4s8usKLrdD0/RMYS+5krF5C8q7Y4oqLJ4yqez+r/FvtOfTiXYNxsnMoeQ7sGDY0M8FP0JPDMXMSPoFND1I/RzLryRk37cUvUZ8Y08nfJqZqU3OuEVdzJsmgnfzF/r0pmKg4HjpgV0rxK+DJ/Tcon8vjdRDP2iEd+7PyGNC6YcvZ+RJr4a1vtAhKxrZG8JfIZWgioGgQp/KUMdq/8DMqks+frlCDnYJ71v8IksaLashvXdSMT1aoIYSdEyPFqgMDz69t9UI1UnsIUMxkKF8ZIby+8DfqJpm6jqw9hCtNi27w6Os9KMnanYWhTDf9P6Idby0BQAAAKBP+JSn8eN0sVXTRbw2uZhhH2zVbH7Psj8z+gcVMyYXlrdvw661HDx9KT3Ij9U0MchGTazmKpInM8ZP10hBjwcredwwXwF703Erct/eVXEKzE5ezl1H1wb+jV8NBdyOzVBDV5j/hzOCX1T7EXKfgVIxnMh/n0XD6Yz+a2i4DxV8gsbwpXYNdRu/HmoYGmJrmoHr6FrB1aUaFnz2U+ZzJXtgen+o5RyY3OPrOckn9sBTHfvfL6W3YqyqK1zSbUuVPGV+ZH/fKtGxTlxZXkxGDXJVf6FnyctiNI3HaT5T9IgBAAAAAAAAAAAAAAAAAAAAAAC4t3/eKC/4M2VF7gAAAABJRU5ErkJggg==" alt="Imagen de EcoPoint" class="img-responsive img-thumbnail" style="max-width: 100%; height: auto;">
                                <p class="text-muted small" style="margin-top: 10px;">
                                    <!-- Texto descriptivo opcional para la imagen -->
                                    PRUEBA DE IMAGEN
                                </p>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.widget-main -->
            </div><!-- /.widget-body -->
        </div><!-- /.widget-box -->
        <!-- Aquí termina el contenido nuevo -->
        <div class="widget-box">
    <div class="widget-header widget-header-blue">
        <h4 class="widget-title">
            <i class="ace-icon fa fa-shield"></i>
            AVISO DE PRIVACIDAD
        </h4>
    </div>
    <div class="widget-body">
        <div class="widget-main">
            <h4 class="header green">PRUEBA</h4>
            
            <p class="text-justify"><strong>Última actualización:</strong> 01 de Julio de 2025/p>
         
            <div class="space-8"></div>
            
            <h5 class="header smaller lighter blue">TITULO DE PRUEBA</h5>
            <p>PRUEBA</p>
            
            <h5 class="header smaller lighter blue">2. Datos que recabamos (también aplica para cliente en caso de facturación)</h5>
            <ul>
                <li>Datos de identificación (nombre completo, RFC, fecha de nacimiento)</li>
                <li>Datos de contacto (teléfono, correo electrónico)</li>
                <li>Datos de vehículo (en caso de ser necesario) (placas, modelo, color)</li>
                <li>Datos de método de pago (únicamente para transacciones)</li>
            </ul>
            
            <h5 class="header smaller lighter blue">3. Finalidad del tratamiento (cliente)</h5>
            <p>Sus datos serán utilizados para:</p>
            <ul>
                <li>Proveer los servicios solicitados</li>
                <li>Facturación electrónica</li>
                <li>Seguridad de nuestras instalaciones</li>
                <li>Cumplimiento de obligaciones legales</li>
            </ul>
            
            <h5 class="header smaller lighter blue">4. Protección de datos</h5>
            <p>Implementamos medidas de seguridad administrativas, técnicas y físicas para proteger su información personal.</p>
            
            <h5 class="header smaller lighter blue">5. Derechos</h5>
            <p>Usted tiene derecho a:</p>
            <ul>
                <li><strong>Acceder</strong> a sus datos personales</li>
                <li><strong>Rectificarlos</strong> si son inexactos</li>
                <li><strong>Cancelar</strong> el uso de los mismos</li>
                <li><strong>Oponerse</strong> a su tratamiento</li>
            </ul>
            <p>Para ejercer estos derechos, envíe su solicitud al correo: <a href="PRUEBA CORREO">PRUEBA
            
            <div class="alert alert-info">
                <i class="ace-icon fa fa-info-circle"></i>
                <strong>Nota:</strong> No recabamos datos sensibles. Todas nuestras cámaras de seguridad operan bajo protocolos de privacidad.
            </div>
            
            <p class="text-muted small">Este aviso de privacidad cumple con lo establecido en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.</p>
        </div>
    </div>
</div>

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->


								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
	<!-- /.Pie de pagina -->
	<?php require_once("piedepagina.php"); ?>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="assets/js/jquery-ui.custom.min.js"></script>
		<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="assets/js/jquery.easypiechart.min.js"></script>
		<script src="assets/js/jquery.sparkline.index.min.js"></script>
		<script src="assets/js/jquery.flot.min.js"></script>
		<script src="assets/js/jquery.flot.pie.min.js"></script>
		<script src="assets/js/jquery.flot.resize.min.js"></script>



		<!-- ace scripts -->
		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
				$('.easy-pie-chart.percentage').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = $(this).data('color') || (!$box.hasClass('infobox-dark') ? $box.css('color') : 'rgba(255,255,255,0.95)');
					var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
					var size = parseInt($(this).data('size')) || 50;
					$(this).easyPieChart({
						barColor: barColor,
						trackColor: trackColor,
						scaleColor: false,
						lineCap: 'butt',
						lineWidth: parseInt(size/10),
						animate: ace.vars['old_ie'] ? false : 1000,
						size: size
					});
				})

				$('.sparkline').each(function(){
					var $box = $(this).closest('.infobox');
					var barColor = !$box.hasClass('infobox-dark') ? $box.css('color') : '#FFF';
					$(this).sparkline('html',
									 {
										tagValuesAttribute:'data-values',
										type: 'bar',
										barColor: barColor ,
										chartRangeMin:$(this).data('min') || 0
									 });
				});


			  //flot chart resize plugin, somehow manipulates default browser resize event to optimize it!
			  //but sometimes it brings up errors with normal resize event handlers
			  $.resize.throttleWindow = false;

			  var placeholder = $('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
			  var data = [
				{ label: "social networks",  data: 38.7, color: "#68BC31"},
				{ label: "search engines",  data: 24.5, color: "#2091CF"},
				{ label: "ad campaigns",  data: 8.2, color: "#AF4E96"},
				{ label: "direct traffic",  data: 18.6, color: "#DA5430"},
				{ label: "other",  data: 10, color: "#FEE074"}
			  ]
			  function drawPieChart(placeholder, data, position) {
			 	  $.plot(placeholder, data, {
					series: {
						pie: {
							show: true,
							tilt:0.8,
							highlight: {
								opacity: 0.25
							},
							stroke: {
								color: '#fff',
								width: 2
							},
							startAngle: 2
						}
					},
					legend: {
						show: true,
						position: position || "ne",
						labelBoxBorderColor: null,
						margin:[-30,15]
					}
					,
					grid: {
						hoverable: true,
						clickable: true
					}
				 })
			 }
			 drawPieChart(placeholder, data);

			 /**
			 we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
			 so that's not needed actually.
			 */
			 placeholder.data('chart', data);
			 placeholder.data('draw', drawPieChart);


			  //pie chart tooltip example
			  var $tooltip = $("<div class='tooltip top in'><div class='tooltip-inner'></div></div>").hide().appendTo('body');
			  var previousPoint = null;

			  placeholder.on('plothover', function (event, pos, item) {
				if(item) {
					if (previousPoint != item.seriesIndex) {
						previousPoint = item.seriesIndex;
						var tip = item.series['label'] + " : " + item.series['percent']+'%';
						$tooltip.show().children(0).text(tip);
					}
					$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
				} else {
					$tooltip.hide();
					previousPoint = null;
				}

			 });

				/////////////////////////////////////
				$(document).one('ajaxloadstart.page', function(e) {
					$tooltip.remove();
				});




				var d1 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d1.push([i, Math.sin(i)]);
				}

				var d2 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.5) {
					d2.push([i, Math.cos(i)]);
				}

				var d3 = [];
				for (var i = 0; i < Math.PI * 2; i += 0.2) {
					d3.push([i, Math.tan(i)]);
				}


				var sales_charts = $('#sales-charts').css({'width':'100%' , 'height':'220px'});
				$.plot("#sales-charts", [
					{ label: "Domains", data: d1 },
					{ label: "Hosting", data: d2 },
					{ label: "Services", data: d3 }
				], {
					hoverable: true,
					shadowSize: 0,
					series: {
						lines: { show: true },
						points: { show: true }
					},
					xaxis: {
						tickLength: 0
					},
					yaxis: {
						ticks: 10,
						min: -2,
						max: 2,
						tickDecimals: 3
					},
					grid: {
						backgroundColor: { colors: [ "#fff", "#fff" ] },
						borderWidth: 1,
						borderColor:'#555'
					}
				});


				$('#recent-box [data-rel="tooltip"]').tooltip({placement: tooltip_placement});
				function tooltip_placement(context, source) {
					var $source = $(source);
					var $parent = $source.closest('.tab-content')
					var off1 = $parent.offset();
					var w1 = $parent.width();

					var off2 = $source.offset();
					//var w2 = $source.width();

					if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
					return 'left';
				}


				$('.dialogs,.comments').ace_scroll({
					size: 300
			    });


				//Android's default browser somehow is confused when tapping on label which will lead to dragging the task
				//so disable dragging when clicking on label
				var agent = navigator.userAgent.toLowerCase();
				if(ace.vars['touch'] && ace.vars['android']) {
				  $('#tasks').on('touchstart', function(e){
					var li = $(e.target).closest('#tasks li');
					if(li.length == 0)return;
					var label = li.find('label.inline').get(0);
					if(label == e.target || $.contains(label, e.target)) e.stopImmediatePropagation() ;
				  });
				}

				$('#tasks').sortable({
					opacity:0.8,
					revert:true,
					forceHelperSize:true,
					placeholder: 'draggable-placeholder',
					forcePlaceholderSize:true,
					tolerance:'pointer',
					stop: function( event, ui ) {
						//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
						$(ui.item).css('z-index', 'auto');
					}
					}
				);
				$('#tasks').disableSelection();
				$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
					if(this.checked) $(this).closest('li').addClass('selected');
					else $(this).closest('li').removeClass('selected');
				});


				//show the dropdowns on top or bottom depending on window height and menu position
				$('#task-tab .dropdown-hover').on('mouseenter', function(e) {
					var offset = $(this).offset();

					var $w = $(window)
					if (offset.top > $w.scrollTop() + $w.innerHeight() - 100)
						$(this).addClass('dropup');
					else $(this).removeClass('dropup');
				});

			})
		</script>

	</body>
</html>
