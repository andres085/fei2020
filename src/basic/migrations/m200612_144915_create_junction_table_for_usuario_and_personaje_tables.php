<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%usuario_personaje}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%usuario}}`
 * - `{{%personaje}}`
 */
class m200612_144915_create_junction_table_for_usuario_and_personaje_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%usuario_personaje}}', [
            'usuario_id' => $this->integer(),
            'personaje_id' => $this->integer(),
            'PRIMARY KEY(usuario_id, personaje_id)',
        ]);

        // creates index for column `usuario_id`
        $this->createIndex(
            '{{%idx-usuario_personaje-usuario_id}}',
            '{{%usuario_personaje}}',
            'usuario_id'
        );

        // add foreign key for table `{{%usuario}}`
        $this->addForeignKey(
            '{{%fk-usuario_personaje-usuario_id}}',
            '{{%usuario_personaje}}',
            'usuario_id',
            '{{%usuario}}',
            'id',
            'CASCADE'
        );

        // creates index for column `personaje_id`
        $this->createIndex(
            '{{%idx-usuario_personaje-personaje_id}}',
            '{{%usuario_personaje}}',
            'personaje_id'
        );

        // add foreign key for table `{{%personaje}}`
        $this->addForeignKey(
            '{{%fk-usuario_personaje-personaje_id}}',
            '{{%usuario_personaje}}',
            'personaje_id',
            '{{%personaje}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%usuario}}`
        $this->dropForeignKey(
            '{{%fk-usuario_personaje-usuario_id}}',
            '{{%usuario_personaje}}'
        );

        // drops index for column `usuario_id`
        $this->dropIndex(
            '{{%idx-usuario_personaje-usuario_id}}',
            '{{%usuario_personaje}}'
        );

        // drops foreign key for table `{{%personaje}}`
        $this->dropForeignKey(
            '{{%fk-usuario_personaje-personaje_id}}',
            '{{%usuario_personaje}}'
        );

        // drops index for column `personaje_id`
        $this->dropIndex(
            '{{%idx-usuario_personaje-personaje_id}}',
            '{{%usuario_personaje}}'
        );

        $this->dropTable('{{%usuario_personaje}}');
    }
}
