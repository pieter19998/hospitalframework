<?php
// verbind met model
require(ROOT . "model/ClientModel.php");
// render index page
function index()
{
    // haal alle clients uit database via function getallclients
    render("client/index", array(
        'clients' => getAllClients()
    ));
}
// create pagina
function create()
{
	//formulier tonen voor create en selectbox functie aanroepen
	render("client/create" , array(
    'patients' => patients()
    ));
}
// save function aanroepen in model
function createSave()
{
    // haal het formulier op en suur naar de createclient om het in de database op te slaan
	if (isset($_POST['fullname']) && isset($_POST['lastname']) && isset($_POST['adres']) && isset($_POST['email'])&& isset($_POST['patient'])&& isset($_POST['checkin'])&& isset($_POST['checkout'])) {
        CreateClient($_POST['fullname'], $_POST['lastname'], $_POST['adres'], $_POST['email'], $_POST['patient'], $_POST['checkin'], $_POST['checkout']);
    }

	header("Location:" . URL . "client/index");
}
// edit pagina renderen
function edit($id)
{
    // roep patient selectbox en client id aan om formulier in te vullen
    render("client/edit", array(
        'patients' => patients(),
       'client' => getClient($id)
    ));
}
//save function aanroepen in model
function editSave()
{
    //check form en stuur naar function editclient die het opslaat in de database
    if (isset($_POST['fullname'])&& isset($_POST['lastname']) && isset($_POST['adres']) && isset($_POST['email'])&& isset($_POST['patient'])&& isset($_POST['checkin'])&& isset($_POST['checkout'], $_POST['id'])) {
        EditClient($_POST['fullname'],$_POST['lastname'], $_POST['adres'], $_POST['email'], $_POST['patient'], $_POST['checkin'], $_POST['checkout'], $_POST['id']);
    }

// ga terug naar location index
    header("Location:" . URL . "client/index");
} 
// delete function
function delete($id)
{
// renderer deleteclient page en stuur id naar deleteclient
    render("client/delete", array(
        'client' => DeleteClient($id)
    ));
// kijk of er een id is meegegeven
	if (isset($id)) {
		DeleteClient($id);
	}

}