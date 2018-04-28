<section class="widgets col-md-4">
    <div class="player-counter">
        <h3><?= ($banner_server) ? $banner_server : $Lang->get('SERVER__STATUS_OFF') ?></h3>
        <div class="btn-theme">Rejoignez-nous</div>
    </div>
    <div class="vote container-theme">
        <div class="img-container">
            <img src="theme/<?= $this->theme; ?>/img/coffre.png" alt="coffre" class="coffre">
            <img src="theme/<?= $this->theme; ?>/img/diamant.png" alt="diamant" class="diamant">
        </div>
        <h3>Votez pour <span class="blue">Maven</span> et gagnez des <span class="blue">récompenses.</span></h3>
        <a href="#" class="btn-theme">Voter</a>
    </div>
    <div class="socials container-theme">
        <h3>Nos réseaux sociaux</h3>
        <ul>            
            <?php
            if(!empty($skype_link)) {
                echo '<a href="'.$skype_link.'" target="_blank"><li class="skype"><i class="fab fa-skype"></i></li></a>';
            }
            if(!empty($youtube_link)) {
                echo '<a href="'.$youtube_link.'" target="_blank"><li class="youtube"><i class="fab fa-youtube"></i></li></a>';
            }
            if(!empty($twitter_link)) {
                echo '<a href="'.$twitter_link.'" target="_blank"><li class="twitter"><i class="fab fa-twitter"></i></li></a>';
            }
            if(!empty($facebook_link)) {
                echo '<a href="'.$facebook_link.'" target="_blank"><li class="facebook"><i class="fab fa-facebook-f"></i></li></a>';
            }
            ?>
            
            <?php
            foreach ($findSocialButtons as $key => $value) {
                echo '<a target="_blank" href="'.$value['SocialButton']['url'].'">';
                if(!empty($value['SocialButton']['img'])) {
                    echo '<img src="'.$value['SocialButton']['img'].'">';
                }
                echo '</a>';
            }
            ?>
        </ul>
    </div>
    <div class="discord container-theme">
        <h3>Rejoignez-nous sur Discord</h3>
        <iframe src="https://discordapp.com/widget?id=316532971903385601&theme=dark" width="350" height="500" allowtransparency="true" frameborder="0"></iframe>
    </div>
</section>