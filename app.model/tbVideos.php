<?php
    /**
      * tbVideos.php
      * Classe de modelo tbVideos
      *
      * @author  Rogério Eduardo Pereira <rogerio@groupsofter.com.br>
      * @version 1.0
      * @access  public
      */
    class tbVideos extends TRecord
    {
        /*
         * Contantes
         */
        /**
         * @const string TABLENAME Nome da tabela
         */
        const TABLENAME = 'videos';


        /*
         * Colunas (Precisam ser protected)
         */
        /**
          * @access private
          * @var    int     Código do Video
          */
        protected $codigo;
        /**
          * @access private
          * @var    string  Tíulo
          */
        protected $titulo;
        /**
          * @access private
          * @var    string  Descrição
          */
        protected $descricao;
        /**
          * @access private
          * @var    string  Link do Video
          */
        protected $video;
        /**
          * @access private
          * @var    string  Thumbnail do Video
          */
        protected $imagem;
        /**
          * @access private
          * @var    boolean Ativo/Inativo
          */
        protected $ativo;
        /**
          * @access private
          * @var    boolean Excluido
          */
        protected $excluido;


        /*
         * Métodos
         */
        
    }
?>