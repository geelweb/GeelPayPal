<?php

abstract class GeelPayPal_Request_Abstract
{
    /**
     * The PayPal schema version
     *
     * @var string
     * @access private
     */
    private $_version = null;

    /**
     * Set the PayPal schema version
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
     * Return the PayPal schema version
     *
     * @access public
     * @return string
     */
    public function getVersion()
    {
        return $this->_version;
    }
}

