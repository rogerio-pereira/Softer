<?php 
    //header('Content-type: text/html; charset=UTF-8'); 
    header('Content-type: text/html; charset=ISO-8859-1');
?>

<?php 
/*
 *  Funcao Autoload
 *  Carraga a classe quando for instanciada
 */
function __autoload($classe)
{
    $pastas = array('app.widgets', 'app.ado', 'app.config', 'app.model', 'app.control','app.view');
    foreach ($pastas as $pasta)
    {
        if (file_exists("{$pasta}/{$classe}.php"))
        {
            include_once "{$pasta}/{$classe}.php";
        }
    }
}

/*
 *  Classe TApllication
 *  Aplicacao Principal
 */
class TApplicatioN
{
    /*
     *  Funcao run
     *  Carrega conteudo da pagina
     */
    static public function run()
    {
        //Suprimir Warnings
        //error_reporting(E_WARNING);
        
        //$template = file_get_contents('app.view/template.class.php');
        $template = new template;
        ob_start();
        $template->show();
        $template = ob_get_contents();
        ob_get_clean();
        
        $content = '';
        /*
         *  Se tiver parametros na URL, carrega a classe
         */
        if ($_GET)
        {
            $class = $_GET['class'];

            if (class_exists($class))
            {
                $pagina = new $class;
                ob_start();
                $pagina->show();
                $content = ob_get_contents();
                ob_end_clean();
            }
            else
            {
                $pagina = new erro();
                $pagina->codigo = 404;
                ob_start();
                $pagina->show();
                $content = ob_get_contents();
                ob_end_clean();
            }
        }
        /*
         * Caso nao tenha parametros na URL, carreaga padrao
         */
        else
        {
            $pagina 	= new home();
            ob_start();
            $pagina->show();
            $content 	= ob_get_contents();
            ob_end_clean();				
        }
        /*
         *  Susbstitui a string #CONTENT# do template para a pagina principal
         */
        $site = str_replace('#CONTENT#', $content, $template);
        echo $site;
    }
}
//new ContaVisitas();
TApplication::run();
?>

