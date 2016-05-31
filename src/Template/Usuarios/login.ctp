<h1>Login de Acesso</h1>

<?= $this->Form->create() ?>
<?php
    echo $this->Form->input('email', ['label' => 'E-mail']);
    echo $this->Form->input('senha', ['label' => 'Senha']);
?>
<div>
    <?php
        echo $this->Form->button(__('Login'), [
            'type' => 'submit',
        ]);
        echo $this->Form->button(__('Limpar'), [
            'type' => 'reset'
        ]);
    ?>
</div>
<?= $this->Form->end() ?>