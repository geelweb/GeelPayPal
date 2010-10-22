<?php
/**
 * $Id$
 *
 * GeelPayPal_Requester_Credentials
 *
 * Define the credentials part to include in the SOAP request header
 *
 * @version $Revision$
 * @author  Guillaume Luchet <guillaume@geelweb.org>
 * @copyright Copyright (c) 2010, Elma Ingénierie Informatique
 */

class GeelPayPal_Requester_Credentials
{
    /**
     * API username generate by PayPal when you ask a numeric certificate to use
     * the SOAP API
     *
     * @var string
     * @access private
     */
    private $_username;

    /**
     * API password than you choose when you ask a numeric certificate to use
     * the PayPal SOAP API
     *
     * @var string
     * @access private
     */
    private $_password;

    /**
     * The signature API if you use one instead of a certificate
     *
     * @var mixed
     * @access private
     */
    private $_signature;

    /**
     * The email address you ask request for.
     *
     * @var mixed
     * @access private
     */
    private $_subject;

    /**
     * Set the PayPal SOAP API username
     *
     * @param string $username
     * @access public
     * @return GeelPayPal_Requester_Credentials
     */
    public function setUsername($username)
    {
        $this->_username = $username;
        return $this;
    }

    /**
     * Get the PayPal SOAP API username
     *
     * @access public
     * @return string
     */
    public function getUsername()
    {
        return $this->_username;
    }

    /**
     * Set the PayPal SOAP API password
     *
     * @param string $pwd
     * @access public
     * @return GeelPayPal_Requester_Credentials
     */
    public function setPassword($pwd)
    {
        $this->_password = $pwd;
        return $this;
    }

    /**
     * Get the PayPal SOAP API password
     *
     * @access public
     * @return void
     */
    public function getPassword()
    {
        return $this->_password;
    }

    /**
     * Set the signature API
     *
     * @param mixed $sign
     * @access public
     * @return GeelPayPal_Requester_Credentials
     */
    public function setSignature($sign)
    {
        $this->_signature = $sign;
        return $this;
    }

    /**
     * Get the signature API
     *
     * @access public
     * @return mixed
     */
    public function getSignature()
    {
        return $this->_signature;
    }

    /**
     * Set the authorizing account email address
     *
     * @param mixed $subject
     * @access public
     * @return void
     */
    public function setSubject($subject)
    {
        $this->_subject = $subject;
        return $this;
    }

    /**
     * Get the authorizing account email address
     *
     * @access public
     * @return void
     */
    public function getSubject()
    {
        return $this->_subject;
    }

}
