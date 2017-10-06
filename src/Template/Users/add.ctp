<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
          
             
             
             // O Cake irá colocar um componente para selecionar entre os papeis disponíveis.    
            echo $this->Form->control('username');
            echo $this->Form->control('password');
             echo $this->Form->input('role', [
             'options' => ['admin' => 'Admin', 'author' => 'Author'] ]);  
       
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
