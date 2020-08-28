<?php
/**
 * phpDocumentor WP Plugin
 *
 * PHP Version 5.3
 *
 * @author    Zack Katz (zack@katz.co)
 * @copyright Katz Web Services, Inc. (https://www.katzwebservices.com)
 * @license   http://www.opensource.org/licenses/mit-license.php MIT
 * @link      https://www.katzwebservices.com
 */

namespace KWS\Plugin\WP;

use Cilex\Application;
use Cilex\ServiceProviderInterface;

/**
 * Adds actions and filters to the items that phpDocumentor reads.
 */
class ServiceProvider implements ServiceProviderInterface {

	/**
	 * Registers services on the given app.
	 *
	 * @param Application $app An Application instance.
	 */
	public function register( Application $app ) {

		/** @var Translator $translator */
		$translator = $app['translator'];

		/** @var Collection $writerCollection */
		$writerCollection = $app['transformer.writer.collection'];

		$writerCollection['twig'] = new Writer\Twig();
		$writerCollection['twig']->setTranslator( $translator );
	}
}
