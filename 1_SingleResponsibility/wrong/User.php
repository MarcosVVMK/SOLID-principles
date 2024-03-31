<?php

namespace wrong;

/*
     * Wrong way to create the user class becausa the class has many responsability
     * such as writing to the database ( create() function) and writing to the log file ( logError() function )
    */
class User
{
    public function create( array $data )
    {
        try {
            // try to save user in database
        } catch (DatabaseException $e){
            $this->logError($e->getMessage());
        }
    }

    private function logError($getMessage)
    {
        //Write error to file
    }
}