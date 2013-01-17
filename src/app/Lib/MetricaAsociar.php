<?

class MetricaAsociar {
	
	public static function asociar($valores, $metricas){
		$m = array();
		foreach ($valores as $key => $valor) {
			if (!array_key_exists($valor['metrica_id'], $m)){
				$m[$valor['metrica_id']] = $valor;
				$m[$valor['metrica_id']]['id_valor'] = $valor['id'];
			}
		}
		foreach ($metricas as $key => $value) {
			
			if (array_key_exists($value['METRICA']['id'],$m)){
				$m[$value['METRICA']['id']] = array_merge($m[$value['METRICA']['id']], $value['METRICA']);
			} else {
				$m[$value['METRICA']['id']] = $value['METRICA'];
			}
		}
		return $m;
	}
	
}
