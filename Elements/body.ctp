<?php
/*
        Nom : body.ctp
        Description : Construction du thème, fait office de squelette sans devoir toucher au Layouts/default.ctp, ajoutez-y les éléments qui doivent
        être présents sur chaque page du thème (pas seulement sur l'accueil)
        Utilisation : <?= $this->element('nom_de_element') ?>
    */
?>
   



<?= $this->element('navbar') // Affiche la NavBar ?>

<?php
    // Affiche les messages propre au CMS dans des alerts Bootstrap
    $flash_messages = $this->Session->flash();
if(!empty($flash_messages)) {
    echo '<div class="flash-message container">'.$flash_messages.'</div>';
}
?>

<?= 
    // Affiche le contenu de la page (Page d'accueil ou la page boutique, etc)
    $this->fetch('content');
?> 


<?= $this->element('footer') // Affiche le Footer ?>