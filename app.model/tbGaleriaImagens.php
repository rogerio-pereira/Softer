<?php
    /**
      * tbGaleriaImagens.php
      * Classe de modelo tbGaleriaImagens
      *
      * @author  Rogério Eduardo Pereira <rogerio@groupsofter.com.br>
      * @version 1.0
      * @access  public
      */
    class tbGaleriaImagens extends TRecord
    {
        /*
         * Contantes
         */
        /**
         * @const string TABLENAME Nome da tabela
         */
        const TABLENAME = 'galeriaimagens';


        /*
         * Colunas (Precisam ser protected)
         */
        /**
          * @access protected
          * @var    int         Código
          */
        protected $codigo;
        /**
          * @access protected
          * @var    int         Código da Pagina
          */
        protected $codigoPagina;
        /**
          * @access protected
          * @var    int         Código do Produto
          */
        protected $codigoProduto;
        /**
          * @access protected
          * @var    int         Código do Imóvel
          */
        protected $codigoImovel;
        /**
          * @access protected
          * @var    int         Código da Galeria
          */
        protected $codigoGaleria;
        /**
          * @access protected
          * @var    string      Imagem
          */
        protected $imagem;
        /**
          * @access protected
          * @var    string      Título
          */
        protected $titulo;
        /**
          * @access protected
          * @var    string      Descrição
          */
        protected $descricao;
        /**
          * @access protected
          * @var    string      URL
          */
        protected $url;
        /**
          * @access protected
          * @var    int         Ordem
          */
        protected $ordem;
        /**
          * @access protected
          * @var    boolean     Ativo/Inativo
          */
        protected $ativo;
        /**
          * @access protected
          * @var    boolean     Excluido
          */
        protected $excluido;


        /*
         * Métodos
         */
        
    }
?>