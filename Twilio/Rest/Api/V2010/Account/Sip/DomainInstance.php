<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account\Sip;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Rest\Api\V2010\Account\Sip\Domain;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string accountSid
 * @property string apiVersion
 * @property string authType
 * @property string dateCreated
 * @property string dateUpdated
 * @property string domainName
 * @property string friendlyName
 * @property string sid
 * @property string uri
 * @property string voiceFallbackMethod
 * @property string voiceFallbackUrl
 * @property string voiceMethod
 * @property string voiceStatusCallbackMethod
 * @property string voiceStatusCallbackUrl
 * @property string voiceUrl
 */
class DomainInstance extends InstanceResource {
    /**
     * Initialize the DomainInstance
     * 
     * @return DomainInstance 
     */
    public function __construct(Version $version, array $payload, $accountSid, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'accountSid' => $payload['account_sid'],
            'apiVersion' => $payload['api_version'],
            'authType' => $payload['auth_type'],
            'dateCreated' => $payload['date_created'],
            'dateUpdated' => $payload['date_updated'],
            'domainName' => $payload['domain_name'],
            'friendlyName' => $payload['friendly_name'],
            'sid' => $payload['sid'],
            'uri' => $payload['uri'],
            'voiceFallbackMethod' => $payload['voice_fallback_method'],
            'voiceFallbackUrl' => $payload['voice_fallback_url'],
            'voiceMethod' => $payload['voice_method'],
            'voiceStatusCallbackMethod' => $payload['voice_status_callback_method'],
            'voiceStatusCallbackUrl' => $payload['voice_status_callback_url'],
            'voiceUrl' => $payload['voice_url'],
        );
        
        $this->solution = array(
            'accountSid' => $accountSid,
            'sid' => $sid ?: $this->properties['sid'],
        );
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     * 
     * @return DomainContext Context for this DomainInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new DomainContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * @return string The unique id of the account that sent the message
     */
    protected function getAccountSid() {
        return $this->properties['accountSid'];
    }

    /**
     * @return string The Twilio API version used to process the message
     */
    protected function getApiVersion() {
        return $this->properties['apiVersion'];
    }

    /**
     * @return string The types of authentication mapped to the domain
     */
    protected function getAuthType() {
        return $this->properties['authType'];
    }

    /**
     * @return string The date this resource was created
     */
    protected function getDateCreated() {
        return $this->properties['dateCreated'];
    }

    /**
     * @return string The date this resource was last updated
     */
    protected function getDateUpdated() {
        return $this->properties['dateUpdated'];
    }

    /**
     * @return string The unique address on Twilio to route SIP traffic
     */
    protected function getDomainName() {
        return $this->properties['domainName'];
    }

    /**
     * @return string A user-specified, human-readable name for the trigger.
     */
    protected function getFriendlyName() {
        return $this->properties['friendlyName'];
    }

    /**
     * @return string A string that uniquely identifies the SIP Domain
     */
    protected function getSid() {
        return $this->properties['sid'];
    }

    /**
     * @return string The URI for this resource
     */
    protected function getUri() {
        return $this->properties['uri'];
    }

    /**
     * @return string HTTP method used with voice_fallback_url
     */
    protected function getVoiceFallbackMethod() {
        return $this->properties['voiceFallbackMethod'];
    }

    /**
     * @return string URL Twilio will request if an error occurs in executing TwiML
     */
    protected function getVoiceFallbackUrl() {
        return $this->properties['voiceFallbackUrl'];
    }

    /**
     * @return string HTTP method to use with voice_url
     */
    protected function getVoiceMethod() {
        return $this->properties['voiceMethod'];
    }

    /**
     * @return string The voice_status_callback_method
     */
    protected function getVoiceStatusCallbackMethod() {
        return $this->properties['voiceStatusCallbackMethod'];
    }

    /**
     * @return string URL that Twilio will request with status updates
     */
    protected function getVoiceStatusCallbackUrl() {
        return $this->properties['voiceStatusCallbackUrl'];
    }

    /**
     * @return string URL Twilio will request when receiving a call
     */
    protected function getVoiceUrl() {
        return $this->properties['voiceUrl'];
    }

    /**
     * Fetch a DomainInstance
     * 
     * @return DomainInstance Fetched DomainInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Update the DomainInstance
     * 
     * @return DomainInstance Updated DomainInstance
     */
    public function update($options) {
        return $this->proxy()->update(
            $options
        );
    }

    /**
     * Deletes the DomainInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Access the ipAccessControlListMappings
     * 
     * @return IpAccessControlListMappingList 
     */
    protected function getIpAccessControlListMappings() {
        return $this->proxy()->ipAccessControlListMappings;
    }

    /**
     * Access the credentialListMappings
     * 
     * @return CredentialListMappingList 
     */
    protected function getCredentialListMappings() {
        return $this->proxy()->credentialListMappings;
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
            $method = 'get' . ucfirst($name);
            return $this->$method();
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
        return '[Twilio.Api.V2010.DomainInstance ' . implode(' ', $context) . ']';
    }
}