<?php

require(ROOT . "model/PatientModel.php");

function index()
{
    render("patient/index", array(
        'patients' => getAllPatient()
    ));
}

function create()
{
	//formulier tonen
	render("patient/create" , array(
        'species' => species()
    ));
}

function createSave()
{
    if (isset($_POST['name']) && isset($_POST['specie']) && isset($_POST['status'])&& isset($_POST['gender'])) {
        CreatePatient($_POST['name'], $_POST['specie'], $_POST['status'], $_POST['gender']);
    }

    header("Location:" . URL . "patient/index");
}

function edit($id)
{
    // getStudent(1);
    render("patient/edit", array(
        'patients' => getPatient($id),
        'species' => species(),
    ));
}
function editSave()
{
    if (isset($_POST['name']) && isset($_POST['specie']) && isset($_POST['status'])&& isset($_POST['gender']) && isset($_POST['id'])) {
       EditPatient($_POST['name'], $_POST['specie'], $_POST['status'], $_POST['gender'],$_POST['id']);

    }


    header("Location:" . URL . "patient/index");
} 

function delete($id)
{

    render("client/delete", array(
        'patient' => DeletePatient($id)
    ));

	if (isset($id)) {
        DeletePatient($id);
	}

}