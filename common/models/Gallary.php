<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallary".
 *
 * @property integer $id
 * @property string $image
 * @property string $caption
 */
class Gallary extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallary';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['image', 'caption'], 'required'],
            [['image', 'caption'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'image' => 'Image',
            'caption' => 'Caption',
        ];
    }
}
