<?php // debug($localizacao) ?>
<?php if (!empty($localizacao)): ?>
<h4>Localização</h4>
<ul class="addr">
    <li>
        <i class="fa fa-home"></i>
        <strong>Endereço:&nbsp;</strong><?= $localizacao->logradouro ?>
            <?= ', ' . $localizacao->numero ?>
            <?= $localizacao->complemento . ', ' . $localizacao->bairro . ', ' ?>
            <?= $localizacao->cidade . ' - ' . $localizacao->estado ?>
    </li>
    <li>
        <i class="fa fa-globe"></i>
        <strong>Website:&nbsp;</strong>
        <?= $localizacao->empresa->link ?>
    </li>
    <li>
        <i class="fa fa-envelope-o"></i>
        <strong>E-mail:&nbsp;</strong>
        <?= $localizacao->empresa->email ?>
    </li>
    <li>
        <i class="fa fa-phone"></i>
        <strong>Telefone:&nbsp;</strong>
        <?= $localizacao->empresa->telefone ?>
    </li>
</ul>
<?php endif; ?>