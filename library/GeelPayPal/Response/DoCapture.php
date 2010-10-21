<?php
/**
 * $Id$
 *
 * DoCapture response request
 *
 * @version $Revision$
 * @author  Guillaume Luchet <gluchet@elma.fr>
 * @copyright Copyright (c) 2010, Elma Ingénierie Informatique
 */

require_once 'GeelPayPal/Response/Abstract.php';
require_once 'GeelPayPal/Type/PaymentInfo.php';

class GeelPayPal_Response_DoCapture extends GeelPayPal_Response_Abstract
{
    /**
     * Authorization ID provide in the request
     *
     * @var string
     * @access private
     */
    private $_authorizationID = null;

    /**
     * Informations about the payment
     *
     * @var GeelPayPal_Type_PaymentInfo
     * @access private
     */
    private $_paymentInfo = null;

    /**
     * Set the authotization ID
     *
     * @param mixed $id
     * @access public
     * @return void
     */
    public function setAuthotizationID($id)
    {
        $this->_authorizationID = $id;
        return $this;
    }

    /**
     * Get the authorization ID
     *
     * @access public
     * @return void
     */
    public function getAuthorizationID()
    {
        return $this->_authorizationID;
    }

    /**
     * Set the payment informations
     *
     * @param mixed $info
     * @access public
     * @return void
     */
    public function setPaymentInfo($info)
    {
        if (!($info instanceof GeelPayPal_Type_PaymentInfo)) {
            $info = new GeelPayPal_Type_PaymentInfo($info);
        }
        $this->_paymentInfo = $info;
        return $this;
    }

    /**
     * Get the payment informations
     *
     * @access public
     * @return void
     */
    public function getPaymentInfo()
    {
        return $this->_paymentInfo;
    }
}
