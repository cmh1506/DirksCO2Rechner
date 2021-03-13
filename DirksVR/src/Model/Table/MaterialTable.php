<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Material Model
 *
 * @property \App\Model\Table\MaterialverwendungTable&\Cake\ORM\Association\HasMany $Materialverwendung
 *
 * @method \App\Model\Entity\Material get($primaryKey, $options = [])
 * @method \App\Model\Entity\Material newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Material[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Material|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Material saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Material patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Material[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Material findOrCreate($search, callable $callback = null, $options = [])
 */
class MaterialTable extends Table
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

        $this->setTable('material');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Materialverwendung', [
            'foreignKey' => 'material_id',
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
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        $validator
            ->scalar('kennung')
            ->maxLength('kennung', 15)
            ->allowEmptyString('kennung');

        $validator
            ->date('gueltigAb')
            ->allowEmptyDate('gueltigAb');

        $validator
            ->date('gueltigBis')
            ->allowEmptyDate('gueltigBis');

        return $validator;
    }
}
