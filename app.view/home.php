<?php

	/**
      * home.php
      * Classe Home
      *
      * @author  Rogério Eduardo Pereira <rogerio@rogeriopereira.info>
      * @version 1.0
      * @access  public
      */
	class home
	{
		/*		
		 * Variáeis
		 */


		/**
		 * Método construtor
		 * Verifica se esta logado
		 * 
		 * @access public
		 * @return void
		 */
		public function __construct()
		{
			
		}


		/**
		 * Método show
		 * Exibe as informações da página
		 * 
		 * @access public
		 */
		public function show()
		{
			?>      
				<img src='/app.view/img/logotipo.png'>
			<?php
		}
	}
?>