<?php
/**
 * $Id$
 *
 * Implementation of the DoCapture request of the authorization and collect
 * PayPal API
 *
 * @version $Revision$
 * @author  Guillaume Luchet <gluchet@elma.fr>
 * @copyright Copyright (c) 2010, Elma Ingénierie Informatique
 */

require_once 'GeelPayPal/Request/Abstract.php';


class GeelPayPal_Request_DoCapture extends GeelPayPal_Request_Abstract
{
    /**
     * _authorizationID
     *
     * @var string
     * @access private
     */
    private $_authorizationID = null;

    /**
     * _amount
     *
     * @var basic amount transaction
     * @access private
     */
    private $_amount = null;

    /**
     * _transactionComplete
     *
     * @var complete codetype
     * @access private
     */
    private $_completeType = null;

    /**
     * _invoiceID
     *
     * @var string
     * @access private
     */
    private $_invoiceID = null;

    /**
     * _remarque
     *
     * @var string
     * @access private
     */
    private $_remarque = null;

    /**
     * set the authorization ID
     *
     * @param mixed $id
     * @access public
     * @return void
     */
    public function setAuthorizationID($id)
    {
        $this->_authorizationID = $id;
        return $this;
    }

    /**
     * get the authorization ID
     *
     * @access public
     * @return void
     */
    public function getAuthorizationID()
    {
        return $this->_authorizationID;
    }

    /**
     * Set the amount to collect
     *
     * @param mixed $amount
     * @access public
     * @return void
     * @todo check the value
     */
    public function setAmount($amount)
    {
        $this->_amount = $amount;
        return $this;
    }

    /**
     * Get the amount to collect
     *
     * @access public
     * @return void
     */
    public function getAmount()
    {
        return $this->_amount;
    }

    /**
     * Set the complete type to define if the transaction is complete  or not
     * complete
     *
     * @param mixed $val
     * @access public
     * @return void
     * @todo check the value
     */
    public function setCompleteType($val)
    {
        $this->_completeType = $val;
        return $this;
    }

    /**
     * Get the complete type for the transaction
     *
     * @access public
     * @return void
     */
    public function getCompleteType()
    {
        return $this->_completeType;
    }

    /**
     * Set the invoice ID
     *
     * @param mixed $id
     * @access public
     * @return void
     */
    public function setInvoiceID($id)
    {
        $this->_invoiceID = $id;
        return $this;
    }

    /**
     * Get the invoice ID
     *
     * @access public
     * @return void
     */
    public function getInvoiceID()
    {
        return $this->_invoiceID;
    }

    /**
     * Set the remarque send by email to the issuer of the payment and display
     * in his transactions history.
     *
     * @param mixed $rmq
     * @access public
     * @return void
     * @todo check max length
     */
    public function setRemarque($rmq)
    {
        $this->_remarque = $rmq;
        return $this;
    }

    /**
     * Get the remarques
     *
     * @access public
     * @return void
     */
    public function getRemarque()
    {
        return $this->_remarque;
    }
}
