<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

?>
<!DOCTYPE html>
<html ng-app="calendar">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!--
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    -->
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('bootstrap-theme.min.css') ?>
    <?= $this->Html->css('event-scheduler.css') ?>
    <?= $this->Html->script('angular.min.js') ?>
    <?= $this->Html->script('ui-bootstrap.min.js') ?>
    <?= $this->Html->script('calendar.js') ?>
    <?= $this->Html->script('modal-confirm.js') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<?= $this->element('Layout/admin-menu') ?>
<div class="container theme-showcase" role="main">

    <?= $this->Flash->render() ?>

    <?= $this->fetch('content') ?>
</div>
<?= $this->Html->script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js') ?>
<?= $this->Html->script('bootstrap.min.js') ?>
</body>
</html>
