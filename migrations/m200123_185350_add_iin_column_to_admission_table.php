<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%admission}}`.
 */
class m200123_185350_add_iin_column_to_admission_table extends Migration
{
    public $tableName = '{{%admission}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn($this->tableName, 'iin', $this->string()->after('full_name'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn($this->tableName, 'iin');
    }
}
