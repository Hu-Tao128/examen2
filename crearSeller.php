<?php
include "includes/header.php";
require "../Bienes_Raicez/connectionbd.php";

    $db = conectiondb();
    
    echo "<pre>";
        var_dump($_POST);
    echo "</pre>";

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];


    $query = "insert into sellers (name, email, phone) values ('$name', '$email', '$phone');";
    
    $result = mysqli_query($db,$query);
    
        if ($result) {
            echo "Resgistro correcto!!!";
        }else{
            echo "Fallo en el regustro";
        }

    ?>

<section>
    <h2>Crear Seller Form</h2>
    <div>
        <fieldset>
            <div>
                <form action="crearSeller.php" method="POST">
                    <fieldset>
                        <legend>
                            <div>
                                <label for="id">ID</label>
                                <input type="number" name="id" id="id">
                            </div>
                            <div>
                                <label for="name">name</label>
                                <input type="text" name="name" id="name" placeholder="Your name">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email">
                            </div>
                            <div>
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" id="phone" placeholder="555 5 5555 55">
                            </div>
                            <div>
                                <button type="submit">Create a New Seller</button>
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