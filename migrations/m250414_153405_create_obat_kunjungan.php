<?php

use yii\db\Migration;

class m250414_153405_create_obat_kunjungan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%kunjungan}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'dokter_id' => $this->integer()->notNull(),
            'wilayah_id' => $this->integer()->notNull(),
            'jenis_kunjungan' => $this->string(255)->notNull(),
            'tanggal_kunjungan' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->addForeignKey(
            'fk-kunjungan-user_id',
            '{{%kunjungan}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-kunjungan-dokter_id',
            '{{%kunjungan}}',
            'dokter_id',
            '{{%dokter}}',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-kunjungan-wilayah_id',
            '{{%kunjungan}}',
            'wilayah_id',
            '{{%wilayah}}',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-kunjungan-user_id', '{{%kunjungan}}');
        $this->dropForeignKey('fk-kunjungan-dokter_id', '{{%kunjungan}}');
        $this->dropForeignKey('fk-kunjungan-wilayah_id', '{{%kunjungan}}');
        $this->dropTable('{{%kunjungan}}');
    }
}
