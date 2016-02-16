<?php
    /**
      * controladorDepoimentos.php
      * Classe de Controle controladorDepoimentos
      *
      * @author  Rogério Eduardo Pereira <rogerio@groupsofter.com.br>
      * @version 1.0
      * @access  public
      */
    class controladorDepoimentos
    {
        /*
         *    Variaveis
         */
        private $repository;
        private $collectionDepoimentos;
        private $depoimento;


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
            $this->repository             = new TRepository;

            $this->collectionDepoimentos  = NULL;
            $this->depoimento             = NULL;
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
    }
?>
