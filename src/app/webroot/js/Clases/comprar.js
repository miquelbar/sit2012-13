var Comprar = {
	
	initEventoCompra : function(){
		
		$('.comprar').live('click', function(){
			
			var idClase = $(this).data('id-clase');
			
			var data = {id_clase : idClase};
			
			$.ajax({
				url : '/usuario/comprar/',
				type : 'post',
				data : data,
				dataType: 'json',
				success : function(data){
					
					
					
				}
			});
			
		});
		
	},
	
	init : function(){
		var self = this;
		
		self.initEventoCompra();
		
	}
	
	
}

$(document).ready(function(){
	
	Comprar.init();
	
});
