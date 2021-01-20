<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%diariocampania}}`.
 */
class m210119_231851_create_diariocampania_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
       $this->createTable('diariocampania', [
            'id' => $this->primaryKey(),
            'id_campania' => $this->integer(),
            'fecha_hora' => $this->dateTime()->Null(),
            'info' => $this->text()->Null(),
        ]);

        //crea el index para la columna id_personaje
        $this->createIndex(
            'idx-diariocampania-id_campania',
            'diariocampania',
            'id_campania'
        );

        //agrega la clave foranea id_personaje que referencia a la tabla personaje
        $this->addForeignKey(
            'fk-diariocampania-id_campania',
            'diariocampania',
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
        $this->dropTable('{{%diariocampania}}');
    }
}
