<?php

function getPatient($id)
{

    $db = openDatabaseConnection();



    $sql = "SELECT * FROM patient where id =$id";
    $query = $db->prepare($sql);
    $query->execute();

    $db = null;

    return $query->fetchAll();
}

    function getAllPatient()
    {
        $db = openDatabaseConnection();

        $sql = "SELECT * FROM patient";
        $query = $db->prepare($sql);
        $query->execute();

        $db = null;

        return $query->fetchAll();

    }

    function EditPatient($name, $specie, $status, $gender,$id)
    {


        $db = openDatabaseConnection();

        $sql = "update patient set name='$name', species='$specie', status='$status', gender='$gender' where id='$id'";;
        $query = $db->prepare($sql);

        $query->execute();

        if (!$query) {
            echo "\nPDO::errorInfo():\n";
            print_r($db->errorInfo());
        }

        var_dump($sql);


        $db = null;
    }

    function DeletePatient($id)
    {

        $db = openDatabaseConnection();

        $sql = "DELETE FROM patient WHERE id=:id ";
        $query = $db->prepare($sql);
        $query->execute(array(
            ':id' => $id
        ));

        $db = null;

        header("Location:" . URL . "patient/index");
    }

    function CreatePatient($name, $specie, $status, $gender)
    {
        $db = openDatabaseConnection();

        $sql = "INSERT INTO patient(name, species, status, gender) VALUES (:name, :species, :status, :gender)";
        $query = $db->prepare($sql);
        $query->execute(array(
            ':name' => $name,
            ':species' => $specie,
            ':status' => $status,
            ':gender' => $gender,
        ));

        $db = null;
    }

    function species()
    {
        $db = openDatabaseConnection();

        $sql = "select * from species";
        $query = $db->prepare($sql);
        $query->execute();

        $db = null;

        return $query->fetchAll();
    }
