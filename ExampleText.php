<?php
class exampleTest extends CTestCase
{
	public function testExample()
	{
		$this->assertTrue(true);
		$this->assertFalse(false);
	}

	public function testLoginForm()
	{
		$oForm = new LoginForm;
		$this->assertFalse($oForm->validate());
		$oForm->username = 'admin';
		$oForm->password = 'admin';
		$this->assertTrue($oForm->validate());
	}
	public function testUserIdentity()
	{
		$oIden = new UserIdentity('', '');
		$this->assertFalse($oIden->authenticate());
		$oIden = new UserIdentity('admin', 'admin');
		$this->assertTrue($oIden->authenticate());
	}
}
