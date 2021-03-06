<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Arquivo Entity.
 *
 * @property int $id
 * @property int $usuario_id
 * @property \App\Model\Entity\Usuario $usuario
 * @property int $evento_id
 * @property \App\Model\Entity\Evento $evento
 * @property int $servico_id
 * @property \App\Model\Entity\Servico $servico
 * @property string $name
 * @property string $titulo
 * @property int $size
 * @property string $type
 * @property string $dir
 * @property int $ativo
 * @property tinyint carousel
 * @property tinyint acervo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Arquivo extends Entity
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
