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

namespace phpDocumentor\Plugin\Core\Transformer\Behaviour\Tag;

/**
 * Behaviour that adds support for the @filter tag
 */
class FilterTag extends ParamTag
{
    protected $element_name = 'filter';
}
