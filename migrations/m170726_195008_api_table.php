<?php

use yii\db\Migration;

class m170726_195008_api_table extends Migration
{
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('{{%api}}', [
            'id'         => $this->primaryKey(),
            'provider'   => $this->string()->notNull(),
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%api}}');
    }

}
