@extends('layouts.app')

<!-- modifier le titre -->
@section('title', 'Accueil')

<!-- renseigner le body -->
@section('content')
    {{-- Toast de connexion en cas de succès --}}
    @if (session('success'))
        <div class="border py-2 ">{{ session('success') }}</div>
    @endif
    {{-- End Toast de connexion en cas de succès --}}

    {{-- Toast de connexion en cas d'échec --}}
    @if (session('error'))
    <div class="border py-2 ">{{ session('error') }}</div>
    @endif
    {{-- Toast de connexion en cas d'échec --}}


    <!-- bouton de deconnection désactivé -->


    <!-- modal de bienvenue fait avec boostrap -->

    {{-- <div class="modal fade" id="welcomeModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="welcomeModalLabel" aria-hidden="true">
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
    </div> --}}


    <!--script du modal -->
    <script>
        // Au chargement de la page, le modal est affiché
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('welcomeModal'), {
                keyboard: false
            });
            myModal.show();
        });
    </script>



    <!--La nav bar-->








@endsection
