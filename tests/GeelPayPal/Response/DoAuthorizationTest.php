<?php
/**
 * $Id$
 *
 * Test the DoAuthorization request impolementation
 *
 * @version $Revision$
 * @author  Guillaume Luchet <guillaume@geelweb.org>
 * @copyright Copyright (c) 2010, 
 */

require_once dirname(__FILE__) . '/../../TestHelper.php';
require_once 'GeelPayPal/Response/DoAuthorization.php';

class GeelPayPal_Response_DoAuthorizationTest extends PHPUnit_Framework_Testcase
{
    public function testSetGetTransactionID()
    {
        $id = 'foo bar';
        $obj = new GeelPayPal_Response_DoAuthorization;
        $tst = $obj->setTransactionID($id);
        $this->assertSame($obj, $tst);
        $this->assertEquals($id, $obj->getTransactionID());
    }

    public function testSetGetAmount()
    {
        $amt = 42;
        $obj = new GeelPayPal_Response_DoAuthorization;
        $tst = $obj->setAmount($amt);
        $this->assertSame($obj, $tst);
        $this->assertEquals($amt, $obj->getAmount());
    }
}
