<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="contact.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Iniciar Session</title>
</head>
<body>
<header class="header">
    <nav class="nav">
    <a href="#" class="logo nav-link"></a>
    <ul class="nav-menu">    
    <li class="nav-menu-item"><a href="inicio.php" class="nav-menu-link nav-link">Inicio</a></li>
    </ul>
    </nav>
    </header> 
    <body2>
<div class="form-content">  
<h2>Envia Tus Comentarios</h2>
<div class="icons">    
</div>
<form class="form" action="https://formsubmit.co/vasquez_felix1@icloud.com" method="POST">
<label >
    <i class='bx bxs-user'></i>
    <input type="text" placeholder="Nombre" name="name" id="name">
</label>
<label >
    <i class='bx bx-envelope'></i>
    <input type="email" placeholder="Correo Electronico" name="email" id="email">
</label>
<label >
    <i class='bx bxs-lock-alt' ></i>
    <input type="subject" placeholder="Asunto" name="subject" id="subject">
</label>
<label >
    <i class='bx bx-list-plus'></i>
    <textarea  placeholder="Comentarios" name="Coments" id="coments" cols="30" rows="5"></textarea>
</label>
<input type="submit" value="Enviar">
<input type="hidden" name="_next" value="http://localhost/FV-WEB/contactos.php">
<input type="hidden" name="_captcha" value="false">
</form>

</div>
</body2>
</body>
</html>