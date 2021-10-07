<?php

namespace App\Controllers;

use Liman\Toolkit\Shell\Command;
use GuzzleHttp\Client;


class GuzzleTestController
{
	private $client;

	public function __construct()
	{
		$this->$client = new Client([
			// Base URI is used with relative requests
			'base_uri' => '10.154.127.120:3001/',
			// You can set any number of default request options.
			'timeout'  => 2.0,
		]);
	}


	public function getNames()
	{
		$response = $this->$client->request('GET', 'home/getNames');
		$contents = json_decode($response->getBody()->getContents());

		return respond($contents, 200);
	}


	public function addName()
	{
		validate([
			'name' => 'required|string',
			'surname' => 'required|string'
		]);

		$body = json_encode(
			[
				'name' => request("name"),
				'surname' => request("surname")
			]
		);


		$response = $this->$client->request(
			'POST',
			'home/addName',
			[
				'body' => $body,
				'headers' => ['Content-Type' => 'application/json']
			]
		);

		$contents = $response->getBody()->getContents();

		return respond($contents, 200);
	}
}
