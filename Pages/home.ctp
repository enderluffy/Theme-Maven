<?= $this->element('carousel') // Affiche le carousel ?>
<?= $this->element('features') // Affiche les features ?>

<div class="container">
    <div class="row">
        <?= $this->element('news') // Affiche les news ?>
        <?= $this->element('widgets') // Affiche les widgets ?>        
    </div>
</div>


<?= $Module->loadModules('home') ?>
