<?php

// =======================================
// FILTRO DE PAÍS POR IP
// =======================================


$whatsappGeneral = "https://wa.me/5493876570464";

$whatsappArgentina = "https://wa.link/a7k54q";


// Detectar IP visitante

$ip = $_SERVER['REMOTE_ADDR'];


// Consultar país

$url = "https://ipapi.co/".$ip."/country/";

$pais = @file_get_contents($url);


// Si falla la detección usa WhatsApp general

$whatsapp = $whatsappGeneral;


// Si el país es Argentina cambia enlace

if(trim($pais) == "AR"){

    $whatsapp = $whatsappArgentina;

}


?>

<!DOCTYPE html>
<html lang="es">
<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Soporte Argentina SAS | Atención a usuarios</title>


<meta name="description" content="Servicio independiente de orientación para usuarios con consultas sobre tarjetas, pagos y cargos desconocidos.">



<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}


body{
background:#f5f7fb;
color:#222;
line-height:1.6;
}


header{

background:linear-gradient(135deg,#123c8c,#1d5fd1);
color:white;
padding:60px 20px;
text-align:center;

}


header h1{

font-size:42px;

margin-bottom:15px;

}


header p{

font-size:19px;

max-width:700px;

margin:auto;

}



.container{

max-width:1100px;

margin:auto;

padding:25px;

}



.card{

background:white;

padding:30px;

margin:25px 0;

border-radius:18px;

box-shadow:0 5px 25px rgba(0,0,0,.08);

}



.card h2{

color:#123c8c;

margin-bottom:15px;

}



ul{

padding-left:20px;

}



li{

margin-bottom:10px;

}



.btn{

display:inline-block;

background:#18a957;

color:white;

padding:16px 35px;

border-radius:10px;

text-decoration:none;

font-weight:bold;

font-size:18px;

margin-top:15px;

}



.btn:hover{

background:#128342;

}



.warning{

background:#eef4ff;

border-left:6px solid #123c8c;

padding:25px;

border-radius:10px;

}



.faq h3{

margin-top:20px;

color:#123c8c;

}



footer{

background:#111827;

color:white;

padding:30px;

text-align:center;

font-size:14px;

}



@media(max-width:600px){

header h1{

font-size:30px;

}


.card{

padding:20px;

}


.btn{

width:100%;

text-align:center;

}

}


</style>


</head>


<body>



<header>

<h1>
Soporte Argentina SAS
</h1>


<p>
Orientación y asistencia para usuarios con consultas relacionadas con tarjetas y pagos.
</p>


</header>




<div class="container">



<div class="card">


<h2>
¿Necesitas ayuda con una consulta?
</h2>


<p>
Brindamos orientación informativa para usuarios que necesitan conocer los pasos disponibles ante situaciones relacionadas con tarjetas y pagos.
</p>


<ul>

<li>Consultas sobre pagos realizados con tarjeta</li>

<li>Cargos o consumos no identificados</li>

<li>Dificultades generales con el uso de tarjetas</li>

<li>Orientación sobre procesos de reclamo</li>

</ul>



<a class="btn" href="<?php echo $whatsapp; ?>">

💬 Contactar por WhatsApp

</a>


</div>




<div class="card">

<h2>
Nuestro servicio
</h2>


<p>
Nuestro equipo brinda atención personalizada para orientar al usuario sobre las alternativas disponibles según su situación.
</p>


<p>
La atención se realiza mediante canales digitales para facilitar la comunicación y resolver dudas generales.
</p>


</div>




<div class="card">

<h2>
¿Por qué contactarnos?
</h2>


<ul>

<li>Atención rápida y personalizada.</li>

<li>Información clara sobre los pasos a seguir.</li>

<li>Orientación para comprender procesos de consulta.</li>

<li>Comunicación directa mediante WhatsApp.</li>

</ul>


</div>




<div class="card faq">


<h2>
Preguntas frecuentes
</h2>


<h3>
¿Son Visa o Mastercard?
</h3>

<p>
No. Soporte Argentina SAS es un servicio independiente de orientación y no representa oficialmente a Visa, Mastercard ni entidades bancarias.
</p>



<h3>
¿Solicitan datos confidenciales?
</h3>

<p>
No solicitamos contraseñas, claves bancarias, PIN, códigos SMS ni información de seguridad.
</p>



<h3>
¿Garantizan resultados?
</h3>

<p>
No ofrecemos garantías de aprobación, devolución o resolución. Brindamos orientación sobre opciones disponibles.
</p>



</div>




<div class="card warning">

<h2>
Información importante
</h2>


<p>
Soporte Argentina SAS es un servicio independiente de orientación.
</p>


<p>
No somos Visa, Mastercard, bancos ni procesadores oficiales de pagos.
</p>


<p>
Nuestro objetivo es brindar información clara y acompañamiento inicial a usuarios.
</p>


</div>




<div class="card">

<h2>
Contacto
</h2>


<p>
<strong>Empresa:</strong> Soporte Argentina SAS
</p>


<p>
<strong>WhatsApp:</strong> +54 9 387 657 0464
</p>


</div>



</div>



<footer>

© 2026 Soporte Argentina SAS

<br>

Servicio independiente de orientación para usuarios.

</footer>



</body>

</html>
