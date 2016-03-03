<?php
namespace KieServerClient\Protocol;

use Thrift\Base\TBase;
use Thrift\Type\TType;

/**
 * Autogenerated by Thrift Compiler (0.9.2)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
class ContainerInfo extends TBase {
    static $_TSPEC;

    /**
     * @var string
     */
    public $containerId = null;
    /**
     * @var \KieServerClient\Protocol\ReleaseId
     */
    public $releaseId = null;
    /**
     * @var int
     */
    public $kieContainerStatus = null;
    /**
     * @var \KieServerClient\Protocol\KieScannerInfo
     */
    public $kieScannerInfo = null;

    public function __construct($vals=null) {
        if (!isset(self::$_TSPEC)) {
            self::$_TSPEC = array(
                1 => array(
                    'var' => 'containerId',
                    'type' => TType::STRING,
                ),
                2 => array(
                    'var' => 'releaseId',
                    'type' => TType::STRUCT,
                    'class' => '\KieServerClient\Protocol\ReleaseId',
                ),
                3 => array(
                    'var' => 'kieContainerStatus',
                    'type' => TType::I32,
                ),
                4 => array(
                    'var' => 'kieScannerInfo',
                    'type' => TType::STRUCT,
                    'class' => '\KieServerClient\Protocol\KieScannerInfo',
                ),
            );
        }
        if (is_array($vals)) {
            parent::__construct(self::$_TSPEC, $vals);
        }
    }

    public function getName() {
        return 'ContainerInfo';
    }

    public function read($input)
    {
        return $this->_read('ContainerInfo', self::$_TSPEC, $input);
    }

    public function write($output) {
        return $this->_write('ContainerInfo', self::$_TSPEC, $output);
    }

}
