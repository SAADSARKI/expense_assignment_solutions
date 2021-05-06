<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "expense".
 *
 * @property int $exp_no
 * @property string|null $exp_date
 * @property float|null $amount
 * @property string|null $reason
 */
class Expense extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'expense';
    }

    /**
     * {@inheritdoc}
     */
     public function rules()
     {
         return [
             [['exp_date', 'amount', 'reason'], 'required'],
             [['exp_date'], 'safe'],
             [['amount', 'reason'], 'string', 'max' => 255],
         ];
     }

    /**
     * {@inheritdoc}

     */


    public function attributeLabels()
    {
        return [
            //'exp_no' => 'Expense Date',
            'exp_date' => 'Expense Date',
            'amount' => 'Expense Value(Amount)',
            'reason' => 'Expense Reason',
        ];
    }
}
