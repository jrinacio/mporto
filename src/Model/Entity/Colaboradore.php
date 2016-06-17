<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Colaboradore Entity.
 *
 * @property int $id
 * @property string $nome
 * @property string $link
 * @property string $contato
 * @property string $email
 * @property string $fone
 * @property string $dir
 * @property string $file
 * @property int $ativo
 * @property int $usuario_id
 * @property \App\Model\Entity\Usuario $usuario
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Colaboradore extends Entity
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
