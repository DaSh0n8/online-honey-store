<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Inquiries Model
 *
 * @method \App\Model\Entity\Inquiry newEmptyEntity()
 * @method \App\Model\Entity\Inquiry newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Inquiry[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Inquiry get($primaryKey, $options = [])
 * @method \App\Model\Entity\Inquiry findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Inquiry patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Inquiry[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Inquiry|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inquiry saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Inquiry[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Inquiry[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Inquiry[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Inquiry[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class InquiriesTable extends Table
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

        $this->setTable('inquiries');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 100)
            ->requirePresence('first_name', 'create')
            ->notEmptyString('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 100)
            ->requirePresence('last_name', 'create')
            ->notEmptyString('last_name');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 10)
            ->requirePresence('phone_number', 'create')
            ->notEmptyString('phone_number');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('message')
            ->maxLength('message', 256)
            ->requirePresence('message', 'create')
            ->notEmptyString('message');

        return $validator;
    }
}
