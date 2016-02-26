<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "comment".
 *
 * @property integer $id
 * @property integer $publication_id
 * @property integer $user_id
 * @property string $comment
 * @property string $date
 * @property integer $status
 *
 * @property Publication $publication
 * @property User $user
 */
class Comment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['publication_id', 'user_id', 'comment'], 'required'],
            [['publication_id', 'user_id', 'status'], 'integer'],
            [['date'], 'safe'],
            [['comment'], 'string', 'max' => 200],
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
            'publication_id' => Yii::t('app', 'Publication ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'comment' => Yii::t('app', 'Comment'),
            'date' => Yii::t('app', 'Date'),
            'status' => Yii::t('app', 'Status'),
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
