<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Colaborador Entity.
 *
 * @property int $id
 * @property string $nome
 * @property int $categoria_id
 * @property string $link
 * @property string $dir
 * @property string $filename
 * @property int $ativo
 * @property int $usuario_id
 * @property int $empresa_id
 * @property \App\Model\Entity\Categoria $categoria
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Empresa $empresa
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Empresa extends Entity
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
