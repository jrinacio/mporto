<?= $this->start('ende') ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseOne" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-map-marker icone"></i>Endereços</a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-list icone"></i>Listar'), 
                                ['controller' => 'arquivos', 'action' => 'index'],
                                ['escape' => false]) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="#"><i class="fa fa-plus icone"></i>Novo</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
<?= $this->end() ?>
    
<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Endereços') ?>
        <small>Adicionar</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'Home']) ?></li>
        <li class="active">Adicionar endereço</li>
    </ol>
    <?= $this->Form->create($endereco) ?>
    <?php
        echo $this->Form->input('empresa_id', ['options' => $empresas, 'empty' => 'Selecione a empresa...']);
        echo $this->Form->input('logradouro', ['label' => 'Logradouro']);
        echo $this->Form->input('numero', ['1abel' => 'Número']);
        echo $this->Form->input('complemento', ['label' => 'Complemento']);
        echo $this->Form->input('bairro', ['label' => 'Bairro']);
        echo $this->Form->input('cidade', ['label' => 'Cidade']);
        echo $this->Form->input('estado', ['label' => 'Estado']);
        echo $this->Form->input('cep', ['label' => 'CEP']);
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

