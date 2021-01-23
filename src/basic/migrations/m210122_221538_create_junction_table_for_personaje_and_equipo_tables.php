<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%personaje_equipo}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%personaje}}`
 * - `{{%equipo}}`
 */
class m210122_221538_create_junction_table_for_personaje_and_equipo_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%personaje_equipo}}', [
            'personaje_id' => $this->integer(),
            'equipo_id' => $this->integer(),
            'PRIMARY KEY(personaje_id, equipo_id)',
        ]);

        // creates index for column `personaje_id`
        $this->createIndex(
            '{{%idx-personaje_equipo-personaje_id}}',
            '{{%personaje_equipo}}',
            'personaje_id'
        );

        // add foreign key for table `{{%personaje}}`
        $this->addForeignKey(
            '{{%fk-personaje_equipo-personaje_id}}',
            '{{%personaje_equipo}}',
            'personaje_id',
            '{{%personaje}}',
            'id',
            'CASCADE'
        );

        // creates index for column `equipo_id`
        $this->createIndex(
            '{{%idx-personaje_equipo-equipo_id}}',
            '{{%personaje_equipo}}',
            'equipo_id'
        );

        // add foreign key for table `{{%equipo}}`
        $this->addForeignKey(
            '{{%fk-personaje_equipo-equipo_id}}',
            '{{%personaje_equipo}}',
            'equipo_id',
            '{{%equipo}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%personaje}}`
        $this->dropForeignKey(
            '{{%fk-personaje_equipo-personaje_id}}',
            '{{%personaje_equipo}}'
        );

        // drops index for column `personaje_id`
        $this->dropIndex(
            '{{%idx-personaje_equipo-personaje_id}}',
            '{{%personaje_equipo}}'
        );

        // drops foreign key for table `{{%equipo}}`
        $this->dropForeignKey(
            '{{%fk-personaje_equipo-equipo_id}}',
            '{{%personaje_equipo}}'
        );

        // drops index for column `equipo_id`
        $this->dropIndex(
            '{{%idx-personaje_equipo-equipo_id}}',
            '{{%personaje_equipo}}'
        );

        $this->dropTable('{{%personaje_equipo}}');
    }
}
