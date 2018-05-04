<?php
    /*
        Nom : scripts.ctp
        Description : Toutes les ressources JavaScript ajoutées à ce fichier seront implémentées en dernières (override des autres ressources) et seront propres au thème.
        Utilisation : <?= $this->Html->script('nom_du_fichier.js') ?>
    */
?>

<?= $this->Html->script('main.js') ?>
<?= $this->Html->script('clipboard.min.js') ?>
<script>
    $( document ).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

