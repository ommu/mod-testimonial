<?php
/**
 * testimonial module definition class
 *
 * @author Putra Sudaryanto <putra@sudaryanto.id>
 * @contact (+62)856-299-4114
 * @copyright Copyright (c) 2018 ECC UGM (ecc.ft.ugm.ac.id)
 * @created date 14 May 2018, 18:12 WIB
 * @link http://ecc.ft.ugm.ac.id
 *
 */

namespace app\modules\testimonial;

class Module extends \app\components\Module
{
	public $layout = 'main';

	/**
	 * @inheritdoc
	 */
	public $controllerNamespace = 'app\modules\testimonial\controllers';

	/**
	 * @inheritdoc
	 */
	public function init()
	{
		parent::init();

		// custom initialization code goes here
	}
}
