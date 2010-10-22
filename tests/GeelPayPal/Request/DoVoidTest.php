<?php
/**
 * $Id$
 *
 * Test the DoVoid request implementation
 *
 * @version $Revision$
 * @author  Guillaume Luchet <guillaume@geelweb.org>
 * @copyright Copyright (c) 2010, 
 */

require_once 'TestHelper.php';
require_once 'GeelPayPal/Request/DoVoid.php';

class GeelPayPal_Request_DoVoidTest extends PHPUnit_Framework_TestCase
{
    public function testSetGetDoAuthorizationID()
    {
        $id = 'foo bar';
        $obj = new GeelPayPal_Request_DoVoid;
        $test = $obj->setAuthorizationID($id);
        $this->assertSame($obj, $test);
        $this->assertEquals($id, $obj->getAuthorizationID());
    }

    public function testSetGetNote()
    {
        $note = 'foo foo bar';
        $obj = new GeelPayPal_Request_DoVoid;
        $test = $obj->setNote($note);
        $this->assertSame($obj, $test);
        $this->assertEquals($note, $obj->getNote());
    }
}
