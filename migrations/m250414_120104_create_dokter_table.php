<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%dokter}}`.
 */
class m250414_120104_create_dokter_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%dokter}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'nama' => $this->string()->notNull(),
            'spesialis' => $this->string()->null(),
            'no_hp' => $this->string(20)->null(),
            'alamat' => $this->text()->null(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->addForeignKey(
            'fk-dokter-user_id',
            '{{%dokter}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        $this->execute("
            CREATE OR REPLACE FUNCTION update_updated_at_column()
            RETURNS TRIGGER AS $$
            BEGIN
                NEW.updated_at = NOW();
                RETURN NEW;
            END;
            $$ LANGUAGE plpgsql;
        ");

        $this->execute("
            CREATE TRIGGER trigger_dokter_updated_at
            BEFORE UPDATE ON {{%dokter}}
            FOR EACH ROW
            EXECUTE FUNCTION update_updated_at_column();
        ");
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->execute("DROP TRIGGER IF EXISTS trigger_dokter_updated_at ON {{%dokter}}");
        $this->execute("DROP FUNCTION IF EXISTS update_updated_at_column");
        $this->dropForeignKey('fk-dokter-user_id', '{{%dokter}}');
        $this->dropTable('{{%dokter}}');
    }
}
