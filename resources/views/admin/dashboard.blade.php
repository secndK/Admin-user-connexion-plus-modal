@extends('layouts.app')

@section('title', 'Accueil Admin')

@section('content')

<form method="POST" action="{{ route('logout') }}">
    @csrf


    <!-- modal de bienvenue -->
    <div class="modal fade" id="welcomeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success-subtle">
                    <h1 class="modal-title fs-5" id="welcomeModalLabel">Bravo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>L'administrateur s'est connecté avec succès</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                </div>
            </div>
        </div>
    </div>





<div class="flex h-screen bg-gray-100">

    <!-- Sidebar -->
    <div class="flex flex-col w-64 bg-gray-800 text-white fixed inset-0 md:relative md:w-64">
        <div class="flex items-center justify-between h-16 bg-gray-900 p-4">
            <h1 class="text-xl font-bold">Menu</h1>
            <button class="md:hidden text-white" id="menu-toggle">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        <nav class="flex flex-col p-4 space-y-4">
            <a href="#" class="relative hover:bg-white hover:text-black p-2 rounded transition-all duration-300 z-10">Dashboard</a>
            <a href="#" class="relative hover:bg-white hover:text-black p-2 rounded transition-all duration-300 z-10">Utilisateurs</a>
            <a href="#" class="relative hover:bg-white hover:text-black p-2 rounded transition-all duration-300 z-10">Paramètres</a>
            <a href="#" class="relative hover:bg-white hover:text-black p-2 rounded transition-all duration-300 z-10">Déconnexion</a>
        </nav>

    </div>





    <!-- logique de la sidebar -->











































































<!--script du modal -->
<script>

    //logique pour la sidebar
    document.getElementById('menu-toggle').addEventListener('click', function () {
        const sidebar = document.querySelector('.sidebar');
        sidebar.classList.toggle('hidden');
    });

    // Au chargement de la page, le modal est affiché
    document.addEventListener('DOMContentLoaded', function () {
        var myModal = new bootstrap.Modal(document.getElementById('welcomeModal'), {
            keyboard: false
        });
        myModal.show();
    });
</script>

@endsection
