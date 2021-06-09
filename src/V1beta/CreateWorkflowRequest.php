<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/workflows/v1beta/workflows.proto

namespace Google\Cloud\Workflows\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the
 * [CreateWorkflow][google.cloud.workflows.v1beta.Workflows.CreateWorkflow]
 * method.
 *
 * Generated from protobuf message <code>google.cloud.workflows.v1beta.CreateWorkflowRequest</code>
 */
class CreateWorkflowRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Project and location in which the workflow should be created.
     * Format:  projects/{project}/locations/{location}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. Workflow to be created.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.v1beta.Workflow workflow = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $workflow = null;
    /**
     * Required. The ID of the workflow to be created. It has to fulfill the
     * following requirements:
     * * Must contain only letters, numbers, underscores and hyphens.
     * * Must start with a letter.
     * * Must be between 1-64 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the customer project and location.
     *
     * Generated from protobuf field <code>string workflow_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $workflow_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Project and location in which the workflow should be created.
     *           Format:  projects/{project}/locations/{location}
     *     @type \Google\Cloud\Workflows\V1beta\Workflow $workflow
     *           Required. Workflow to be created.
     *     @type string $workflow_id
     *           Required. The ID of the workflow to be created. It has to fulfill the
     *           following requirements:
     *           * Must contain only letters, numbers, underscores and hyphens.
     *           * Must start with a letter.
     *           * Must be between 1-64 characters.
     *           * Must end with a number or a letter.
     *           * Must be unique within the customer project and location.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Workflows\V1Beta\Workflows::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Project and location in which the workflow should be created.
     * Format:  projects/{project}/locations/{location}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Project and location in which the workflow should be created.
     * Format:  projects/{project}/locations/{location}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Workflow to be created.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.v1beta.Workflow workflow = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Workflows\V1beta\Workflow|null
     */
    public function getWorkflow()
    {
        return isset($this->workflow) ? $this->workflow : null;
    }

    public function hasWorkflow()
    {
        return isset($this->workflow);
    }

    public function clearWorkflow()
    {
        unset($this->workflow);
    }

    /**
     * Required. Workflow to be created.
     *
     * Generated from protobuf field <code>.google.cloud.workflows.v1beta.Workflow workflow = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Workflows\V1beta\Workflow $var
     * @return $this
     */
    public function setWorkflow($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Workflows\V1beta\Workflow::class);
        $this->workflow = $var;

        return $this;
    }

    /**
     * Required. The ID of the workflow to be created. It has to fulfill the
     * following requirements:
     * * Must contain only letters, numbers, underscores and hyphens.
     * * Must start with a letter.
     * * Must be between 1-64 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the customer project and location.
     *
     * Generated from protobuf field <code>string workflow_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getWorkflowId()
    {
        return $this->workflow_id;
    }

    /**
     * Required. The ID of the workflow to be created. It has to fulfill the
     * following requirements:
     * * Must contain only letters, numbers, underscores and hyphens.
     * * Must start with a letter.
     * * Must be between 1-64 characters.
     * * Must end with a number or a letter.
     * * Must be unique within the customer project and location.
     *
     * Generated from protobuf field <code>string workflow_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setWorkflowId($var)
    {
        GPBUtil::checkString($var, True);
        $this->workflow_id = $var;

        return $this;
    }

}

