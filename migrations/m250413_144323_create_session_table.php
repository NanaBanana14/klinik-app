<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%session}}`.
 */
class m250413_144323_create_session_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%session}}', [
            'id' => $this->string(255)->notNull()->primaryKey(),
            'expire' => $this->integer()->notNull(),
            'data' => $this->binary()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%session}}');
    }
}
