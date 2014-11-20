<?php

/**
 * \AppserverIo\WebServer\Mock\MockRewriteModule
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * PHP version 5
 *
 * @category   Server
 * @package    WebServer
 * @subpackage Mock
 * @author     Bernhard Wick <bw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io/webserver
 */

namespace AppserverIo\WebServer\Mock;

use AppserverIo\WebServer\Modules\RewriteModule;
use AppserverIo\Server\Interfaces\RequestContextInterface;
use AppserverIo\Connection\ConnectionRequestInterface;

/**
 * Class MockRewriteModule
 *
 * Mocks the RewriteModule class to expose additional and hidden functionality
 *
 * @category   Server
 * @package    WebServer
 * @subpackage Mock
 * @author     Bernhard Wick <bw@appserver.io>
 * @copyright  2014 TechDivision GmbH <info@appserver.io>
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link       https://github.com/appserver-io/webserver
 */
class MockRewriteModule extends RewriteModule
{

    /**
     * Needed for simple tests the getRequestContext() method
     *
     * @param \AppserverIo\Server\Interfaces\RequestContextInterface $requestContext The request context
     *
     * @return void
     */
    public function setRequestContext(RequestContextInterface $requestContext)
    {
        $this->requestContext = $requestContext;
    }

    /**
     * Used to read protected member $serverBackreferences
     *
     * @return array
     */
    public function getServerBackreferences()
    {
        return $this->serverBackreferences;
    }

    /**
     * Exposes the parent method
     *
     * @throws \AppserverIo\Server\Exceptions\ModuleException
     *
     * @return void
     */
    public function fillContextBackreferences()
    {
        parent::fillContextBackreferences();
    }

    /**
     * Exposes the parent method
     *
     * @param \AppserverIo\Connection\ConnectionRequestInterface $request The request instance
     *
     * @return void
     */
    public function fillHeaderBackreferences(ConnectionRequestInterface $request)
    {
        parent::fillHeaderBackreferences($request);
    }
}