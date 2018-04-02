<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/devtools/clouddebugger/v2/debugger.proto

namespace Google\Cloud\Debugger\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to list debuggees.
 *
 * Generated from protobuf message <code>google.devtools.clouddebugger.v2.ListDebuggeesRequest</code>
 */
class ListDebuggeesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Project number of a Google Cloud project whose debuggees to list.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     */
    private $project = '';
    /**
     * When set to `true`, the result includes all debuggees. Otherwise, the
     * result includes only debuggees that are active.
     *
     * Generated from protobuf field <code>bool include_inactive = 3;</code>
     */
    private $include_inactive = false;
    /**
     * The client version making the call.
     * Schema: `domain/type/version` (e.g., `google.com/intellij/v1`).
     *
     * Generated from protobuf field <code>string client_version = 4;</code>
     */
    private $client_version = '';

    public function __construct() {
        \GPBMetadata\Google\Devtools\Clouddebugger\V2\Debugger::initOnce();
        parent::__construct();
    }

    /**
     * Project number of a Google Cloud project whose debuggees to list.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @return string
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * Project number of a Google Cloud project whose debuggees to list.
     *
     * Generated from protobuf field <code>string project = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkString($var, True);
        $this->project = $var;

        return $this;
    }

    /**
     * When set to `true`, the result includes all debuggees. Otherwise, the
     * result includes only debuggees that are active.
     *
     * Generated from protobuf field <code>bool include_inactive = 3;</code>
     * @return bool
     */
    public function getIncludeInactive()
    {
        return $this->include_inactive;
    }

    /**
     * When set to `true`, the result includes all debuggees. Otherwise, the
     * result includes only debuggees that are active.
     *
     * Generated from protobuf field <code>bool include_inactive = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeInactive($var)
    {
        GPBUtil::checkBool($var);
        $this->include_inactive = $var;

        return $this;
    }

    /**
     * The client version making the call.
     * Schema: `domain/type/version` (e.g., `google.com/intellij/v1`).
     *
     * Generated from protobuf field <code>string client_version = 4;</code>
     * @return string
     */
    public function getClientVersion()
    {
        return $this->client_version;
    }

    /**
     * The client version making the call.
     * Schema: `domain/type/version` (e.g., `google.com/intellij/v1`).
     *
     * Generated from protobuf field <code>string client_version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setClientVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_version = $var;

        return $this;
    }

}

