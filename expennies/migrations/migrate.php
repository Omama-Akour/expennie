<?php

namespace Migrations;

require_once __DIR__ . '/../vendor/autoload.php'; // Require Composer's autoloader

use Doctrine\DBAL\DriverManager;
use Dotenv\Dotenv; // Import the Dotenv class without specifying a namespace
use App\Entity\User;
use App\Entity\Receipt;
use App\Entity\Category;
use App\Entity\Transaction;

// Load environment variables
$dotenv = Dotenv::createImmutable(__DIR__ . '/../'); // Use Dotenv class without specifying a namespace
$dotenv->load();

// Database configuration
$connectionParams = [
    'url' => sprintf('mysql://%s:%s@%s/%s', $_ENV['DB_USER'], $_ENV['DB_PASS'], $_ENV['DB_HOST'], $_ENV['DB_NAME']),
];

try {
    // Create a connection to the database
    $connection = DriverManager::getConnection($connectionParams);

    // Define migration queries using entity classes
    $migrationQueries = [
        User::getCreateTableQuery(),
        Category::getCreateTableQuery(),
        Transaction::getCreateTableQuery(),
        Receipt::getCreateTableQuery(),
        // Add more migration queries as needed
    ];

    // Run migration queries
    foreach ($migrationQueries as $query) {
        try {
            $connection->executeStatement($query);
            echo "Migration executed: $query\n";
        } catch (\Exception $e) {
            echo "Error executing migration query: " . $e->getMessage() . "\n";
        }
    }

    echo "Migrations complete.\n";
} catch (\Exception $e) {
    echo "Error connecting to the database: " . $e->getMessage() . "\n";
}
