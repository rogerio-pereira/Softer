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
        private $conteudo;
        private $gallery;


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
            $this->conteudo = (new tbPaginas())->load(3);
            $this->gallery  = (new controladorGaleria())->getGaleria('Pagina',3);
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
                <h1 class='center' alt='<?= $this->conteudo->titulo ?>' title='<?= $this->conteudo->titulo ?>'>
                    <?= $this->conteudo->titulo ?>
                </h1>
                <?= $this->conteudo->texto; ?>
                
                <div class='row'>
                    <?php 
                        foreach ($this->gallery as $galeria) 
                        {
                            echo 
                                "
                                    <div class='4u'>
                                        <figure class='portifolioFigure'>
                                            <img 
                                                src='{$galeria->imagem}' 
                                                alt='{$galeria->titulo}' 
                                                title='{$galeria->titulo}'
                                            >
                                            <figcaption>
                                                <h2 class='center'>{$galeria->titulo}</h2>
                                                {$galeria->descricao}
                                            </figcaption>
                                        </figure>
                                    </div>
                                ";
                        }
                    ?>
                </div>
            <?php
        }
    }
?>