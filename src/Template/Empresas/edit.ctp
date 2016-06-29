<div class="row">
    <div class="col-md-12">
        <h1 class="page-header">
            <?= __('Empresas e Setores') ?>
            <small>Editar</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
            <li class="active">Editar dados da empresa / setor</li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="list-group">
            
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-edit"></i>&nbsp;Editar Empresa</a></li>
                <li><?= $this->Form->postLink(
                        __('<i class="fa fa-trash-o"></i> Excluir Empresa'),
                        ['action' => 'delete', $empresa->id],
                        ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id), 'escape' => false]
                    )
                ?></li>
                <li><?= $this->Html->link(__('<i class="fa fa-list"></i> Empresas'), 
                        ['action' => 'index'], ['escape' => false]) ?></li>
            </ul>
        </div>
    </div>
    <div class="col-md-9">
        <div>
            <h3><?= __('Editar empresa/setor') ?></h3>
        </div>
        <?= $this->Form->create($empresa, ['id' => 'upload', 'type' => 'file']) ?>
        <?php 
            echo $this->Form->input('nome', ['label' => 'Nome', 'empty' => 'Nome da empresa parceira']);
            echo $this->Form->input('categoria_id', ['label' => 'Categoria', 'options' => $categorias, 'empty' => true]);
            echo $this->Form->input('link', ['label' => 'Website', ]);
            echo $this->Form->input('email', ['label' => 'E-mail']);
            echo $this->Form->input('telefone', ['label' => 'Telefone']);
//            echo $this->Form->input('dir');
//            echo $this->Form->input('filename', [
//                'type' => 'file',
//                'id' => 'file',
//                'label' => 'Nome do arquivo de logotipo']);
            $atv = [0 => 'Não', 1 => 'Sim'];
            echo $this->Form->input('ativo', [
                'label' => 'Ativo',
                'options' => $atv,
                'default' => 1
            ]);
//            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
            echo $this->Form->input('parent_id', [
                'label' => 'Empresa',
                'options' => $empresas,
                'empty' => true]);
        ?>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
