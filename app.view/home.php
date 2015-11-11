<?php

	/**
      * home.php
      * Classe Home
      *
      * @author  Rogério Eduardo Pereira <rogerio@rogeriopereira.info>
      * @version 1.0
      * @access  public
      */
	class Home
	{
		/*
		 * Variáveis
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
		 * Exibe as informa?es da p?ina
		 * 
		 * @access public
		 */
		public function show()
		{
			?>
				<!--Slider-->

				<br/><br/>
				<div class='row'>
					<div class='4u' class='center'>
						<a 
						 	href='/paginas/<?= (new controladorUrl())->urlAmigavel('Desenvolvimento de Sistemas') ?>'
                            alt='Desenvolvimento de Sistemas'
                            title='Desenvolvimento de Sistemas'
                            class='imgHomeLink'
                        >
							<figure class='imgHome'>
								<img 
									src='/app.view/img/template/desenvolvimento.png' 
									alt='Desenvolvimento de Sistemas' 
									title='Desenvolvimento de Sistemas'
								>
								<figcaption>
									Desenvolvimento de Sistemas
								</figcaption>
							</figure>
						</a>
					</div>

					<div class='4u' class='center'>
						<a 
							href='/paginas/<?= (new controladorUrl())->urlAmigavel('Desenvolvimento Web') ?>'
                            alt='Desenvolvimento Web'
                            title='Desenvolvimento Web' 
                            class='imgHomeLink'
                        >
							<figure class='imgHome'>
								<img 
									src='/app.view/img/template/web.png' 
									alt='Desenvolvimento de Websites' 
									title='Desenvolvimento de Websites'
								>
								<figcaption>
									Desenvolvimento de Websites
								</figcaption>
							</figure>
						</a>
					</div>

					<div class='4u' class='center'>
						<a 
							href='/paginas/<?= (new controladorUrl())->urlAmigavel('Assistência Técnica') ?>'
                            alt='Assistência Técnica'
                            title='Assistência Técnica'
                           	class='imgHomeLink'
                        >
							<figure class='imgHome'>
								<img 
									src='/app.view/img/template/assistencia.png' 
									alt='Assistência Técnica Especializada' 
									title='Assistência Técnica Especializada'
								>
								<figcaption>
									Assistência Técnica Especializada
								</figcaption>
							</figure>
						</a>
					</div>
				</div>
			<?php
		}
	}
?>