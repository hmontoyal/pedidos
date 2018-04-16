<?php 

class Kmail{
	public function __construct(){
	}

	public function sincronizar(){

		$scriptUri = "http://localhost:81/kropsys/gmail/authorize";
		$client = new Google_Client();
		$client->setAccessType('online'); // default: offline
		$client->setApplicationName('KROPSYS');
		$client->setClientId('838788612370-649mmcvbc0pmvv1okqsbtfd9abnc8meh.apps.googleusercontent.com');
		$client->setClientSecret('RKyF6-PLtycg-hjF-zATuiHQ');
		$client->setRedirectUri($scriptUri);
		$client->setDeveloperKey('AIzaSyArB76LL1AGnx5lNJX4xsDreUl6KXAG8fI'); // API key
        $client->setScopes(implode(' ', array(Google_Service_Gmail::GMAIL_READONLY)));
        //Web Applicaion (json)
       // $client->setAuthConfigFile('key/client_secret_105219sfdf2456244-bi3lasgl0qbgu5hgedg9adsdfvqmds5c0rkll.apps.googleusercontent.com.json');

        $client->setAccessType('offline');       

        // Redirect the URL after OAuth
        if (isset($_GET['code'])) {
            $client->authenticate($_GET['code']);
            $_SESSION['access_token'] = $client->getAccessToken();
            $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
            header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
        }

        // If Access Toket is not set, show the OAuth URL
        if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
            $client->setAccessToken($_SESSION['access_token']);
        } else {
            $authUrl = $client->createAuthUrl();
        }

        if ($client->getAccessToken()) {

            $_SESSION['access_token'] = $client->getAccessToken();

            // Prepare the message in message/rfc822
            try {

                // The message needs to be encoded in Base64URL

                 $service = new Google_Service_Gmail($client);

                $optParams = [];
                $optParams['maxResults'] = 5; // Return Only 5 Messages
                $optParams['labelIds'] = 'INBOX'; // Only show messages in Inbox
                $messages = $service->users_messages->listUsersMessages('me',$optParams);
                $list = $messages->getMessages();
                foreach ($list as $message) {
                	    $messageId = $message->getId(); // Grab first Message
                	    $optParamsGet = [];
		                $optParamsGet['format'] = 'full'; // Display message in payload
		                $message = $service->users_messages->get('me',$messageId,$optParamsGet);
		                $messagePayload = $message->getPayload();
		                $headers = $message->getPayload()->getHeaders();
		                $parts = $message->getPayload()->getParts();
		                var_dump($parts);
		                $body = $parts[0]['body'];
		                $rawData = $body->data;
		                $sanitizedData = strtr($rawData,'-_', '+/');
		                $decodedMessage = base64_decode($sanitizedData);
                }

                //var_dump($decodedMessage);

            } catch (Exception $e) {
                print($e->getMessage());
                unset($_SESSION['access_token']);
            }

        }

     // If there is no access token, there will show url
     if ( isset ( $authUrl ) ) { 
            echo $authUrl;
      }
	}

	public function callback($code){

	}
}