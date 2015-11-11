<?php
    /**
      * controladorPortifolio.php
      * Classe de Controle controladorPortifolio
      *
      * @author  Rogério Eduardo Pereira <rogerio@rogeriopereira.info>
      * @version 1.0
      * @access  public
      */
    class controladorPortifolio
    {
        /*
         *    Variaveis
         */
        private $portifolio;
        private $collectionPortifolio;
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
            $this->portifolio           = new tbPortifolio;
            $this->repository           = new TRepository;
            $this->collectionPortifolio = NULL;
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
          * Método getCollectionPortifolio
          * Obtém coleção de portifólios
          * 
          * @access public
          */
        public function getCollectionPortifolio()
        {
            $this->repository           = new TRepository();
            $this->collectionPortifolio = NULL;

            $this->repository->addEntity('portifolio');

            $this->repository->addColumn('imagem');
            $this->repository->addColumn('titulo');
            $this->repository->addColumn('descricao');
            $this->repository->addColumn('url');

            $criteria   = new TCriteria;
            $criteria->addFilter('ativo', '=', 1);
            $criteria->setProperty('order', 'titulo');

            $this->collectionPortifolio = $this->repository->load($criteria);

            return $this->collectionPortifolio;
        }
    }
?>