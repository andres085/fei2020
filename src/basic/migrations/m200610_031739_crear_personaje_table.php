<?php

use yii\db\Migration;

/**
 * Class m200610_031739_crear_personaje_table
 */
class m200610_031739_crear_personaje_table extends Migration
{
    /**
     * {@inheritdoc}
     */

    public function safeUp()
    {
        $this->createTable('personaje', [
            'id' => $this->primaryKey(),
            'raza' => $this->text()->notNull(),
            'clase' => $this->text()->notNull(),
            'trasfondo' => $this->text()->Null(),
            'dote' => $this->text()->Null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
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
