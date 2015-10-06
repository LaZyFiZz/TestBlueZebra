<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testUpdateIsTrue()
	{
		$response = $this->call('PUT', 'home/15', array('_method' => 'PUT', '_token' => 'Aa2L4q3iY18w8Lcaj0nxL5rmIu6Vj3O87mkvlSIf', 'firstname' => 'Anjali',
		 'lastname' => 'Jast', 'email' => 'brigitte87@frami.info', 'birthday' => '1999-09-01'));

		$this->assertRedirectedTo('home');
	}

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testUpdateIsFalse()
	{
		$response = $this->call('PUT', 'home/15', array('_method' => 'PUT', '_token' => 'Aa2L4q3iY18w8Lcaj0nxL5rmIu6Vj3O87mkvlSIf', 'firstname' => 'Anjali',
		 'lastname' => 'Jast', 'email' => 'brigitte87@frami.info', 'birthday' => '1999-09-011'));

		$this->assertRedirectedTo('home/15/edit');
	}

}
