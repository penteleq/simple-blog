<?php
/**
 * Created by PhpStorm.
 * User: Rafal
 * Date: 2016-03-13
 * Time: 19:59
 */

namespace AppBundle\Traits;

/**
 * Class JsonTrait as a helper to jsonify entities
 *
 * JMSSerializerBundle was not compatible with PHP 5.6
 *
 *
 * @package AppBundle\Traits
 */
trait JsonTrait
{
    public function toJson()
    {
        $result = [
            'id' => $this->getId()
        ];

        return ($result);
    }
}