<?php

use yii\db\Migration;

class m250414_143653_create_table_pegawai extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%pegawai}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull(),
            'nama' => $this->string(255)->notNull(),
            'jabatan' => $this->string(255)->notNull(),
            'alamat' => $this->text(),
            'created_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
            'updated_at' => $this->timestamp()->defaultExpression('CURRENT_TIMESTAMP'),
        ]);

        $this->addForeignKey(
            'fk-pegawai-user_id',
            '{{%pegawai}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE',
            'CASCADE'
        );

        $this->execute("
            CREATE OR REPLACE FUNCTION update_timestamp()
            RETURNS TRIGGER AS \$\$
            BEGIN
                NEW.updated_at = CURRENT_TIMESTAMP;
                RETURN NEW;
            END;
            \$\$ LANGUAGE plpgsql;
        ");

        $this->execute("
            CREATE TRIGGER update_pegawai_updated_at
            BEFORE UPDATE ON {{%pegawai}}
            FOR EACH ROW
            EXECUTE FUNCTION update_timestamp();
        ");
    }

    public function safeDown()
    {
        $this->execute("DROP TRIGGER IF EXISTS update_pegawai_updated_at ON {{%pegawai}};");
        $this->execute("DROP FUNCTION IF EXISTS update_timestamp;");

        $this->dropForeignKey('fk-pegawai-user_id', '{{%pegawai}}');
        $this->dropTable('{{%pegawai}}');
    }
}
