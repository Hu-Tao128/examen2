<?php
include "includes/header.php";
require "connectionbd.php";

$db = conectiondb();

echo "<pre>";
var_dump($_POST);
echo "</pre>";

$own_names = $_POST["own_names"];
$own_lastname = $_POST["own_lastname"];
$date_sold = $_POST["date_sold"];
$seller_id = $_POST["seller_id"];
$propiertie_id = $_POST["propiertie"];

$query = "INSERT INTO sold (own_names, own_lastname, date_sold, seller_id, propiertie) 
          VALUES ('$own_names', '$own_lastname', '$date_sold', '$seller_id', '$propiertie_id');";

$result = mysqli_query($db, $query);

if ($result) {
    echo "Registro de venta correcto!!!<br>";
} else {
    echo "Fallo en el registro de venta: " . mysqli_error($db) . "<br>";
}

$query = "
    SELECT 
        sold.id AS sale_id,
        sellers.name AS seller_name,
        propierties.tittle AS property_title,
        propierties.price AS property_price,
        propierties.image AS property_image
    FROM 
        sold
    JOIN 
        sellers ON sold.seller_id = sellers.id
    JOIN 
        propierties ON sold.propiertie = propierties.id
";

$result = mysqli_query($db, $query);

if ($result) {
    ?>
    <h2>Lista de Ventas Realizadas</h2>;
    <table>;
    <thead>;
    <tr>;
    <th>ID de Venta</th>;
    <th>Vendedor</th>;
    <th>Propiedad</th>;
    <th>Precio</th>;
    <th>Imagen</th>;
    </tr>;
    </thead>;
    <tbody>;
<?php

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['sale_id'] . "</td>";
        echo "<td>" . htmlspecialchars($row['seller_name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['property_title']) . "</td>";
        echo "<td>$" . number_format($row['property_price'], 2) . "</td>";
        echo "<td><img src='" . htmlspecialchars($row['property_image']) . "' alt='Imagen de la propiedad' style='width: 100px; height: auto;'></td>";
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
} else {
    echo "No hay ventas registradas.";
}

include "includes/footer.php";
?>
