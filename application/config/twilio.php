<?php   if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	* Name:  Twilio
	*
	* Author: Ben Edmunds
	*		  ben.edmunds@gmail.com
	*         @benedmunds
	*
	* Location:
	*
	* Created:  03.29.2011
	*
	* Description:  Twilio configuration settings.
	*
	*
	*/

	/**
	 * Mode ("sandbox" or "prod")
	 **/
/*	$config['mode']   = 'sandbox';*/
$config['twilio_account_type']   = 'sandbox';

	/**
	 * Account SID
	 **/
	$config['twilio_account_sid']   = 'ACdf6890a7e2ebb45264959654e01797b4';

/*$config['twilio_account_sid']   = 'AC307e62bef1edf800f2cb179748b6b90b';*/

	/**
	 * Auth Token
	 **/
	$config['twilio_auth_token']    = 'b37a133232511b68ea67e0e219f5701b';
/*$config['twilio_auth_token']    = 'd04f446159b71e195dbe39bdf4bae1c4';*/
	/**
	 * API Version
	 **/
/*	$config['api_version']   = '2010-04-01';*/

	/**
	 * Twilio Phone Number
	 **/

	$config['twilio_number']        = '15005550006';

/*$config['twilio_number']        = '+1 201-643-7006';*/
        //$config['dummy'] = 'aaa';


/* End of file twilio.php */