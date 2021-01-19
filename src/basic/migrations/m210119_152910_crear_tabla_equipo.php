<?php

use yii\db\Migration;

/**
 * Class m210119_152910_crear_tabla_equipo
 */
class m210119_152910_crear_tabla_equipo extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('equipo', [
            'id_equipo' => $this->primaryKey(),
            'nombre' => $this->string()->notNull(),
            'descripcion' => $this->string()->notNull(),
            'categoria' => $this->string()->notNull(),
            'precio' => $this->string()->notNull(),
            'peso' => $this->string()->notNull(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210119_152910_crear_tabla_equipo cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210119_152910_crear_tabla_equipo cannot be reverted.\n";

        return false;
    }
    */
}
