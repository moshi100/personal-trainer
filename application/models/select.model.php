<?php

include_once("library/message.class.php");
include_once("library/item.class.php");

class selectModel {
	public $model;
	
	public function get_message_by_idItem($idItem)
	{
		$this->model = new message();
		return $this->model->get_message_by_idItem($idItem);
	}
	
	public function get_item($item)
	{
		$this->model = new item();
		if ($item != "all"){
			return $this->model->get_item_by_name($item);
		}
		return $this->model->get_all_items();
	}

}
