<!DOCTYPE html>
<html lang="es">
<head>

    <meta 
        charset="UTF-8"
        >

    <meta 
        name="viewport" 
        content="width=device-width, initial-scale=1.0"
        >

    <title>
        Lista de contactos. Bee Personal CRM
    </title>

    <link 
        rel="stylesheet" 
        type="text/css" 
        href="./styles.css"
        />

    <meta 
            name= "Bee Personal CRM" 
            content= "Remember your loved ones and their birthdays."
        >

    <link 
        rel="icon" 
        href="./media/bringTheBacon.png" 
        type="image/x-icon" 
        sizes="any"
    >

    <script src="https://kit.fontawesome.com/26deb9666d.js" crossorigin="anonymous"></script>

</head>


<body>

<div class="container">
            
        <nav>

            <div class="logo">
                <a href="#">
                    <img 
                        src="media/abejaLogo.png" 
                        alt="Bee Personal CRM"
                        class="abejaLogo" 
                        >
                </a>

                <p>
                    <b>
                        Bee Personal CRM
                    </b>
                </p>

            </div>

            <ul class="menu">

                <li>
                    <a href="#"><b>Panel de control</b></a>
                </li>

                <li>
                    <a href="#"><b>Contactos</b></a>
                </li>

                <li>
                    <i class="fa-solid fa-bell" style="color: #ffffff;"></i>
                </li>

                <li>
                    <i class="fa-solid fa-gear" style="color: #ffffff;"></i>
                </li>
                
                <li>
                <i class="fa-solid fa-door-open" style="color: #ffffff;"></i>
                </li>

            </ul>



        </nav>
        

        <section class="bloqueListado">

        <div class="wrapper">

            <div class="numeroContactos">
                3 contactos
            </div>
            
            <div class="buscadorContactos">

                <div>
                    <i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>
                </div>
                
                <div>
                    <form action="/search" method="get">
                    
                        <input type="text" id="search" name="q" placeholder="Buscar...">
                        
                        <button type="submit" class="botonBuscarContacto"><b>Buscar</b></button>

                    </form>
                </div>

            </div> 

            <div class="oneOne">
                <b>Nombre</b>
            </div>

            <div class="oneTwo">
                <b>Descripción</b>
            </div>

            <div class="twoOne">
                Manuel Martín Collantes (Manu)
            </div>

            <div class="twoTwo">
                Primo
            </div>

            <div class="threeOne">
                Mercedes Pérez Puig (Merche)
            </div>

            <div class="threeTwo">
                Amiga de la universidad
            </div>

            <div class="fourOne">
                Eduardo Sánchez Núñez (Edu)
            </div>

            <div class="fourTwo">
                Amigo de padel
            </div>

            <div class="fiveOne">

            </div>

            <div class="fiveTwo">

            </div>

            <div class="sixOne">

            </div>

            <div class="sixTwo">

            </div>

            <div class="sevenOne">

            </div>

            <div class="sevenTwo">

            </div>

            <div class="eightOne">

            </div>

            <div class="eightTwo">

            </div>

            <div class="nineOne">

            </div>

            <div class="nineTwo">

            </div>

            <div class="tenOne">

            </div>

            <div class="tenTwo">

            </div>

            <div class="elevenOne">

            </div>

            <div class="elevenTwo">

            </div>

            <div class="paginacion">
                Paginación
            </div>

</div>

<button class="botonCrearContacto"><a href="#"><b>Crear contacto</b></a></button>



</section>


<footer>

<ul class="menuFooter">

<li>
    <a href="#">Aviso legal</a>
</li>

<li>
    <a href="#">Política de privacidad</a>
</li>

<li>
    <a href="#">Política de cookies</a>
</li>

</ul>

<p>&copy Bee Personal CRM all rights reserved</p>

</footer>
   

</body>

</html>