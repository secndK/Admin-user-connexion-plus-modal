@extends('layouts.app')

<!-- modifier le titre -->
@section('title', 'Accueil')

<!-- renseigner le body -->
@section('content')


<!-- bouton de deconnection désactivé -->


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



<!--La nav bar-->








@endsection
