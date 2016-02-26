<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "publication".
 *
 * @property integer $id
 * @property integer $category_id
 * @property integer $user_id
 * @property string $tittle
 * @property string $content
 * @property string $date
 * @property integer $total_coment
 * @property integer $total_visit
 * @property integer $total_like
 * @property integer $total_dislike
 * @property integer $state
 * @property integer $status
 *
 * @property Comment[] $comments
 * @property Likes[] $likes
 * @property Category $category
 * @property User $user
 */
class Publication extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'publication';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'user_id'], 'required'],
            [['category_id', 'user_id', 'total_coment', 'total_visit', 'total_like', 'total_dislike', 'state', 'status'], 'integer'],
            [['date'], 'safe'],
            [['tittle'], 'string', 'max' => 45],
            [['content'], 'string', 'max' => 5000],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['category_id' => 'id']],
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
            'category_id' => Yii::t('app', 'Category ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'tittle' => Yii::t('app', 'Tittle'),
            'content' => Yii::t('app', 'Content'),
            'date' => Yii::t('app', 'Date'),
            'total_coment' => Yii::t('app', 'Total Coment'),
            'total_visit' => Yii::t('app', 'Total Visit'),
            'total_like' => Yii::t('app', 'Total Like'),
            'total_dislike' => Yii::t('app', 'Total Dislike'),
            'state' => Yii::t('app', 'State'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comment::className(), ['publication_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLikes()
    {
        return $this->hasMany(Likes::className(), ['publication_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
