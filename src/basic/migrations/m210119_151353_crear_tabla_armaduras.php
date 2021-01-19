<?php

use yii\db\Migration;

/**
 * Class m210119_151353_crear_tabla_armaduras
 */
class m210119_151353_crear_tabla_armaduras extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('armadura', [
            'id_armadura' => $this->primaryKey(),
            'nombre' => $this->string()->notNull(),
            'categoria' => $this->string()->notNull(),
            'ac' => $this->integer()->notNull(),
            'bonif_des' => $this->string()->notNull(),
            'penalizacion' => $this->string(),
            'fuerza' => $this->string(),
            'precio' => $this->string()->notNull(),
            'peso' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210119_151353_crear_tabla_armaduras cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210119_151353_crear_tabla_armaduras cannot be reverted.\n";

        return false;
    }
    */
}
