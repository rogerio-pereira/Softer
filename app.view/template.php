<?php

    /**
      * template.php
      * Classe template
      *
      * @author  Rogério Eduardo Pereira <rogerio@rogeriopereira.info>
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
         * Exibe as informações da página
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
                        <div class='row'>
                            <div class='12u menuBar'>
                                <i class="fa fa-bars fa-2x right" style='color: #FF8400;' onclick="$('#menuSuperior').toggle('slow')"></i>
                            </div>
                            <div class='12u'>
                                <nav id='menuSuperior'>
                                    <hr class='noSpace' style='height: 3px;'>
                                    <ul>
                                        <li>
                                            <a href='#Home' title='Home' alt='Home' onclick="scrollToAnchor('home')">
                                                Home
                                            </a>
                                        </li><li>
                                            <a href='#Web' title='Web' alt='Web' onclick="scrollToAnchor('web')">
                                                Web
                                            </a>
                                        </li><li>
                                            <a href='#Sistemas' title='Sistemas' alt='Sistemas' onclick="scrollToAnchor('sistemas')">
                                                Sistemas
                                            </a>
                                        </li><li>
                                            <a href='#Portifolio' title='Portifólio ' alt='Portifólio' onclick="scrollToAnchor('portifolio')">
                                                Portifólio
                                            </a>
                                        </li><li>
                                            <a href='#Contato' title='Contato' alt='Contato' onclick="scrollToAnchor('contato')">
                                                Contato
                                            </a>
                                        </li>
                                    </ul>
                                    <hr class='noSpace' style='height: 3px;'>
                                </nav>
                            </div>
                        </div>
                    </header>

                    <section>
                        <div class='row content'>
                            <div class='12u home'>
                                <a name='Home'></a>
                                <?php (new home())->show(); ?>
                            </div>
                            <div class="clear"></div>
                

                            <div class='12u web'>
                                <a name='Web'></a>
                                <?php (new web())->show(); ?>
                            </div>
                            <div class="clear"></div>

                            <div class='12u sistemas'>
                                <a name='Sistemas'></a>
                                <?php (new sistemas())->show(); ?>
                            </div>
                            <div class="clear"></div>

                            <div class='12u portifolio'>
                                <a name='Portifolio'></a>
                                <?php (new portifolio())->show(); ?>
                            </div>
                            <div class="clear"></div>

                            <div class='12u contato'>
                                <a name='Contato'></a>
                                <?php (new contato())->show(); ?>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </section>

                    <footer>
                        <div class='row'>
                           <div class='12u copyright center'>
                                <?= '&copy; Copyright 2015 - '.$_SESSION['configuracoes']->empresa.'<br/>' ?>

                                Desenvolvivo por: 
                                <a href='http://www.softer.com.br' alt='Softer' title='Softer' target="_blank">
                                    Softer
                                </a>
                            </div>
                        </div>
                    </footer>
                </body>
            </html>
        <?php
        include_once 'js/jsInit.php';
        }
    }
?>