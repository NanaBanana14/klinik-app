<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%obat}}`.
 */
class m250414_150616_create_obat_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%obat}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(255)->notNull(),
            'stok' => $this->integer()->notNull(),
            'harga' => $this->decimal(10, 2)->notNull(),
            'satuan' => $this->string(50),
            'deskripsi' => $this->text(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%obat}}');
    }
}
