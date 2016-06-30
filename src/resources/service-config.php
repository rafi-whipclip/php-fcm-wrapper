<?php
return [
	/*
    |--------------------------------------------------------------------------
    | Service Name
    |--------------------------------------------------------------------------
    |
    | Name of the API service these description configs are for.
    |
    */
	"name" => "FCM",

	/*
    |--------------------------------------------------------------------------
    | Service Description
    |--------------------------------------------------------------------------
    |
    | Description of the API service.
    |
    */
	"description" => "A FCM API Wrapper built using Guzzle",

	/*
    |--------------------------------------------------------------------------
    | Service Configurations
    |--------------------------------------------------------------------------
    |
    | Configuration files of specfic service descriptions to load.
    |
    */
	"services" => [
		"send",
	],

	/*
    |--------------------------------------------------------------------------
    | Default models
    |--------------------------------------------------------------------------
    |
    | Default response models for typical usage of responses
    |
    */
	"models" => [
		"defaultJsonResponse" => [
			"type" => "object",
			"additionalProperties" => [
				"location" => "json",
			]
		]
	]
];
