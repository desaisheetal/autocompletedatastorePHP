<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/storage.proto

namespace Google\Cloud\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Set of files to scan.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.CloudStorageOptions.FileSet</code>
 */
class CloudStorageOptions_FileSet extends \Google\Protobuf\Internal\Message
{
    /**
     * The url, in the format `gs://<bucket>/<path>`. Trailing wildcard in the
     * path is allowed.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     */
    private $url = '';

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Storage::initOnce();
        parent::__construct();
    }

    /**
     * The url, in the format `gs://<bucket>/<path>`. Trailing wildcard in the
     * path is allowed.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * The url, in the format `gs://<bucket>/<path>`. Trailing wildcard in the
     * path is allowed.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

}

