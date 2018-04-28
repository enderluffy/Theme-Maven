<?php if(!isset($theme_config['slider']) || $theme_config['slider'] == "true") { // Si le slider est activé il l'affiche ?>
<section class="carousel-theme">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <?php if(!empty($search_slider)) { // Si il y a des slides dans le Carousel du côté Admin alors il affiche les indicators, sinon il affiche 3 indicators écrites en dur ?>
            <?php $i = 0; foreach ($search_slider as $k => $v) { // Il va activer chaque Indicator selon la slide active (même timer) ?>
            <li data-target="#carousel" data-slide-to="<?= $i ?>" class="<?php if($i == 0) { echo ' active'; } ?>"></li>
            <?php $i++; } ?>
            <?php } else { ?>
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <?php } ?>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php if(!empty($search_slider)) { // Si il y a des slides dans le Carousel du côté Admin alors il les affichent, sinon il affiche 3 slides écrites en dur ?>
            <?php $i = 0; foreach ($search_slider as $k => $v) { // ?>
            <div class="item <?php if($i == 0) { echo ' active'; } ?>">
                <img src="<?= $v['Slider']['url_img'] ?>" alt="<?= before_display($v['Slider']['title']) ?>">
                <div class="carousel-caption">
                    <h3><?= before_display($v['Slider']['title']) ?></h3>
                    <p><?= before_display($v['Slider']['subtitle']) ?></p>
                </div>
            </div>
            <?php $i++; } ?>
            <?php } else { ?>
            <div class="item active">
                <img src="theme/<?= $this->theme; ?>/img/slide-default.png" alt="slide">
                <div class="carousel-caption">
                    <h3>Minecraft</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et turpis ut magna faucibus dapibus vitae scelerisque felis. Phasellus molestie accumsan elit ac imperdiet. Morbi porttitor arcu nisl, sit amet mattis velit luctus id. Nulla dapibus enim egestas mollis semper. Vivamus rutrum nec sem a gravida... </p>
                </div>
            </div>
            <div class="item">
                <img src="theme/<?= $this->theme; ?>/img/slide-default.png" alt="slide">
                <div class="carousel-caption">
                    <h3>Minecraft</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et turpis ut magna faucibus dapibus vitae scelerisque felis. Phasellus molestie accumsan elit ac imperdiet. Morbi porttitor arcu nisl, sit amet mattis velit luctus id. Nulla dapibus enim egestas mollis semper. Vivamus rutrum nec sem a gravida... </p>
                </div>
            </div>
            <div class="item">
                <img src="theme/<?= $this->theme; ?>/img/slide-default.png" alt="slide">
                <div class="carousel-caption">
                    <h3>Minecraft</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi et turpis ut magna faucibus dapibus vitae scelerisque felis. Phasellus molestie accumsan elit ac imperdiet. Morbi porttitor arcu nisl, sit amet mattis velit luctus id. Nulla dapibus enim egestas mollis semper. Vivamus rutrum nec sem a gravida... </p>
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<?php } ?>