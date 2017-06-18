<?php
require '../config/config.php';
define("ROOT",DOCUMENT_ROOT);

require DOCUMENT_ROOT.'/app/App.php';
App::load();

if(isset($_GET['p']))
{
	$page = $_GET['p'] ;
}
else
{
	$page = 'utilisateur.login';
}
$page = explode("/",$page);

if(empty($page[0]))
{
    if(!empty($_SESSION))
    {
        //il est deja connectei
        $controller = "utilisateur" ;
        $action = "index";
    }
    else
    {
        $controller = "utilisateur" ;
        $action = "login";
    }
	//rediriger vers la page d'erreur
	//echo "desole fonctionnalite inexistante <br/>  <a href='javascript:history.go(-1);'>Retour</a>";

}
else
{
	$controller = $page[0];
	if(isset($page[1]))
	{
		$action = $page[1];
	}
	else
	{
		$action = 'index' ;
	}

}
$controller = 'App\Controller\\' .ucfirst($controller). 'Controller' ;

$controller =  new $controller();
if(method_exists($controller,$action))
{
    call_user_func_array(array($controller,$action),$p=array());
}
