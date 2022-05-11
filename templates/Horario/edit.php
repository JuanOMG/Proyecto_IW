<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Horario $horario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $horario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $horario->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Horario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="horario form content">
            <?= $this->Form->create($horario) ?>
            <fieldset>
                <legend><?= __('Edit Horario') ?></legend>
                <?php
                    echo $this->Form->control('hora');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
