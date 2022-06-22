<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Premio $premio
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Premio'), ['action' => 'edit', $premio->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Premio'), ['action' => 'delete', $premio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $premio->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Premios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Premio'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="premios view content">
            <h3><?= h($premio->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($premio->nombre) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($premio->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
