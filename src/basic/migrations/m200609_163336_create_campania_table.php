<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%campania}}`.
 */
class m200609_163336_create_campania_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%campania}}', [
            'id' => $this->primaryKey(),
            'id_usuario' => $this->integer()->notNull(),
            'nombre' => $this->text(),
            'detalles' => $this->text(),
        ]);

        //crea el index para la columna id_personaje
        $this->createIndex(
            'idx-campania-id_usuario',
            'campania',
            'id_usuario'
        );

        //agrega la clave foranea id_personaje que referencia a la tabla personaje
        $this->addForeignKey(
            'fk-campania-id_usuario',
            'campania',
            'id_usuario',
            'usuario',
            'id',
            'SET NULL'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('campania');
        return true;
    }
}
