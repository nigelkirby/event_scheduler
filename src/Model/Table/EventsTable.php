<?php
namespace App\Model\Table;

use App\Model\Entity\Event;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Events Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Contacts
 * @property \Cake\ORM\Association\BelongsTo $Rooms
 */
class EventsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('events');
        $this->displayField('title');
        $this->primaryKey('id');
        $this->addBehavior('Timestamp');
        $this->belongsTo('Contacts', [
            'foreignKey' => 'contact_id'
        ]);
        $this->belongsTo('Rooms', [
            'foreignKey' => 'room_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');
            
        $validator
            ->requirePresence('title', 'create')
            ->notEmpty('title');
            
        $validator
            ->allowEmpty('description');
            
        $validator
            ->add('date', 'valid', ['rule' => 'date'])
            ->requirePresence('date', 'create')
            ->notEmpty('date');
            
        $validator
            ->add('start_time', 'valid', ['rule' => 'time'])
            ->requirePresence('start_time', 'create')
            ->notEmpty('start_time');
            
        $validator
            ->add('end_time', 'valid', ['rule' => 'time'])
            ->requirePresence('end_time', 'create')
            ->notEmpty('end_time');

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
        $rules->add($rules->existsIn(['contact_id'], 'Contacts'));
        $rules->add($rules->existsIn(['room_id'], 'Rooms'));
        return $rules;
    }

    public function findCalendar(Query $query, array $options)
    {
        return $query->order('date')->contain(['Rooms','Contacts']);
    }
}
