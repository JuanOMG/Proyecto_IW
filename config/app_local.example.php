<?php
/*
 * Local configuration file to provide any overrides to your app.php configuration.
 * Copy and save this file as app_local.php and make changes as required.
 * Note: It is not recommended to commit files with credentials such as app_local.php
 * into source code version control.
 */
return [
    /*
     * Debug Level:
     *
     * Production Mode:
     * false: No error messages, errors, or warnings shown.
     *
     * Development Mode:
     * true: Errors and warnings shown.
     */
    'debug' => filter_var(env('DEBUG', true), FILTER_VALIDATE_BOOLEAN),

    /*
     * Security and encryption configuration
     *
     * - salt - A random string used in security hashing methods.
     *   The salt value is also used as the encryption key.
     *   You should treat it as extremely sensitive data.
     */
    'Security' => [
        'salt' => env('SECURITY_SALT', '593a5531997be5de959f5c3d2534ef42cf612d9fe301b75dbcd909f86c3940fa'),
    ],

    /*
     * Connection information used by the ORM to connect
     * to your application's datastores.
     *
     * See app.php for more configuration options.
     */
    'Datasources' => [
        'default' => [
          'host' => 'us-cdbr-east-05.cleardb.net',
          /*
           * CakePHP will use the default DB port based on the driver selected
           * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
           * the following line and set the port accordingly
           */
          //'port' => 'non_standard_port_number',

          'username' => 'bf03fb02b71515',
          'password' => 'a23353e7',

          'database' => 'heroku_c55bad6509f110d',
          /*
           * If not using the default 'public' schema with the PostgreSQL driver
           * set it here.
           */
          //'schema' => 'myapp',

          /*
           * You can use a DSN string to set the entire configuration
           */
          'url' => env('DATABASE_URL', "mysql://bf03fb02b71515:a23353e7@us-cdbr-east-05.cleardb.net/heroku_c55bad6509f110d"),
      ],

        /*
         * The test connection is used during the test suite.
         */
        'test' => [
            'host' => 'localhost',
            //'port' => 'non_standard_port_number',
            'username' => 'my_app',
            'password' => 'secret',
            'database' => 'test_myapp',
            //'schema' => 'myapp',
            'url' => env('DATABASE_TEST_URL', 'sqlite://127.0.0.1/tests.sqlite'),
        ],
    ],

    /*
     * Email configuration.
     *
     * Host and credential configuration in case you are using SmtpTransport
     *
     * See app.php for more configuration options.
     */
    'EmailTransport' => [
        'default' => [
            'host' => 'localhost',
            'port' => 25,
            'username' => null,
            'password' => null,
            'client' => null,
            'url' => env('EMAIL_TRANSPORT_DEFAULT_URL', null),
        ],
    ],
];
