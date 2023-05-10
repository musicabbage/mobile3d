<?php
require './application/model/homeModel.php';
require './application/model/modelsModel.php';
// Create the controller class for the MVC design pattern
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;
	
	// Create functions for the controller class
	function __construct($pageURI = null) // constructor of the class
	{
		$this->load = new Load(); 
		// $this->model = new Model();
		// determine what page you are on
		$parameters = explode("/", $pageURI);
		$methodName = array_shift($parameters);
		if (method_exists($this, $methodName))
		{
			call_user_func_array([$this, $methodName], array($parameters));
		}
	}

    function main()
	{
		$homeModel = new HomeModel();
        $data = $homeModel->dbGetData();
        $this->load->view('main', $data);
	}

    function loadModelsInfo()
    {
        $model = new ModelsModel();
        $data = $model->dbGetModels();
        echo json_encode($data);
    }

	function loadModelInfo($modelName)
    {
        $model = new ModelsModel();
        $data = $model->dbGetModel($modelName);
        echo json_encode($data);
    }

    function loadModelsControls()
    {
        $model = new ModelsModel();
        $data = $model->dbGetControls();
        echo json_encode($data);
    }

	function loadLightOptions()
	{
		echo json_encode([
		'AmbientLight' => 'Ambient Light', 
		'DirectionalLight' => 'Directional Light', 
		'HemisphereLight' => 'Hemisphere Light', 
		'PointLight' => 'Point Light', 
		'SpotLight' => 'Spot Light']);
	}

    function loadModels()
    {
        $model = new ModelsModel();
        $data = $model->dbGetModels();
        $this->load->view('loadModels', $data);
    }

	function apiCreateTable()
	{
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
