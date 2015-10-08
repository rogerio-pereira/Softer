<?php
    /**
      * configuracoesPagSeguro.php
      * Classe configuracoesPagSeguro
      *
      * @author  Rogério Eduardo Pereira <rogerio@rogeriopereira.info>
      * @version 1.0
      * @access  public
      */
    class configuracoesPagSeguro
    {
        /*
         * Variaveis
         */
        private $controladorConfiguracoes;
        private $configuracoes;


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
            new TSession(0);

            $this->controladorConfiguracoes   = new controladorConfiguracoes();
            $this->configuracoes              = $this->controladorConfiguracoes->getConfiguracoes();
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
                <span class='center'>
                    <h1 alt='Configurações PagSeguro' title='Configurações PagSeguro'>Configurações PagSeguro</h1>
                </span>
  

                <form 
                    id="configuracoesPagSeguroForm" 
                    name='configuracoesPagSeguroForm' 
                    action="" 
                    method="post"
                >
                    <div class='row'>
                        <div class='6u'>
                            Email
                            <input 
                                type='email' 
                                name='email' 
                                id='email' 
                                maxlength='100'
                                value='<?php echo $this->configuracoes->emailPagSeguro; ?>'  
                            >
                        </div>
                        <div class='6u'>
                            Token
                            <input 
                                type='string' 
                                name='token' 
                                id='token' 
                                maxlength='32'
                                value='<?php echo $this->configuracoes->tokenPagSeguro; ?>' 
                            >
                        </div>

                        <div class='clear'></div>

                        <div class='1u center'>
                            <input type='submit' name='Enviar' value='Enviar'>
                        </div>
                    </div>
                </form>

                <!--JS-->
                <?php include_once('js/jsConfiguracaoPagSeguro.php'); ?>
            <?php
        }
    }
?>