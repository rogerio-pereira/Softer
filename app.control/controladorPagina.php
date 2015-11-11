<?php
    /**
      * controladorPagina.php
      * Classe de Controle controladorPagina
      *
      * @author  Rogério Eduardo Pereira <rogerio@rogeriopereira.info>
      * @version 1.0
      * @access  public
      */
    class controladorPagina
    {
        /*
         *    Variaveis
         */
        private $pagina;
        private $repository;


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
            $this->pagina       = new tbPaginas();
            $this->repository   = NULL;
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
          * Método getPaginaByTitle
          * Obtem a página de acordo com o título
          * 
          * @access public
          * @param  string $titulo  Titulo da pagina a ser buscada
          * @return tbPagina        Pagina
          */
        public function getPaginaByTitle($titulo)
        {
            $this->pagina = new tbPaginas();

            //TABELA exposition_gallery
            $criteria   = new TCriteria;
            $criteria->addFilter('ativo', '=', 1);
            $criteria->addFilter('titulo', '=', $titulo);
            $criteria->setProperty('limit', 1);

            $this->pagina = $this->pagina->loadCriteria($criteria);
            
            return $this->pagina;
        }
    }
?>