<?php 

/**
 * Home Page Controller
 * @category  Controller
 */
class HomeController extends SecureController{
	/**
     * Index Action
     * @return View
     */
	function index(){
		
		$rec_id =   USER_ID; //get current user id from session 
		$this->render_view("home/index.php" , null , "main_layout.php");

	}
}
