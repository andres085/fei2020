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
            'id_personaje' => $this->integer()->notNull(),
            'fuerza' => $this->integer()->notNull(),
            'destreza' => $this->integer()->notNull(),
            'constitucion' => $this->integer()->notNull(),
            'inteligencia' => $this->integer()->notNull(),
            'sabiduria' => $this->integer()->notNull(),
            'carisma' => $this->integer()->notNull(),
        ]);

        //crea el index para la columna id_personaje
        $this->createIndex(
            'idx-atributo-id_personaje',
            'atributo',
            'id_personaje'
        );

        //agrega la clave foranea id_personaje que referencia a la tabla personaje
        $this->addForeignKey(
            'fk-atributo-id_personaje',
            'atributo',
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
