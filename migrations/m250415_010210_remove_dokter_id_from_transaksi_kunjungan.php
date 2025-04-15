<?php

use yii\db\Migration;

class m250415_010210_remove_dokter_id_from_transaksi_kunjungan extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        if ($this->db->schema->getTableSchema('{{%transaksi_kunjungan}}')->getColumn('dokter_id') !== null) {
            $this->dropColumn('{{%transaksi_kunjungan}}', 'dokter_id');
        }

        $foreignKeyExists = false;
        try {
            $this->dropForeignKey('fk-transaksi_kunjungan-dokter_id', '{{%transaksi_kunjungan}}');
            $foreignKeyExists = true;
        } catch (\yii\db\Exception $e) {
        }

        if (!$foreignKeyExists) {
            echo "Foreign key 'fk-transaksi_kunjungan-dokter_id' tidak ditemukan.\n";
        }
    }

    public function safeDown()
    {
        $this->addColumn('{{%transaksi_kunjungan}}', 'dokter_id', $this->integer()->notNull());
        $this->addForeignKey(
            'fk-transaksi_kunjungan-dokter_id',
            '{{%transaksi_kunjungan}}',
            'dokter_id',
            '{{%dokter}}',
            'id',
            'CASCADE'
        );
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m250415_010210_remove_dokter_id_from_transaksi_kunjungan cannot be reverted.\n";

        return false;
    }
    */
}
