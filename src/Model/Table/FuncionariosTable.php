<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Funcionarios Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Empresas
 *
 * @method \App\Model\Entity\Funcionario get($primaryKey, $options = [])
 * @method \App\Model\Entity\Funcionario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Funcionario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Funcionario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Funcionario findOrCreate($search, callable $callback = null)
 */
class FuncionariosTable extends Table
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

        $this->table('funcionarios');
        $this->displayField('id');
        $this->primaryKey('id');
        
        $this->belongsTo('Usuarios', [
            'foreignKey' => 'usuario_id'
        ]);

        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id'
        ]);
        
        $this->addBehavior('Proffer.Proffer', [
            'file' => [
                'root' => WWW_ROOT . 'funcImgs',
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
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');
        
        $validator
            ->requirePresence('foto', 'create')
            ->notEmpty('foto')
            ->add('foto', 'proffer', [
                'rule' => ['dimensions', [
                    'min' => ['w' => 100, 'h' => 100],
                    'max' => ['w' => 1920, 'h' => 1080]
                ]],
                'message' => 'Imagem não possui as dimensões corretas.',
                'provider' => 'proffer'
            ])
            ->add('foto', 'file', [
                'rule' => ['mimeType', ['image/jpeg', 'image/png', 'image/gif']],
                'message' => 'Extensão não permitida.'
            ]);

        $validator
            ->allowEmpty('nome');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->allowEmpty('telefone');

        $validator
            ->allowEmpty('ds_cargo');

        $validator
            ->integer('ic_ativo')
            ->allowEmpty('ic_ativo');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['empresa_id'], 'Empresas'));

        return $rules;
    }
}
