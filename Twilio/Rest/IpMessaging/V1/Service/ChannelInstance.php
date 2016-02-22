<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\IpMessaging\V1\Service;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string sid
 * @property string accountSid
 * @property string serviceSid
 * @property string friendlyName
 * @property string uniqueName
 * @property string attributes
 * @property channel.ChannelType type
 * @property \DateTime dateCreated
 * @property \DateTime dateUpdated
 * @property string createdBy
 * @property string url
 * @property string links
 */
class ChannelInstance extends InstanceResource {
    /**
     * Initialize the ChannelInstance
     * 
     * @return ChannelInstance 
     */
    public function __construct(Version $version, array $payload, $serviceSid, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'sid' => $payload['sid'],
            'accountSid' => $payload['account_sid'],
            'serviceSid' => $payload['service_sid'],
            'friendlyName' => $payload['friendly_name'],
            'uniqueName' => $payload['unique_name'],
            'attributes' => $payload['attributes'],
            'type' => $payload['type'],
            'dateCreated' => Deserialize::iso8601DateTime($payload['date_created']),
            'dateUpdated' => Deserialize::iso8601DateTime($payload['date_updated']),
            'createdBy' => $payload['created_by'],
            'url' => $payload['url'],
            'links' => $payload['links'],
        );
        
        $this->solution = array(
            'serviceSid' => $serviceSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return ChannelContext Context for this ChannelInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new ChannelContext(
                $this->version,
                $this->solution['serviceSid'],
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * Fetch a ChannelInstance
     * 
     * @return ChannelInstance Fetched ChannelInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Deletes the ChannelInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Update the ChannelInstance
     * 
     * @param array $options Optional Arguments
     * @return ChannelInstance Updated ChannelInstance
     */
    public function update(array $options = array()) {
        return $this->proxy()->update(
            $options
        );
    }

    /**
     * Access the members
     * 
     * @return MemberList 
     */
    protected function getMembers() {
        return $this->proxy()->members;
    }

    /**
     * Access the messages
     * 
     * @return MessageList 
     */
    protected function getMessages() {
        return $this->proxy()->messages;
    }

    /**
     * Magic getter to access properties
     * 
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get($name) {
        if (array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }
        
        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.IpMessaging.V1.ChannelInstance ' . implode(' ', $context) . ']';
    }
}