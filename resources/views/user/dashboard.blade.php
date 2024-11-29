@extends('layouts.app')

<!-- modifier le titre -->
@section('title', 'Accueil')

<!-- renseigner le body -->
@section('content')


<!-- bouton de deconnection désactivé -->
 -->

<!-- modal de bienvenue fait avec boostrap -->

<div class="modal fade" id="welcomeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success-subtle">
                <h1 class="modal-title fs-5" id="welcomeModalLabel">Bravo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>L'utilisateur s'est connecté avec succès</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

<nav class="sidebar bg-warning text-white p-3 shadow rounded-end position-fixed" style="width: 250px; height: 100%; top: 0; left: 0;">
    <header class="d-flex justify-content-end mb-4">
        <i class='bx bx-chevron-right toggle fs-4 text-white cursor-pointer'></i>
    </header>

    <div class="menu-bar">
        <div class="menu">
            <li class="search-box d-flex align-items-center bg-white text-dark rounded p-2 mb-4">
                <i class='bx bx-search icon text-warning me-2'></i>
                <input type="text" placeholder="rechercher..." class="form-control border-0 shadow-none">
            </li>

            <ul class="menu-links list-unstyled">
                <li>
                    <a href="#" class="d-flex align-items-center p-2 rounded text-white hover-bg-white hover-text-warning">
                        <i class='bx bx-home-alt fs-5 me-3'></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center p-2 rounded text-white hover-bg-white hover-text-warning">
                        <i class='bx bx-bar-chart-alt-2 fs-5 me-3'></i>
                        <span>Utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center p-2 rounded text-white hover-bg-white hover-text-warning">
                        <i class='bx bx-bell fs-5 me-3'></i>
                        <span>Appareils</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="d-flex align-items-center p-2 rounded text-white hover-bg-white hover-text-warning">
                        <i class='bx bx-pie-chart-alt fs-5 me-3'></i>
                        <span>Permission et Rôle<legend></legend></span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="bottom-content mt-5">
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn w-100 d-flex align-items-center justify-content-start p-2 rounded text-white hover-bg-white hover-text-warning border-0">
                    <i class='bx bx-log-out fs-5 me-3'></i>
                    <span class="fw-bold fs-6 span-style">Déconnexion</span>
                </button>
            </form>
        </div>

    </div>
</nav>








<!--script du modal -->
<script>
    // Au chargement de la page, le modal est affiché
    document.addEventListener('DOMContentLoaded', function () {
        var myModal = new bootstrap.Modal(document.getElementById('welcomeModal'), {
            keyboard: false
        });
        myModal.show();
    });









</script>






@endsection
