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
