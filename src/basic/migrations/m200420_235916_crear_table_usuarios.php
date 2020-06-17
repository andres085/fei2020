<?php

use yii\db\Migration;

/**
 * Class m200420_235916_crear_table_usuarios
 */
class m200420_235916_crear_table_usuarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('usuario', [
            'id' => $this->primaryKey(),
            'username' => $this->text()->notNull(),
            'email' => $this->text()->Null(),
            'password' => $this->string(255)->Null(),
            'authKey' => $this->string(255),
            'accessToken' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('usuario');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200420_235916_crear_table_usuarios cannot be reverted.\n";

        return false;
    }
    */
}
