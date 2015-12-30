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
                    <div class='cover'>
                        <header>
                            <div class='12u menuSuperiorResponsivoContainer' id='menuResponsivo'>
                                <nav id='menuSuperiorResponsivo'>
                                    <ul>
                                        <!--Home-->
                                        <li>
                                            <a href='/' alt='Home' title='Home'>
                                                Home        
                                            </a>
                                        </li>
                                        
                                        <!--Web-->
                                        <li>
                                            <a 
                                                href='/paginas/<?= (new controladorUrl())->urlAmigavel('Desenvolvimento Web') ?>'
                                                alt='Desenvolvimento Web'
                                                title='Desenvolvimento Web'
                                            >
                                                Web
                                            </a>
                                        </li>

                                        <!--Sistemas-->
                                        <li>
                                            <a 
                                                href='/paginas/<?= (new controladorUrl())->urlAmigavel('Desenvolvimento de Sistemas') ?>'
                                                alt='Desenvolvimento de Sistemas'
                                                title='Desenvolvimento de Sistemas'
                                            >
                                                Sistemas
                                            </a>
                                        </li>

                                        <!--Portifólio-->
                                        <li>
                                            <a href='/portifolio' alt='Portifólio' title='Portifólio'> 
                                                Portifólio  
                                            </a>
                                        </li>

                                        <!--Manutenção-->
                                        <li>
                                            <a 
                                                href='/paginas/<?= (new controladorUrl())->urlAmigavel('Assistência Técnica') ?>'
                                                alt='Assistência Técnica'
                                                title='Assistência Técnica'
                                            > 
                                                Manutenção  
                                            </a>
                                        </li>

                                        <!--Contato-->
                                        <li style='border-bottom: 1px solid #ffffff;'>
                                            <a href='/contato' alt='Contato' title='Contato'>
                                                Contato
                                             </a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>

                            <div class='12u center'>
                                <img 
                                    src="<?= $_SESSION['configuracoes']->logotipo ?>" 
                                    id='logotipoTop'
                                    alt='<?= $_SESSION['configuracoes']->empresa ?>' 
                                    title='<?= $_SESSION['configuracoes']->empresa ?>' 
                                >
                            </div>

                            <div class="12u menuSuperiorContainer">
                                <nav id='menuSuperior'>
                                    <ul>
                                        <!--Home-->
                                        <li>
                                            <a href='/' alt='Home' title='Home'>
                                                Home        
                                            </a>
                                        </li>
                                        
                                        <!--Web-->
                                        <li>
                                            <a 
                                                href='/paginas/<?= (new controladorUrl())->urlAmigavel('Desenvolvimento Web') ?>'
                                                alt='Desenvolvimento Web'
                                                title='Desenvolvimento Web'
                                            >
                                                Web
                                            </a>
                                        </li>

                                        <!--Sistemas-->
                                        <li>
                                            <a 
                                                href='/paginas/<?= (new controladorUrl())->urlAmigavel('Desenvolvimento de Sistemas') ?>'
                                                alt='Desenvolvimento de Sistemas'
                                                title='Desenvolvimento de Sistemas'
                                            >
                                                Sistemas
                                            </a>
                                        </li>

                                        <!--Portifólio-->
                                        <li>
                                            <a href='/portifolio' alt='Portifólio' title='Portifólio'> 
                                                Portifólio  
                                            </a>
                                        </li>

                                        <!--Manutenção-->
                                        <li>
                                            <a 
                                                href='/paginas/<?= (new controladorUrl())->urlAmigavel('Assistência Técnica') ?>'
                                                alt='Assistência Técnica'
                                                title='Assistência Técnica'
                                            > 
                                                Manutenção  
                                            </a>
                                        </li>

                                        <!--Contato-->
                                        <li>
                                            <a href='/contato' alt='Contato' title='Contato'>
                                                Contato
                                             </a>
                                        </li>

                                    </ul>
                                </nav>
                            </div>
                        </header>

                        <div class='10u -1u'>
                            <section>
                                #CONTENT#
                            </section>
                        </div>

                        <div class="12u">
                            <footer>
                                &copy; Copyright 2015 - <?= $_SESSION['configuracoes']->empresa?>
                                <br/>
                                <a href='http://www.groupsofter.com.br' target='_blank' alt='Softer' title='Softer'>
                                    <strong>Softer</strong>
                                </a>
                            </footer>
                        </div>
                    </div>
                </body>
            </html>

            <?php include_once 'js/jsInit.php'; ?>    
        <?php
        }
    }
?>