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
        Panel de control. Bee Personal CRM
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
        href="./media/abejaLogo.png" 
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
        <a href="http://localhost/Bee-Personal-CRM/panelDeControl.php"><b>Panel de control</b></a>
    </li>

    <li>
        <a href="http://localhost/Bee-Personal-CRM/listaContactos.php"><b>Contactos</b></a>
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
        

<section class="panelDeControl">


    <div class="panelDeControl1">

            <h2>
                Próximos eventos
            </h2>


        <div class="bloqueProximosEventos">


            <h3>
                Mayo 2024
            </h3>

            <p>
                29/04/2024 Cumpleaños de Manuel Pérez Collantes.
            </p>


            <h3>
                Mayo 2024
            </h3>
            <p>
                Ningún evento este mes.
            </p>


            <h3>
                Mayo 2024
            </h3>

            <p>
                Ningún evento este mes.
            </p>

        </div>

    </div>



        <div class="panelDeControl2">

            <h2>
                Tus contactos
            </h2>

            <div class="bloqueTusContactos">


                <h3>
                    3 contactos
                </hr>

                </br></br>



                <button class="botonesContacto">
                    <a href="http://localhost/Bee-Personal-CRM/listaContactos.php">
                        <b>
                            Ver contactos
                        </b>
                    </a>
                </button>

                </br>

                <button class="botonesContacto">
                    <a href="http://localhost/Bee-Personal-CRM/crearContacto.php">
                        <b>
                            Crear contacto
                        </b>
                    </a>
                </button>
            </div>

        </div>



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