<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Funcionario Entity
 *
 * @property int $id
 * @property int  $usuario_id
 * @property string $nome
 * @property string $email
 * @property string $telefone
 * @property int $empresa_id
 * @property string $ds_cargo
 * @property int $ic_ativo
 *
 * @property \App\Model\Entity\Usuario $usuario
 * @property \App\Model\Entity\Empresa $empresa
 */
class Funcionario extends Entity
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
        'id' => false
    ];
}
