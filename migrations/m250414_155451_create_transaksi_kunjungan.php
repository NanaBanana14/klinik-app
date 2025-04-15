<?php

use yii\db\Migration;

class m250414_155451_create_transaksi_kunjungan extends Migration
{

    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%transaksi_kunjungan}}', [
            'id' => $this->primaryKey(),
            'kunjungan_id' => $this->integer()->notNull(),
            'dokter_id' => $this->integer()->notNull(),
            'total' => $this->decimal(10, 2)->notNull(),
            'tanggal' => $this->dateTime()->notNull(),
            'status' => $this->string()->notNull()->defaultValue('pending'),
        ]);

        $this->addForeignKey(
            'fk-transaksi_kunjungan-kunjungan_id',
            '{{%transaksi_kunjungan}}',
            'kunjungan_id',
            '{{%kunjungan}}',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-transaksi_kunjungan-dokter_id',
            '{{%transaksi_kunjungan}}',
            'dokter_id',
            '{{%dokter}}',
            'id',
            'CASCADE'
        );
    }

    public function safeDown()
    {
        $this->dropForeignKey('fk-transaksi_kunjungan-kunjungan_id', '{{%transaksi_kunjungan}}');
        $this->dropForeignKey('fk-transaksi_kunjungan-dokter_id', '{{%transaksi_kunjungan}}');
        $this->dropTable('{{%transaksi_kunjungan}}');
    }
}
