<?php
/**
 * $Id$
 *
 * Test the Payment info type object
 *
 * @version $Revision$
 * @author  Guillaume Luchet <gluchet@elma.fr>
 * @copyright Copyright (c) 2010, Elma Ingénierie Informatique
 */


require_once dirname(__FILE__) . '/../../TestHelper.php';
require_once 'GeelPayPal/Type/PaymentInfo.php';

class GeelPayPal_Type_PaymentInfoTest extends PHPUnit_Framework_Testcase
{
    public function testSetGetTransactionID()
    {
        $val = 'foo';
        $obj = new GeelPayPal_Type_PaymentInfo;
        $tst = $obj->setTransactionID($val);
        $this->assertSame($tst, $obj);
        $this->assertEquals($val, $obj->getTransactionID());
    }

    public function testSetGetParentTransactionID()
    {
        $val = 'foo';
        $obj = new GeelPayPal_Type_PaymentInfo;
        $tst = $obj->setParentTransactionID($val);
        $this->assertSame($tst, $obj);
        $this->assertEquals($val, $obj->getParentTransactionID());
    }

    public function testSetGetReceiptID()
    {
        $val = 'foo';
        $obj = new GeelPayPal_Type_PaymentInfo;
        $tst = $obj->setReceiptID($val);
        $this->assertSame($tst, $obj);
        $this->assertEquals($val, $obj->getReceiptID());
    }

    public function testSetGetTransactionType()
    {
        $val = 'foo';
        $obj = new GeelPayPal_Type_PaymentInfo;
        $tst = $obj->setTransactionType($val);
        $this->assertSame($tst, $obj);
        $this->assertEquals($val, $obj->getTransactionType());
    }

    public function testSetGetPaymentType()
    {
        $val = 'foo';
        $obj = new GeelPayPal_Type_PaymentInfo;
        $tst = $obj->setPaymentType($val);
        $this->assertSame($tst, $obj);
        $this->assertEquals($val, $obj->getPaymentType());
    }

    public function testSetGetPaymentDate()
    {
        $val = 'foo';
        $obj = new GeelPayPal_Type_PaymentInfo;
        $tst = $obj->setPaymentDate($val);
        $this->assertSame($tst, $obj);
        $this->assertEquals($val, $obj->getPaymentDate());
    }

    public function testSetGetGrossAmount()
    {
        $val = 'foo';
        $obj = new GeelPayPal_Type_PaymentInfo;
        $tst = $obj->setGrossAmount($val);
        $this->assertSame($tst, $obj);
        $this->assertEquals($val, $obj->getGrossAmount());
    }

    public function testSetGetFeeAmount()
    {
        $val = 'foo';
        $obj = new GeelPayPal_Type_PaymentInfo;
        $tst = $obj->setFeeAmount($val);
        $this->assertSame($tst, $obj);
        $this->assertEquals($val, $obj->getFeeAmount());
    }

    public function testSetGetSettleAmount()
    {
        $val = 'foo';
        $obj = new GeelPayPal_Type_PaymentInfo;
        $tst = $obj->setSettleAmount($val);
        $this->assertSame($tst, $obj);
        $this->assertEquals($val, $obj->getSettleAmount());
    }

    public function testSetGetTaxAmount()
    {
        $val = 'foo';
        $obj = new GeelPayPal_Type_PaymentInfo;
        $tst = $obj->setTaxAmount($val);
        $this->assertSame($tst, $obj);
        $this->assertEquals($val, $obj->getTaxAmount());
    }

    public function testSetGetExchangeRate()
    {
        $val = 'foo';
        $obj = new GeelPayPal_Type_PaymentInfo;
        $tst = $obj->setExchangeRate($val);
        $this->assertSame($tst, $obj);
        $this->assertEquals($val, $obj->getExchangeRate());
    }

    public function testSetGetPaymentStatus()
    {
        $val = 'foo';
        $obj = new GeelPayPal_Type_PaymentInfo;
        $tst = $obj->setPaymentStatus($val);
        $this->assertSame($tst, $obj);
        $this->assertEquals($val, $obj->getPaymentStatus());
    }

    public function testSetGetPendingReason()
    {
        $val = 'foo';
        $obj = new GeelPayPal_Type_PaymentInfo;
        $tst = $obj->setPendingReason($val);
        $this->assertSame($tst, $obj);
        $this->assertEquals($val, $obj->getPendingReason());
    }
}
