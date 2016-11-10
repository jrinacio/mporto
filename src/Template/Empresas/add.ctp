<?= $this->start('vws') ?>
    <li><a href="#" class="btn btn-primary active"><i class="fa fa-plus"></i>&nbsp;Adicionar empresa</a></li>
    <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Listar empresas'), 
            ['action' => 'index'], 
            ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
<?= $this->end() ?>
<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Empresas & Setores') ?>
        <small>Adicionar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Adicionar empresa</li>
    </ol>
    <div>
        <?= $this->Form->create($empresa, ['id' => 'upload', 'type' => 'file']) ?>
        <?php
            echo $this->Form->input('nome', [
                'label' => 'Nome do Parceiro', 'empty' => 'Nome do parceiro...'
            ]);
            echo $this->Form->input('categoria_id', [
                'label' => 'Categorias', 'options' => $categorias, 'empty' => true]);
            echo $this->Form->input('link', ['label' => 'Website']);
            echo $this->Form->input('email', ['label' => 'E-mail']);
            echo $this->Form->input('telefone', ['label' => 'Telefone']);
//            echo $this->Form->input('dir');
            echo $this->Form->input('filename', [
                'type' => 'file',
                'id' => 'file',
                'label' => 'Nome do arquivo'
            ]);
            $atv = [0 => 'Não', 1 => 'Sim'];
            echo $this->Form->input('ativo', [
                'options' => $atv,
                'default' => 1
            ]);
//            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
            echo $this->Form->input('parent_id', [
                'options' => $setores,
                'empty' => true,
                'label' => 'Empresa/Setor'
            ]);
        ?>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

