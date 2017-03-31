<?php

require(ROOT . "model/SpeciesModel.php");

function index()
{
    render("species/index", array(
        'species' => getAllSpecies()
    ));
}

function create()
{
	//formulier tonen
	render("species/create" , array(
    ));
}

function createSave()
{
    // haal het formulier op en suur naar de createclient om het in de database op te slaan
	if (isset($_POST['specie'])) {
        CreateSpecie($_POST['specie']);
    }

	header("Location:" . URL . "species/index");
}

function edit($id)
{
    // getStudent(1);
    render("species/edit", array(
       'species' => GetSpecie($id)
    ));
}
function editSave()
{
    if (isset($_POST['specie']) && isset( $_POST['id'])) {
        EditSpecie($_POST['specie'], $_POST['id']);
    }


    header("Location:" . URL . "species/index");
} 

function delete($id)
{

    render("client/delete", array(
        'client' => DeleteSpecie($id)
    ));

	if (isset($id)) {
		DeleteSpecie($id);
	}

}