<?php

use yii\db\Migration;

/**
 * Class m210505_142253_my_expense_migrations
 */
class m210505_142253_my_expense_migrations extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
      return $this->createTable('{{%expense}}', [
        'exp_no' => $this->primaryKey(),
        'exp_date' => $this->date(),
        'amount' => $this->double(),
        'reason' =>$this->text(),

         ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
      $this->dropTable('{{expense}}');
        echo "m210505_142253_my_expense_migrations cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m210505_142253_my_expense_migrations cannot be reverted.\n";

        return false;
    }
    */
}
