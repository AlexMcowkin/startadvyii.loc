<?php

use yii\db\Migration;

class m170621_090457_create_table_language extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%language}}', [
            'id' => $this->integer(10)->unsigned()->notNull()->append('AUTO_INCREMENT PRIMARY KEY'),
            'name' => $this->string(15)->notNull(),
            'code' => $this->string(4)->notNull(),
        ], $tableOptions);


        $this->insert('{{%language}}', [
            'name' => 'English',
            'code' => 'en',
        ]);
        $this->insert('{{%language}}', [
            'name' => 'Russian',
            'code' => 'ru',
        ]);
        $this->insert('{{%language}}', [
            'name' => 'Romanian',
            'code' => 'ro',
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%language}}');
    }
}
