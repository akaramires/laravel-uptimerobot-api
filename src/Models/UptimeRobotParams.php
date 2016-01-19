<?php

    /**
     * Created by Elmar <e.abdurayimov@gmail.com> Abdurayimov
     *
     * @copyright (C)Copyright 2016 elmar.eatech.org
     *               Date: 1/11/16
     *               Time: 5:59 PM
     */

    namespace Akaramires\Monitors\Models;

    class UptimeRobotParams
    {
        const MONITOR_TYPES_HTTP    = 1;
        const MONITOR_TYPES_KEYWORD = 2;
        const MONITOR_TYPES_PING    = 3;
        const MONITOR_TYPES_PORT    = 4;

        const MONITOR_SUB_TYPES_HTTP       = 1;
        const MONITOR_SUB_TYPES_HTTPS      = 2;
        const MONITOR_SUB_TYPES_FTP        = 3;
        const MONITOR_SUB_TYPES_SMTP       = 4;
        const MONITOR_SUB_TYPES_POP3       = 5;
        const MONITOR_SUB_TYPES_IMAP6      = 6;
        const MONITOR_SUB_TYPES_CUSTOMPORT = 99;

        const MONITOR_KEYWORD_TYPES_EXISTS    = 1;
        const MONITOR_KEYWORD_TYPES_NOTEXISTS = 2;

        const MONITOR_STATUS_PAUSED     = 0;
        const MONITOR_STATUS_NOTCHECKED = 1;
        const MONITOR_STATUS_UP         = 2;
        const MONITOR_STATUS_SEEMSDOWN  = 8;
        const MONITOR_STATUS_DOWN       = 9;

        public static $monitorStatusLabels = [
            self::MONITOR_STATUS_PAUSED     => 'Paused',
            self::MONITOR_STATUS_NOTCHECKED => 'Not checked',
            self::MONITOR_STATUS_UP         => 'Up',
            self::MONITOR_STATUS_SEEMSDOWN  => 'Seems Down',
            self::MONITOR_STATUS_DOWN       => 'Down',
        ];

        const LOG_TYPES_DOWN    = 1;
        const LOG_TYPES_UP      = 2;
        const LOG_TYPES_PAUSED  = 99;
        const LOG_TYPES_STARTED = 98;

        const ALERT_CONTACT_TYPES_SMS        = 1;
        const ALERT_CONTACT_TYPES_EMAIL      = 2;
        const ALERT_CONTACT_TYPES_TWITTER    = 3;
        const ALERT_CONTACT_TYPES_BOXCAR     = 4;
        const ALERT_CONTACT_TYPES_WEBHOOK    = 5;
        const ALERT_CONTACT_TYPES_PUSHBULLET = 6;
        const ALERT_CONTACT_TYPES_ZAPIER     = 7;
        const ALERT_CONTACT_TYPES_PUSHOVER   = 9;
        const ALERT_CONTACT_TYPES_HIPCHAT    = 10;
        const ALERT_CONTACT_TYPES_SLACK      = 11;

        const ALERT_CONTACT_STATUS_NOTACTIVATED = 0;
        const ALERT_CONTACT_STATUS_PAUSED       = 1;
        const ALERT_CONTACT_STATUS_ACTIVE       = 2;

        const ERROR_100 = "apiKey not mentioned or in a wrong format";
        const ERROR_101 = "apiKey is wrong";
        const ERROR_102 = "format is wrong (should be xml or json)";
        const ERROR_103 = "No such method exists";
        const ERROR_200 = "monitorID(s) should be integers";
        const ERROR_201 = "monitorUrl is invalid";
        const ERROR_202 = "monitorType is invalid";
        const ERROR_203 = "monitorSubType is invalid";
        const ERROR_204 = "monitorKeywordType is invalid";
        const ERROR_205 = "monitorPort is invalid";
        const ERROR_206 = "monitorFriendlyName is required";
        const ERROR_207 = "The monitor already exists";
        const ERROR_208 = "monitorSubType is required for this type of monitors";
        const ERROR_209 = "monitorKeyWordType and monitorKeyWordValue are required for this type of monitors";
        const ERROR_210 = "monitorID doesn't exist";
        const ERROR_211 = "monitorID is required";
        const ERROR_212 = "The account has no monitors";
        const ERROR_213 = "At least one of the parameters to be edited are required";
        const ERROR_214 = "monitorHTTPUsername and monitorHTTPPassword should both be empty or have values";
        const ERROR_215 = "monitor specific apiKeys can only use getMonitors method";
        const ERROR_216 = "A user with this e-mail already exists";
        const ERROR_217 = "userFirstLastName and userEmail are both required";
        const ERROR_218 = "userEmail is not in the right e-mail format";
        const ERROR_219 = "This account is not authorized to create users";
        const ERROR_220 = "monitorAlertContacts value is wrong";
        const ERROR_221 = "The account has no alert contacts";
        const ERROR_222 = "alertcontactID(s) should be integers";
        const ERROR_223 = "alertContactType and alertContactValue are both required";
        const ERROR_224 = "This alertContactType is not supported";
        const ERROR_225 = "The alert contact already exists";
        const ERROR_226 = "The alert contact is not following @uptimerobot Twitter user. It is required so that the Twitter direct messages (DM) can be sent";
        const ERROR_227 = "The Boxcar user mentioned does not exist";
        const ERROR_228 = "The Boxcar alert contact couldn't be added, please try again later";
        const ERROR_229 = "alertContactID doesn't exist";
        const ERROR_230 = "alertContactValue should be a valid e-mail for this alertContactType";

        public static function getConst($key)
        {
            return constant('self::' . strtoupper($key));
        }
    }