

<?php
// verbind met model
require(ROOT . "model/LoginModel.php");
// render index page
function index()
{
    // haal alle clients uit database via function getallclients
    render("login/index", array(

    ));
}
// create pagina
function create()
{
    //formulier tonen voor create en selectbox functie aanroepen
    render("login/create" , array(
    ));
}
// save function aanroepen in model
function CreateLogin()
{
    // haal het formulier op en suur naar de createclient om het in de database op te slaan
    if (isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['password'])&& isset($_POST['email'])) {
        register($_POST['name'], $_POST['lastname'], $_POST['username'], $_POST['password'], $_POST['email']);
    }

    header("Location:" . URL . "login/index");
}

?>