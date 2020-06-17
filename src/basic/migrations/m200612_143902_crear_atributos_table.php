<?php

use yii\db\Migration;

/**
 * Class m200612_143902_crear_atributos_table
 */
class m200612_143902_crear_atributos_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('atributo', [
            'id' => $this->primaryKey(),
            'nombre' => $this->text()->notNull(),
            'valor' => $this->integer()->Null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('atributo');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200612_143902_crear_atributos_table cannot be reverted.\n";

        return false;
    }
    */
}
