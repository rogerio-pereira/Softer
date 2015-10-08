<?php
    /**
      * controladorConfiguracoes.php
      * Classe de Controle controladorConfiguracoes
      *
      * @author  Rog�rio Eduardo Pereira <rogerio@rogeriopereira.info>
      * @version _VERSAO_
      * @access  public
      */
    class controladorConfiguracoes
    {
        /*
         *    Variaveis
         */
        private $configuracao;

        /*
         * M�todos
         */
        /**
         * M�todo Construtor
         *
         * @access private
         * @return void
         */
        public function __construct()
        {
            $this->configuracao = NULL;
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
         * M�todo getConfiguracoes
         * Retorna as configura��es do banco de dados
         * 
         * @access public
         * @return tbConfiguracoes   Configura��es do site
         */
        public function getConfiguracoes()
        {
            $this->configuracao = NULL;
            
            //RECUPERA CONEXAO BANCO DE DADOS
            TTransaction::open('my_bd_site');

            $this->configuracao = (new tbConfiguracoes())->load(1);

            return $this->configuracao;
        }
    }
?>