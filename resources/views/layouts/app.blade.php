<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--lien boostrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">


    <!-- Lien icône Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- font ubuntu -->
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">



    <!-- titre à personaliser -->
    <title>@yield('title')</title>





   <!-- paramètre css classique -->
   <style>
    body {
            font-family: 'Ubuntu', sans-serif;
        }



    .sidebar{
        background: rgb(19, 30, 93);
        box-shadow: 2px 0 24px;
        padding-block: 1.5rem;

        border-radius: 0.20rem;
        transition: left .4s, background-color .4s, width .4s;

    }




    .sidebar-container,
    .sidebar-content{
        display: flex;
        flex-direction: column;
        row-gap: 3rem;
    }

    .sidebar-container{
        height: 100%;
        overflow: hidden;
    }

    .sidebar-user{
        display: grid;
        grid-template-columns: repeat(2, max-content);
        align-items: center;
        column-gap:1rem ;
        padding-left: 2rem;
    }
    .sidebar a{
        text-decoration: none;
    }

    .sidebar-info h3{

        transition: color .4s;
        font-size: 15px;
        color: rgb(249, 249, 255);
    }

    .sidebar-content{
        overflow: hidden;
    }

    .sidebar-content::-webkit-scrollbar{
        width: .4rem;
        background-color: hsl(228, 8%, 85% );

    }
    .sidebar-content::-webkit-scrollbar-thumb{
        width: .4rem;
        background-color: hsl(228, 8%, 75% );

    }

    .sidebar-title{
        width: max-content;
        font-size: 19px;
        font-weight: bold;
        padding-left: 1.5rem;
        color: #ffffff


    }

    .sidebar-list,
    .sidebar-actions{
        display: grid;
        row-gap: 1.5rem;
    }

    .sidebar-link{
        position: relative;
        display: grid;
        grid-template-columns:repeat(2, max-content);
        align-items: center;
        column-gap: 1rem;
        color: #ffffff;
        padding-left: 2rem;
        transition: color .4s, opacity .4s;

    }
    .sidebar-link i{
        font-size: 1.25rem;
    }

    .sidebar-link span{
        font-weight: 15px;
    }

    .sidebar-link:hover {
        background: rgb(255, 254, 252)  ;
        color: #eac774;
    }

    .sidebar-actions{
        position: relative;
        display: grid;
        align-items: center;
    }
    .sidebar-actions button{
        cursor: pointer;

    }
    #toggle-container {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: whitesmoke; /* Couleur de fond */
    padding: 1rem;
    cursor: pointer;
    border-bottom: 1px solid #ccc; /* Ligne de séparation */
    }
    #toggle-container i {
        font-size: 1.5rem;
        color: #333; /* Couleur de l'icône */
        transition: transform 0.3s ease, color 0.3s ease;
    }
    #toggle-container i:hover {
        color: #eac774; /* Couleur au survol */
        transform: scale(1.1); /* Légère mise en avant */
    }



</style>

</head>
<body>
    <x-sidebar />
    <div style="width: 100%;">
        <x-header />
        <x-navbar />
        <main>
            @yield('content')
        </main>
    </div>
    <!-- lien script boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


    <!-- logique de la sidebar -->
    <script>
     document.addEventListener("DOMContentLoaded", function () {
        const sidebar = document.getElementById("sidebar");
        const toggleButton = document.getElementById("toggle-container");
        const sidebarLinks = sidebar.querySelectorAll(".sidebar-link span");
        const sidebarTitles = sidebar.querySelectorAll(".sidebar-title");

        let isExpanded = true; // La sidebar est déployée par défaut

        // Initialiser la sidebar déployée
        sidebar.style.left = "0";
        sidebar.style.width = "288px";
        sidebar.classList.add("sidebar-expanded"); // Ajoute la classe étendue
        // Affiche les textes des liens et les titres
        sidebarLinks.forEach(span => {
            span.style.display = "inline";
        });
        sidebarTitles.forEach(title => {
            title.style.display = "block";
        });

        // Gestion du clic sur le bouton toggle
        toggleButton.addEventListener("click", function () {
            if (isExpanded) {
                // Réduire la sidebar (cachée)
                sidebar.style.width = "80px";
                sidebar.classList.remove("sidebar-expanded");
                // Masquer les textes des liens et les titres
                sidebarLinks.forEach(span => {
                    span.style.display = "none";
                });
                sidebarTitles.forEach(title => {
                    title.style.display = "none";
                });
                isExpanded = false;
            } else {
                // Déployer la sidebar (visible)
                sidebar.style.width = "288px";
                sidebar.classList.add("sidebar-expanded");
                // Afficher les textes des liens et les titres
                sidebarLinks.forEach(span => {
                    span.style.display = "inline";
                });
                sidebarTitles.forEach(title => {
                    title.style.display = "block";
                });
                isExpanded = true;
            }
        });
    });



    </script>

</body>
</html>
