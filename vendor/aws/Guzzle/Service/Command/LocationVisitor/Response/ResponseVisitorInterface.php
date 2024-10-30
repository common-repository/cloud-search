<?php

namespace WP_Cloud_Search\Guzzle\Service\Command\LocationVisitor\Response;

use WP_Cloud_Search\Guzzle\Http\Message\Response;
use WP_Cloud_Search\Guzzle\Service\Description\Parameter;
use WP_Cloud_Search\Guzzle\Service\Command\CommandInterface;
/**
 * Location visitor used to parse values out of a response into an associative array
 */
interface ResponseVisitorInterface
{
    /**
     * Called before visiting all parameters. This can be used for seeding the result of a command with default
     * data (e.g. populating with JSON data in the response then adding to the parsed data).
     *
     * @param CommandInterface $command Command being visited
     * @param array            $result  Result value to update if needed (e.g. parsing XML or JSON)
     */
    public function before(\WP_Cloud_Search\Guzzle\Service\Command\CommandInterface $command, array &$result);
    /**
     * Called after visiting all parameters
     *
     * @param CommandInterface $command Command being visited
     */
    public function after(\WP_Cloud_Search\Guzzle\Service\Command\CommandInterface $command);
    /**
     * Called once for each parameter being visited that matches the location type
     *
     * @param CommandInterface $command  Command being visited
     * @param Response         $response Response being visited
     * @param Parameter        $param    Parameter being visited
     * @param mixed            $value    Result associative array value being updated by reference
     * @param mixed            $context  Parsing context
     */
    public function visit(\WP_Cloud_Search\Guzzle\Service\Command\CommandInterface $command, \WP_Cloud_Search\Guzzle\Http\Message\Response $response, \WP_Cloud_Search\Guzzle\Service\Description\Parameter $param, &$value, $context = null);
}
