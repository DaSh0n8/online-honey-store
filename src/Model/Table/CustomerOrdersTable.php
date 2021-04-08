<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CustomerOrders Model
 *
 * @method \App\Model\Entity\CustomerOrder newEmptyEntity()
 * @method \App\Model\Entity\CustomerOrder newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\CustomerOrder[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CustomerOrder get($primaryKey, $options = [])
 * @method \App\Model\Entity\CustomerOrder findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\CustomerOrder patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerOrder[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\CustomerOrder|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerOrder saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CustomerOrder[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CustomerOrder[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\CustomerOrder[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\CustomerOrder[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class CustomerOrdersTable extends Table
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

        $this->setTable('customer_orders');
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
            ->scalar('date')
            ->maxLength('date', 10)
            ->requirePresence('date', 'create')
            ->notEmptyString('date');

        return $validator;
    }
}
