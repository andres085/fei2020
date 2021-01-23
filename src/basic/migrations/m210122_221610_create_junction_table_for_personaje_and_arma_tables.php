<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%personaje_arma}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%personaje}}`
 * - `{{%arma}}`
 */
class m210122_221610_create_junction_table_for_personaje_and_arma_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%personaje_arma}}', [
            'personaje_id' => $this->integer(),
            'arma_id' => $this->integer(),
            'PRIMARY KEY(personaje_id, arma_id)',
        ]);

        // creates index for column `personaje_id`
        $this->createIndex(
            '{{%idx-personaje_arma-personaje_id}}',
            '{{%personaje_arma}}',
            'personaje_id'
        );

        // add foreign key for table `{{%personaje}}`
        $this->addForeignKey(
            '{{%fk-personaje_arma-personaje_id}}',
            '{{%personaje_arma}}',
            'personaje_id',
            '{{%personaje}}',
            'id',
            'CASCADE'
        );

        // creates index for column `arma_id`
        $this->createIndex(
            '{{%idx-personaje_arma-arma_id}}',
            '{{%personaje_arma}}',
            'arma_id'
        );

        // add foreign key for table `{{%arma}}`
        $this->addForeignKey(
            '{{%fk-personaje_arma-arma_id}}',
            '{{%personaje_arma}}',
            'arma_id',
            '{{%arma}}',
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
            '{{%fk-personaje_arma-personaje_id}}',
            '{{%personaje_arma}}'
        );

        // drops index for column `personaje_id`
        $this->dropIndex(
            '{{%idx-personaje_arma-personaje_id}}',
            '{{%personaje_arma}}'
        );

        // drops foreign key for table `{{%arma}}`
        $this->dropForeignKey(
            '{{%fk-personaje_arma-arma_id}}',
            '{{%personaje_arma}}'
        );

        // drops index for column `arma_id`
        $this->dropIndex(
            '{{%idx-personaje_arma-arma_id}}',
            '{{%personaje_arma}}'
        );

        $this->dropTable('{{%personaje_arma}}');
    }
}
