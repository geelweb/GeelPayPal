<?php
/**
 * $Id$
 *
 * Test the GeelPayPal_Request_DoCapture object
 *
 * @version $Revision$
 * @author  Guillaume Luchet <gluchet@elma.fr>
 * @copyright Copyright (c) 2010, Elma Ingénierie Informatique
 */

require_once dirname(__FILE__) . '/../../TestHelper.php';
require_once 'GeelPayPal/Request/DoCapture.php';

class GeelPayPal_Request_DoCaptureTest extends PHPUnit_Framework_Testcase
{
    public function testSetGetAuthorizationID()
    {
        $value = 'foo';
        $obj = new GeelPayPal_Request_DoCapture;
        $test = $obj->setAuthorizationID($value);
        $this->assertSame($obj, $test);
        $this->assertEquals($value, $obj->getAuthorizationID());
    }

    public function testSetGetAmount()
    {
        $amount = 42;
        $obj = new GeelPayPal_Request_DoCapture;
        $test = $obj->setAmount($amount);
        $this->assertSame($obj, $test);
        $this->assertEquals($amount, $obj->getAmount());
    }

    public function testSetGetCompleteType()
    {
        $type = 'foo';
        $obj = new GeelPayPal_Request_DoCapture;
        $test = $obj->setCompleteType($type);
        $this->assertSame($obj, $test);
        $this->assertEquals($type, $obj->getCompleteType());
    }

    public function testSetGetInvoiceID()
    {
        $id = 'foo';
        $obj = new GeelPayPal_Request_DoCapture;
        $test = $obj->setInvoiceID($id);
        $this->assertSame($obj, $test);
        $this->assertEquals($id, $obj->getInvoiceID());
    }

    public function testSetGetRemarque()
    {
        $rmq = 'foo bar';
        $obj = new GeelPayPal_Request_DoCapture;
        $test = $obj->setRemarque($rmq);
        $this->assertSame($obj, $test);
        $this->assertEquals($rmq, $obj->getRemarque());
    }
}
