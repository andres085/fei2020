<?php

use yii\db\Migration;

/**
 * Class m200811_165126_crear_tabla_objetos
 */
class m200811_165126_crear_tabla_objetos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('objeto', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(255)->notNull(),
            'daño' => $this->string(6)->notNull(),
            'tipo_daño' =>$this->string(50)->notNull(),
            'tipo_obj' => $this->string(50)->notNull(),
            'categoria' => $this->string(50)->notNull(),
            'propiedades' => $this->string(255)->notNull(),
            'valor' => $this->string(10)->notNull(),
            'peso' => $this->string(10)->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('objeto');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200811_165126_crear_tabla_objetos cannot be reverted.\n";

        return false;
    }
    */
}
