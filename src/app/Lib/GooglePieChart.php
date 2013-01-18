<?

class GooglePieChart extends GoogleChart {
	
	protected $type = 'PieChart';
	
	const INDEX_LABEL = 0;
	const INDEX_VALUE = 1;
	
	public function __construct($id, $label='label', $valor='valor'){
		parent::__construct($id);
		$this->setColumn(self::INDEX_LABEL,self::TYPE_STRING,$label);
		$this->setColumn(self::INDEX_VALUE,self::TYPE_NUMBER,$valor);
	}

	public function newRow($campo, $valor){
		parent::addRow(array($campo, $valor));
	}
}
