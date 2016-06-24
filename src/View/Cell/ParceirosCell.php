<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Parceiros cell
 */
class ParceirosCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('Empresas');
        $parceiros = $this->Empresas->find()
                ->select(['dir', 'filename', 'nome', 'link'])
                ->where(['ativo' => 1]);
        $this->set('parceiros', $parceiros);
    }
}
