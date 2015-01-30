<?php

	Class mHome{

		public function Info(){
			return array(
					'nombre' => 'Aida Dahdah Castello'
					
				);

		}

		public function suma($a, $b, $valor1, $valor2){
			return array(
				'total'=>$valor1 + $valor2,
				'valor1'=>$valor1,
				'valor2'=>$valor2
			);
		}


	}
