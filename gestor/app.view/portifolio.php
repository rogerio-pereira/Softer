<?php
    /**
      * portifolio.php
      * Classe portifolio
      *
      * @author  Rogério Eduardo Pereira <rogerio@groupsofter.com.br>
      * @version 1.0
      * @access  public
      */
    class portifolio
    {
        /*
         * Variaveis
         */
        private $collection;
        private $listagem;


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
            $this->collection = new TList();

            $this->collection->setTituloPagina('Portifólio');

            $this->collection->addColumn('codigo');
            $this->collection->addColumn('imagem');
            $this->collection->addColumn('titulo');
            $this->collection->addColumn('url');
            $this->collection->addColumn('ativo');

            $this->collection->addEntity('portifolio');

            $this->listagem = $this->collection->show();
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
            echo $this->listagem;
        }
    }
?>