<div class="container news">
    <div class="row">
        <div class="news-content container-theme">
            <h1 class="title">
                <?= $news['News']['title'] ?>
            </h1>

            <div class="content">
                <?= $news['News']['content'] ?>
            </div>
            <br>
            <span class="created">
        Écrit le 
        <?= $Lang->date($news['News']['created']); ?>
      </span>
            <span class="author">
        <?= $Lang->get('GLOBAL__BY') ?> <?= $news['News']['author'] ?>
        <img class="avatar" src="https://minotar.net/helm/<?= $news['News']['author'] ?>/24.png">
      </span>
            <div class="clearfix"></div>
        </div>
        <div class="news-brand container-theme">
            <?php if($Permissions->can('LIKE_NEWS')) { ?>
            <p class="like-message">
                <?= $Lang->get('NEWS__LIKE_THIS_NEWS') ?>
            </p>
            <button id="<?= $news['News']['id'] ?>" type="button" class="btn-theme like<?= ($news['News']['liked']) ? ' active' : '' ?>" <?=( !$Permissions->can('LIKE_NEWS')) ? ' disabled' : '' ?>><?= $news['News']['count_likes'] ?> <i style="margin-left: 8px;" class="fa fa-heart"></i></button>
            <?php } else { ?>
            <?= str_replace('%likes%', $news['News']['count_likes'], $Lang->get('NEWS__NBR_LIKES_ON_THIS_NEWS'))?>
                <?php } ?>
        </div>
    </div>
    <div class="news-comments row">
        <h1 class="title">
            <?= count($news['Comment']).' '.$Lang->get('NEWS__COMMENTS_TITLE') ?>
        </h1>
        <div class="add-comment"></div>
        <?php foreach ($news['Comment'] as $k => $v) { ?>
        <div class="comment container-theme" id="comment-<?= $v['id'] ?>">
            <div class="comment-head col-md-2">
                <img class="avatar" src="<?= $this->Html->url(array('controller' => 'API', 'action' => 'get_head_skin/')) ?>/<?= $v['author'] ?>/64" alt="">
                <h3 class="username">
                    <?= $v['author'] ?>
                </h3>
            </div>
            <div class="comment-body col-md-10">
                <?= before_display($v['content']) ?>
                    <h4 class="created">
                        Écrit le <?= $Lang->date($v['created']); ?>
                    </h4>
                    <div class="comment-controls">
                        <?php if($Permissions->can('DELETE_COMMENT') OR $Permissions->can('DELETE_HIS_COMMENT') AND $user['pseudo'] == $v['Comment']['author']) { ?>
                        <p>
                            <a id="<?= $v['id'] ?>" title="<?= $Lang->get('GLOBAL__DELETE') ?>" class="comment-delete btn btn-danger btn-sm">
                                <icon class="fa fa-times"></icon>
                            </a>
                        </p>
                        <?php } ?>
                    </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <?php } ?>
        <?php if($Permissions->can('COMMENT_NEWS')) { ?>
        <center><a href="#" data-toggle="modal" data-target="#postcomment" class="btn-theme"><?= $Lang->get('NEWS__COMMENT_TITLE') ?></a></center>
        <?php } ?>

    </div>
</div>
<?= $Module->loadModules('news') ?>

    <?php if($Permissions->can('COMMENT_NEWS')) { ?>
    <div class="modal fade" id="postcomment" tabindex="-1" role="dialog" aria-labelledby="postcommentLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="<?= $Lang->get('GLOBAL__CLOSE') ?>"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">
                        <?= $Lang->get('NEWS__COMMENT_TITLE') ?>
                    </h4>
                </div>
                <div class="modal-body">
                    <div id="form-comment-fade-out">
                        <div id="error-on-post"></div>
                        <form method="POST" data-ajax="true" action="<?= $this->Html->url(array('controller' => 'news', 'action' => 'add_comment')) ?>" data-callback-function="addcomment" data-success-msg="false">
                            <input name="news_id" value="<?= $news['News']['id'] ?>" type="hidden">
                            <div class="form-group">
                                <textarea name="content" class="form-control" rows="3"></textarea>
                            </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?= $Lang->get('GLOBAL__CLOSE') ?></button>
                    <button type="submit" class="btn btn-primary pull-right"><?= $Lang->get('GLOBAL__SUBMIT') ?></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
    <script type="text/javascript">
        $(".comment-delete").click(function() {
            comment_delete(this);
        });

        function comment_delete(e) {
            var inputs = {};
            var id = $(e).attr("id");
            inputs["id"] = id;
            inputs["data[_Token][key]"] = '<?= $csrfToken ?>';
            $.post("<?= $this->Html->url(array('controller' => 'news', 'action' => 'ajax_comment_delete')) ?>", inputs, function(data) {
                if (data == 'true') {
                    $('#comment-' + id).fadeOut(500);
                } else {
                    console.log(data);
                }
            });
        }

        function addcomment(data) {
            var d = new Date();
            var comment = '<div class="comment container-theme"><div class="comment-head col-md-2"><img class="avatar" src="https://minotar.net/helm/<?= $user['pseudo'] ?>/64" alt="<?= $user['pseudo'] ?>"><h3 class="username"><?= $user['pseudo'] ?></h3></div><div class="comment-body col-md-10">' + data['content'] + '<h4 class="created">Écrit à l\'instant</h4></div><div class="clearfix"></div></div>';
            $('.add-comment').hide().html(comment).fadeIn(1500);
            $('#postcomment').modal('hide')
        }

    </script>
