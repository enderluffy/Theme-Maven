<section class="news col-md-8">
    <h1 class="news-title">Dernières actualités</h1>
    
    <?php if(!empty($search_news)) { ?>
    <?php foreach ($search_news as $k => $v) { ?>
    <div class="news-u container-theme">
        <span class="date">Publié le 15/04/2018 à 20h36</span>
        <h3><?= cut($v['News']['title'], 60, array('ellipsis' => '...', 'html' => true)) ?></h3>
        <p><?= $this->Text->truncate($v['News']['content'], 170, array('ellipsis' => '...', 'html' => true)) ?></p>
        <div class="news-actions">
            <div class="left">
                <ul class="infos">
                    <li class="comments"><?= $v['News']['count_comments'] ?> <i class="fa fa-comments"></i></li>
                    <li class="likes"><?= $v['News']['count_likes'] ?> <i class="fa fa-heart"></i></li>
                </ul>
            </div>
            <div class="right">
                <a class="btn-theme" href="<?= $this->Html->url(array('controller' => 'blog', 'action' => $v['News']['slug'])) ?>"><?= $Lang->get('NEWS__READ_MORE') ?>...</a>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php } else { echo '<div class="news-u container-theme">'.$Lang->get('NEWS__NONE_PUBLISHED').'</div>'; } ?>
</section>