<?php
namespace Core\Controller ;
/**
 * COntroller short summary.
 *
 * COntroller parent.
 *
 * @version 1.0
 * @author Utilisateur
 */
class Controller
{
	protected $viewPath ;
	protected $template ;

	/**
	 *
	 * Retourne une vue donn�e
	 * @param mixed $view  le nom de la vue a afficher
	 * @param array $lesvariables les variables a pousser dans la vue
	 */
	public function render($view ,$lesvariables = array())
	{
		ob_start();
		extract($lesvariables);
		require ($this->viewPath . str_replace('.','/',$view) . '.php' );
		$content = ob_get_clean();
		require ($this->viewPath . 'templates\\'. $this->template . '.php' );

	}

	/**
		* Permet d'afficher des messages d'alertes bien formaté dans la vue
		*
		* @param string $texte Message
		*/
		protected function setAlertDanger($texte, $param = array())
		{
			$id = isset($param['id']) ? 'id="'.$param['id'].'"' : "";
			$class = isset($param['class']) ? $param['class']." " : "";
			$title = isset($param['title']) ? $param['title'] : "Oups";

			$fermer = isset($param['fermer']) ? '<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times; </button>' : "";
			$fermerClass = isset($param['fermer']) ? ' alert-dismissable' : "";

			return '<div '.$id.' class="'.$class.'alert alert-danger'.$fermerClass.'">
					'.$fermer.'
					<strong>'.$title.'! </strong>&nbsp;'.$texte.'
					</div>';
		}

		protected function setAlertSuccess($texte, $param = array())
		{
			$id = isset($param['id']) ? 'id="'.$param['id'].'"' : "";
			$class = isset($param['class']) ? $param['class']." " : "";
			$title = isset($param['title']) ? $param['title'] : "Succès";

			$fermer = isset($param['fermer']) ? '<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times; </button>' : "";
			$fermerClass = isset($param['fermer']) ? ' alert-dismissable' : "";

			return '<div '.$id.' class="'.$class.'alert alert-success'.$fermerClass.'">
					'.$fermer.'
					<strong>'.$title.'! </strong>&nbsp;'.$texte.'
					</div>';
		}

		protected function setAlertWarning($texte, $param = array())
		{
			$id = isset($param['id']) ? 'id="'.$param['id'].'"' : "";
			$class = isset($param['class']) ? $param['class']." " : "";
			$title = isset($param['title']) ? $param['title'] : "Attention";

			$fermer = isset($param['fermer']) ? '<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times; </button>' : "";
			$fermerClass = isset($param['fermer']) ? ' alert-dismissable' : "";

			return '<div '.$id.' class="'.$class.'alert alert-warning'.$fermerClass.'">
					'.$fermer.'
					<strong>'.$title.'! </strong>&nbsp;'.$texte.'
					</div>';
		}

		protected function setAlertInfo($texte, $param = array())
		{
			$id = isset($param['id']) ? 'id="'.$param['id'].'"' : "";
			$class = isset($param['class']) ? $param['class']." " : "";
			$title = isset($param['title']) ? $param['title'] : "Note";

			$fermer = isset($param['fermer']) ? '<button type="button" class="close" data-dismiss="alert" aria-hidden="true"> &times; </button>' : "";
			$fermerClass = isset($param['fermer']) ? ' alert-dismissable' : "";

			return '<div '.$id.' class="'.$class.'alert alert-info'.$fermerClass.'">
					'.$fermer.'
					<strong>'.$title.'! </strong>&nbsp;'.$texte.'
					</div>';
		}

    protected function clean($valeur) {
			return htmlspecialchars($valeur, \ENT_QUOTES, 'UTF-8', false);
		}

		
}
