<?php
    /**
      * contato.php
      * Classe contato
      *
      * @author  Rogério Eduardo Pereira <rogerio@rogeriopereira.info>
      * @version 1.0
      * @access  public
      */
    class contato
    {
        /*
         * Variaveis
         */


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
                <h1 class='center underline' alt='contato' title='contato'>Contato</h1><br/>

                <div class='row'>
                    <div class='4u -1u'>
                        <form id="contatoForm" name='contatoForm' class='center' action="/app.control/enviaEmail.php" method="post">
                            <input 
                                type='text' 
                                id='nome' 
                                name='nome' 
                                placeholder='Nome'
                                required
                            >

                            <input 
                                type='email' 
                                id='email' 
                                name='email'  
                                placeholder='E-mail'
                                required
                            >

                            <input 
                                type='text' 
                                id='telefone' 
                                name='telefone'  
                                class='telefone'
                                placeholder='Telefone'
                                required
                            >

                            <input 
                                type='text' 
                                id='cidade' 
                                name='cidade'
                                placeholder='Cidade'
                                required
                            >

                            <input 
                                type='text' 
                                id='assunto' 
                                name='assunto'
                                placeholder='Assunto'
                                required
                            >

                            <textarea 
                                id='mensagem'
                                name='mensagem'
                                placeholder='Mensagem'
                                rows='5'
                                required
                            ></textarea>

                            <input 
                                type='submit'  
                                id='enviar' 
                                name='enviar'
                                value='Enviar' 
                            />
                        </form>
                    </div>

                    <div class='6u -1u'>
                        <div id="fb-root"></div>
                        <script>
                            (function(d, s, id) 
                            {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s); js.id = id;
                                js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.5&appId=1424205961136633";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>
                        <div 
                            class="fb-page" 
                            data-href="https://www.facebook.com/groupsofter" 
                            data-width="1024" 
                            data-height="300"
                            data-small-header="false" 
                            data-adapt-container-width="true" 
                            data-hide-cover="false" 
                            data-show-facepile="true" 
                            data-show-posts="false"
                        >
                            <div class="fb-xfbml-parse-ignore">
                                <blockquote cite="https://www.facebook.com/groupsofter">
                                    <a href="https://www.facebook.com/groupsofter">
                                        Softer
                                    </a>
                                </blockquote>
                            </div>
                        </div>
                        <br/><br/>

                        <h2 class='center'>Endereço:</h2>
                        
                        <!--Endereço: <strong><?= $_SESSION['configuracoes']->endereco.' - '.$_SESSION['configuracoes']->numero ?></strong><br/>
                        Bairro: <strong><?= $_SESSION['configuracoes']->bairro ?></strong><br/>
                        Cidade: <strong><?= $_SESSION['configuracoes']->cidade.' - '.$_SESSION['configuracoes']->estado ?></strong><br/>
                        CEP: <strong><?= $_SESSION['configuracoes']->cep ?></strong><br/>
                        Telefone: <strong><?= $_SESSION['configuracoes']->telefone ?></strong><br/><br/>-->

                        <table>
                            <tr>
                                <td>Endereço: &nbsp;</td>
                                <td>
                                    <strong><?= $_SESSION['configuracoes']->endereco.' - '.$_SESSION['configuracoes']->numero ?></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>Bairro: &nbsp;</td>
                                <td><strong><?= $_SESSION['configuracoes']->bairro ?></strong></td>
                            </tr>
                            <tr>
                                <td>Cidade: &nbsp;</td>
                                <td><strong><?= $_SESSION['configuracoes']->cidade.' - '.$_SESSION['configuracoes']->estado ?></strong></td>
                            </tr>
                            <tr>
                                <td>CEP: &nbsp;</td>
                                <td><strong><?= $_SESSION['configuracoes']->cep ?></strong></td>
                            </tr>
                            <tr>
                                <td>Telefone: &nbsp;</td>
                                <td><strong><?= $_SESSION['configuracoes']->telefone ?></strong></td>
                            </tr>
                        </table>
                        <br/>

                        <h2 class='center'>E-mails:</h2>

                        <div class='row'>
                            <div class='4u'>
                                <h3 class='underline'>Setores</h3>
                                <ul class='emailsList'>
                                    <li>
                                        <a href='mailto:administracao@groupsofter.com.br' alt='Administração' title='Administração'>Administração</a>
                                    </li>
                                    <li>
                                        <a href='mailto:desenvolvimento@groupsofter.com.br' alt='Desenvolvimento' title='Desenvolvimento'>Desenvolvimento</a>
                                    </li>
                                </ul>
                            </div>

                            <div class='4u'>  
                                <h3 class='underline'>Funcionários</h3>
                                <ul class='emailsList'>
                                    <li>
                                        <a href='mailto:rogerio@groupsofter.com.br' alt='Rogério' title='Rogério'>Rogério</a><br/>
                                    </li>
                                    <li>
                                        <a href='mailto:sarah@groupsofter.com.br' alt='Sarah' title='Sarah'>Sarah</a><br/>
                                    </li>
                                </ul>
                            </div>

                            <div class='4u'>  
                                <h3 class='underline'>Serviços</h3>
                                <ul class='emailsList'>
                                    <li>
                                        <a href='mailto:socialmedia@groupsofter.com.br' alt='Social Media' title='Social Media'>Social Media</a>
                                    </li>
                                    <li>
                                        <a href='mailto:suporte@groupsofter.com.br' alt='Suporte' title='Suporte'>Suporte</a>
                                    </li>
                                    <li>
                                        <a href='mailto:contato@groupsofter.com.br' alt='Contato' title='Contato'>Contato</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <br/>
                    </div>
                </div>
            <?php
            include_once('js/jsMascaras.php');
        }
    }
?>