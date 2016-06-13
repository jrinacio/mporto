<?php //debug($imagens) ?>
<ol class="carousel-indicators">
    <?php
        $indicators = '';
        $j = 0;
        foreach ($imagens as $imagem)
        {
            if($j == 0)
            {
                $indicators .= '<li data-target="#myCarousel" data-slide-to="' . $j . '" class="active"></li>';
            }
            else
            {
                $indicators .= '<li data-target="#myCarousel" data-slide-to"' . $j . '"></li>';
            }
            $j++;
        }
        echo $indicators;
    ?>
</ol>
<div class="carousel-inner">
    <?php $k = 1; ?>
    <?php foreach ($imagens as $imagem): ?>
        <div class="item <?= $k === 1 ? 'active' : null; ?>">
            <div class="fill" style="background-image: url('<?= '/mporto/imgs/arquivos/file/' . $imagem->dir . '/' . $imagem->name ?>')"></div>
            <div class="carousel-caption"><h2>Imagem <?= $k ?></h2></div>
        </div>
    <?php
        $k++;
        endforeach;
    ?>
</div>