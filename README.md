# My Project

This project contains:

- `frontend/`: The frontend built with React.
- `backend/`: The backend built with Node.js and Express.

# Backend

This is a simple REST API built with Laravel that provides a list of locations (or "sedes"). The API is protected using an API Key for authentication.

## Features

- **API Key Authentication**: Secure access using an API Key.
- **Locations Endpoint**: Retrieve a list of locations with details such as code, name, image URL, and creation date.
- **Error Handling**: Returns clear error messages for invalid requests.

## Installation

### Prerequisites

- PHP >= 8.1
- Composer
- Laravel >= 10.x
- A web server (Apache, Nginx, or Laravel's built-in server)

### Steps

1. **Clone the repository**:

```bash
 git clone <repository-url>
 cd locations-api
```

2. **Install dependencies**:

```bash
composer install
```

3. **Install dependencies**:

- Copy the .env.example file to .env

```bash
cp .env.example .env
```

- Update the following environment variables in .env

```bash
APP_NAME=LocationsAPI
APP_ENV=local
APP_KEY=base64:<your-app-key>
API_KEY=mysecureapikey
```

4. **Generate the application key**:

```bash
php artisan key:generate
```

5. **Run migrations and seeder**:

```bash
php artisan migrate --seed
```

6. **Start the development server**:

```bash
php artisan serve
```

The API will be available at http://127.0.0.1:8000.

## Usage

### All requests must include the X-API-KEY header with the value of your API key and the Accepts header with the Application/json value:

```bash
X-API-KEY: mysecureapikey
Accepts: Application/json
```

## Endpoints

GET /api/locations
Retrieve a list of locations.

Request Example:

```bash
curl -X GET http://127.0.0.1:8000/api/locations \
     -H "X-API-KEY: mysecureapikey"
     -H "Accepts: Application/json"
```

Request Example:

```bash
[
    {
        "code": 1,
        "name": "Sede Central",
        "image": "https://picsum.photos/150?random=1",
        "creationDate": "2022-01-01"
    },
    {
        "code": 2,
        "name": "Sede Sur",
        "image": "https://picsum.photos/150?random=2",
        "creationDate": "2023-02-01"
    },
    {
        "code": 3,
        "name": "Sede Norte",
        "image": "https://picsum.photos/150?random=3",
        "creationDate": "2021-06-15"
    }
]
```

# Frontend Application

This project is the frontend of the application, built with React, TypeScript, and Material UI. It consumes the backend API to display a list of locations, styled with Material UI components.

## Features

Fetches and displays a list of locations using the GET /api/locations endpoint.
Utilizes Material UI for responsive and visually appealing components.
Implements TypeScript for type safety.
Supports code quality tools like Prettier and ESLint.
Includes unit tests using Jest and React Testing Library.

### Getting Started

Prerequisites
Make sure you have the following installed on your machine:

Node.js (v16 or later)Yarn (v1.22 or later) Setup Clone the repository:

### Setup

1. **Clone the repository**:

```bash
git clone <repository-url>
cd <repository-folder>/frontend
```

2. **Install dependencies**:

```bash
yarn install
```

3. **Add an .env file: Create a .env file in the frontend directory with the following content:**:

- Copy the .env.example file to .env

```bash
cp .env.example .env
```

- Update the following environment variables in .env

```bash
REACT_APP_API_KEY=<your-api-key>
REACT_APP_API_BASE_URL=http://localhost:8000/api
```

4. **Start the development server:**:

```bash
 yarn start
```

## Scripts

- Start the app:

```bash
yarn start
```

- Run tests:

```bash
yarn test
```

- Format code with Prettier:

```bash
yarn prettier --write .
```

- Lint code with ESLint::

```bash
yarn lint
```
