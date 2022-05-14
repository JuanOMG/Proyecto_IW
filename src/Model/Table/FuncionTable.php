<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Funcion Model
 *
 * @property \App\Model\Table\PeliculaTable&\Cake\ORM\Association\BelongsTo $Pelicula
 * @property \App\Model\Table\SalaTable&\Cake\ORM\Association\BelongsTo $Sala
 * @property \App\Model\Table\HorarioTable&\Cake\ORM\Association\BelongsTo $Horario
 *
 * @method \App\Model\Entity\Funcion newEmptyEntity()
 * @method \App\Model\Entity\Funcion newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Funcion[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Funcion get($primaryKey, $options = [])
 * @method \App\Model\Entity\Funcion findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Funcion patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Funcion[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Funcion|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Funcion saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Funcion[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Funcion[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Funcion[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Funcion[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class FuncionTable extends Table
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

        $this->setTable('funcion');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pelicula', [
            'foreignKey' => 'pelicula_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Sala', [
            'foreignKey' => 'sala_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Horario', [
            'foreignKey' => 'horario_id',
            'joinType' => 'INNER',
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
            ->integer('pelicula_id')
            ->requirePresence('pelicula_id', 'create')
            ->notEmptyString('pelicula_id');

        $validator
            ->integer('sala_id')
            ->requirePresence('sala_id', 'create')
            ->notEmptyString('sala_id');

        $validator
            ->integer('horario_id')
            ->requirePresence('horario_id', 'create')
            ->notEmptyString('horario_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('pelicula_id', 'Pelicula'), ['errorField' => 'pelicula_id']);
        $rules->add($rules->existsIn('sala_id', 'Sala'), ['errorField' => 'sala_id']);
        $rules->add($rules->existsIn('horario_id', 'Horario'), ['errorField' => 'horario_id']);

        return $rules;
    }
}
