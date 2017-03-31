<?php
// select client met het opgegevn id (voor de edit pagina om formulier in te vullen)
function getClient($id)
{
    // database connection
    $db = openDatabaseConnection();


// create en start query
    $sql = "SELECT * FROM clients where id =$id";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;
    //geef resultaat terug
    return $query->fetchAll();
}
// select alle clients uit de database
    function getAllClients()
    {
        // database connection
        $db = openDatabaseConnection();

        $sql = "SELECT * FROM clients";
        $query = $db->prepare($sql);
        $query->execute();

        $db = null;
        //geef resultaat terug
        return $query->fetchAll();

    }

    // edit client in database
    function EditClient($fullname, $lastname, $adres, $email, $patient, $checkin, $checkout,$id)
    {


        $db = openDatabaseConnection();

        // create en start query
        $sql = "update clients set fullname='$fullname',lastname='$lastname', adres='$adres', email='$email', patient='$patient', checkin='$checkin', checkout='$checkout' where id='$id'";;
        $query = $db->prepare($sql);

        $query->execute();

        // error als query niet werkt
        if (!$query) {
            echo "\nPDO::errorInfo():\n";
            print_r($db->errorInfo());
        }


        $db = null;
    }
// delete client uit database
    function DeleteClient($id)
    {
        // database connection
        $db = openDatabaseConnection();

        // create en start query
        $sql = "DELETE FROM clients WHERE id=:id ";
        $query = $db->prepare($sql);
        $query->execute(array(
            ':id' => $id
        ));

        $db = null;
        // ga terug naar de client index
        header("Location:" . URL . "client/index");
    }

    function CreateClient($fullname,$lastname, $adres, $email, $patient, $checkin, $checkout)
    {
        // database connection
        $db = openDatabaseConnection();

        // create en start query
        $sql = "INSERT INTO clients(fullname,lastname, adres, email, patient,checkin,checkout) VALUES (:fullname,:lastname, :adres, :email, :patient , :checkin, :checkout)";
        $query = $db->prepare($sql);
        $query->execute(array(
            ':fullname' => $fullname,
            ':lastname' => $lastname,
            ':adres' => $adres,
            ':email' => $email,
            ':patient' => $patient,
            ':checkin' => $checkin,
            ':checkout' => $checkout,
        ));

        $db = null;
    }

    function patients()
    {
        // database connection
        $db = openDatabaseConnection();

        // create en start query
        $sql = "select * from patient";
        $query = $db->prepare($sql);
        $query->execute();

        $db = null;
        //geef resultaat terug
        return $query->fetchAll();
    }
