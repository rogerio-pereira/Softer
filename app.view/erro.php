<?php
	/**
      * erro.php
      * Classe de erros
      *
      * @author  Rog�rio Eduardo Pereira <rogerio@rogeriopereira.info>
      * @version 1.0
      * @access  public
      */
	class erro 
	{
		/*
		 * Variaveis
		 */
		private $codigo;

		/*
		 * M�todos
		 */
		/**
		 * M�todo Contrutor
		 * 
         * @access public
         * @return void
		 */
		public function __construct()
		{
			if(isset($_GET['codigo']))
				$this->codigo = $_GET['codigo'];
		}

		/**
          * M�todo __set
          * Seta o valor da variavel
          * 
          * @access public
          * @param  string  $propriedade    Propriedade a ser definida o valor
          * @param  mixed   $valor          Valor da Propriedade
          * @return void
          */
        public function __set($propriedade, $valor)
        {
            $this->$propriedade = $valor;
        }

        /**
          * M�todo __get
          * Seta o valor da variavel
          * 
          * @access public
          * @param  string $propriedade    Propriedade a ser retornada
          * @return mixed                   Valor da Propriedade
          */
        public function __get($propriedade)
        {
            return $this->$propriedade;
        }
		
		/**
		 * M�todo show
		 * Exibe as informa��es na tela
		 * 
         * @access public
         * @return void
		 */
		public function show()
		{
			//echo '<h1>Erro</h1><hr>';
			//Erro 400 - Bad Request
			if($this->codigo == 400)
				echo 
					"
						<h1>Solicita��o Impr�pria</h1>
						<p>
							O servidor n�o pode compreender a solicita��o e process�-la.<br>
							Contate o <a href='mailto:suporte@rogeriopereira.info'>Suporte T�cnico</a>
						</p>
					";
			//Erro 401 - Unauthorized
			if($this->codigo == 401)
				echo 
					'
						<h1>N�o autorizado</h1>
						<p>
							Por favor fa�a o login primeiro
						</p>
					';
			//Erro 403 - Forbidden 
			if($this->codigo == 403)
				echo 
					'
						<h1>Acesso Negado</h1>
						<p>
							O acesso a esse local foi proibido
						</p>
					';
			//Erro 404 - Not Found
			if($this->codigo == 404)
				echo 
					'
						<h1>N�o encontrado</h1>
						<p>
							O conteudo solicitado n�o foi encontrado em nossos servidores.
						</p>
					';
			//Erro 500 - Internal Server Error
			if($this->codigo == 500)
				echo 
					"
						<h1>Erro interno no Servidor</h1>
						<p>
							O servidor encontrou uma condi��o inesperada<br>
							Contate o <a href='mailto:suporte@rogeriopereira.info'>Suporte T�cnico</a>
						</p>
					";
		}
	}

?>