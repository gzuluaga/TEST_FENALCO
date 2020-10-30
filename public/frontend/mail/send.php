<?php
$email_body = '';
$email_headers = '';
if(isset($_GET['contacto'])) {
	if(!empty($_POST['nombre']) || !empty($_POST['correo']) || !empty($_POST['mensaje'])) {
		$nombre = strip_tags(htmlspecialchars($_POST['nombre']));
		$correo = strip_tags(htmlspecialchars($_POST['correo']));
		$telefono = strip_tags(htmlspecialchars($_POST['celular']));
		$mensaje = strip_tags(htmlspecialchars($_POST['mensaje']));
		
		$email_body = '';
		$email_body = '<!DOCTYPE html><html lang="es"><head><meta name="viewport" content="width=device-width, initial-scale=1">';
		$email_body = $email_body . '<link rel="stylesheet" href="http://www.ingeniopichichi.com/bootstrapcorreos/css/bootstrap.min.css" />';
		$email_body = $email_body . '<link rel="stylesheet" href="http://www.ingeniopichichi.com/bootstrapcorreos/css/bootstrap-theme.min.css" />';
		$email_body = $email_body . '<script src="http://www.ingeniopichichi.com/bootstrapcorreos/js/jquery-2.2.0.min.js"></script>';
		$email_body = $email_body . '<script src="http://www.ingeniopichichi.com/bootstrapcorreos/js/bootstrap.min.js"></script></head>';
		$email_body = $email_body . '<body><h2 class="text-primary">Cont&aacute;ctenos Web Pichich&iacute;</h2>';
		$email_body = $email_body . '<h4>Nombre</h4><p class="text-muted">' . utf8_decode($nombre) . '</p>';
		$email_body = $email_body . '<h4>Correo</h4><p class="text-muted">' . $correo . '</p>';
		
		if(!empty($telefono)) {
			$email_body = $email_body . '<h4>Tel&eacute;fono</h4><p class="text-muted">' . $telefono . '</p>';
		}
		
		$email_body = $email_body . '<h4>Mensaje</h4><p class="text-muted">' . utf8_decode($mensaje) . '</p></body></html>';
		
		$email_headers  = 'MIME-Version: 1.0' . "\r\n";
		$email_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$email_headers .= 'From: ' . utf8_decode($nombre) . '<' . $correo . '>' . "\r\n";
		
		mail('comunicaciones@ingeniopichichi.com', 'Contacto Web Pichichi', $email_body, $email_headers);
		header('Location: http://www.ingeniopichichi.com/pichichi#contacto');
		return true;
	}
}

if(isset($_GET['reporte'])) {
	if(!empty($_POST['cliente']) || !empty($_POST['correo']) || !empty($_POST['motivo'])) {
		$cliente = strip_tags(htmlspecialchars($_POST['cliente']));
		$correo = strip_tags(htmlspecialchars($_POST['correo']));
		$celular = strip_tags(htmlspecialchars($_POST['celular']));
		$direccion = strip_tags(htmlspecialchars($_POST['direccion']));
		$contacto = strip_tags(htmlspecialchars($_POST['contacto']));
		$motivo = strip_tags(htmlspecialchars($_POST['motivo']));
		$tipo = strip_tags(htmlspecialchars($_POST['tipo']));
		$empaque = strip_tags(htmlspecialchars($_POST['empaque']));
		$lote = strip_tags(htmlspecialchars($_POST['lote']));
		$fecha = strip_tags(htmlspecialchars($_POST['fecha']));
		$hora = strip_tags(htmlspecialchars($_POST['hora']));
		$fechadesp = strip_tags(htmlspecialchars($_POST['fechadesp']));
		$horadesp = strip_tags(htmlspecialchars($_POST['horadesp']));
		$placa = strip_tags(htmlspecialchars($_POST['placa']));
		$sacos = strip_tags(htmlspecialchars($_POST['sacos']));
		
		$email_body = '';
		$email_body = '<!DOCTYPE html><html lang="es"><head><meta name="viewport" content="width=device-width, initial-scale=1">';
		$email_body = $email_body . '<link rel="stylesheet" href="http://www.ingeniopichichi.com/bootstrapcorreos/css/bootstrap.min.css" />';
		$email_body = $email_body . '<link rel="stylesheet" href="http://www.ingeniopichichi.com/bootstrapcorreos/css/bootstrap-theme.min.css" />';
		$email_body = $email_body . '<script src="http://www.ingeniopichichi.com/bootstrapcorreos/js/jquery-2.2.0.min.js"></script>';
		$email_body = $email_body . '<script src="http://www.ingeniopichichi.com/bootstrapcorreos/js/bootstrap.min.js"></script></head>';
		$email_body = $email_body . '<body><h2 class="text-primary">Quejas Web Pichich&iacute;</h2>';
		$email_body = $email_body . '<h4>Cliente</h4><p class="text-muted">' . utf8_decode($cliente) . '</p>';
		$email_body = $email_body . '<h4>Correo</h4><p class="text-muted">' . $correo . '</p>';
		
		if(!empty($celular)) {
			$email_body = $email_body . '<h4>Celular</h4><p class="text-muted">' . $celular . '</p>';
		}
		
		if(!empty($direccion)) {
			$email_body = $email_body . '<h4>Direcci&oacute;n</h4><p class="text-muted">' . $direccion . '</p>';
		}
		
		$email_body = $email_body . '<h4>Motivo</h4><p class="text-muted">' . utf8_decode($motivo) . '</p>';
		
		if(!empty($tipo)) {
			$email_body = $email_body . '<h4>Tipo de producto</h4><p class="text-muted">' . utf8_decode($tipo) . '</p>';
		}
		
		if(!empty($empaque)) {
			$email_body = $email_body . '<h4>N&uacute;mero de Empaque</h4><p class="text-muted">' . utf8_decode($empaque) . '</p>';
		}
		
		if(!empty($lote)) {
			$email_body = $email_body . '<h4>Lote de Producci&oacute;n</h4><p class="text-muted">' . utf8_decode($lote) . '</p>';
		}
		
		if(!empty($fecha)) {
			$email_body = $email_body . '<h4>Fecha de Producci&oacute;n</h4><p class="text-muted">' . utf8_decode($fecha) . '</p>';
		}
		
		if(!empty($hora)) {
			$email_body = $email_body . '<h4>Hora de Producci&oacute;n</h4><p class="text-muted">' . utf8_decode($hora) . '</p>';
		}
		
		if(!empty($fechadesp)) {
			$email_body = $email_body . '<h4>Fecha de despacho</h4><p class="text-muted">' . utf8_decode($fechadesp) . '</p>';
		}
		
		if(!empty($horadesp)) {
			$email_body = $email_body . '<h4>Hora de despacho</h4><p class="text-muted">' . utf8_decode($horadesp) . '</p>';
		}
		
		if(!empty($placa)) {
			$email_body = $email_body . '<h4>Placa de Veh&iacute;culo</h4><p class="text-muted">' . utf8_decode($placa) . '</p>';
		}
		
		if(!empty($sacos)) {
			$email_body = $email_body . '<h4>N&uacute;mero de Sacos</h4><p class="text-muted">' . utf8_decode($sacos) . '</p>';
		}
		
		$email_body = $email_body . '</body></html>';
		
		$email_headers  = 'MIME-Version: 1.0' . "\r\n";
		$email_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$email_headers .= 'From: ' . utf8_decode($cliente) . '<' . $correo . '>' . "\r\n";
		
		mail('amreina@ingeniopichichi.com, lfguarnizo@ingeniopichichi.com', 'Quejas Web Pichichi', $email_body, $email_headers);
		header('Location: http://www.ingeniopichichi.com/pichichi#contacto');
		return true;
	}
}

if(isset($_GET['anticorrupcion'])) {
	if(!empty($_POST['mensaje'])) {
		$nombre = strip_tags(htmlspecialchars($_POST['nombre']));
		$correo = strip_tags(htmlspecialchars($_POST['correo']));
		$mensaje = strip_tags(htmlspecialchars($_POST['mensaje']));
		
		$email_body = '';
		$email_body = '<!DOCTYPE html><html lang="es"><head><meta name="viewport" content="width=device-width, initial-scale=1">';
		$email_body = $email_body . '<link rel="stylesheet" href="http://www.ingeniopichichi.com/bootstrapcorreos/css/bootstrap.min.css" />';
		$email_body = $email_body . '<link rel="stylesheet" href="http://www.ingeniopichichi.com/bootstrapcorreos/css/bootstrap-theme.min.css" />';
		$email_body = $email_body . '<script src="http://www.ingeniopichichi.com/bootstrapcorreos/js/jquery-2.2.0.min.js"></script>';
		$email_body = $email_body . '<script src="http://www.ingeniopichichi.com/bootstrapcorreos/js/bootstrap.min.js"></script></head>';
		$email_body = $email_body . '<body><h2 class="text-primary">Anticorrupci&oacute;n Web Pichich&iacute;</h2>';
		
		if(!empty($nombre)) {
			$email_body = $email_body . '<h4>Nombre</h4><p class="text-muted">' . $nombre . '</p>';
		}
		
		if(!empty($correo)) {
			$email_body = $email_body . '<h4>Correo</h4><p class="text-muted">' . $correo . '</p>';
		}
		
		$email_body = $email_body . '<h4>Posible evento</h4><p class="text-muted">' . utf8_decode($mensaje) . '</p></body></html>';
		
		$email_headers  = 'MIME-Version: 1.0' . "\r\n";
		$email_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$email_headers .= 'From: Pichichi<pichichi@ingeniopichichi.com>' . "\r\n";
		
		mail('auditoria@ingeniopichichi.com', 'Riesgo Web Pichichi', $email_body, $email_headers);
		header('Location: http://www.ingeniopichichi.com/pichichi#legal');
		return true;
	}
}

return false;       
?>
