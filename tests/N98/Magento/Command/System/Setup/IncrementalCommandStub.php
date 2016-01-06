<?php
/*
 * @author Tom Klingenberg <mot@fsfe.org>
 */

namespace N98\Magento\Command\System\Setup;

/**
 * Class IncrementalCommandStub
 */
class IncrementalCommandStub extends IncrementalCommand
{
    public function __construct($name = null)
    {
        // missing parent constructor call by intention
    }

    /**
     * @param string        $method
     * @param object|string $object
     * @param array         $args
     * @return mixed
     */
    public function callProtectedMethodFromObject($method, $object, $args = array())
    {
        return $this->_callProtectedMethodFromObject($method, $object, $args);
    }
}
