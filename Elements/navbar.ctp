<section class="header">
    <div class="left">
        <div class="logo">
            <a href="<?= $this->Html->url('/') ?>">
            <?php if(isset($theme_config['logo']) && $theme_config['logo']) { ?>
            <img src="<?= $theme_config['logo'] ?>" alt="logo" />
            <?php } else { ?>
            <?= $website_name ?>
            <?php } ?>
            </a>
        </div>
        <ul class="menu">
            <li data-name="<?= $Lang->get('GLOBAL__HOME') ?>" class=" <?php if($this->params['controller'] == 'pages') { ?> actived<?php } ?>"><a href="<?= $this->Html->url('/') ?>"><?= $Lang->get('GLOBAL__HOME') ?></a></li>
            <?php
                if(!empty($nav)) {
                    $i = 0;
                    $count = count($nav);
                    $count2 = $count / 2;
                    foreach ($nav as $key => $value) { ?>
                        <?php 
                            if(empty($value['Navbar']['submenu'])) { ?>
                            <li data-name="<?= $value['Navbar']['name'] ?>" class="li-nav<?php if($i < $count2) { echo ' pull-left'; } elseif($i >= $count2) { echo ' pull-right'; } ?><?php if($this->params['controller'] == $value['Navbar']['name']) { ?> actived<?php } ?>">
                                <a href="<?= $value['Navbar']['url'] ?>"<?= ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '' ?>>
                                    <?= $value['Navbar']['name'] ?>
                                </a>
                            </li>
                        <?php } else { ?>
                            <li data-name="<?= $value['Navbar']['name'] ?>" class="dropdown<?php if($i < $count2) { echo ' pull-left'; } elseif($i >= $count2) { echo ' pull-right'; } ?>">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?= $value['Navbar']['name'] ?>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <?php
                                        $submenu = json_decode($value['Navbar']['submenu']);
                                        foreach ($submenu as $k => $v) {
                                    ?>
                                        <li>
                                            <a href="<?= rawurldecode($v) ?>"<?= ($value['Navbar']['open_new_tab']) ? ' target="_blank"' : '' ?>>
                                                <?= rawurldecode(str_replace('+', ' ', $k)) ?>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </li>
                        <?php } ?>
                    <?php $i++; }
                } ?>
        </ul>
                  
    </div>
    <div class="right">
        <div class="profile dropdown">
            <div class="user-infos">
                <?php if($isConnected) { // Utilisateur connecté ?>
                <a class="username user-infos-dropdown-btn pull-left dropdown-toggle" data-toggle="dropdown">
                    <img src="https://minotar.net/helm/<?= $user['pseudo'] ?>/38.png" alt="" class="avatar" title="<?= $Lang->get('USER__PROFILE') ?>">
                    <?= $user['pseudo'] ?>
                    <span class="caret"></span>
                </a>
                <ul class="user-infos-dropdown">
                    <li>
                        <a href="<?= $this->Html->url(array('controller' => 'profile', 'action' => 'index', 'plugin' => null)) ?>">
                            <?= $Lang->get('USER__PROFILE') ?>
                        </a>
                    </li>
                    <li>
                        <a href="#notifications_modal" onclick="notification.markAllAsSeen(2)" data-toggle="modal">
                            <?= $Lang->get('NOTIFICATIONS__LIST') ?>
                        </a>
                    </li>
                    <?php if($Permissions->can('ACCESS_DASHBOARD')) { ?>
                    <li>
                        <a style="color: red;" href="<?= $this->Html->url(array('controller' => '', 'action' => 'index', 'plugin' => 'admin')) ?>">
                            <?= $Lang->get('GLOBAL__ADMIN_PANEL') ?>
                        </a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="<?= $this->Html->url(array('controller' => 'user', 'action' => 'logout', 'plugin' => null)) ?>">
                            <?= $Lang->get('USER__LOGOUT') ?>
                        </a>
                    </li>
                </ul>                
                <?php } else { // Pas connecté ?>
                <div class="user-disconnected">
                    <a href="#" data-toggle="modal" data-target="#login">
                       <?= $Lang->get('USER__LOGIN') ?>
                    </a>
                    ou
                    <a href="#" data-toggle="modal" data-target="#register">
                        <?= $Lang->get('USER__REGISTER') ?>
                    </a>                    
                </div>
                <?php } ?>
            </div>
        </div>        
    </div>
</section>

<section class="header-mobile">
    BITE O CUL
</section>
