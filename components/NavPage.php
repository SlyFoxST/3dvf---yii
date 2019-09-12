<?php
namespace app\components;
use yii\base\widget;
use app\models\Page;

class NavPage extends Widget{
	public $tpl;
	public $data;
	public $tree;
	public $menuHtml;
	public function init(){
		parent::init();
		if($this -> tpl === null){
			$this -> tpl = 'menu';
		}
		$this -> tpl .= '.php';
	}
	public function run(){
		$this -> data = Page::find()->indexBy('page_id')->asArray()->all();
		$this->tree = $this->getTree();
		$this->menuHtml = $this->getMenuHtml($this->tree);
		debug($this -> tree);
		return $this->menuHtml;
	}

	protected function getTree(){
		$tree = [];
		foreach ($this->data as $id => &$node) {
			if(!$node['parent_id'])
				$tree['page_id'] = &$node;
			else 
				$this ->data[$node['parent_id']]['childs'][$node['page_id']] = &$node;
		}
		return $tree;
	}
	protected function getMenuHtml($tree){
		$arr = '';
		foreach ($tree as $page){
			$str .= $this->catToTemplate($page);
		}
		return $str;
	}
	protected function catToTemplate($page){
ob_start();
include __DIR__.'/menu_tpl/'.$this->tpl;
return ob_get_clean();
	}
}

?>