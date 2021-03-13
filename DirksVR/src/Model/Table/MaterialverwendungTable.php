<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Materialverwendung Model
 *
 * @property \App\Model\Table\VerpackungTable&\Cake\ORM\Association\BelongsTo $Verpackung
 * @property \App\Model\Table\MaterialTable&\Cake\ORM\Association\BelongsTo $Material
 * @property \App\Model\Table\RecyclingmethodeTable&\Cake\ORM\Association\BelongsTo $Recyclingmethode
 * @property \App\Model\Table\VerarbeitungTable&\Cake\ORM\Association\BelongsTo $Verarbeitung
 *
 * @method \App\Model\Entity\Materialverwendung get($primaryKey, $options = [])
 * @method \App\Model\Entity\Materialverwendung newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Materialverwendung[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Materialverwendung|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Materialverwendung saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Materialverwendung patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Materialverwendung[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Materialverwendung findOrCreate($search, callable $callback = null, $options = [])
 */
class MaterialverwendungTable extends Table
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

        $this->setTable('materialverwendung');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Verpackung', [
            'foreignKey' => 'verpackung_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Material', [
            'foreignKey' => 'material_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Recyclingmethode', [
            'foreignKey' => 'recyclingmethode_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Verarbeitung', [
            'foreignKey' => 'verarbeitung_id',
            'joinType' => 'INNER',
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
            ->numeric('menge')
            ->requirePresence('menge', 'create')
            ->notEmptyString('menge');

        $validator
            ->numeric('flaeche')
            ->requirePresence('flaeche', 'create')
            ->notEmptyString('flaeche');

        $validator
            ->numeric('recyclingquote')
            ->requirePresence('recyclingquote', 'create')
            ->notEmptyString('recyclingquote');

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
        $rules->add($rules->existsIn(['verpackung_id'], 'Verpackung'));
        $rules->add($rules->existsIn(['material_id'], 'Material'));
        $rules->add($rules->existsIn(['recyclingmethode_id'], 'Recyclingmethode'));
        $rules->add($rules->existsIn(['verarbeitung_id'], 'Verarbeitung'));

        return $rules;
    }
}
