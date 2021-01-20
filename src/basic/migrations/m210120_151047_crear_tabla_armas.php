<?php

use yii\db\Migration;

/**
 * Class m210120_151047_crear_tabla_armas
 */
class m210120_151047_crear_tabla_armas extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('arma', [
            'id_arma' => $this->primaryKey(),
            'nombre' => $this->string()->notNull(),
            'categoria' => $this->string()->notNull(),
            'daño' => $this->string()->notNull(),
            'tipo_daño' => $this->string()->notNull(),
            'mod_daño_ataque' => $this->string()->notNull(),
            'alcance' => $this->string(),
            'prop1' => $this->string(),
            'prop2' => $this->string(),
            'prop3' => $this->string(),
            'prop4' => $this->string(),
            'precio' => $this->string()->notNull(),
            'peso' => $this->string()->notNull(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m210120_151047_crear_tabla_armas cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210120_151047_crear_tabla_armas cannot be reverted.\n";

        return false;
    }
    */
}
