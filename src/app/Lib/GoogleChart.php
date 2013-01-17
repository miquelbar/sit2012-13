<?

/**
 * Clase para dibujar gráficos de Google Chart
 * 
 * @todo añadir más tipos de parámetros
 * @todo controlar tipos de charts
 * @todo controlar opciones válidas
 */
class GoogleChart {
	
	protected $id;
	protected $url;
	protected $columns = array();
	protected $rows = array();
	protected $options = array();
	protected $type = 'PieChart';
	
	const TYPE_NUMBER = 'number';
	const TYPE_STRING = 'string';
	
	public function __construct($id){
		$this->id = $id;
	}
	
	public function render() {
		$charCode = '/** GOOGLE CHART PHP SIT -- CÓDIGO JS AUTOGENERADO **/';
		
		$callback = ' google.setOnLoadCallback('.$this->varName('drawChart').');';
		$charCode = $this->appendLine($charCode,$callback);
		
		$function = 'function '.$this->varName('drawChart').'(){ ';
		$charCode = $this->appendLine($charCode,$function);
		$dataDcl = 'var '.$this->varName('data').' = new google.visualization.DataTable();';
		
		$charCode = $this->appendLine($charCode,$dataDcl);
		
		foreach ($this->columns as $key => $column) {
			$charCode = $this->appendLine($charCode, $this->getCodeForColumn($column));
		}
		
		$charCode = $this->appendLine($charCode,$this->getCodeForRows());
		$charCode = $this->appendLine($charCode, $this->getCodeForOptions());
		
		$charCode = $this->appendLine($charCode, $this->getChartCode());
		$charCode = $this->appendLine($charCode, $this->getChartCallCode());
		
		return $charCode .' }';
	}
	
	public function renderContainer(){
		return '<div id="'.$this->id.'"></div>';
	}
	
	public function appendLine($str1, $str2) {
		return $str1.' '.$str2;
	}
	
	public function getChartCode(){
		$code = 'var '.$this->varName('chart').' = new ';
		$code = $code."google.visualization.".$this->type."(document.getElementById('".$this->id."'));";
		return $code;
	}
	
	public function getChartCallCode(){
		return $this->varName('chart').".draw(".$this->varName('data').",".$this->varName('options').")";
	}
	
	public function getCodeForRows(){
		
		$rowCode = $this->varName('data').".addRows([";
		foreach ($this->rows as $key => $row) {
			$rowCode = $this->appendLine($rowCode,$this->getCodeForRow($row));
		}
		$rowCode = substr( $rowCode , 0 , -1);
		$rowCode = $this->appendLine($rowCode,  "]);");
		
		return $rowCode;
	}
	
	public function setOption($option, $value){
		$this->options[$option] = $value;
	}
	
	public function getCodeForRow($row){
		$rowCode = '[';
		foreach ($row as $key => $column){
			$column = is_string($column) ? "'".$column."'" : $column;
			$rowCode = $rowCode . $column . ',';
		}
		$rowCode = substr( $rowCode , 0 , -1);
		$rowCode = $rowCode . '],';
		return $rowCode;
	}
	
	public function getCodeForColumn($column){
		return ' '.$this->varName('data').".addColumn('".$column['type']."', '".$column['name']."');"; 
	}
	
	public function varName($name){
		return $name.'_'.$this->id;
	}
	
	public function getCodeForOptions(){
		$code = $this->varName('options')." = { ";
		foreach ($this->options as $option => $value) {
			$code = $this->appendLine($code, $this->getCodeForOption($option, $value));
		}
		$code = substr( $code , 0 , -1);
		$code = $code.'};';
		return $code;
	}
	
	public function getCodeForOption($option, $value){
		$value = is_string($value) ? "'".$value."'" : $value;
		return "'".$option."' : ".$value.',';
	}
	
	public function addColumn($type, $name) {
		$column = array(
			'type' => $type,
			'name' => $name
		);
		array_push($this->columns, $column);
	}
	
	public function addRow($row){
		foreach ($this->columns as $key => $column) {
			
			if ( !isset($row[$key]) ){
				throw new Exception("La fila que se pretende insertar no cumple con la estructura.");
			}
			
			if ($column['type']== self::TYPE_NUMBER){
				
				if (!is_int($row[$key]) && !is_float($row[$key])){
					print_r($row);
					throw new Exception("La columna ".$key." no tiene el tipo esperado.");
				}
				
			} else if ($column['type']== self::TYPE_NUMBER) {
				
				if (!is_string($var)){
					throw new Exception("La columna ".$key." no tiene el tipo esperado.");
				}
				
			}
			
		}
		
		array_push($this->rows, $row);
	}
	
	protected function setColumn($columnID, $type, $value){
		$this->columns[$columnID]['type'] = $type;
		$this->columns[$columnID]['name'] = $value;
	}
	
	public function setTitle($title){
		$this->setOption('title', $title);
	}
	
	public function setWidth($width){
		$this->setOption('width', $width);
	}
	
	public function setHeight($height){
		$this->setOption('width', $height);
	}
	
	public static function loadLibrary(){
		$code = ' <script type="text/javascript" src="https://www.google.com/jsapi"></script>';
		$code = $code.'<script type="text/javascript">'."google.load('visualization', '1.0', {'packages':['corechart']});".'</script>';
		return $code;
	}
}
