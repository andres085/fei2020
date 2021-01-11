<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%personaje_objeto}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%personaje}}`
 * - `{{%objeto}}`
 */
class m210105_220915_create_junction_table_for_personaje_and_objeto_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%personaje_objeto}}', [
            'personaje_id' => $this->integer(),
            'objeto_id' => $this->integer(),
            'PRIMARY KEY(personaje_id, objeto_id)',
        ]);

        // creates index for column `personaje_id`
        $this->createIndex(
            '{{%idx-personaje_objeto-personaje_id}}',
            '{{%personaje_objeto}}',
            'personaje_id'
        );

        // add foreign key for table `{{%personaje}}`
        $this->addForeignKey(
            '{{%fk-personaje_objeto-personaje_id}}',
            '{{%personaje_objeto}}',
            'personaje_id',
            '{{%personaje}}',
            'id',
            'CASCADE'
        );

        // creates index for column `objeto_id`
        $this->createIndex(
            '{{%idx-personaje_objeto-objeto_id}}',
            '{{%personaje_objeto}}',
            'objeto_id'
        );

        // add foreign key for table `{{%objeto}}`
        $this->addForeignKey(
            '{{%fk-personaje_objeto-objeto_id}}',
            '{{%personaje_objeto}}',
            'objeto_id',
            '{{%objeto}}',
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
            '{{%fk-personaje_objeto-personaje_id}}',
            '{{%personaje_objeto}}'
        );

        // drops index for column `personaje_id`
        $this->dropIndex(
            '{{%idx-personaje_objeto-personaje_id}}',
            '{{%personaje_objeto}}'
        );

        // drops foreign key for table `{{%objeto}}`
        $this->dropForeignKey(
            '{{%fk-personaje_objeto-objeto_id}}',
            '{{%personaje_objeto}}'
        );

        // drops index for column `objeto_id`
        $this->dropIndex(
            '{{%idx-personaje_objeto-objeto_id}}',
            '{{%personaje_objeto}}'
        );

        $this->dropTable('{{%personaje_objeto}}');
    }
}
