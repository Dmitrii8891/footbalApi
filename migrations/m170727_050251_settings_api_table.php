<?php

use yii\db\Migration;

class m170727_050251_settings_api_table extends Migration
{
    public function up()
    {
        $this->createTable('{{%api_settings}}', [
            'id'         => $this->primaryKey(),
            'api_id'    => $this->integer()->null(),
            'data_keys'   => $this->string()->notNull(),
            'interval' => $this->integer()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%api_settings}}');
    }
}
