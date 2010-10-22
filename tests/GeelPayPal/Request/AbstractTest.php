<?php
/**
 * $Id$
 *
 * description
 *
 * @version $Revision$
 * @author  Guillaume Luchet <guillaume@geelweb.org>
 * @copyright Copyright (c) 2010, 
 */

require_once dirname(__FILE__) . '/../../TestHelper.php';
require_once 'GeelPayPal/Request/Abstract.php';

class requestAbstractToTest extends GeelPayPal_Request_Abstract
{
}

class GeelPayPal_Request_AbstractTest extends PHPUnit_Framework_Testcase
{
    public function testSetGetVersion()
    {
        $version = 'foo';
        $obj = new requestAbstractToTest;
        $test = $obj->setVersion($version);
        $this->assertSame($test, $obj);
        $this->assertEquals($version, $obj->getVersion());
    }
}
