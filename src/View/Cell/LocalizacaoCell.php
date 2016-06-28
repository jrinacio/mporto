<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Localizacao cell
 */
class LocalizacaoCell extends Cell
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
        $this->loadModel('Enderecos');
        $localizacao = $this->Enderecos->find()
                ->contain('Empresas')
                ->first();
        $this->set('localizacao', $localizacao);
    }
}
