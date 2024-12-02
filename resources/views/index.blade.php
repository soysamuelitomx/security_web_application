<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user-layout</title>
    <link rel="stylesheet" href="style.css">
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    background: linear-gradient(to top, white, lightblue);
    color: #333;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

.header {
    position: fixed;
    background-color: #232f3e;
    padding: 0 10em;
    width: 100vw;
    height: 9em;
    display: flex;
    flex-flow: column nowrap;
}









/*Maxima resolucion*/
@media screen and (min-width: 947px) {

    .header__head {
        flex-grow: 1;
        display: flex;
        justify-content: space-between;
    }
    
    .header__img-container {
        width: 10em;
        height: 100%;
        padding: .3em;
    }

    .header__img {
        height: 100%;
        width: 100%;
        background-image: url("https://logovtor.com/wp-content/uploads/2020/03/tpi-composites-logo-vector.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
    
    .header__nameUser-container {
        display: flex;
        align-items: center;
    }
    
    .header__nameUser {
        color: #ffff;
        font-size: 1.2em;
    }

    .header__nav {
        flex-grow: 1;
    }
    
    .header__select {
        display: none;
    }
    
    .header__list {
        display: flex;
        gap: 2em;
        height: 100%;
        justify-content: start;
        align-items: end;
        padding-bottom: .6em;
    }
    
    .header__item {
        list-style: none;
    }
    
    .header__item a {
        text-decoration: none;
        color: #fff;
        font-size: 1.2em;
    }

    .main-wraper {
        margin: 9em 9em 0 10em;
    }

    .main-wraper .main__welcome-section {
        display: flex;
        flex-direction: column;
        padding: 1.9em 0;
        gap: .9em;
    }

    .main__welcome-section .main__title {
        text-align: center;
    }

    .main__welcome-section .main__paragraph {
        text-align: center;
    }

    /* Sección de beneficios */
    .main__beneficts-section {
        display: flex;
        flex-flow: row nowrap;
        justify-content: start;
        align-items: center;
        overflow-x: auto;
        padding: .3em .6em;
        gap: 1em;
        height: 11em;
    }

    .main__benefict-card {
        background-color: #fff;
        border-radius: 1em;
        width: 9em;
        height: 9em;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: .3em;
        gap: .5em;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
    }

    .main__benefict-title {
        font-size: .8em;
        font-weight: 900;
        text-align: center;

    }

    .main__benefict-paragraph {
        font-size: .6em;
        font-weight: 600;
        text-align: center;
    }

    /*sesion de soluciones*/
    .main__solutions-section {
        display: flex;
        flex-direction: row;
        padding: 1.9em 0;   /*colocarlo cada vez que exista un nuevo section*/
        gap: 1.6em;
    }

    .main__solution-container {
        flex-grow: 1;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        gap: 1em;
    }

    .main__solution-title {

        font-size: 1.5em;
    }

    .main__topic-container {
        display: flex;
        flex-direction: column;
        gap: .6em;
    }

    .main__topic {
        background-color: #edeef0;
        padding: 1em;
        display: flex;
        justify-content: space-between;
        gap: .3em;
        border-radius: .3em;
        border: 1px solid #000;
    }

    .main__topic-title {
        display: inline;
        font-size: 1em;
    }

    .main__topic-button {
        display: inline;
        border: 1.5px solid #544a50;
        border-radius: .3em;
        padding: .3em 1.4em;
        background-color: #fff;
        color: #38414f;
    }

    .main__members-table {
        background-color: #fff;
        text-align: center;
        width: 100%; /* Ajusta la tabla al 100% del contenedor */
        border-collapse: collapse; /* Para evitar el espacio entre bordes de las celdas */
    }
    
    .main__members-table thead th {
        padding: 0.4em 0.8em;
        font-weight: 600;
    }
    
    .main__members-table tbody td {
        padding: 0.3em 0.6em;
    }
    
    .main__members-table thead .table-calification {
        width: 10%; /* Hace que la columna de calificación sea más pequeña */
        padding: 0.6em;
    }
    
    .main__members-table td {
        padding: 0.6em;
        border: 1px solid #ddd; /* Añade un borde entre celdas para mejor legibilidad */
    }

}

@media screen and (min-width: 1108px) {
    .main__beneficts-section {
        justify-content: center;
    }
}









/*Resolucion media*/
@media screen and (max-width: 947px){

    .header {
        background-color: #232f3e;
        padding: 0 6em;
        width: 100vw;
        height: 9em;
        display: flex;
        flex-flow: column nowrap;
    }

    .header__head {
        flex-grow: 1;
        display: flex;
        justify-content: space-between;
        gap: .9em;
    }
    
    .header__img-container {
        width: 10em;
        height: 100%;
        padding: .3em;
    }

    .header__img {
        height: 100%;
        width: 100%;
        background-image: url("https://logovtor.com/wp-content/uploads/2020/03/tpi-composites-logo-vector.png");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center; 
    }
    
    .header__nameUser-container {
        display: flex;
        align-items: center;
    }
    
    .header__nameUser {
        color: #ffff;
        font-size: 1.2em;
    }

    .header__list {
        display: none;
    }

    .header__nav {
        flex-grow: 1;
        padding: .6em;
    }

    .header__select {
        display: flex;
        padding: .4em;
        width: 100%;
        height: 100%;
        background-color: transparent;
        border-radius: .6em;
        border: .2em solid #fff;
        color: #fff;
    }


    .header__select option {
        padding: .4em;
        background-color: transparent;
    }

    .main-wraper {
        margin: 9em 6em 0 6em;
    }

    .main-wraper .main__welcome-section {
        display: flex;
        flex-direction: column;
        padding: 1.9em 0;
        gap: .9em;
    }

    .main__welcome-section .main__title {
        text-align: center;
    }

    .main__welcome-section .main__paragraph {
        text-align: center;
    }

    /* Sección de beneficios */
    .main__beneficts-section {
        display: flex;
        flex-flow: row nowrap;
        justify-content: start;
        align-items: center;
        overflow-x: auto;
        padding: .3em .6em;
        gap: 1em;
        height: 11em;
    }

    .main__benefict-card {
        background-color: #fff;
        border-radius: 1em;
        width: 9em;
        height: 9em;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        justify-content: space-evenly;
        align-items: center;
        padding: .3em;
        gap: .5em;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
    }

    .main__benefict-title {
        font-size: .8em;
        font-weight: 900;
        text-align: center;

    }

    .main__benefict-paragraph {
        font-size: .6em;
        font-weight: 600;
        text-align: center;
    }

    .main__solutions-section {
        display: flex;
        flex-direction: column;
        padding: 1.9em 0;   /*colocarlo cada vez que exista un nuevo section*/
        gap: 1.6em;
    }

    .main__solution-container {
        flex-grow: 1;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        gap: 1em;
    }

    .main__solution-title {

        font-size: 1.5em;
    }

    .main__topic-container {
        display: flex;
        flex-direction: column;
        gap: .6em;
    }

    .main__topic {
        background-color: #edeef0;
        padding: 1em;
        display: flex;
        justify-content: space-between;
        gap: .3em;
        border-radius: .3em;
        border: 1px solid #000;
    }

    .main__topic-title {
        display: inline;
        font-size: 1em;
    }

    .main__topic-button {
        display: inline;
        border: 1.5px solid #544a50;
        border-radius: .3em;
        padding: .3em 1.4em;
        background-color: #fff;
        color: #38414f;
    }

    .main__members-table {
        background-color: #fff;
        text-align: center;
        width: 100%; /* Ajusta la tabla al 100% del contenedor */
        border-collapse: collapse; /* Para evitar el espacio entre bordes de las celdas */
    }
    
    .main__members-table thead th {
        padding: 0.4em 0.8em;
        font-weight: 600;
    }
    
    .main__members-table tbody td {
        padding: 0.3em 0.6em;
    }
    
    .main__members-table thead .table-calification {
        width: 10%; /* Hace que la columna de calificación sea más pequeña */
        padding: 0.6em;
    }
    
    .main__members-table td {
        padding: 0.6em;
        border: 1px solid #ddd; /* Añade un borde entre celdas para mejor legibilidad */
    }

}

@media screen and (max-width: 1130px) {
    
    .main__solutions-section {
        flex-direction: column;
    }
}









/*Resolucion minima*/
@media screen and (max-width: 590px) {

    .header {
        background-color: #232f3e;
        padding: 0 .9em;
        width: 100vw;
        height: 9em;
        display: flex;
        flex-flow: column nowrap;
    }

    .header__head {
        flex-direction: column;
        align-items: center;
    }

    .header__img-container {
        width: 10em;
        height: 100%;
        padding: .3em;
    }

    .header__img {
        height: 100%;
        width: 100%;
        background-image: url("https://logovtor.com/wp-content/uploads/2020/03/tpi-composites-logo-vector.png");
        background-size: cover;
        background-repeat: no-repeat; 
        background-position: center;
    }
    

    /*Seccion de bienvenida*/
    .main-wraper {
        margin: 9em .9em 0 .9em;
    }

    .main-wraper .main__welcome-section {
        display: flex;
        flex-direction: column;
        padding: 1.9em 0;
        gap: .9em;
    }

    .main__welcome-section .main__title {
        text-align: center;
    }

    .main__welcome-section .main__paragraph {
        text-align: center;
    }

    /* Sección de beneficios */
    .main__beneficts-section {
        display: flex;
        flex-flow: row nowrap;
        justify-content: start;
        align-items: center;
        overflow-x: auto;
        padding: .3em .6em;
        gap: 1em;
        height: 11em;
    }

    .main__benefict-card {
        background-color: #fff;
        border-radius: 1em;
        width: 9em;
        height: 9em;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: .3em;
        gap: .5em;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
    }

    .main__benefict-title {
        font-size: .8em;
        font-weight: 900;
        text-align: center;

    }

    .main__benefict-paragraph {
        font-size: .6em;
        font-weight: 600;
        text-align: center;
    }

    /*Sesion de soluciones*/

    .main__solutions-section {
        display: flex;
        flex-direction: column;
        padding: 1.9em 0;   /*colocarlo cada vez que exista un nuevo section*/
        gap: 1.6em;
    }

    .main__solution-container {
        flex-grow: 1;
        flex-shrink: 0;
        display: flex;
        flex-direction: column;
        gap: 1em;
    }

    .main__solution-title {

        font-size: 1.5em;
    }

    .main__topic-container {
        display: flex;
        flex-direction: column;
        gap: .6em;
    }

    .main__topic {
        background-color: #edeef0;
        padding: 1em;
        display: flex;
        justify-content: space-between;
        gap: .3em;
        border-radius: .3em;
        border: 1px solid #000;
    }

    .main__topic-title {
        display: inline;
        font-size: 1em;
    }

    .main__topic-button {
        display: inline;
        border: 1.5px solid #544a50;
        border-radius: .3em;
        padding: .3em 1.4em;
        background-color: #fff;
        color: #38414f;
    }

    .main__members-table {
        background-color: #fff;
        text-align: center;
        width: 100%; /* Ajusta la tabla al 100% del contenedor */
        border-collapse: collapse; /* Para evitar el espacio entre bordes de las celdas */
    }
    
    .main__members-table thead th {
        padding: 0.4em 0.8em;
        font-weight: 600;
    }
    
    .main__members-table tbody td {
        padding: 0.3em 0.6em;
    }
    
    .main__members-table thead .table-calification {
        width: 10%; /* Hace que la columna de calificación sea más pequeña */
        padding: 0.6em;
    }
    
    .main__members-table td {
        padding: 0.6em;
        border: 1px solid #ddd; /* Añade un borde entre celdas para mejor legibilidad */
    }
    
}
    </style>
</head>
<body>
    <header class="header">
        <div class="header__head">
            <div class="header__img-container">
                <div class="header__img">
                </div>
            </div>
            <div class="header__nameUser-container">
                <p class="header__nameUser">nameUser</p>
            </div>
        </div>
        <nav class="header__nav">
            <ul class="header__list">
                <li class="header__item"><a href="">Seguridad</a></li>
                <li class="header__item"><a href="">Protocolos</a></li>
                <li class="header__item"><a href="">Comunicacion</a></li>
                <li class="header__item"><a href="">Gestion</a></li>
                <li class="header__item"><a href="">Foro</a></li>
                <li class="header__item"><a href="">Alertas</a></li>
            </ul>
            <select class="header__select">
                <option value="apple">Seguridad</option>
                <option value="banana">Protocolos</option>
                <option value="orange">Comunicacion</option>
                <option value="grape">Gestion</option>
                <option value="grape">Foro</option>
                <option value="grape">Alerts</option>
            </select>
        </nav>
    </header>
    <main class="main-wraper">
        <section class="main__welcome-section">
            <h1 class="main__title">Te damos la bienvenida a la aplicacion</h1>
            <p class="main__paragraph">Esta herramineta brinda acceso a conocimientos seleccionados y una comunidad dinámica que te ayuda a tener aún más éxito.</p>
        </section>
        <section class="main__beneficts-section">
            <div class="main__benefict-card">
                <h3 class="main__benefict-title">Buscar respuestas</h3>
                <p class="main__benefict-paragraph">Obten respuestas a tus problemas</p>
            </div>
            <div class="main__benefict-card">
                <h3 class="main__benefict-title">Accede al KC (Centro de Conocimiento) </h3>
                <p class="main__benefict-paragraph">Slucionar problemas tecnicos y de tu equipo</p>
            </div>
            <div class="main__benefict-card">
                <h3 class="main__benefict-title">Reutilizacion de practicas recomendadas</h3>
                <p class="main__benefict-paragraph">Elimina los obstaculos con articulos</p>
            </div>
            <div class="main__benefict-card">
                <h3 class="main__benefict-title">Accede a conocimientos seleccionados</h3>
                <p class="main__benefict-paragraph">Aprende y cree mas rapido con soluciones cuidadas</p>
            </div>
            <div class="main__benefict-card">
                <h3 class="main__benefict-title">Unirse a un grupo</h3>
                <p class="main__benefict-paragraph">Contactate con los encargads y empleados del area de TI para asesoramiento</p>
            </div>
        </section>

        <section class="main__solutions-section">

            <div class="main__solution-container">
                <h3 class="main__solution-title">Sigue temas populares</h3>
                <div class="main__topic-container">
                    <div class="main__topic">
                        <p class="main__topic-title">Concientización sobre Seguridad</p>
                        <button class="main__topic-button">Seguir</button>
                    </div>
                    <div class="main__topic">
                        <p class="main__topic-title">Políticas de Contraseñas Fuertes</p>
                        <button class="main__topic-button">Seguir</button>
                    </div>
                    <div class="main__topic">
                        <p class="main__topic-title">Manejo de Datos Sensibles</p>
                        <button class="main__topic-button">Seguir</button>
                    </div>
                    <div class="main__topic">
                        <p class="main__topic-title">Prevención de Phishing</p>
                        <button class="main__topic-button">Seguir</button>
                    </div>
                    <div class="main__topic">
                        <p class="main__topic-title">Protocolos de Respuesta a Incidentes</p>
                        <button class="main__topic-button">Seguir</button>
                    </div>
                </div>
            </div>

            <div class="main__solution-container">
                <h3 class="main__solution-title">Colaboradores principales</h3>
                <table class="main__members-table">
                    <thead>
                        <tr>
                            <th class="table-calification">Calificación</th>
                            <th class="table-name">Nombre</th>
                            <th class="table-points">Puntos Totales</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A</td>
                            <td>Juan Pérez</td>
                            <td>95</td>
                        </tr>
                        <tr>
                            <td>B+</td>
                            <td>María Gómez</td>
                            <td>88</td>
                        </tr>
                        <tr>
                            <td>B</td>
                            <td>Carlos López</td>
                            <td>82</td>
                        </tr>
                        <tr>
                            <td>A-</td>
                            <td>Lucía Rodríguez</td>
                            <td>90</td>
                        </tr>
                        <tr>
                            <td>C+</td>
                            <td>Andrés Torres</td>
                            <td>75</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>

        </section>
        
    </main>
    <footer></footer>
</body>
</html>