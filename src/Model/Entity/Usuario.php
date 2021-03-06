<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Usuario Entity.
 *
 * @property int $id
 * @property string $nome
 * @property string $email
 * @property string $senha
 * @property int $perfil
 * @property int $ativo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Arquivo[] $arquivos
 * @property \App\Model\Entity\Categoria[] $categorias
 * @property \App\Model\Entity\Evento[] $eventos
 */
class Usuario extends Entity
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
    
    protected function _setSenha($password) 
    {
        if(strlen($password) > 0)
        {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
