<?php
/**
 * $Id$
 *
 * Test the GeelPayPal_Request_DoAuthorization object
 *
 * @version $Revision$
 * @author  Guillaume Luchet <guillaume@geelweb.org>
 * @copyright Copyright (c) 2010, Elma Ingénierie Informatique
 */

require_once dirname(__FILE__) . '/../../TestHelper.php';
require_once 'GeelPayPal/Request/DoAuthorization.php';

class GeelPayPal_Request_DoAuthorizationTest extends PHPUnit_Framework_Testcase
{
    public function testSetGetTransactionID()
    {
        $id = 'foo bar';
        $obj = new GeelPayPal_Request_DoAuthorization;
        $tst = $obj->setTransactionID($id);
        $this->assertSame($obj, $tst);
        $this->assertEquals($id, $obj->getTransactionID());
    }

    public function testSetGetAmount()
    {
        $amt = 42;
        $obj = new GeelPayPal_Request_DoAuthorization;
        $tst = $obj->setAmount($amt);
        $this->assertSame($obj, $tst);
        $this->assertEquals($amt, $obj->getAmount());
    }

    public function testSetGetTransactionEntity()
    {
        $type = 'foo';
        $obj = new GeelPayPal_Request_DoAuthorization;
        $tst = $obj->setTransactionEntity($type);
        $this->assertSame($obj, $tst);
        $this->assertEquals($type, $obj->getTransactionEntity());
    }
}

