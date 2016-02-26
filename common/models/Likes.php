<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "likes".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $publication_id
 *
 * @property Publication $publication
 * @property User $user
 */
class Likes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'likes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'publication_id'], 'integer'],
            [['publication_id'], 'exist', 'skipOnError' => true, 'targetClass' => Publication::className(), 'targetAttribute' => ['publication_id' => 'id']],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'publication_id' => Yii::t('app', 'Publication ID'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPublication()
    {
        return $this->hasOne(Publication::className(), ['id' => 'publication_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
