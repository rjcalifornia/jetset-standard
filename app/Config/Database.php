<?php

namespace App\Config;

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
/**
 * SalasRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class Database {
    public function em(){
        
    // Setup Doctrine
        $configuration = Setup::createAnnotationMetadataConfiguration(
            $paths = [__DIR__ . '/../Entity'],
            $isDevMode = true
        );

        // Setup connection parameters
        $connection_parameters = [
            'driver' => $_ENV['DB_DRIVER'],
            'host' => $_ENV['DB_HOST'],
            'dbname' => $_ENV['DB_DATABASE'],
            'user' => $_ENV['DB_USERNAME'],
            'password' => $_ENV['DB_PASSWORD'],
        ];

        // Get the entity manager
        $entity_manager = EntityManager::create($connection_parameters, $configuration);

        return $entity_manager;

    }
}