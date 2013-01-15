<?

abstract class ModelChart {
	
	protected $model;
	protected $id;
	protected $title='';
	
	public function __construct($model, $id){
		$this->model = $model;
		$this->id = $id;
	}
	
	public abstract function renderContainer();
	
	public abstract function renderChart();
	
	public function setTitle($title){
		$this->title = $title;
	}
	
}
