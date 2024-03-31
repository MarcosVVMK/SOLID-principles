<?php

namespace correct;
class User
{
    protected $logger;

    protected $database;
    public function __construct(Logger $logger, Database $database)
    {
        $this->logger = $logger;
        $this->database = $database;
    }
    public function create(array $data)
    {
        try {

            $this->database->create( $data );

        } catch (DatabaseException $e){

            $this->logger->writeToFile( $e->getMessage() );

        }
    }
}