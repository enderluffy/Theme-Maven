<section class="footer">
    <div class="container">
        <div class="pre-footer row">
            <div class="informations col-md-3">
                <h3>Informations</h3>
                <p>Maven est un serveur factice conçu en Avril 2018
                    <br><br>
                    Il s’inscrit comme l’un des meilleurs serveurs factices, même si personne ne peut vraiment le vérifier.</p>
            </div>
            <?php if($EyPlugin->isInstalled('eywek.vote')) { ?>
            <div class="classement offset-md-1 col-md-8">
                <h3>Nos meilleurs joueurs</h3>
                <?php $users_vote = ClassRegistry::init('Vote.Vote')->find('all', [
                    'fields' => ['username', 'COUNT(id) AS count'],
                    'conditions' => ['created LIKE' => date('Y') . '-' . date('m') . '-%'],
                    'order' => 'count DESC',
                    'group' => 'username',
                    'limit' => 8
                ]);
                ?>
                <?php $i_cl = 0;foreach($users_vote as $userv): $i_cl++; ?>
                <div class="player">
                    <img src="https://minotar.net/helm/<?= $userv['Vote']['username']; ?>/50.png" alt="" class="avatar">
                    <div class="infos">
                        <h5 class="username"><?= $userv['Vote']['username']; ?></h5>
                        <span class="rank"><?= $i_cl; ?><?php if($i_cl == 1){ ?>er<?php }else{ ?>ème<?php }?></span>
                        <span class="votes"><?= $userv[0]['count']; ?> <?php if($userv[0]['count'] > 1){ ?>votes<?php }else{ ?>vote<?php }?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <?php } ?>
        </div>
        <div class="separation"></div>
        <div class="copyright">
            <?= $website_name; ?> - <?= $Lang->get('GLOBAL__FOOTER') ?>
        </div>
    </div>
</section>