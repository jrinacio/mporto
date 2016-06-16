<!-- Serviços -->
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">
            Nossos Serviços
        </h2>
    </div>
    <?php foreach ($servicos as $servico) : ?>
    <div class="col-md-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-check"></i><?= $servico->nome ?></h4>
            </div>
            <div class="panel-body">
                <p><?= $servico->descricao ?></p>
                <?= $this->Html->link('Saiba mais', ['class' => 'btn btn-default']) ?>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>