<?php
namespace App\Model\Table;

use App\Model\Entity\Colaborador;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Colaboradores Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Usuarios
 */
class ColaboradoresTable extends Table
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

        $this->table('colaboradores');
        $this->displayField('nome');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Proffer.Proffer', [
            'filename' => [
                'root' => WWW_ROOT . 'img',
                'dir' => 'dir',
                'thumbnailSizes' => [
                    'square' => [
                        'w' => 150,
                        'h' => 150,
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
                    ]
                ],
                'thumbnailMethod' => 'Imagick'
            ]
        ]);

        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id'
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
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->requirePresence('link', 'create')
            ->notEmpty('link');

        $validator
            ->allowEmpty('contato');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('fone');

//        $validator
//            ->requirePresence('dir', 'create')
//            ->notEmpty('dir');

        $validator
            ->requirePresence('filename', 'create')
            ->notEmpty('filename')
            ->add('filename', 'proffer', [
                'rule' => ['dimensions', [
                    'min' => ['w' => 150, 'h' => 150],
                    'max' => ['w' => 1920, 'h' => 1080]
                ]],
                'message' => 'Imagem não possui as dimensões corretas.',
                'provider' => 'proffer'
            ])
            ->add('filename', 'file', [
                'rule' => ['mimeType', ['image/jpeg', 'image/png', 'image/gif']],
                'message' => 'Extensão não permitida.'
            ]);

        $validator
            ->integer('ativo')
            ->requirePresence('ativo', 'create')
            ->notEmpty('ativo');

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
//        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['usuario_id'], 'Usuarios'));
        return $rules;
    }
}
