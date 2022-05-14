<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pelicula Model
 *
 * @property \App\Model\Table\CategoriaTable&\Cake\ORM\Association\BelongsTo $Categoria
 * @property \App\Model\Table\FuncionTable&\Cake\ORM\Association\HasMany $Funcion
 *
 * @method \App\Model\Entity\Pelicula newEmptyEntity()
 * @method \App\Model\Entity\Pelicula newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Pelicula[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Pelicula get($primaryKey, $options = [])
 * @method \App\Model\Entity\Pelicula findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Pelicula patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Pelicula[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Pelicula|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pelicula saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Pelicula[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pelicula[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pelicula[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Pelicula[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PeliculaTable extends Table
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

        $this->setTable('pelicula');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Categoria', [
            'foreignKey' => 'categoria_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Funcion', [
            'foreignKey' => 'pelicula_id',
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
            ->scalar('nombre')
            ->maxLength('nombre', 50)
            ->requirePresence('nombre', 'create')
            ->notEmptyString('nombre');

        $validator
            ->scalar('descripcion')
            ->maxLength('descripcion', 255)
            ->requirePresence('descripcion', 'create')
            ->notEmptyString('descripcion');

        $validator
            ->integer('categoria_id')
            ->requirePresence('categoria_id', 'create')
            ->notEmptyString('categoria_id');

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
        $rules->add($rules->existsIn('categoria_id', 'Categoria'), ['errorField' => 'categoria_id']);

        return $rules;
    }
}
