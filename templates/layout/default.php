<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"></a>
            <img width="120px" height="100px" src="https://seeklogo.com/images/M/movie-time-cinema-logo-8B5BE91828-seeklogo.com.png">
        </div>
        <div class="top-nav-links">
          <?php if($loggedIn):?>
            <?= $this->Html->link('Categorias',['controller' => 'users','action' => 'navCategoria']);?>
            <?= $this->Html->link('Peliculas',['controller' => 'users','action' => 'navPelicula']);?>
            <?= $this->Html->link('Salas',['controller' => 'users','action' => 'navSala']);?>
            <?= $this->Html->link('Horarios',['controller' => 'users','action' => 'navHorario']);?>
            <?= $this->Html->link('Funciones',['controller' => 'users','action' => 'navFuncion']);?>
            <?= $this->Html->link('Premios',['controller' => 'users','action' => 'navPremio']);?>

            <?= $this->Html->link('Logout',['controller' => 'users','action' => 'logout']);?>
          <?php else :?>
              <?= $this->Html->link('Register',['controller' => 'users','action' => 'register']);?>
            <?php endif;?>
        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
