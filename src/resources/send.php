<?php
return [
	/*
    |--------------------------------------------------------------------------
    | Operations
    |--------------------------------------------------------------------------
    |
    | This array of operations is translated into methods that complete these
    | requests based on their configuration.
    |
    */
	"operations" => [
		/**
         *    send() method
         *
         *    reference: https://firebase.google.com/docs/cloud-messaging/http-server-ref#downstream-http-messages-json
         */
		"send" => [
			"httpMethod" => "POST",
			"uri" => "send",
			"summary" => "Send notification(s) to one or multiple registered tokens",
			"responseModel" => "defaultJsonResponse",
			"parameters" => [
				"registration_ids" => [
					"type" => "array",
					"location" => "json",
					"description" => "Registration tokens to send the notification to",
					"required" => true,
				],
				"notification" => [
					"location" => "json",
					"required" => false,
					"type" => "object",
					"properties" => [
						"body_loc_key" => [
							"type" => "string",
							"location" => "json",
							"description" => "The notification text",
							"required" => false,
						],
						"badge" => [
							"type" => "integer",
							"location" => "json",
							"description" => "The badge value",
							"required" => false,
							"default" => 1,
						],
						"sound" => [
							"type" => "string",
							"location" => "json",
							"description" => "Filename of the notification sound",
							"required" => false,
							"default" => "notif.caf",
						],
					]
				],
				"priority" => [
					"type" => "string",
					"location" => "json",
					"description" => "The notification priority",
					"default" => "high",
				],
				"data" => [
					"type" => "array",
					"location" => "json",
					"description" => "The additional data to send in the notification",
				],
			]
		],
	],

	/*
    |--------------------------------------------------------------------------
    | Models
    |--------------------------------------------------------------------------
    |
    | This array of models is specifications to returning the response
    | from the operation methods.
    |
    */
	"models" => [
	],
];
