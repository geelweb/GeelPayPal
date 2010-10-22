<?php
/**
 * $Id$
 *
 * DoVoid response implementation
 *
 * @version $Revision$
 * @author  Guillaume Luchet <guillaume@geelweb.org>
 * @copyright Copyright (c) 2010, Guillaume Luchet
 */

class GeelPayPal_Response_DoVoid extends GeelPayPal_Response_Abstract
{
    /**
     * Authorisation number setted in the request
     *
     * @var string
     * @access private
     */
    private $_authorizationID;

    /**
     * Set the authorization number
     *
     * @param mixed $id
     * @access public
     * @return void
     * @todo check string length
     */
    public function setAuthorizationID($id)
    {
        $this->_authorizationID = $id;
        return $this;
    }

    /**
     * Get the authorization number
     *
     * @access public
     * @return void
     */
    public function getAuthorizationID()
    {
        return $this->_authorizationID;
    }
}
