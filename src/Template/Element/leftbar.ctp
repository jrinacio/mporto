<div class="col-md-2 leftbar">
    <div class="list-group">
        <ul class="nav nav-pills nav-stacked">
            <!--<li class="active"><a href=""><i class="fa fa-list"></i>&nbsp;Arquivos</a></li>-->
            <?= $this->fetch('vws') ?>
            <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo arquivo'), 
                    ['controller' => 'arquivos', 'action' => 'add'], 
                    ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            <li><?= $this->html->link(__('<i class="fa fa-list"></i> Listar Categorias'),
                    ['controller' => 'categorias', 'action' => 'index'],
                    ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova Categoria'), 
                    ['controller' => 'categorias', 'action' => 'add'], 
                    ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            <li><?= $this->html->link(__('<i class="fa fa-list"></i> Listar Eventos'),
                    ['controller' => 'eventos', 'action' => 'index'],
                    ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Evento'), 
                    ['controller' => 'Eventos', 'action' => 'add'],
                    ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            <li><?= $this->html->link(__('<i class="fa fa-list"></i> Listar Empresas'),
                    ['controller' => 'empresas', 'action' => 'index'],
                    ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Nova Empresa'), 
                    ['controller' => 'empresas', 'action' => 'add'], 
                    ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            <li><?= $this->html->link(__('<i class="fa fa-list"></i> Listar Endereços'),
                    ['controller' => 'enderecos', 'action' => 'index'],
                    ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Endereco'), 
                    ['controller' => 'controller', 'action' => 'add'], 
                    ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            <li><?= $this->html->link(__('<i class="fa fa-list"></i> Listar Serviços'),
                    ['controller' => 'servicos', 'action' => 'index'],
                    ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Serviço'), 
                    ['controller' => 'Servicos', 'action' => 'add'],
                    ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            <li><?= $this->html->link(__('<i class="fa fa-list"></i> Listar Usuários'),
                    ['controller' => 'usuarios', 'action' => 'index'],
                    ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
            <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> Novo Usuário'), 
                    ['controller' => 'Usuarios', 'action' => 'add'],
                    ['escape' => false, 'class' => 'btn btn-primary']) ?></li>
        </ul>
    </div>
</div>
