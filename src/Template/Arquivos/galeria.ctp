<div class="row">    
    <div class="col-lg-12">
        <h1 class="page-header">
            Galeria de Imagens
            <small>Acervo</small>
        </h1>
        <ol class="breadcrumb">
            <li><?= $this->Html->link(__('Home'), [
                'controller' => 'Pages',
                'action' => 'index']) ?></li>
        </ol>
    </div>
</div>
<!-- galeria 3 colunas -->

<?php
    $i = 3;
    foreach ($arquivos as $arquivo)
    {
        if($i % 3 === 0)
        {
            echo '<div class="row">';
        }
        echo '<div class="col-md-4 img-portfolio">';
        echo $this->Html->image('/imgs/arquivos/file/' . $arquivo->dir . '/portrait_' . $arquivo->name, [
            'class' => 'img-responsive img-hover',
            'width' => '360',
//            'height' => '200',
            'escape' => false
        ]);
        echo '<h3>' . $this->Html->link($arquivo->titulo, ['action' => 'view', $arquivo->id]) . '</h3>';
        echo '<p>' . $arquivo->descricao . '</p>';
        echo '</div>';
        $i++;
        if($i % 3 === 0)
        {
            echo '</div>';
        }
        
    }
?>
<div class="row text-center">
    <div class="col-lg-12">
        <ul class="pagination">
            <?= $this->Paginator->numbers() ?>
        </ul>
    </div>
</div>


