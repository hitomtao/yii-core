<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace yii\tests\data\validators\models;

use yii\tests\data\ar\ActiveRecord;

/**
 * @property int id
 * @property string a_field
 * @property int ref
 */
class ValidatorTestRefModel extends ActiveRecord
{
    public $test_val = 2;
    public $test_val_fail = 99;

    public static function tableName()
    {
        return 'validator_ref';
    }

    public function getMain()
    {
        return $this->hasOne(ValidatorTestMainModel::class, ['id' => 'ref']);
    }
}
