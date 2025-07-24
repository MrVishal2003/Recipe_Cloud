<?php
/*db_config.php.template
 * This is a template file for database connection configuration.
 * 
 * To use this:
 * 1. Copy this file and rename it to db_config.php
 * 2. Update the values below according to your database configuration
 * 3. Make sure db_config.php is in your .gitignore file
 */

// Database connection parameters
// Adjust these parameters according to your database configuration
return [
    'host' => 'localhost', // change this to localhost if u run this local, change this to the docker name of your db if you use docker
    'database' => 'recipe_cloud', // do not forget to create the database in your MySQL server before running this script
    'username' => 'root', // change this to a db user or use the root user
    'password' => '', // this is often empty on new db
    'charset' => 'utf8mb4'
];
