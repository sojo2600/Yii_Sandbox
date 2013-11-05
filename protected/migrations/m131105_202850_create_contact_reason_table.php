<?php

class m131105_202850_create_contact_reason_table extends CDbMigration
{
	public function up()
	{
		$this->createTable('tbl_contact_reason', array(
			'id' => 'pk',
			'description' => 'string NOT NULL',
		), 'ENGINE=InnoDB');
	}

	public function down()
	{
		$this->dropTable('tbl_contact_reason');
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}