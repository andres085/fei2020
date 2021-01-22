<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%personaje_armadura}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%personaje}}`
 * - `{{%armadura}}`
 */
class m210122_221622_create_junction_table_for_personaje_and_armadura_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%personaje_armadura}}', [
            'personaje_id' => $this->integer(),
            'armadura_id' => $this->integer(),
            'PRIMARY KEY(personaje_id, armadura_id)',
        ]);

        // creates index for column `personaje_id`
        $this->createIndex(
            '{{%idx-personaje_armadura-personaje_id}}',
            '{{%personaje_armadura}}',
            'personaje_id'
        );

        // add foreign key for table `{{%personaje}}`
        $this->addForeignKey(
            '{{%fk-personaje_armadura-personaje_id}}',
            '{{%personaje_armadura}}',
            'personaje_id',
            '{{%personaje}}',
            'id',
            'CASCADE'
        );

        // creates index for column `armadura_id`
        $this->createIndex(
            '{{%idx-personaje_armadura-armadura_id}}',
            '{{%personaje_armadura}}',
            'armadura_id'
        );

        // add foreign key for table `{{%armadura}}`
        $this->addForeignKey(
            '{{%fk-personaje_armadura-armadura_id}}',
            '{{%personaje_armadura}}',
            'armadura_id',
            '{{%armadura}}',
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
            '{{%fk-personaje_armadura-personaje_id}}',
            '{{%personaje_armadura}}'
        );

        // drops index for column `personaje_id`
        $this->dropIndex(
            '{{%idx-personaje_armadura-personaje_id}}',
            '{{%personaje_armadura}}'
        );

        // drops foreign key for table `{{%armadura}}`
        $this->dropForeignKey(
            '{{%fk-personaje_armadura-armadura_id}}',
            '{{%personaje_armadura}}'
        );

        // drops index for column `armadura_id`
        $this->dropIndex(
            '{{%idx-personaje_armadura-armadura_id}}',
            '{{%personaje_armadura}}'
        );

        $this->dropTable('{{%personaje_armadura}}');
    }
}
