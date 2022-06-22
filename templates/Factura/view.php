<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Factura $factura
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Factura'), ['action' => 'edit', $factura->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Factura'), ['action' => 'delete', $factura->id], ['confirm' => __('Are you sure you want to delete # {0}?', $factura->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Factura'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Factura'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="factura view content">
            <h3><?= h($factura->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $factura->has('user') ? $this->Html->link($factura->user->name, ['controller' => 'Users', 'action' => 'view', $factura->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Funcion') ?></th>
                    <td><?= $factura->has('funcion') ? $this->Html->link($factura->funcion->id, ['controller' => 'Funcion', 'action' => 'view', $factura->funcion->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Beneficio') ?></th>
                    <td><?= h($factura->beneficio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($factura->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Precio') ?></th>
                    <td><?= $this->Number->format($factura->precio) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
