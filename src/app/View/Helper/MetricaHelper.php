<?
App::uses('Helper', 'View', 'AppHelper');
class MetricaHelper extends AppHelper {
	
	var $helpers = array('Html','Form');
	
	function buildForInput($metricas, $options) {;	
		$total = '<table class="'.$options['class'].'">';
		if (isset($options['titulo']) && $options['titulo']){
			$total = $total."<tr><th>".$options['titulo']."</th></tr>";
		}
		foreach ($metricas as $key => $metrica) {
			$total = $total."<tr>";
			$total = $total."<td><strong>".$metrica['titulo']."</strong></td>";
			$total = $total."<td>";
			
			if (isset($metrica['valor'])){
				$value = $metrica['valor'];
			}else{
				$value = '';
			}
			$id_v = isset($metrica['id_valor']) ? $metrica['id_valor'] : 'X'.$metrica['id'];
			$total = $total.$this->Form->input($metrica['id'], array(
				'type' => 'text',
				'value' => $value,
				'label' => false,
				'name' => 'm_'.$id_v
			));
			
			$total = $total."</td>";
			if (isset($options['unidades']) && $options['unidades'] && isset($metrica['unidades'])){
				$dominio = isset($metrica['dominio']) ? $metrica['dominio'] : '';
				$total = $total."<td>".$metrica['unidades']." ($dominio) "."</td>";
			}
			if (isset($options['fecha']) && $options['fecha'] && isset($metrica['fecha'])){
				$total = $total."<td>".$metrica['fecha']."</td>";
			}
			$total = $total."</tr>";
		}
		
		return $total."</table>";
	}
	
	function buildForShow($metricas, $options) {
		$total = '<table class="'.$options['class'].'">';
		if (isset($options['titulo']) && $options['titulo']){
			$total = $total."<tr><th>".$options['titulo']."</th></tr>";
		}
		foreach ($metricas as $key => $metrica) {
			$total = $total."<tr>";
			$total = $total."<td><strong>".$metrica['titulo']."</strong></td>";
			$total = $total."<td>";
			if (isset($metrica['valor'])){
				$total = $total.$metrica['valor'];
			}else{
				$total = $total."-";
			}
			$total = $total."</td>";
			if (isset($options['unidades']) && $options['unidades'] && isset($metrica['unidades'])){
				$total = $total."<td>".$metrica['unidades']."</td>";
			}
			if (isset($options['fecha']) && $options['fecha'] && isset($metrica['fecha'])){
				$total = $total."<td>".$metrica['fecha']."</td>";
			}
			$total = $total."</tr>";
		}
		
		return $total."</table>";
	}
	
}
