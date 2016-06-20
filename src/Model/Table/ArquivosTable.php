<?php
namespace App\Model\Table;

use App\Model\Entity\Arquivo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Arquivos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Usuarios
 * @property \Cake\ORM\Association\BelongsTo $Eventos
 * @property \Cake\ORM\Association\BelongsTo $Servicos
 */
class ArquivosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('arquivos');
        $this->displayField('name');
        $this->primaryKey('id');
        
        $this->addBehavior('Timestamp');
        $this->addBehavior('Proffer.Proffer', [
            'file' => [
                'root' => WWW_ROOT . 'imgs',
                'dir' => 'dir',
                'thumbnailSizes' => [
                    'square' => [
                        'w' => 100,
                        'h' => 100,
                        'crop' => true,
                        'jpeg_quality' => 100,
                        'png_compression_level' => 9
                    ],
                    'portrait' => [
                        'w' => 280,
                        'h' => 215,
                        'crop' => true,
                        'jpeg_quality' => 100,
                        'png_compression_level' => 9 
                    ],
                ],
                'thumbnailMethod' => 'Imagick'
            ]
        ]);

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Eventos', [
            'foreignKey' => 'evento_id'
        ]);
        $this->belongsTo('Servicos', [
            'foreignKey' => 'servico_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator->provider('proffer', 'Proffer\Model\Validation\ProfferRules');
        
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name')
            ->add('name', 'proffer', [
                'rule' => ['dimensions', [
                    'min' => ['w' => 100, 'h' => 100],
                    'max' => ['w' => 1920, 'h' => 1080]
                ]],
                'message' => 'Imagem não possui as dimensões corretas.',
                'provider' => 'proffer'
            ])
            ->add('name', 'file', [
                'rule' => ['mimeType', ['image/jpeg', 'image/png', 'image/gif']],
                'message' => 'Extensão não permitida.'
            ]);
                
        $validator
            ->allowEmpty('titulo');

        $validator
            ->integer('size')
            ->requirePresence('size', 'create')
            ->notEmpty('size');

        $validator
            ->requirePresence('type', 'create')
            ->notEmpty('type');

//        $validator
//            ->requirePresence('dir', 'create')
//            ->notEmpty('dir');

        $validator
            ->integer('ativo')
            ->allowEmpty('ativo');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));
        $rules->add($rules->existsIn(['evento_id'], 'Eventos'));
        $rules->add($rules->existsIn(['servico_id'], 'Servicos'));
        return $rules;
    }
}
