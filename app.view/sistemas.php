<?php
    /**
      * sistemas.php
      * Classe sistemas
      *
      * @author  Rogério Eduardo Pereira <rogerio@rogeriopereira.info>
      * @version 1.0
      * @access  public
      */
    class sistemas
    {
        /*
         * Variaveis
         */
        private $conteudo;


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
            $this->conteudo = (new tbPaginas())->load(2);
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
                <div class='row'>
                    <div class='10u -1u'>
                        <h1 class='center' alt='<?= $this->conteudo->titulo ?>' title='<?= $this->conteudo->titulo ?>'>
                            <?= $this->conteudo->titulo ?>
                        </h1>
                        
                        <?= $this->conteudo->texto ?>
                    </div>
                </div>
            <?php
        }
    }
?>