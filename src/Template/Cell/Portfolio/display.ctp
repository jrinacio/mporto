<!-- Portfólio -->
<?php if (!empty($imgs)): ?>
<div class="row">
    <div class="col-lg-12">
        <h2 class="page-header">Acervo & Portfólio</h2>
    </div>

    <?php
//        $i = 3;
//        foreach ($imgs as $img)
//        {
//            if ($i % 3 === 0)
//            {
//                echo '<div class="row">';
//            }
//            echo '<div class="col-md-4 col-sm-6">';
//            echo $this->Html->image('/imgs/arquivos/file/' . $img->dir . '/' . $img->name, [
//                'class' => 'img-responsive img-hover',
//                'alt' => $img->titulo,
//                'escape' => false
//            ]);
//            echo '</div>';
//            $i++;
//            if($i % 3 === 0)
//            {
//                echo '</div>';
//            }
//        }
        
        foreach ($imgs as $img)
        {
            echo '<div class="col-md-3 col-sm-6">';
            echo $this->Html->image('/imgs/arquivos/file/' . $img->dir . '/portrait_' . $img->name, [
                'class' => 'img-responsive img-hover',
                'alt' => $img->titulo,
                'escape' => false
            ]);
            echo '</div>';
        }
    
    ?>

<?php endif; ?>

