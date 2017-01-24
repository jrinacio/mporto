<?= $this->start('user') ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a href="#collapseNine" data-toggle="collapse" data-parent="#accordion">
                    <i class="fa fa-user-plus icone"></i>Usuários</a>
            </h4>
        </div>
        <div id="collapseNine" class="panel-collapse collapse in">
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <td>
                            <a href="#"><i class="fa fa-list icone"></i>Usuários</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?= $this->Html->link(__('<i class="fa fa-plus icone"></i>Novo'), 
                                ['controller' => 'usuarios', 'action' => 'add'],
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
        <?= __('Usuários') ?>
        <small>Listagem</small>
    </h1>
    <ol class="breadcrumb">
        <li><?= $this->Html->link('Home', ['controller' => 'Pages', 'action' => 'home']) ?></li>
        <li class="active">Lista de usuários</li>
    </ol>
    <div class="table-responsive">
        <table id="tbUsuarios" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id', 'ID') ?></th>
                    <th><?= $this->Paginator->sort('nome', 'Nome') ?></th>
                    <th><?= $this->Paginator->sort('email', 'E-mail') ?></th>
                    <th><?= $this->Paginator->sort('perfil','Perfil') ?></th>
                    <th><?= $this->Paginator->sort('ativo', 'Ativo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?= $this->Number->format($usuario->id) ?></td>
                            <td><?= h($usuario->nome) ?></td>
                            <td><?= h($usuario->email) ?></td>
                            <td><?= $usuario->perfil === 1 ? 'Adiministrativo' : 'Padrão' ?></td>
                            <td><?= $usuario->ativo === 1 ? 'Sim' : 'Não'; ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('<i class="fa fa-search fa-lg"></i>'), 
                                        ['action' => 'view', $usuario->id],
                                        ['escape' => false, 'class' => 'btn btn-primary']) ?>
                                <?= $this->Html->link(__('<i class="fa fa-pencil fa-lg"></i>'), 
                                        ['action' => 'edit', $usuario->id],
                                        ['escape' => false, 'class' => 'btn btn-primary']) ?>
                                <?= $this->Form->postLink(__('<i class="fa fa-trash-o fa-lg"></i>'), 
                                        ['action' => 'delete', $usuario->id], 
                                        ['confirm' => __('Deseja excluir o arquivo # {0}?', $usuario->id),
                                         'escape' => false, 'class' => 'btn btn-danger']) ?>
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
                $('#tbUsuarios').DataTable(options);
            });
        <?php $this->Html->scriptEnd(); ?>
    </div>
</div>
