<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Funcion $funcion
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Funcion'), ['action' => 'edit', $funcion->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Funcion'), ['action' => 'delete', $funcion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcion->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Funcion'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Funcion'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="funcion view content">
            <h3><?= h($funcion->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Pelicula') ?></th>
                    <td><?= $funcion->has('pelicula') ? $this->Html->link($funcion->pelicula->id, ['controller' => 'Pelicula', 'action' => 'view', $funcion->pelicula->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Sala') ?></th>
                    <td><?= $funcion->has('sala') ? $this->Html->link($funcion->sala->numero_sala, ['controller' => 'Sala', 'action' => 'view', $funcion->sala->numero_sala]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Horario') ?></th>
                    <td><?= $funcion->has('horario') ? $this->Html->link($funcion->horario->id, ['controller' => 'Horario', 'action' => 'view', $funcion->horario->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($funcion->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
