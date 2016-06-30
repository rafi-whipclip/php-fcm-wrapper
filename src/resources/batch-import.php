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
         *    batchImport() method
         *
         *    reference: https://developers.google.com/instance-id/reference/server#create_registration_tokens_for_apns_tokens
         */
		"batchImport" => [
			"httpMethod" => "POST",
			"uri" => "https://iid.googleapis.com/iid/v1:batchImport",
			"summary" => "Batch import APNS tokens",
			"responseModel" => "defaultJsonResponse",
			"parameters" => [
				"application" => [
					"type" => "string",
					"location" => "json",
					"description" => "Bundle id of the application",
					"required" => true,
				],
				"sandbox" => [
					"type" => "boolean",
					"location" => "json",
					"description" => "Boolean to indicate sandbox environment (TRUE) or production (FALSE)",
					"required" => true,
					"default" => true,
				],
				"apns_tokens" => [
					"type" => "array",
					"location" => "json",
					"description" => "The array of APNs tokens for the app instances you want to add or remove.\nMaximum 100 tokens per request",
					"required" => true,
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
