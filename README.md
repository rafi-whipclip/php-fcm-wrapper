# php-fcm-wrapper
PHP Wrapper for the FCM API

Installation
------------

You can install the wrapper using [Composer](http://getcomposer.org/doc/00-intro.md):

    composer require talalm/php-fcm-wrapper


Usage
------------

Using the wrapper is pretty straightforward.

The first thing you need to do is create a client with your API key

    $client = new FCM\Client("YOUR_API_KEY");

### Send a simple notification

The tokens are put in an array on the **registration_ids** parameter.

And the notification title is put in the parameter **notification.body_loc_key**

Example:

    $client->send([
        'registration_ids' => ['token1', 'token2', ...],
        'notification' => ['body_loc_key' => 'This is a notification sent via php-fcm-wrapper']
    ]);


### Add notification parameters
You can add additional parameters to the notification :

- The **badge** value (defaults to 1)
- The **sound** value (defaults to 'notif.caf')

Example:

    $client->send([
        'registration_ids' => ['token1', 'token2', ...],
        'notification' => ['body_loc_key' => 'This is a revolution',
        				   'badge' => 1789
        				   'sound' => 'la-marseillaise.caf'],
    ]);

### Additional data
Also, if you have additional data that you want to add to your notification, just add it to the **data** parameter

    $client->send([
        'registration_ids' => ['token1', 'token2', ...],
        'notification' => ['body_loc_key' => 'This is a revolution',
        				   'badge' => 1789
        				   'sound' => 'la-marseillaise.caf'],
        // Additional data
        'data' => ['king' => 'Louis XVI',
        		   'location' => 'La Bastille']
    ]);

### Change notification priority
The default notification **priority** is set to *high* (to always be sent). You can put it to *normal* if you want (then the receiving client system will choose when to display it).

    $client->send([
        'registration_ids' => ['token1', 'token2', ...],
        'notification' => ['body_loc_key' => 'This is a revolution',
        				   'badge' => 1789
        				   'sound' => 'la-marseillaise.caf'],
        // Additional data
        'data' => ['king' => 'Louis XVI',
        		   'location' => 'La Bastille'],
        'priority' => 'normal'
    ]);


And that's it!

APNS Batch import
-----------------

If you are migrating from another service ([Parse](http://www.parse.com) for example) and you already have APNS tokens on your database, you can [batch import them to Firebase](https://developers.google.com/instance-id/reference/server#create_registration_tokens_for_apns_tokens).

To do so, just call the batchImport method with the following parameters:

- **application**: Bundle id of the application
- **sandbox**: Boolean to indicate sandbox environment (TRUE) or production (FALSE) - default to true
- **apns_tokens**: The array of APNs tokens for the app instances you want to add or remove. *Maximum 100 tokens per request.*

Example:

    $client->batchImport([
    	'application' => "com.french.revolution",
    	'apns_tokens' => ["Robespierre's token", "Danton's token", "Louis XVI's token", ...],
    	'sandbox' => false,
    ]);
