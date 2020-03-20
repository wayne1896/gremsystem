<?php
            // Libreria PHPMailer
            require './PHPMailer/PHPMailerAutoload.php';
            include './php/conexion.php';
            // Creamos una nueva instancia
            $mail = new PHPMailer();
 
            // Activamos el servicio SMTP
            $mail->isSMTP();
            // Activamos / Desactivamos el "debug" de SMTP (Lo activo para ver en el HTML el resultado)
            // 0 = Apagado 
            // 1 = Mensaje de Cliente 
            // 2 = Mensaje de Cliente y Servidor 
            $mail->SMTPDebug = 2; 

            // Log del debug SMTP en formato HTML 
            $mail->Debugoutput = 'html'; 

            // Servidor SMTP (para este ejemplo utilizamos gmail) 
            $mail->Host = 'smtp.gmail.com'; 

            // Puerto SMTP 
            $mail->Port = 587;
 
            // Tipo de encriptacion SSL ya no se utiliza se recomienda TSL 
            $mail->SMTPSecure = 'tls'; 

            // Si necesitamos autentificarnos 
            $mail->SMTPAuth = true; 

            // Usuario del correo desde el cual queremos enviar, para Gmail recordar usar el usuario completo (usuario@gmail.com) 
            $mail->Username = "gremsystem@gmail.com"; 

            // Contraseña 
            $mail->Password = "Notificacion1"; 

            // Creamos la sentencias SQL 
            $result = $mysqli->query("select nombreclien,correoclient from socio;");

            // Iniciamos el "bucle" para enviar multiples correos. 
            while($row = $result->fetch_assoc())
            { 
                //Añadimos la direccion de quien envia el corre, en este caso 
                //YARR Blog, primero el correo, luego el nombre de quien lo envia. 
                $mail->setFrom('gremsystem@gmail.com', 'GremSystem'); 
                $mail->addAddress($row['correoclient'], $row['nombreclien']); 

                //La linea de asunto 
                $mail->Subject = 'Bienvenido a GremSystem'; 
                
                /*
                 * Existen dos formas de mandar un correo:
                 * - Escribiendo el mensaje en un String y mandarlo. (Así se va hacer en el ejemplo).
                 * - Crear un HTML e ingresarlo Se haría así:
                 * $mail->msgHTML(file_get_contents('contenido.html'), dirname(__FILE__)); 
                 * PHPMailer permite insertar imágenes, css, etc.
                 * NOTA: No se recomienda el uso de JavaScript.
                 * 
                 * Mediante un String se haría así:
                 */
                //Creamos el mensaje
                $message = "Hola".$row['nombreclien'].", Este mensaje es para informarle";
                
                //Agregamos el mensaje al correo
                $mail->msgHTML($message);
                
                // Enviamos el Mensaje 
                $mail->send(); 

                // Borramos el destinatario, de esta forma nuestros clientes no ven los correos de las otras personas y parece que fuera un único correo para ellos. 
                $mail->ClearAddresses(); 
            }  
        ?>
    </body>