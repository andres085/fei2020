<?php

use yii\db\Migration;

/**
 * Class m200612_144915_crear_diario_table
 */
class m200612_144915_crear_diario_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('diario', [
            'id' => $this->primaryKey(),
            'id_personaje' => $this->integer()->notNull(),
            'fecha_hora' => $this->dateTime()->Null(),
            'info' => $this->text()->Null(),
        ]);

        //crea el index para la columna id_personaje
        $this->createIndex(
            'idx-diario-id_personaje',
            'diario',
            'id_personaje'
        );

        //agrega la clave foranea id_personaje que referencia a la tabla personaje
        $this->addForeignKey(
            'fk-diario-id_personaje',
            'diario',
            'id_personaje',
            'personaje',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('diario');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200612_144915_crear_diario_table cannot be reverted.\n";

        return false;
    }
    */
}
