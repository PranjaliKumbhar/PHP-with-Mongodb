<?php
if(extension_loaded("mongodb"))
{
    try
    {

    
        $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    }
    catch(MongoConnectionException $e)

    {
        var_dump($e);
    }



}
        
?>