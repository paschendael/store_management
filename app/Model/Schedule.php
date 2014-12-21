<?php
App::uses('AppModel', 'Model');
/**
 * Schedule Model
 *
 * @property Department $Department
 * @property Employe $Employe
 * @property Manager $Manager
 */
class Schedule extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'date';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'date' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'time_start' => array(
			'time' => array(
				'rule' => array('time'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'time_end' => array(
			'time' => array(
				'rule' => array('time'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Department' => array(
			'className' => 'Department',
			'joinTable' => 'departments_schedules',
			'foreignKey' => 'schedule_id',
			'associationForeignKey' => 'department_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Employe' => array(
			'className' => 'Employe',
			'joinTable' => 'employes_schedules',
			'foreignKey' => 'schedule_id',
			'associationForeignKey' => 'employe_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		),
		'Manager' => array(
			'className' => 'Manager',
			'joinTable' => 'schedules_managers',
			'foreignKey' => 'schedule_id',
			'associationForeignKey' => 'manager_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
