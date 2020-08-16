<?php

use yii\db\Migration;

/**
 * Class m200816_163336_crear_tabla_trasfondos
 */
class m200816_163336_crear_tabla_trasfondos extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('trasfondo', [
            'id' => $this->primaryKey(),
            'nombre' => $this->text()->notNull(),
            'descripcion' => $this->tex()->notNull(),
            'nombre_rasgo' => $this->string(255)->notNull(),
            'rasgo' => $this->text()->notNull(),
            'nombre_especialidad' => $this->string(255),
            'especialidad' => $this->string(255),
            'comp_habilidades1' => $this->text()->notNull(),
            'comp_habilidades2' => $this->text()->notNull(),
            'comp_equipo1' => $this->string(255),
            'comp_equipo2' => $this->string(255)

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('trasfondo');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200816_163336_crear_tabla_trasfondos cannot be reverted.\n";

        return false;
    }
    */
}
