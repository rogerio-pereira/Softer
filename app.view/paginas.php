<?php
    /**
      * paginas.php
      * Classe paginas
      *
      * @author  Rogério Eduardo Pereira <rogerio@rogeriopereira.info>
      * @version 1.0
      * @access  public
      */
    class paginas
    {
        /*
         * Variaveis
         */
        private $pagina;
        private $titulo;
        private $controlador;

        /*
         * Métodos
         */
        /**
          * Método Construtor
          *
          * @access private
          * @return void
          */
        public function __construct()
        {
            $this->controlador  = new controladorPagina();

            $this->titulo       = $_GET['desc'];
            $this->titulo       = (new controladorUrl())->corrigeUrlAmigavel($this->titulo);

            $this->pagina       = $this->controlador->getPaginaByTitle($this->titulo);
        }

        /**
          * Método __set
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
          * Método __get
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
          * Método show
          * Exibe as informações na tela
          *
          * @access public
          * @return void
          */
        public function show()
        {
            ?>
                <h1 class='center underline' alt='<?= $this->pagina->titulo ?>' title='<?= $this->pagina->titulo ?>'>
                    <?= $this->pagina->titulo ?>
                </h1>

                <?= $this->pagina->texto ?>
            <?php
        }
    }
?>