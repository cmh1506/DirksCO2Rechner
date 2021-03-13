<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recyclingmethode Model
 *
 * @property \App\Model\Table\MaterialverwendungTable&\Cake\ORM\Association\HasMany $Materialverwendung
 *
 * @method \App\Model\Entity\Recyclingmethode get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recyclingmethode newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Recyclingmethode[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recyclingmethode|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recyclingmethode saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recyclingmethode patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recyclingmethode[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recyclingmethode findOrCreate($search, callable $callback = null, $options = [])
 */
class RecyclingmethodeTable extends Table
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

        $this->setTable('recyclingmethode');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Materialverwendung', [
            'foreignKey' => 'recyclingmethode_id',
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
            ->scalar('kennung')
            ->maxLength('kennung', 15)
            ->allowEmptyString('kennung');

        $validator
            ->date('gueltigAb')
            ->allowEmptyDate('gueltigAb');

        $validator
            ->date('gueltigBis')
            ->allowEmptyDate('gueltigBis');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmptyString('name');

        return $validator;
    }
}
