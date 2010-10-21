<?php

abstract class GeelPayPal_Response_Abstract
{
    /**
     * Date and our of request generation
     *
     * @var dateTime
     * @access private
     */
    private $_timestamp = null;

    /**
     * Application acknolegment code, can be
     * - Sucess
     * - failure
     * - SuccessWithWarning
     * - FailureWithWarning
     * - Customcode
     *
     * @var token
     * @access private
     */
    private $_ack = null;

    /**
     * String to identify the exact reqest API who generate the response
     *
     * @var string
     * @access private
     */
    private $_correlationID = null;

    /**
     * Error code and messages
     *
     * @var mixed
     * @access private
     */
    private $_errors = null;

    /**
     * PayPal schema version
     *
     * @var string
     * @access private
     */
    private $_version = null;

    /**
     * Version of software who process the request and generate the response
     *
     * @var string
     * @access private
     */
    private $_build = null;

    /**
     * Set the timestamp
     *
     * @param datetime $ts
     * @access public
     * @return The object instance
     */
    public function setTimestamp($ts)
    {
        $this->_timestamp = $ts;
        return $this;
    }

    /**
     * Get the timestamp
     *
     * @access public
     * @return datetime|null
     */
    public function getTimestamp()
    {
        return $this->_timestamp;
    }

    /**
     * set the ack property
     *
     * @param token $ack
     * @access public
     * @return The object instance
     */
    public function setAck($ack)
    {
        $this->_ack = $ack;
        return $this;
    }

    /**
     * Get the ack property
     *
     * @access public
     * @return token|null
     */
    public function getAck()
    {
        return $this->_ack;
    }

    /**
     * Set the correlation ID
     *
     * @param string $id
     * @access public
     * @return The object instance
     */
    public function setCorrelationID($id)
    {
        $this->_correlationID = $id;
        return $this;
    }

    /**
     * Get the correlation ID
     *
     * @access public
     * @return string|null
     */
    public function getCorrelationID()
    {
        return $this->_correlationID;
    }

    /**
     * Set the errors
     *
     * @param mixed $errors
     * @access public
     * @return The object instance
     */
    public function setErrors($errors)
    {
        $this->_errors = $errors;
        return $this;
    }

    /**
     * Get the errors
     *
     * @access public
     * @return mixed
     */
    public function getErrors()
    {
        return $this->_errors;
    }

    /**
     * Set the version
     *
     * @param string $version
     * @access public
     * @return The object instance
     */
    public function setVersion($version)
    {
        $this->_version = $version;
        return $this;
    }

    /**
     * Get the version
     *
     * @access public
     * @return string|null
     */
    public function getVersion()
    {
        return $this->_version;
    }

    /**
     * Set the build property
     *
     * @param string $build
     * @access public
     * @return The object instance
     */
    public function setBuild($build)
    {
        $this->_build = $build;
        return $this;
    }

    /**
     * Get the build property
     *
     * @access public
     * @return string
     */
    public function getBuild()
    {
        return $this->_build;
    }
}
