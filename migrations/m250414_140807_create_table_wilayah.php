<?php

use yii\db\Migration;

class m250414_140807_create_table_wilayah extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%wilayah}}', [
            'id' => $this->primaryKey(),
            'provinsi' => $this->string(100)->notNull(),
            'kabupaten' => $this->string(100)->notNull(),
            'kecamatan' => $this->string(100)->notNull(),
            'desa' => $this->string(100)->notNull(),
            'rw' => $this->string(10),
            'rt' => $this->string(10),
        ]);
    }
    
    public function safeDown()
    {
        $this->dropTable('{{%wilayah}}');
    }
    

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250414_140807_create_table_wilayah cannot be reverted.\n";

        return false;
    }
    */
}
