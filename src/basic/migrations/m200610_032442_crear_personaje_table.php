<?php

use yii\db\Migration;

/**
 * Class m200610_031739_crear_personaje_table
 */
class m200610_032442_crear_personaje_table extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {
        $this->createTable('personaje', [
            'id' => $this->primaryKey(),
            'nombre' => $this->text()->notNull(),
            'nivel' => $this->string()->notNull(),
            'raza' => $this->text()->notNull(),
            'clase' => $this->text()->notNull(),
            'fuerza' => $this->integer()->notNull(),
            'destreza' => $this->integer()->notNull(),
            'constitucion' => $this->integer()->notNull(),
            'inteligencia' => $this->integer()->notNull(),
            'sabiduria' => $this->integer()->notNull(),
            'carisma' => $this->integer()->notNull(),
            'id_trasfondo' => $this->integer()->notNull(),
            'personalidad' => $this->text(),
            'ideal' => $this->text(),
            'vinculo' => $this->text(),
            'defecto' => $this->text(),            
            'dote' => $this->text()->Null(),
            'id_campania'=>$this->integer(),
        ]);

        $this->createIndex(
            'idx-personaje-id_trasfondo',
            'personaje',
            'id_trasfondo'
        );

        $this->createIndex(
            'idx-personaje-id_campania',
            'personaje',
            'id_campania'
        );

        $this->addForeignKey(
            'fk-personaje-id_trasfondo',
            'personaje',
            'id_trasfondo',
            'trasfondo',
            'id',
            'CASCADE'
        );

        $this->addForeignKey(
            'fk-personaje-id_campania',
            'personaje',
            'id_campania',
            'campania',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        $this->dropForeignKey(
            'fk-personaje-id_trasfondo',
            'personaje'
        );

        $this->dropIndex(
            'idx-personaje-id_trasfondo',
            'personaje'
        );
        
        $this->dropTable('personaje');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200610_031739_crear_personaje_table cannot be reverted.\n";

        return false;
    }
    */
}
