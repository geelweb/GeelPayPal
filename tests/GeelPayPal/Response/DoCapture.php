<?php
/**
 * $Id$
 *
 * Test the DoCapture response object
 *
 * @version $Revision$
 * @author  Guillaume Luchet <guillaume@geelweb.org>
 * @copyright Copyright (c) 2010, 
 */


require_once dirname(__FILE__) . '/../../TestHelper.php';
require_once 'GeelPayPal/Response/DoCapture.php';

class GeelPayPal_Response_DoCaptureTest extends PHPUnit_Framework_Testcase
{
    public function testSetGetAuthorizationID()
    {
        $id = 'foo';
        $obj = new GeelPayPal_Response_DoCapture;
        $test = $obj->setAuthotizationID($id);
        $this->assertSame($test, $obj);
        $this->assertEquals($id, $obj->getAuthorizationID());
    }

    public function testSetGetPaymentInfo()
    {
        $info = new GeelPayPal_Type_PaymentInfo;
        $obj = new GeelPayPal_Response_DoCapture;
        $test = $obj->setPaymentInfo($info);
        $this->assertSame($test, $obj);
        $this->assertEquals($id, $obj->getPaymentInfo());
    }
}
