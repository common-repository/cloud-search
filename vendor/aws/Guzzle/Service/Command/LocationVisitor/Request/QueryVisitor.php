<?php

namespace WP_Cloud_Search\Guzzle\Service\Command\LocationVisitor\Request;

use WP_Cloud_Search\Guzzle\Http\Message\RequestInterface;
use WP_Cloud_Search\Guzzle\Service\Command\CommandInterface;
use WP_Cloud_Search\Guzzle\Service\Description\Parameter;
/**
 * Visitor used to apply a parameter to a request's query string
 */
class QueryVisitor extends \WP_Cloud_Search\Guzzle\Service\Command\LocationVisitor\Request\AbstractRequestVisitor
{
    public function visit(\WP_Cloud_Search\Guzzle\Service\Command\CommandInterface $command, \WP_Cloud_Search\Guzzle\Http\Message\RequestInterface $request, \WP_Cloud_Search\Guzzle\Service\Description\Parameter $param, $value)
    {
        $request->getQuery()->set($param->getWireName(), $this->prepareValue($value, $param));
    }
}
