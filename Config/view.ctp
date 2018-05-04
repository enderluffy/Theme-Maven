<?php
$form_input = array('title' => $Lang->get('THEME__UPLOAD_LOGO'));

if(isset($config['logo']) && $config['logo']) {
  $logo = explode('/', $config['logo']);
  $form_input['img'] = 'uploads/'.end($logo);
  $form_input['filename'] = 'theme_logo';
}
?>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $Lang->get('THEME__CUSTOMIZATION') ?></h3>
        </div>
        <div class="box-body">

          <form method="post" enctype="multipart/form-data" data-ajax="false">
            
            <div class="col-md-12">
                <div class="jumbotron">
                    <h1>Maven</h1>
                    <p>Thème conçu par <a href="https://twitter.com/orphevs" target="_blank">Orphevs</a></p>
                    <br><br>
                    <p>
                        <a class="btn btn-success" href="https://github.com/MineWeb/Theme-Maven" target="_blank" role="button">GitHub</a>
                    </p>
                </div>
            </div>

            <div class="col-md-4">
              <?= $this->element('form.input.upload.img', $form_input) ?>
                <div class="form-group">
                    <label><?= $Lang->get('THEME__FAVICON_URL') ?></label>
                    <input type="text" class="form-control" name="favicon_url" value="<?= $config['favicon_url'] ?>">
                </div>
            </div>

            <div class="col-md-8">
               
               <!-- Features -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Vitrine</h3>
                    </div>
                    <div class="panel-body">
                        <label>Activer la vitrine</label>
                        <select name="theme-features" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-features'] == "true") ? ' selected' : '' ?>>Oui</option>
                            <option value="false"<?= ($config['theme-features'] == "false") ? ' selected' : '' ?>>Non</option>
                        </select>
                        
                        <?php if(!isset($theme_config['theme-features']) || $theme_config['theme-features'] == "true") { ?>
                            <div class="page-header"></div>
                            <p>Titre de la vitrine N°1</p>
                            <textarea class="form-control" name="theme-features-title-1" cols="1" rows="1"><?= $config['theme-features-title-1']; ?></textarea>
                            <br>
                            <p>Description de la vitrine N°1</p>
                            <textarea class="form-control" name="theme-features-description-1" cols="1" rows="1"><?= $config['theme-features-description-1']; ?></textarea>
                            <br>
                            <p>Image de la vitrine N°1</p>
                            <textarea class="form-control" name="theme-features-img-1" cols="1" rows="1" placeholder="URL de l'image"><?= $config['theme-features-img-1']; ?></textarea>
                            <br>
                            <div class="page-header"></div>
                            <p>Titre de la vitrine N°2</p>
                            <textarea class="form-control" name="theme-features-title-2" cols="1" rows="1"><?= $config['theme-features-title-2']; ?></textarea>
                            <br>
                            <p>Description de la vitrine N°2</p>
                            <textarea class="form-control" name="theme-features-description-2" cols="1" rows="1"><?= $config['theme-features-description-2']; ?></textarea>
                            <br>
                            <p>Image de la vitrine N°2</p>
                            <textarea class="form-control" name="theme-features-img-2" cols="1" rows="1" placeholder="URL de l'image"><?= $config['theme-features-img-2']; ?></textarea>
                            <br>
                            <div class="page-header"></div>
                            <p>Titre de la vitrine N°3</p>
                            <textarea class="form-control" name="theme-features-title-3" cols="1" rows="1"><?= $config['theme-features-title-3']; ?></textarea>
                            <br>
                            <p>Description de la vitrine N°3</p>
                            <textarea class="form-control" name="theme-features-description-3" cols="1" rows="1"><?= $config['theme-features-description-3']; ?></textarea>
                            <br>
                            <p>Image de la vitrine N°3</p>
                            <textarea class="form-control" name="theme-features-img-3" cols="1" rows="1" placeholder="URL de l'image"><?= $config['theme-features-img-3']; ?></textarea>
                            <br>
                            <div class="page-header"></div>
                            <p>Titre de la vitrine N°4</p>
                            <textarea class="form-control" name="theme-features-title-4" cols="1" rows="1"><?= $config['theme-features-title-4']; ?></textarea>
                            <br>
                            <p>Description de la vitrine N°4</p>
                            <textarea class="form-control" name="theme-features-description-4" cols="1" rows="1"><?= $config['theme-features-description-4']; ?></textarea>
                            <br>
                            <p>Image de la vitrine N°4</p>
                            <textarea class="form-control" name="theme-features-img-4" cols="1" rows="1" placeholder="URL de l'image"><?= $config['theme-features-img-4']; ?></textarea>
                            <br>
                        <?php } ?>
                    </div>
                </div>
                <!-- Compteur de joueurs -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Compteur de joueurs</h3>
                    </div>
                    <div class="panel-body">
                        <label>Activer le compteur</label>
                        <select name="theme-counter" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-counter'] == "true") ? ' selected' : '' ?>>Oui</option>
                            <option value="false"<?= ($config['theme-counter'] == "false") ? ' selected' : '' ?>>Non</option>
                        </select>

                        <?php if(!isset($theme_config['theme-counter']) || $theme_config['theme-counter'] == "true") { ?>
                            <div class="page-header"></div>
                            <label>Utilisez-vous un launcher ?</label>
                            <select name="theme-counter-launcher" class="form-control" style="margin-bottom:20px;">                        
                                <option value="true"<?= ($config['theme-counter-launcher'] == "true") ? ' selected' : '' ?>>Oui</option>
                                <option value="false"<?= ($config['theme-counter-launcher'] == "false") ? ' selected' : '' ?>>Non</option>
                            </select>
                            <?php if(!isset($theme_config['theme-counter-launcher']) || $theme_config['theme-counter-launcher'] == "true") { ?>
                                <div class="page-header"></div>
                                <p>URL du launcher</p>
                                <textarea class="form-control" name="theme-counter-launcher-url" cols="1" rows="1"><?= $config['theme-counter-launcher-url']; ?></textarea>
                                <br>
                            <?php } else { ?>
                                <div class="page-header"></div>
                                <p>IP du serveur</p>
                                <textarea class="form-control" name="theme-counter-ip" cols="1" rows="1"><?= $config['theme-counter-ip']; ?></textarea>
                                <br>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                <!-- Vote -->
                <?php if($EyPlugin->isInstalled('eywek.vote')){ ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Panneau Vote</h3>
                    </div>
                    <div class="panel-body">
                        <label>Activer le panneau Vote</label>
                        <select name="theme-vote" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-vote'] == "true") ? ' selected' : '' ?>>Oui</option>
                            <option value="false"<?= ($config['theme-vote'] == "false") ? ' selected' : '' ?>>Non</option>
                        </select>
                        <?php if(!isset($theme_config['theme-vote']) || $theme_config['theme-vote'] == "true") { ?>
                            <div class="page-header"></div>
                            <p>URL de l'image</p>
                            <textarea class="form-control" name="theme-vote-img" cols="1" rows="1"><?= $config['theme-vote-img']; ?></textarea>
                            <br>
                            <p>Texte du panneau</p>
                            <textarea class="form-control" name="theme-vote-text" cols="1" rows="3"><?= $config['theme-vote-text']; ?></textarea>
                            <br>
                        <?php } ?>
                    </div>
                </div>
                <?php } ?>
                <!-- Réseaux sociaux -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Réseaux sociaux</h3>
                    </div>
                    <div class="panel-body">
                        <label>Activer les réseaux sociaux</label>
                        <select name="theme-social" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-social'] == "true") ? ' selected' : '' ?>>Oui</option>
                            <option value="false"<?= ($config['theme-social'] == "false") ? ' selected' : '' ?>>Non</option>
                        </select>
                        <br>
                        <p>Les réseaux sociaux sont à modifier dans : <a href="<?= $this->Html->url('/') ?>/admin/configuration">Général > Préférences Générales > Préférences sociales</a></p>
                    </div>
                </div>
                <!-- Discord -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Discord</h3>
                    </div>
                    <div class="panel-body">
                        <label>Activer le panneau Discord</label>
                        <select name="theme-discord" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-discord'] == "true") ? ' selected' : '' ?>>Oui</option>
                            <option value="false"<?= ($config['theme-discord'] == "false") ? ' selected' : '' ?>>Non</option>
                        </select>
                        <?php if(!isset($theme_config['theme-discord']) || $theme_config['theme-discord'] == "true") { ?>
                            <div class="page-header"></div>
                            <p>Identifiant du serveur</p>
                            <textarea class="form-control" name="theme-discord-id" cols="1" rows="1"><?= $config['theme-discord-id']; ?></textarea>
                            <br>
                            <p>Pour trouver l'identifiant rendez-vous sur votre Discord : Paramètres du serveur > Widget, activer le Widget et copier l'identifiant de votre serveur.</p>
                        <?php } ?>
                    </div>
                </div>
                <!-- Infos Footer -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Informations</h3>
                    </div>
                    <div class="panel-body">
                        <label>Activer le panneau Informations</label>
                        <select name="theme-infos" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-infos'] == "true") ? ' selected' : '' ?>>Oui</option>
                            <option value="false"<?= ($config['theme-infos'] == "false") ? ' selected' : '' ?>>Non</option>
                        </select>
                        <?php if(!isset($theme_config['theme-infos']) || $theme_config['theme-infos'] == "true") { ?>
                        <div class="page-header"></div>
                        <p>Texte du panneau Informations</p>
                        <textarea class="form-control" name="theme-infos-text" cols="1" rows="3"><?= $config['theme-infos-text']; ?></textarea>
                        <?php } ?>
                    </div>
                </div>
                <!-- Classement Footer -->
                <?php if($EyPlugin->isInstalled('eywek.vote')){ ?>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Classement voteurs</h3>
                    </div>
                    <div class="panel-body">
                        <label>Activer le classement des voteurs</label>
                        <select name="theme-ranking" class="form-control" style="margin-bottom:20px;">                        
                            <option value="true"<?= ($config['theme-ranking'] == "true") ? ' selected' : '' ?>>Oui</option>
                            <option value="false"<?= ($config['theme-ranking'] == "false") ? ' selected' : '' ?>>Non</option>
                        </select>
                    </div>
                </div>
                <?php } ?>
            </div>

            <div class="col-md-12">
                <div class="pull-right">
                    <input name="data[_Token][key]" value="<?= $csrfToken ?>" type="hidden">
                    <a href="<?= $this->Html->url(array('controller' => 'theme', 'action' => 'index', 'admin' => true)) ?>" type="button" class="btn btn-default"><?= $Lang->get('GLOBAL__CANCEL') ?></a>
                    <button class="btn btn-primary btn-lg" type="submit"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                </div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</section>
