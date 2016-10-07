<?php

namespace frontend\modules\admin\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property integer $id
 * @property string $autor
 * @property string $data_add
 * @property string $data_update
 * @property string $title
 * @property string $opus
 * @property string $img
 * @property string $full_text
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data_add', 'data_update'], 'safe'],
            [['title', 'opus', 'full_text'], 'string'],
            [['autor', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'autor' => 'Autor',
            'data_add' => 'Data Add',
            'data_update' => 'Data Update',
            'title' => 'Title',
            'opus' => 'Opus',
            'img' => 'Img',
            'full_text' => 'Full Text',
        ];
    }
}
