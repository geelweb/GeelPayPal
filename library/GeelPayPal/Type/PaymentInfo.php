<?php
/**
 * $Id$
 *
 * PayPal payment info type implementation
 *
 * @version $Revision$
 * @author  Guillaume Luchet <guillaume@geelweb.org>
 * @copyright Copyright (c) 2010, Elma Ingénierie Informatique
 */

/**
 * GeelPayPal_Type_PaymentInfo
 *
 * @version $Revision$
 * @copyright Copyright (c) 2010, Elma Ingénierie Informatique
 * @author Guillaume Luchet <guillaume@geelweb.org>
 * @license
 * @package
 */
class GeelPayPal_Type_PaymentInfo
{
    /**
     * Unique payment transaction number
     *
     * @var string
     * @access private
     */
    private $_transactionID;

    /**
     * Transaction ID of the parent transaction or of a linked transaction
     *
     * @var mixed
     * @access private
     */
    private $_parentTransactionID;

    /**
     * Receipt ID
     *
     * @var string
     * @access private
     */
    private $_receiptID;

    /**
     * Transaction type
     *
     * @var string
     * @access private
     */
    private $_transactionType;

    /**
     * Payment type (none, echeck, instant)
     *
     * @var string
     * @access private
     */
    private $_paymentType;

    /**
     * Payment date
     *
     * @var date
     * @access private
     */
    private $_paymentDate;

    /**
     * Final amount invoiced including all fees and VAT
     *
     * @var AmountType
     * @access private
     */
    private $_grossAmount;

    /**
     * PayPal commission invoiced for the transaction
     *
     * @var AmountType
     * @access private
     */
    private $_feeAmount;

    /**
     * Amount set on your PayPal account when a currency conversion is done
     *
     * @var AmountType
     * @access private
     */
    private $_settleAmount;

    /**
     * VAT amount
     *
     * @var mixed
     * @access private
     */
    private $_taxAmount;

    /**
     * Exchange rate use if a currency conversion is done
     *
     * @var mixed
     * @access private
     */
    private $_exchangeRate;

    /**
     * Payment status
     *
     * @var PaymentStatusCodeType
     * @access private
     */
    private $_paymentStatus;

    /**
     * Pending reason. Used to explain why a payment is pending.
     *
     * @var mixed
     * @access private
     */
    private $_pendingReason;

    /**
     * Set the transaction ID
     *
     * @param mixed $id
     * @access public
     * @return void
     */
    public function setTransactionID($id)
    {
        $this->_transactionID = $id;
        return $this;
    }

    /**
     * Get the transaction ID
     *
     * @access public
     * @return void
     */
    public function getTransactionID()
    {
        return $this->_transactionID;
    }

    /**
     * Set the parent transaction ID
     *
     * @param mixed $id
     * @access public
     * @return void
     */
    public function setParentTransactionID($id)
    {
        $this->_parentTransactionID = $id;
        return $this;
    }

    /**
     * Get the parent transaction ID
     *
     * @access public
     * @return void
     */
    public function getParentTransactionID()
    {
        return $this->_parentTransactionID;
    }

    /**
     * Set the receipt ID
     *
     * @param mixed $id
     * @access public
     * @return void
     * @todo check the format xxxx-xxxx-xxxx-xxxx
     */
    public function setReceiptID($id)
    {
        $this->_receiptID = $id;
        return $this;
    }

    /**
     * Get the receipt ID
     *
     * @access public
     * @return void
     */
    public function getReceiptID()
    {
        return $this->_receiptID;
    }

    /**
     * Set the transaction type
     *
     * @param mixed $trType
     * @access public
     * @return void
     */
    public function setTransactionType($trType)
    {
        $this->_transactionType = $trType;
        return $this;
    }

    /**
     * Get the transaction type
     *
     * @access public
     * @return void
     */
    public function getTransactionType()
    {
        return $this->_transactionType;
    }

    /**
     * Set the payment type
     *
     * @param mixed $paymentType
     * @access public
     * @return void
     */
    public function setPaymentType($paymentType)
    {
        $this->_paymentType = $paymentType;
        return $this;
    }

    /**
     * Get the payment type
     *
     * @access public
     * @return void
     */
    public function getPaymentType()
    {
        return $this->_paymentType;
    }

    /**
     * Set the payment date
     *
     * @param mixed $paymentDate
     * @access public
     * @return void
     */
    public function setPaymentDate($paymentDate)
    {
        $this->_paymentDate = $paymentDate;
        return $this;
    }

    /**
     * Get the payment date
     *
     * @access public
     * @return void
     */
    public function getPaymentDate()
    {
        return $this->_paymentDate;
    }

    /**
     * Set the gross amount
     *
     * @param mixed $amount
     * @access public
     * @return void
     */
    public function setGrossAmount($amount)
    {
        $this->_grossAmount = $amount;
        return $this;
    }

    /**
     * Get the gross amount
     *
     * @access public
     * @return void
     */
    public function getGrossAmount()
    {
        return $this->_grossAmount;
    }

    /**
     * Set the fee amount
     *
     * @param mixed $amount
     * @access public
     * @return void
     */
    public function setFeeAmount($amount)
    {
        $this->_feeAmount = $amount;
        return $this;
    }

    /**
     * Get the fee amount
     *
     * @access public
     * @return void
     */
    public function getFeeAmount()
    {
        return $this->_feeAmount;
    }

    /**
     * Set the settle amount
     *
     * @param mixed $amount
     * @access public
     * @return void
     */
    public function setSettleAmount($amount)
    {
        $this->_settleAmount = $amount;
        return $this;
    }

    /**
     * Get the settle amount
     *
     * @access public
     * @return void
     */
    public function getSettleAmount()
    {
        return $this->_settleAmount;
    }

    /**
     * Set the tax amount
     *
     * @param mixed $amount
     * @access public
     * @return void
     */
    public function setTaxAmount($amount)
    {
        $this->_taxAmount = $amount;
        return $this;
    }

    /**
     * Get the tax amount
     *
     * @access public
     * @return void
     */
    public function getTaxAmount()
    {
        return $this->_taxAmount;
    }

    /**
     * Set the exchange rate
     *
     * @param mixed $rate
     * @access public
     * @return void
     */
    public function setExchangeRate($rate)
    {
        $this->_exchangeRate = $rate;
        return $this;
    }

    /**
     * Get the exchange rate
     *
     * @access public
     * @return void
     */
    public function getExchangeRate()
    {
        return $this->_exchangeRate;
    }

    /**
     * Set the payment status
     *
     * @param mixed $status
     * @access public
     * @return void
     */
    public function setPaymentStatus($status)
    {
        $this->_paymentStatus = $status;
        return $this;
    }

    /**
     * get the payment status
     *
     * @access public
     * @return void
     */
    public function getPaymentStatus()
    {
        return $this->_paymentStatus;
    }

    /**
     * set the pending reason
     *
     * @param mixed $reason
     * @access public
     * @return void
     */
    public function setPendingReason($reason)
    {
        $this->_pendingReason = $reason;
        return $this;
    }

    /**
     * Get the pending reason
     *
     * @access public
     * @return void
     */
    public function getPendingReason()
    {
        return $this->_pendingReason;
    }
}
