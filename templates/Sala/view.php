<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sala $sala
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Sala'), ['action' => 'edit', $sala->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Sala'), ['action' => 'delete', $sala->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sala->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Sala'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Sala'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sala view content">
            <h3><?= h($sala->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($sala->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Asientos') ?></th>
                    <td><?= $this->Number->format($sala->asientos) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
