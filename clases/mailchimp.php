<?php

use DrewM\MailChimp\MailChimp;
use \DrewM\MailChimp\Batch;

/**
 * Class MailChimpClient
 */
class MailChimpClient
{
	/**
	 * @var
	 */
	protected $_apiKey;

	/**
	 * @var MailChimp
	 */
	protected $_mailChimp;

	/**
	 * MailChimpClient constructor.
	 *
	 * @param $apiKey
	 */
	public function __construct($apiKey)
	{
		$this->_apiKey = $apiKey;
		$this->_mailChimp = new MailChimp($this->_apiKey);
	}

	/**
	 * searchEmail.
	 *
	 * @param $email
	 * @param $listId
	 */
	public function searchEmail($email, $listId)
	{
		$emailLower = strtolower($email);

		$emailHash = md5($emailLower);

		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://us4.api.mailchimp.com/3.0/lists/".$listId."/members/" .$emailHash,
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
		    "Authorization: Basic YW55c3RyaW5nOmVjMjZmOTU5YzAxMzFjZjI2YWI4YWZhNzQ5NzgzNWRmLXVzNA==",
		    "Cache-Control: no-cache",
		    "Postman-Token: 5da0d16a-c55f-41a2-a10c-55f6bd05457f"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);

		$user = json_decode($response, true);

		if ($err) {
		  echo "cURL Error #:" . $err;
		} else {
		  return $user;
		}

		curl_close($curl);
	}

	/**
	 * @return array|false
	 */
	public function getLists()
	{
		return $this->_mailChimp->get('lists');
	}

	/**
	 * @param $listId
	 *
	 * @return array|false
	 */
	public function getListInfo($listId)
	{
		return $this->_mailChimp->get("lists/$listId");
	}

	/**
	 * @param $listId
	 *
	 * @return array|false
	 */
	public function getListMembers($listId)
	{
		return $this->_mailChimp->get("lists/$listId/members");
	}

	/**
	 * @param array $data
	 *
	 * @return array|false
	 */
	public function subscribe(Array $data = [], $interestsGroupId)
	{
		try{
			$url = sprintf('lists/%s/members', $data['listId']);
			$result = $this->_mailChimp->post( $url, [
				'email_address' 	=> $data['email'],
				'status'        	=> 'subscribed',
				'merge_fields' 		=> [
		      'FNAME' 					=> $data['first_name'],
		      // 'MMERGE4' 				=> $data['phone'],
		      'MMERGE6' 				=> $data['observations'],
		      'MMERGE8' 				=> $data['interests'],
		      'MMERGE9' 				=> $data['reference']
    	],
	    	'interests' 		=> [
	      	$interestsGroupId => TRUE
    	],
	    	'language' 		=> 'es'
		]);
			return $result;
		}
		catch (Exception $exception)
		{
			return $exception->getMessage();
		}
	}

	/**
	 * @param array $data
	 *
	 * @return array|false
	 */
	public function updateMember(Array $data = [])
	{
		$subscriber_hash = $this->_mailChimp->subscriberHash($data['email']);
		$url = sprintf('lists/%s/members/%s', $data['listId'], $subscriber_hash);

		$result = $this->_mailChimp->patch( $url, [
				'email_address' 	=> $data['email'],
				'status'        	=> 'subscribed',
				'merge_fields' 		=> [
		      'FNAME' 					=> $data['first_name'],
		      'MMERGE4' 				=> $data['phone'],
		      'MMERGE6' 				=> $data['observations'],
		      'MMERGE8' 				=> $data['interests'],
		      'MMERGE9' 				=> $data['reference']
    	],
	    	'interests' 		=> [
	      	'894c58a711' 			=> TRUE
    	],
	    	'language' 		=> 'es'
		]);

		return $result;
	}

	/**
	 * @param array $data
	 */
	public function removeMember(Array $data = [])
	{
		$subscriber_hash = $this->_mailChimp->subscriberHash($data['email']);
		$url = sprintf('lists/%s/members/%s', $data['listId'], $subscriber_hash);
		$this->_mailChimp->delete($url);
	}

	/**
	 * @param $listId
	 * @param array $data
	 */
	public function subscribeBatch($listId, Array $data = [])
	{
		$batch = $this->_mailChimp->new_batch();
		$url = sprintf('lists/%s/members', $listId);

		foreach ($data as $index => $customer)
		{
			$currentOp = sprintf('op%s', ++$index);
			$batch->post($currentOp, $url, $customer);
		}
		$batch->execute();
	}

}

?>