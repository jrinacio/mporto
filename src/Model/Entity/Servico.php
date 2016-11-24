<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Servico Entity.
 *
 * @property int $id
 * @property string $nome
 * @property string $descricao
 * @property int $usuario_id
 * @property \App\Model\Entity\Usuario $usuario
 * @property int $categoria_id
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Empresa $empresa
 * @property int $ativo
 * @property tinyint $exibir
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Arquivo[] $arquivos
 */
class Servico extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
