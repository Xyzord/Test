<?php
//import model.php
require_once("model/model.php");

/**
*
* The Control class controls the incoming interactions from the client side
*
*/
class Control {

	/**
	* @var store a Model
	*/
	private $model;
	
	/**
	*
	* when you instantiate the Control, it sets the model attribute's value
	*/
	public function __construct() {
		
		$this->model = new Model();
	}
	
	/*
	*
	* Include the view, which will be displayed
	*/
	public function getList() {
		//set in url
		switch($_GET["menu"]) {
			case "users":
					//call the model attribute's getUserList() method
					$userList = $this->model->getUserList();
					//if the userList have value, the view_users.php will be included
					if($userList)
						include ("view/view_users.php");
					else
						echo "Users listing is failed";
				break;
			case "advertisements":
					//call the model attribute's getAdList() method
					$adList = $this->model->getAdList();
					//if the adList have value, the view_ads.php will be included
					if($adList)
						include ("view/view_ads.php");
					else
						echo "Advertisements listing is failed";
				break;
			default:
					include ("view/view_home.php");
				break;
		}//end switch
		
	}//end getList()
	
}//end Control
?>