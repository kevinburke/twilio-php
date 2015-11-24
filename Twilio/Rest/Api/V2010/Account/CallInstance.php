<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Rest\Api\V2010\Account\Call;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string accountSid
 * @property string annotation
 * @property string answeredBy
 * @property string apiVersion
 * @property string callerName
 * @property string dateCreated
 * @property string dateUpdated
 * @property string direction
 * @property string duration
 * @property string endTime
 * @property string forwardedFrom
 * @property string from
 * @property string fromFormatted
 * @property string groupSid
 * @property string parentCallSid
 * @property string phoneNumberSid
 * @property string price
 * @property string priceUnit
 * @property string sid
 * @property string startTime
 * @property call.Status status
 * @property string subresourceUris
 * @property string to
 * @property string toFormatted
 * @property string uri
 */
class CallInstance extends InstanceResource {
    /**
     * Initialize the CallInstance
     * 
     * @return CallInstance 
     */
    public function __construct(Version $version, array $payload, $accountSid, $sid = null) {
        parent::__construct($version);
        
        // Marshaled Properties
        $this->properties = array(
            'accountSid' => $payload['account_sid'],
            'annotation' => $payload['annotation'],
            'answeredBy' => $payload['answered_by'],
            'apiVersion' => $payload['api_version'],
            'callerName' => $payload['caller_name'],
            'dateCreated' => $payload['date_created'],
            'dateUpdated' => $payload['date_updated'],
            'direction' => $payload['direction'],
            'duration' => $payload['duration'],
            'endTime' => $payload['end_time'],
            'forwardedFrom' => $payload['forwarded_from'],
            'from' => $payload['from'],
            'fromFormatted' => $payload['from_formatted'],
            'groupSid' => $payload['group_sid'],
            'parentCallSid' => $payload['parent_call_sid'],
            'phoneNumberSid' => $payload['phone_number_sid'],
            'price' => $payload['price'],
            'priceUnit' => $payload['price_unit'],
            'sid' => $payload['sid'],
            'startTime' => $payload['start_time'],
            'status' => $payload['status'],
            'subresourceUris' => $payload['subresource_uris'],
            'to' => $payload['to'],
            'toFormatted' => $payload['to_formatted'],
            'uri' => $payload['uri'],
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
     * @return CallContext Context for this CallInstance
     */
    protected function proxy() {
        if (!$this->context) {
            $this->context = new CallContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }
        
        return $this->context;
    }

    /**
     * @return string The unique id of the Account responsible for creating this
     *                Call
     */
    protected function getAccountSid() {
        return $this->properties['accountSid'];
    }

    /**
     * @return string The annotation provided for the Call
     */
    protected function getAnnotation() {
        return $this->properties['annotation'];
    }

    /**
     * @return string If this call was initiated with answering machine detection,
     *                either `human` or `machine`. Empty otherwise.
     */
    protected function getAnsweredBy() {
        return $this->properties['answeredBy'];
    }

    /**
     * @return string The API Version the Call was created through
     */
    protected function getApiVersion() {
        return $this->properties['apiVersion'];
    }

    /**
     * @return string If this call was an incoming call to a phone number with
     *                Caller ID Lookup enabled, the caller's name. Empty otherwise.
     */
    protected function getCallerName() {
        return $this->properties['callerName'];
    }

    /**
     * @return string The date that this resource was created
     */
    protected function getDateCreated() {
        return $this->properties['dateCreated'];
    }

    /**
     * @return string The date that this resource was last updated
     */
    protected function getDateUpdated() {
        return $this->properties['dateUpdated'];
    }

    /**
     * @return string A string describing the direction of the call. `inbound` for
     *                inbound calls, `outbound-api` for calls initiated via the
     *                REST API or `outbound-dial` for calls initiated by a `<Dial>`
     *                verb.
     */
    protected function getDirection() {
        return $this->properties['direction'];
    }

    /**
     * @return string The duration
     */
    protected function getDuration() {
        return $this->properties['duration'];
    }

    /**
     * @return string The end time of the Call. Null if the call did not complete
     *                successfully.
     */
    protected function getEndTime() {
        return $this->properties['endTime'];
    }

    /**
     * @return string If this Call was an incoming call forwarded from another
     *                number, the forwarding phone number (depends on carrier
     *                supporting forwarding). Empty otherwise.
     */
    protected function getForwardedFrom() {
        return $this->properties['forwardedFrom'];
    }

    /**
     * @return string The phone number, SIP address or Client identifier that made
     *                this Call. Phone numbers are in E.164 format (e.g.
     *                +16175551212). SIP addresses are formatted as
     *                `name@company.com`. Client identifiers are formatted
     *                `client:name`.
     */
    protected function getFrom() {
        return $this->properties['from'];
    }

    /**
     * @return string The phone number, SIP address or Client identifier that made
     *                this Call. Formatted for display.
     */
    protected function getFromFormatted() {
        return $this->properties['fromFormatted'];
    }

    /**
     * @return string A 34 character Group Sid associated with this Call. Empty if
     *                no Group is associated with the Call.
     */
    protected function getGroupSid() {
        return $this->properties['groupSid'];
    }

    /**
     * @return string A 34 character string that uniquely identifies the Call that
     *                created this leg.
     */
    protected function getParentCallSid() {
        return $this->properties['parentCallSid'];
    }

    /**
     * @return string If the call was inbound, this is the Sid of the
     *                IncomingPhoneNumber that received the call. If the call was
     *                outbound, it is the Sid of the OutgoingCallerId from which
     *                the call was placed.
     */
    protected function getPhoneNumberSid() {
        return $this->properties['phoneNumberSid'];
    }

    /**
     * @return string The charge for this call, in the currency associated with the
     *                account. Populated after the call is completed. May not be
     *                immediately available.
     */
    protected function getPrice() {
        return $this->properties['price'];
    }

    /**
     * @return string The currency in which `Price` is measured.
     */
    protected function getPriceUnit() {
        return $this->properties['priceUnit'];
    }

    /**
     * @return string A 34 character string that uniquely identifies this resource.
     */
    protected function getSid() {
        return $this->properties['sid'];
    }

    /**
     * @return string The start time of the Call. Null if the call has not yet been
     *                dialed.
     */
    protected function getStartTime() {
        return $this->properties['startTime'];
    }

    /**
     * @return call.Status The status
     */
    protected function getStatus() {
        return $this->properties['status'];
    }

    /**
     * @return string Call Instance Subresources
     */
    protected function getSubresourceUris() {
        return $this->properties['subresourceUris'];
    }

    /**
     * @return string The phone number, SIP address or Client identifier that
     *                received this Call. Phone numbers are in E.164 format (e.g.
     *                +16175551212). SIP addresses are formatted as
     *                `name@company.com`. Client identifiers are formatted
     *                `client:name`.
     */
    protected function getTo() {
        return $this->properties['to'];
    }

    /**
     * @return string The phone number, SIP address or Client identifier that
     *                received this Call. Formatted for display.
     */
    protected function getToFormatted() {
        return $this->properties['toFormatted'];
    }

    /**
     * @return string The URI for this resource, relative to
     *                `https://api.twilio.com`
     */
    protected function getUri() {
        return $this->properties['uri'];
    }

    /**
     * Deletes the CallInstance
     * 
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete() {
        return $this->proxy()->delete();
    }

    /**
     * Fetch a CallInstance
     * 
     * @return CallInstance Fetched CallInstance
     */
    public function fetch() {
        return $this->proxy()->fetch();
    }

    /**
     * Update the CallInstance
     * 
     * @return CallInstance Updated CallInstance
     */
    public function update($options) {
        return $this->proxy()->update(
            $options
        );
    }

    /**
     * Access the recordings
     * 
     * @return RecordingList 
     */
    protected function getRecordings() {
        return $this->proxy()->recordings;
    }

    /**
     * Access the notifications
     * 
     * @return NotificationList 
     */
    protected function getNotifications() {
        return $this->proxy()->notifications;
    }

    /**
     * Access the feedback
     * 
     * @return FeedbackList 
     */
    protected function getFeedback() {
        return $this->proxy()->feedback;
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
        return '[Twilio.Api.V2010.CallInstance ' . implode(' ', $context) . ']';
    }
}