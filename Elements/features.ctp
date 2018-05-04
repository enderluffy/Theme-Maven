<?php if(!isset($theme_config['theme-features']) || $theme_config['theme-features'] == "true") { ?>
<section class="features">
    <div class="container">
        <div class="row">
           <?php // Feature 1 ?>
            <div class="col-md-3 col-sm-6 col-xs-12 item">
                <div class="img-border">
                    <div class="img-container">
                        <?php if(isset($theme_config['theme-features-img-1']) && $theme_config['theme-features-img-1']) { ?>
                        <img src="<?= $theme_config['theme-features-img-1']; ?>" alt="feature 1">
                        <?php } else { ?>
                            <img src="theme/<?= $this->theme; ?>/img/features1.png" alt="feature 1">
                        <?php } ?>
                    </div>
                </div>
                <h3><?= $theme_config['theme-features-title-1']; ?></h3>
                <p><?= $theme_config['theme-features-description-1']; ?></p>
            </div>
            <?php // Feature 2 ?>
            <div class="col-md-3 col-sm-6 col-xs-12 item">
                <div class="img-border">
                    <div class="img-container">
                        <?php if(isset($theme_config['theme-features-img-2']) && $theme_config['theme-features-img-2']) { ?>
                        <img src="<?= $theme_config['theme-features-img-2']; ?>" alt="feature 2">
                        <?php } else { ?>
                        <img src="theme/<?= $this->theme; ?>/img/features2.png" alt="feature 2">
                        <?php } ?>
                    </div>
                </div>
                <h3><?= $theme_config['theme-features-title-2']; ?></h3>
                <p><?= $theme_config['theme-features-description-2']; ?></p>
            </div>
            <?php // Feature 3 ?>
            <div class="col-md-3 col-sm-6 col-xs-12 item">
                <div class="img-border">
                    <div class="img-container">
                        <?php if(isset($theme_config['theme-features-img-3']) && $theme_config['theme-features-img-3']) { ?>
                        <img src="<?= $theme_config['theme-features-img-3']; ?>" alt="feature 3">
                        <?php } else { ?>
                        <img src="theme/<?= $this->theme; ?>/img/features3.png" alt="feature 3">
                        <?php } ?>
                    </div>
                </div>
                <h3><?= $theme_config['theme-features-title-3']; ?></h3>
                <p><?= $theme_config['theme-features-description-3']; ?></p>
            </div>
            <?php // Feature 4 ?>
            <div class="col-md-3 col-sm-6 col-xs-12 item">
                <div class="img-border">
                    <div class="img-container">
                        <?php if(isset($theme_config['theme-features-img-4']) && $theme_config['theme-features-img-4']) { ?>
                        <img src="<?= $theme_config['theme-features-img-4']; ?>" alt="feature 4">
                        <?php } else { ?>
                        <img src="theme/<?= $this->theme; ?>/img/features4.png" alt="feature 4">
                        <?php } ?>
                    </div>
                </div>
                <h3><?= $theme_config['theme-features-title-4']; ?></h3>
                <p><?= $theme_config['theme-features-description-4']; ?></p>
            </div>
        </div>
    </div>
</section>
<?php } ?>