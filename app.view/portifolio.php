<?php
    /**
      * portifolio.php
      * Classe portifolio
      *
      * @author  Rogério Eduardo Pereira <rogerio@rogeriopereira.info>
      * @version 1.0
      * @access  public
      */
    class portifolio
    {
        /*
         * Variaveis
         */
        private $collectionPortifolio;


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
            $this->collectionPortifolio = (new controladorPortifolio())->getCollectionPortifolio();
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
                <h1 class='center' alt='Portifólio' title='Portifólio'>Portifólio</h1><br/>

                <div class='row center'>
                    <?php
                        $cont = 1;

                        foreach ($this->collectionPortifolio as $portifolio) 
                        {
                            $corta = ($cont % 2) == 0 ? '$' : '';
                            ?>
                                <div class='4u 6u<?=$corta?>(medium) 12u(small) portifolioContainer'>
                                    <a 
                                        href='<?= $portifolio->url ?>' 
                                        alt='<?= $portifolio->titulo ?>' 
                                        title='<?= $portifolio->titulo ?>'
                                        target='_blank'
                                    >
                                        <figure class='portifolio'>
                                            <img 
                                                src='<?= $portifolio->imagem ?>' 
                                                title='<?= $portifolio->titulo ?>' 
                                                alt='<?= $portifolio->titulo ?>'
                                            >
                                            <figcaption>
                                                <?= $portifolio->descricao ?>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            <?php

                            $cont++;
                        }
                    ?>
                </div>
            <?php
        }
    }
?>