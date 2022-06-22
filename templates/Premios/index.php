<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Premio[]|\Cake\Collection\CollectionInterface $premios
 */
?>
<div class="premios index content">
    <?= $this->Html->link(__('New Premio'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Premios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nombre') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php $prems = array(); $premsID = array(); foreach ($premios as $premio): ?>
                <tr>
                    <td><?= $this->Number->format($premio->id); array_push($premsID,$premio->id); ?></td>
                    <td><?= h($premio->nombre); array_push($prems,$premio->nombre);?></td>
                    <?= h($premio->nombre) ?>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $premio->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $premio->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $premio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $premio->id)]) ?>
                    </td>
                </tr>
              <?php endforeach;
              $_SESSION['premsID'] = $premsID;
              $_SESSION['prems'] = $prems;?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
