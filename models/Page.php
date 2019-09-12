<?php
namespace app\models;
use yii;
use Yii\db\ActiveRecord;
class Page extends yii\db\ActiveRecord {
public static function tableName(){
	return 'page';
}
}

?>
