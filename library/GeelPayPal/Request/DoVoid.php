<?php
/**
 * $Id$
 *
 * PayPal DoVoid request used to cancel a transaction
 *
 * @version $Revision$
 * @author  Guillaume Luchet <guillaume@geelweb.org>
 * @copyright Copyright (c) 2010, 
 */

/**
 * GeelPayPal_Request_DoVoid
 *
 * @version $Revision$
 * @copyright Copyright (c) 2010, 
 * @author Guillaume Luchet <guillaume@geelweb.org>
 * @license
 * @package
 */
class GeelPayPal_Request_DoVoid extends GeelPayPal_Request_Abstract
{
    /**
     * Authorization number returned by a PayPal product
     *
     * @var string
     * @access private
     */
    private $_authorizationID;

    /**
     * Information note about the cancellation
     *
     * @var string
     * @access private
     */
    private $_note;

    /**
     * Set the authorization ID of the transaction to cancelled.
     *
     * @param mixed $id
     * @access public
     * @return GeelPayPal_Request_DoVoid
     * @todo check the string length
     */
    public function setAuthorizationID($id)
    {
        $this->_authorizationID = $id;
        return $this;
    }

    /**
     * Get the authorization ID
     *
     * @access public
     * @return string
     */
    public function getAuthorizationID()
    {
        return $this->_authorizationID;
    }

    /**
     * Set the note about the cancellation. This note will be sent by email to
     * the payment issuer and will be displayed ib his transactions history.
     *
     * @param string $note
     * @access public
     * @return void
     * @todo check the string length
     */
    public function setNote($note)
    {
        $this->_note = $note;
        return $this;
    }

    /**
     * Get the note
     *
     * @access public
     * @return void
     */
    public function getNote()
    {
        return $this->_note;
    }
}
