<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%personaje_atributo}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%personaje}}`
 * - `{{%atributo}}`
 */
class m200612_144637_create_junction_table_for_personaje_and_atributo_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%personaje_atributo}}', [
            'personaje_id' => $this->integer(),
            'atributo_id' => $this->integer(),
            'PRIMARY KEY(personaje_id, atributo_id)',
        ]);

        // creates index for column `personaje_id`
        $this->createIndex(
            '{{%idx-personaje_atributo-personaje_id}}',
            '{{%personaje_atributo}}',
            'personaje_id'
        );

        // add foreign key for table `{{%personaje}}`
        $this->addForeignKey(
            '{{%fk-personaje_atributo-personaje_id}}',
            '{{%personaje_atributo}}',
            'personaje_id',
            '{{%personaje}}',
            'id',
            'CASCADE'
        );

        // creates index for column `atributo_id`
        $this->createIndex(
            '{{%idx-personaje_atributo-atributo_id}}',
            '{{%personaje_atributo}}',
            'atributo_id'
        );

        // add foreign key for table `{{%atributo}}`
        $this->addForeignKey(
            '{{%fk-personaje_atributo-atributo_id}}',
            '{{%personaje_atributo}}',
            'atributo_id',
            '{{%atributo}}',
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
            '{{%fk-personaje_atributo-personaje_id}}',
            '{{%personaje_atributo}}'
        );

        // drops index for column `personaje_id`
        $this->dropIndex(
            '{{%idx-personaje_atributo-personaje_id}}',
            '{{%personaje_atributo}}'
        );

        // drops foreign key for table `{{%atributo}}`
        $this->dropForeignKey(
            '{{%fk-personaje_atributo-atributo_id}}',
            '{{%personaje_atributo}}'
        );

        // drops index for column `atributo_id`
        $this->dropIndex(
            '{{%idx-personaje_atributo-atributo_id}}',
            '{{%personaje_atributo}}'
        );

        $this->dropTable('{{%personaje_atributo}}');
    }
}
