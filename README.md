# Architectural Design and Technology Portfolio

This project was used to apply for jobs within the architecture field. The project explores the PHP Symfony framework using an model-view-controller pattern and TWIG templates.

## Requirements

To view the project locally, you will need the following: 
1. A current version of PHP installed.
2. Symfony framework installed.
3. The projects are stored in an SQL database and accessed with a MySQLi driver. You will need to have this installed. I have included some dummy data to add to your local SQL database for viewing. 

## Installation

1. Locally download the repository:

```
$ git clone https://github.com/jpask1392/architecture-portfolio.git 
```

2. Head to to the directory of the downloaded project

3. Install the dependencies: 

```
$ npm i
 ```

## Usage

1. Start the server:

```
$ npm run start:dev 
```

2. Start the webpack dev server

```
$ npm run start:webpack 
```

This will run webpack-dev-server with the watch flag for automatic reloading when files are saved. Note that the dev server will be running on port 9000 with a proxy set up to port 3000.

## Deployment

Create a build of the project using specifications in the webpack.config files 

```
npm run build 
```

## Code quality 
	
This project uses Eslint

Run the following to lint all files:

```
./node_modules/.bin/eslint "src/**" 
```
