<?php
/**
 * $Id$
 *
 * PayPal DoAuthorization response implementation
 *
 * @version $Revision$
 * @author  Guillaume Luchet <guillaume@geelweb.org>
 * @copyright Copyright (c) 2010, 
 */

/**
 * GeelPayPal_Response_DoAuthorization
 *
 * @version $Revision$
 * @copyright Copyright (c) 2010, 
 * @author Guillaume Luchet <guillaume@geelweb.org>
 * @license
 * @package
 */
class GeelPayPal_Response_DoAuthorization extends GeelPayPal_Response_Abstract
{
    /**
     * Autorizattion identification number
     *
     * @var string
     * @access private
     */
    private $_transactionID;

    /**
     * Amount setted in the request
     *
     * @var BasicAmount
     * @access private
     */
    private $_amount;

    /**
     * Set the identification number
     *
     * @param string $id
     * @access public
     * @return GeelPayPal_Response_DoAuthorization
     * @todo check the string length
     */
    public function setTransactionID($id)
    {
        $this->_transactionID = $id;
        return $this;
    }

    /**
     * Get the authorization identification number
     *
     * @access public
     * @return string
     */
    public function getTransactionID()
    {
        return $this->_transactionID;
    }

    /**
     * Set the amount
     *
     * @param mixed $amount
     * @access public
     * @return void
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
}
