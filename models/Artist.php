<?php
namespace app\Models;
use yii;
use Yii\db\ActiveRecord;

class Artist extends ActiveRecord{
public static function tableName(){
	return 'artists';
}
public function getCategory(){
	return $this -> hasMany(Category::className(),['id' => 'category_id']);
}

}

?>