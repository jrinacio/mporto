<!-- Portfólio -->
<?php if (!empty($imgs)): ?>
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Acervo & Portfólio</h2>
    </div>
    <?php
        foreach ($imgs as $img)
        {
            echo '<div class="col-md-3 col-sm-6">';
            echo $this->Html->image('/imgs/arquivos/file/' . $img->dir . '/portrait_' . $img->name, [
                'class' => 'img-responsive img-hover img-thumbnail',
                'width' => 300,
                'alt' => $img->titulo,
                'escape' => false
            ]);
            echo '</div>';
        }
    ?>
</div>
    <?php
        $n = 1;
        foreach ($imgs as $imgb): ?>
        <div id="myModal<?= $n ?>" class="modal">
            <span class="close" onclick="document.getElementById('myModal<?= $n ?>').style.display='none'"></span>
            
        </div>
    <?php endforeach; ?>
<?php endif; ?>

