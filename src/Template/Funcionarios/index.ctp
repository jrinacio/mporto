<?= $this->start('func') ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseSeven" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-users icone"></i>Funcionários
                </a>
            </h4>
        </div>
        <div id="collapseSeven" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="#"><i class="fa fa-list icone"></i>Funcionários</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'),
                                    ['controller' => 'funcionarios', 'action' => 'add'],
                                    ['escape' => false]) ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
<?= $this->end() ?>
<div class="col-md-10 divisoria">
    <h1 class="page-header">
        <?= __('Funcionarios') ?>
        <small>Listagem</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
        <li class="active">Lista de Funcionários</li>
    </ol>
    <div class="table-responsive">
        <table id="tbFuncionarios">
            <thead>
                <tr>
                    <th><?= __('ID') ?></th>
                    <th><?= __('Nome') ?></th>
                    <th><?= __('E-mail') ?></th>
                    <th><?= __('Telefone') ?></th>
                    <th><?= __('Empresa') ?></th>
                    <th><?= __('Cargo') ?></th>
                    <th><?= __('Ativo') ?></th>
                    <th><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($funcionarios as $funcionario): ?>
                    <tr>
                <td><?= $this->Number->format($funcionario->id) ?></td>
                <td><?= h($funcionario->nome) ?></td>
                <td><?= h($funcionario->email) ?></td>
                <td><?= h($funcionario->telefone) ?></td>
                <td><?= $funcionario->has('empresa') ? $this->Html->link($funcionario->empresa->nome, ['controller' => 'Empresas', 'action' => 'view', $funcionario->empresa->id]) : '' ?></td>
                <td><?= h($funcionario->ds_cargo) ?></td>
                <td><?= $this->Number->format($funcionario->ic_ativo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $funcionario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $funcionario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $funcionario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $funcionario->id)]) ?>
                </td>
            </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php $this->Html->scriptStart(['block' => true]); ?>
            var options = {
                "paging": true,
                "lengthMenu": [[15, 50, 100, -1], [15, 50, 100, "All"]],
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "language": {
                    "lengthMenu":     "Exibir _MENU_ registros",
                    "zeroRecords": "Nenhum registro encontrado.",
                    "info": "Página _PAGE_ de _PAGES_ páginas",
                    "infoempty": "Sem registros.",
                    "search": "Procurar",
                    "paginate": {
                        "first": "Primeiro",
                        "last": "Último",
                        "next": "Próximo",
                        "previous": "Anterior"
                    }
                }
            };
            $(function () {
                $('#tbFuncionarios').DataTable(options);
            });
        <?php $this->Html->scriptEnd(); ?>
    </div>
</div>
