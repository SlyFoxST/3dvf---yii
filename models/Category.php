<?php
namespace app\models;
use Yii;
use Yii\db\ActiveRecord;
 
class Category extends ActiveRecord{
	public static function tableName(){
		return 'category';
	}
	public function getArtistes(){
		return $this -> hasMany(Artist::className(),['category_id' => 'id']);
	}
}

?>