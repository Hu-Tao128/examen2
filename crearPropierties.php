<?php
include "includes/header.php";
require "../Bienes_Raicez/connectionbd.php";

$db = conectiondb();


echo "<pre>";
var_dump($_SERVER);
echo "</pre>";

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $id = $_POST["id"];
    $tittle = $_POST["tittle"];
    $price = $_POST["price"];
    $image = $_POST["image"];
    $description = $_POST["description"];
    $num_rooms = $_POST["num_rooms"];
    $num_wc = $_POST["num_wc"];
    $num_garage = $_POST["num_garage"];
    $created = $_POST["created"];
    $seller = $_POST["sellers_id"];

    $query = "insert into propierties (tittle, price, image, description, num_rooms, num_wc, num_garage, created, sellers_id) 
              values ('$tittle', '$price', '$image', '$description', '$num_rooms', '$num_wc', '$num_garage', '$created', '$seller')";

    $result = mysqli_query($db, $query);
}

if (!empty($_POST)) {
    if (!empty($_POST["id"]) && !empty($_POST["tittle"]) && !empty($_POST["price"]) && 
        !empty($_POST["image"]) && !empty($_POST["description"]) && 
        !empty($_POST["num_rooms"]) && !empty($_POST["num_wc"]) && 
        !empty($_POST["num_garage"]) && !empty($_POST["created"]) && 
        !empty($_POST["sellers_id"])) {

        $id = $_POST["id"];
        $tittle = $_POST["tittle"];
        $price = $_POST["price"];
        $image = $_POST["image"];
        $description = $_POST["description"];
        $num_rooms = $_POST["num_rooms"];
        $num_wc = $_POST["num_wc"];
        $num_garage = $_POST["num_garage"];
        $created = $_POST["created"];
        $seller = $_POST["sellers_id"];

        $query = "insert into propierties (tittle, price, image, description, num_rooms, num_wc, num_garage, created, sellers_id) 
                  values ('$tittle', '$price', '$image', '$description', '$num_rooms', '$num_wc', '$num_garage', '$created', '$seller')";

        $result = mysqli_query($db, $query);

        if ($result) {
            echo "Registro correcto!!!";
        } else {
            echo "Fallo en el registro: " . mysqli_error($db);
        }
    } else {
        echo "Por favor, completa todos los campos requeridos.";
    }
} else {
    echo "No se han enviado datos.";
}
?>


<section>
    <h2>Propierties Form</h2>
    <div>
        <fieldset>
            <div>
                <form action="crearPropierties.php" method="POST">
                    <fieldset>
                        <legend>
                            <div>
                                <label for="id">ID</label>
                                <input type="number" name="id" id="id">
                            </div>
                            <div>
                                <label for="tittle">Tittle</label>
                                <input type="text" name="tittle" id="tittle" placeholder="Your propiertie">
                            </div>
                            <div>
                                <label for="price">Price</label>
                                <input type="text" name="price" id="price" placeholder="Price">
                            </div>
                            <div>
                                <label for="image">Image</label>
                                <input type="text" name="image" id="image">
                            </div>
                            <div>
                                <label for="description">Description</label>
                                <textarea name="description" id="description"></textarea>
                            </div>
                            <div>
                                <label for="num_rooms">num_rooms</label>
                                <input type="text" name="num_rooms" id="num_rooms">
                            </div>
                            <div>
                                <label for="num_wc">num_wc</label>
                                <input type="text" name="num_wc" id="num_wc" placeholder="Example 5">
                            </div>
                            <div>
                                <label for="num_garage">num_garage</label>
                                <input type="text" name="num_garage" id="num_garage" placeholder="Example 2">
                            </div>
                            <div>
                                <label for="created">Created</label>
                                <input type="date" name="created" id="created">
                            </div>
                            <div>
                                <label for="sellers_id">Seller</label>
                                <input type="text" name="sellers_id" id="sellers_id" placeholder="Example 3">
                            </div>
                            <div>
                                <button type="submit">Create a New Propiertie</button>
                            </div>
                        </legend>
                    </fieldset>
                </form>
            </div>
        </fieldset>
    </div>
</section>

<?php
include "includes/footer.php";
?>