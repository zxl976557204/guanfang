<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property int $id
 * @property int $category_id
 * @property int $parent_id
 * @property string $image
 * @property int $updated_at
 * @property int $created_at
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'image'], 'required'],
            [['id', 'category_id', 'parent_id', 'updated_at', 'created_at'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'parent_id' => 'Parent ID',
            'image' => 'Image',
            'updated_at' => 'Updated At',
            'created_at' => 'Created At',
        ];
    }
}
