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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sala->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sala->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Sala'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="sala form content">
            <?= $this->Form->create($sala) ?>
            <fieldset>
                <legend><?= __('Edit Sala') ?></legend>
                <?php
                    echo $this->Form->control('asientos');
                    echo $this->Form->control('asientos_vendidos');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
