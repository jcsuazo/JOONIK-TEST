Locations API

This project is a simple REST API built using Laravel. It provides a list of locations, each containing a code, name, image, and creation date. The API uses API Key authentication to secure the endpoints.

Prerequisites

Before you begin, ensure you have the following installed on your machine:

PHP >= 8.1

Composer

Laravel CLI

A web server (e.g., Apache, Nginx, or Laravel's built-in server)

Installation

Follow these steps to set up the API on your local machine:

Clone the repository:

git clone <repository-url>
cd locations-api

Install dependencies:

composer install

Set up environment variables:

Copy the .env.example file to .env:

cp .env.example .env

Open the .env file and configure the following variable:

API_KEY=mysecureapikey

Generate application key:

php artisan key:generate

Run the server:

php artisan serve

The server will be available at http://127.0.0.1:8000 by default.

Usage

Authentication

This API uses API Key authentication. Include the API Key in the request header as follows:

X-API-KEY: mysecureapikey

Endpoints

1. Get List of Locations

Endpoint: GET /api/locations

Headers:

{
"X-API-KEY": "mysecureapikey"
}

Response:

[
{
"code": 1,
"name": "Sede Central",
"image": "https://via.placeholder.com/150",
"creationDate": "2022-01-01"
},
{
"code": 2,
"name": "Sede Sur",
"image": "https://via.placeholder.com/150",
"creationDate": "2023-02-01"
}
]

Error Handling

If the API Key is missing or invalid, the server will return a 401 Unauthorized response:

{
"error": "API Key inválida"
}

Running Tests

You can write and execute tests to verify the API functionality.

Create a test file in tests/Feature/LocationApiTest.php:

<?php

namespace Tests\Feature;

use Tests\TestCase;

class LocationApiTest extends TestCase
{
    /**
     * Test the locations endpoint with valid API Key.
     *
     * @return void
     */
    public function test_locations_endpoint_with_valid_api_key()
    {
        $response = $this->withHeaders([
            'X-API-KEY' => env('API_KEY'),
        ])->get('/api/locations');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     [
                         'code',
                         'name',
                         'image',
                         'creationDate',
                     ]
                 ]);
    }

    /**
     * Test the locations endpoint with invalid API Key.
     *
     * @return void
     */
    public function test_locations_endpoint_with_invalid_api_key()
    {
        $response = $this->withHeaders([
            'X-API-KEY' => 'invalidkey',
        ])->get('/api/locations');

        $response->assertStatus(401)
                 ->assertJson([
                     'error' => 'API Key inválida'
                 ]);
    }
}

Run the tests:

php artisan test

Code Quality Tools

Optionally, you can ensure code quality using these tools:

Laravel Pint:

./vendor/bin/pint

PHP CodeSniffer:

./vendor/bin/phpcs --standard=PSR12 app/

PHPStan:

./vendor/bin/phpstan analyse --level=max

Notes

Customize the locations data in the LocationController as needed.

Ensure your environment file (.env) is secure and not exposed publicly.

License

This project is open-source and available under the MIT License.
