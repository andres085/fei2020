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
        $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci';
        $this->createTable('equipo', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string()->notNull(),
            'descripcion' => $this->string()->notNull(),
            'categoria' => $this->string()->notNull(),
            'precio' => $this->string()->notNull(),
            'peso' => $this->string()->notNull(),
        ], $tableOptions);

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
