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
require_once 'GeelPayPal/Response/Abstract.php';

class responseAbstractToTest extends GeelPayPal_Response_Abstract
{
}

class GeelPayPal_Response_AbstractTest extends PHPUnit_Framework_Testcase
{
    public function testSetGetTimestamp()
    {
        $ts = time();
        $obj = new responseAbstractToTest;
        $test = $obj->setTimestamp($ts);
        $this->assertSame($test, $obj);
        $this->assertEquals($ts, $obj->getTimestamp());
    }

    public function testSetGetAck()
    {
        $ack = 'foo';
        $obj = new responseAbstractToTest;
        $test = $obj->setAck($ack);
        $this->assertSame($test, $obj);
        $this->assertEquals($ack, $obj->getAck());
    }

    public function testSetGetCorrelationID()
    {
        $id = 'foo';
        $obj = new responseAbstractToTest;
        $test = $obj->setCorrelationID($id);
        $this->assertSame($test, $obj);
        $this->assertEquals($id, $obj->getCorrelationID());
    }

    public function testSetGetErrors()
    {
        $err = 'foo';
        $obj = new responseAbstractToTest;
        $test = $obj->setErrors($err);
        $this->assertSame($test, $obj);
        $this->assertEquals($err, $obj->getErrors());
    }

    public function testSetGetVersion()
    {
        $version = 'foo';
        $obj = new responseAbstractToTest;
        $test = $obj->setVersion($version);
        $this->assertSame($test, $obj);
        $this->assertEquals($version, $obj->getVersion());
    }

    public function testSetGetBuild()
    {
        $version = 'foo';
        $obj = new responseAbstractToTest;
        $test = $obj->setBuild($version);
        $this->assertSame($test, $obj);
        $this->assertEquals($version, $obj->getBuild());
    }
}
