<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArquivosFixture
 *
 */
class ArquivosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'usuario_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'evento_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'servico_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'titulo' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'size' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'type' => ['type' => 'string', 'length' => 5, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'dir' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'ativo' => ['type' => 'integer', 'length' => 4, 'unsigned' => false, 'null' => true, 'default' => '1', 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_usefil' => ['type' => 'index', 'columns' => ['usuario_id'], 'length' => []],
            'fk_evefil' => ['type' => 'index', 'columns' => ['evento_id'], 'length' => []],
            'fk_serfil_idx' => ['type' => 'index', 'columns' => ['servico_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_evefil' => ['type' => 'foreign', 'columns' => ['evento_id'], 'references' => ['eventos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_usefil' => ['type' => 'foreign', 'columns' => ['usuario_id'], 'references' => ['usuarios', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_serfil' => ['type' => 'foreign', 'columns' => ['servico_id'], 'references' => ['servicos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'usuario_id' => 1,
            'evento_id' => 1,
            'servico_id' => 1,
            'name' => 'Lorem ipsum dolor sit amet',
            'titulo' => 'Lorem ipsum dolor sit amet',
            'size' => 1,
            'type' => 'Lor',
            'dir' => 'Lorem ipsum dolor sit amet',
            'ativo' => 1,
            'created' => '2016-06-02 11:30:05',
            'modified' => '2016-06-02 11:30:05'
        ],
    ];
}
