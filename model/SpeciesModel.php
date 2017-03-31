<?php

function GetSpecie($id)
{

    $db = openDatabaseConnection();



    $sql = "SELECT * FROM species where id =$id";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;

    return $query->fetchAll();
}

    function getAllSpecies()
    {
        $db = openDatabaseConnection();

        $sql = "SELECT * FROM species";
        $query = $db->prepare($sql);
        $query->execute();

        $db = null;

        return $query->fetchAll();

    }

    function EditSpecie($specie,$id)
    {


        $db = openDatabaseConnection();

        $sql = "update species set specie='$specie' where id='$id'";;
        $query = $db->prepare($sql);

        $query->execute();

        if (!$query) {
            echo "\nPDO::errorInfo():\n";
            print_r($db->errorInfo());
        }

        $db = null;
    }

    function DeleteSpecie($id)
    {

        $db = openDatabaseConnection();

        $sql = "DELETE FROM species WHERE id=:id ";
        $query = $db->prepare($sql);
        $query->execute(array(
            ':id' => $id
        ));

        $db = null;

        header("Location:" . URL . "species/index");
    }

    function CreateSpecie($specie)
    {
        $db = openDatabaseConnection();

        $sql = "INSERT INTO species(specie) VALUES (:specie)";
        $query = $db->prepare($sql);
        $query->execute(array(
            ':specie' => $specie,

        ));

        $db = null;
    }
