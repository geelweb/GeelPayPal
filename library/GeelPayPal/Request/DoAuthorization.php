<?php
/**
 * $Id$
 *
 * Implementation of the PayPal DoAuthorisation Request of the authorization
 * and collect API
 *
 * @version $Revision$
 * @author  Guillaume Luchet <guillaume@geelweb.org>
 * @copyright Copyright (c) 2010, 
 */

require_once 'GeelPayPal/Request/Abstract.php';


/**
 * GeelPayPal_Request_DoAuthorization
 *
 * @version $Revision$
 * @copyright Copyright (c) 2010, 
 * @author Guillaume Luchet <guillaume@geelweb.org>
 * @license
 * @package
 */
class GeelPayPal_Request_DoAuthorization extends GeelPayPal_Request_Abstract
{
    /**
     * Order transaction number returned b yPayPal
     *
     * @var string
     * @access private
     */
    private $_transactionID;

    /**
     * Amount to authorize (less than $10.000 USD)
     *
     * @var BasicAmount
     * @access private
     */
    private $_amount;

    /**
     * Transaction type to authorize
     *
     * @var TransactionEntityType
     * @access private
     */
    private $_transactionEntity;

    /**
     * Set the order transaction number
     *
     * @param string $id
     * @access public
     * @return GeelPayPal_Request_DoAuthorization
     */
    public function setTransactionID($id)
    {
        $this->_transactionID = $id;
        return $this;
    }

    /**
     * Get the transaction number
     *
     * @access public
     * @return string
     */
    public function getTransactionID()
    {
        return $this->_transactionID;
    }

    /**
     * Set the amount to authorize
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
     * Get the amount
     *
     * @access public
     * @return void
     */
    public function getAmount()
    {
        return $this->_amount;
    }

    /**
     * Set the transaction type to authorize
     *
     * @param mixed $entity
     * @access public
     * @return void
     * @todo check the value
     */
    public function setTransactionEntity($entity)
    {
        $this->_transactionEntity = $entity;
        return $this;
    }

    /**
     * Get the transaction type
     *
     * @access public
     * @return void
     */
    public function getTransactionEntity()
    {
        return $this->_transactionEntity;
    }
}
