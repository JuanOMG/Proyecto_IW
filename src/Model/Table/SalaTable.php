<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sala Model
 *
 * @property \App\Model\Table\FuncionTable&\Cake\ORM\Association\HasMany $Funcion
 *
 * @method \App\Model\Entity\Sala newEmptyEntity()
 * @method \App\Model\Entity\Sala newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Sala[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sala get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sala findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Sala patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sala[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sala|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sala saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sala[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sala[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sala[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sala[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SalaTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('sala');
        $this->setDisplayField('numero_sala');
        $this->setPrimaryKey('numero_sala');

        $this->hasMany('Funcion', [
            'foreignKey' => 'sala_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('total_asientos')
            ->requirePresence('total_asientos', 'create')
            ->notEmptyString('total_asientos');

        $validator
            ->integer('asientos_ocupados')
            ->requirePresence('asientos_ocupados', 'create')
            ->notEmptyString('asientos_ocupados');

        return $validator;
    }
}
