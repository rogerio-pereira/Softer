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
                <div class='row'>
                    <div class='12u'>
                        <h1 class='center'>Contato</h1>
                    </div>

                    <div class='5u -1u'>
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

                    <div class='4u -1u' style='padding:0px;'>
                        <!--FACEBOOK PAGE-->
                        <div class='facebookPage'>
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
                                data-width="1000" 
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
                        </div>

                        <table style="margin:0 auto;">
                            <tr>
                                <td>Endereço:&nbsp;</td>
                                <td>
                                    <strong>
                                        <?= $_SESSION['configuracoes']->endereco.' - '.$_SESSION['configuracoes']->numero ?>
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td>Bairro:&nbsp;</td>
                                <td>
                                    <strong>
                                        <?= $_SESSION['configuracoes']->bairro ?>
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td>Cidade:&nbsp;</td>
                                <td>
                                    <strong>
                                        <?= $_SESSION['configuracoes']->cidade.' - '.$_SESSION['configuracoes']->estado ?>
                                    </strong>
                                </td>
                            </tr>
                            <tr>
                                <td>CEP:&nbsp;</td>
                                <td><strong><?= $_SESSION['configuracoes']->cep ?></strong></td>
                            </tr>
                            <tr>
                                <td>Telefone:&nbsp;</td>
                                <td>
                                    <strong>
                                        <?= $_SESSION['configuracoes']->telefone ?>
                                    </strong>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            <?php
        }
    }
?>