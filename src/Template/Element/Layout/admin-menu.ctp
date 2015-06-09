<?php
/**
 * Created by PhpStorm.
 * User: nikirby
 * Date: 6/6/15
 * Time: 12:40 PM
 */
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <?= $this->Html->link(
                'Event Scheduler',
                ['controller' => 'Events', 'action' => 'published'],
                ['class' => 'navbar-brand']
            );
            ?>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Events
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?= $this->Html->link('add', ['controller' => 'Events', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link('manage', ['controller' => 'Events', 'action' => 'index']) ?></li>
                        <li class="divider"></li>
                        <li><?= $this->Html->link('calendar', ['controller' => 'Events', 'action' => 'calendar']) ?></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Rooms
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?= $this->Html->link('add', ['controller' => 'Rooms', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link('manage', ['controller' => 'Rooms', 'action' => 'index']) ?></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">People
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><?= $this->Html->link('add', ['controller' => 'Contacts', 'action' => 'add']) ?></li>
                        <li><?= $this->Html->link('manage', ['controller' => 'Contacts', 'action' => 'index']) ?></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>