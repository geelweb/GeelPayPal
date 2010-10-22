<?php
/**
 * $Id$
 *
 * Test the DoVoid response object
 *
 * @version $Revision$
 * @author  Guillaume Luchet <guillaume@geelweb.org>
 * @copyright Copyright (c) 2010, Guillaume Luchet
 */

require_once 'TestHelper.php';
require_once 'GeelPayPal/Response/DoVoid.php';

class GeelPayPal_Response_DoVoidTest extends PHPUnit_Framework_TestCase
{
    public function testSetGetDoAuthorizationID()
    {
        $id = 'foo bar';
        $obj = new GeelPayPal_Response_DoVoid;
        $test = $obj->setAuthorizationID($id);
        $this->assertSame($obj, $test);
        $this->assertEquals($id, $obj->getAuthorizationID());
    }
}
