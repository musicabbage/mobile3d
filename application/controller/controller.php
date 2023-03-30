<?php
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // contructor of the class
	{
		// Create new objects for Load and Model
		$this->load = new Load(); 
		$this->model = new Model();
		// Determine what page you are on
		$this->$pageURI();
	}
    // home page function
	function home()
	{
		// Get data from the defined model method - model3D_info()
		$data = $this->model->model3D_info();
		// Tell the loader what view to load and which dat to use
		$this->load->view('view3DAppTest_2', $data);
	}

	// other page functions
	function apiCreateTable()
	{
		return;
	  	// echo "Create table function";
		$data = $this->model->dbCreateTable();
		$this->load->view('viewMessage', $data);
	}
	function apiInsertData()
	{
		$data = $this->model->dbInsertData();
	   	$this->load->view('viewMessage', $data);
	}  
	function apiGetData()
	{
		$data = $this->model->dbGetData();
		$this->load->view('view3DAppData', $data);
	}  
	
	// db functions
	function dbCreateTable()
	{
		echo "Create Table Function";
	}

	function dbInsertData()
	{
		echo "Data Insert Function";
	}

	function dbGetData()
	{
		echo "Data Read Function";
	}
}
?>    