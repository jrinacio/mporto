<?php // debug($localizacao) ?>
<?php if (!empty($localizacao)): ?>
<h4>Localização</h4>
<table>
    <tr>
        <th><i class="fa fa-home"></i>&nbsp;</th>
        <td>
            <strong>Endereço:&nbsp;</strong><?= $localizacao->logradouro ?>
            <?= ', ' . $localizacao->numero ?>
            <?= $localizacao->complemento . $localizacao->bairro . ', ' ?>
            <?= $localizacao->cidade . ' - ' . $localizacao->estado ?>
        </td>
    </tr>
    <tr>
        <th><i class="fa fa-globe"></i>&nbsp;</th>
        <td>
            <strong>Website:&nbsp;</strong>
            <?= $localizacao->empresa->link ?>
        </td>
    </tr>
</table>
<?php endif; ?>