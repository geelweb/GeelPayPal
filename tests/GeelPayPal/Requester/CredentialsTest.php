<?php
/**
 * $Id$
 *
 * Test the GeelPayPal_Requester_Credentials object
 *
 * @version $Revision$
 * @author  Guillaume Luchet <guillaume@geelweb.org>
 * @copyright Copyright (c) 2010, 
 */

require_once dirname(__FILE__) . '/../../TestHelper.php';
require_once 'GeelPayPal/Requester/Credentials.php';


class GeelPayPal_Requester_CredentialsTest extends PHPUnit_Framework_Testcase
{
    public function testSetGetUsername()
    {
        $user = 'foo';
        $obj = new GeelPayPal_Requester_Credentials;
        $test = $obj->setUsername($user);
        $this->assertSame($obj, $test);
        $this->assertEquals($user, $obj->getUsername());
    }

    public function testSetGetPassword()
    {
        $pwd = 'bar';
        $obj = new GeelPayPal_Requester_Credentials;
        $test = $obj->setPassword($pwd);
        $this->assertSame($obj, $test);
        $this->assertEquals($pwd, $obj->getPassword());
    }

    public function testSetGetSignature()
    {
        $sign = 'foobar';
        $obj = new GeelPayPal_Requester_Credentials;
        $test = $obj->setSignature($sign);
        $this->assertSame($obj, $test);
        $this->assertEquals($sign, $obj->getSignature());
    }

    public function testSetGetSubject()
    {
        $email = 'bar@example.com';
        $obj = new GeelPayPal_Requester_Credentials;
        $test = $obj->setSubject($email);
        $this->assertSame($obj, $test);
        $this->assertEquals($email, $obj->getSubject());
    }
}
