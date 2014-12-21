<?php
App::uses('Employe', 'Model');

/**
 * Employe Test Case
 *
 */
class EmployeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.employe',
		'app.schedule',
		'app.department',
		'app.departments_schedule',
		'app.manager',
		'app.managers_department',
		'app.schedules_manager',
		'app.employes_schedule'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Employe = ClassRegistry::init('Employe');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Employe);

		parent::tearDown();
	}

}
