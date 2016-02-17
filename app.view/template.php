<?php

    /**
      * template.php
      * Classe template
      *
      * @author  Rogério Eduardo Pereira <rogerio@groupsofter.com.br>
      * @version 1.0
      * @access  public
      */
    class template
    {
        /*
         *  Variaveis
         */


        /**
         * Método construtor
         * Verifica se esta logado
         * 
         * @access public
         * @return void
         */
        public function __construct()
        {
            
        }


        /**
         * Método show
         * Exibe as informa?es da p?ina
         * 
         * @access public
         * @return void
         */
        public function show()
        {
        ?>
            <!DOCTYPE HTML>
            <html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br" xml:lang="pt-br">
                <head>
                    <?php include_once 'meta.php'; ?>
                    
                    <!--CSS-->
                    <?php include_once 'css/css.php'; ?>    
                    
                    <!--JQuery-->
                    <?php include_once 'js/jsLib.php'; ?>              
                    
                    <!--JavaScript-->
                </head>
                <body>
                    <header>
                        <div class="12u">
                            <div class='row'>
                                <div class='6u headerLogotipo'>
                                    <a href='/' alt='Group Softer' title='Group Softer' class='center'>
                                        <img 
                                            src='<?= $_SESSION['configuracoes']->logotipo ?>'  
                                            alt='Group Softer' 
                                            title='Group Softer'
                                        >
                                    </a>
                                </div>

                                <div class='6u headerRedesSociais table'>
                                    <div class="middle">
                                        <?php include_once('redesSociais.php') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>

                    <section>
                        #CONTENT#
                    </section>

                    <footer>
                        <div class='row'>
                            <div class='7u -3u footerMenu'>
                                <nav class='menuPrincipal center'>
                                    <?php include_once('menu.php') ?>
                                </nav>
                            </div>
                        </div>
                    </footer>
                </body>
            </html>

            <?php include_once 'js/jsInit.php'; ?>    
        <?php
        }
    }
?>