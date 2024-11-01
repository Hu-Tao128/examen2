<?php
include "includes/header.php";
require "connectionbd.php";

$db = conectiondb(); 

$sellersQuery = "SELECT id, name FROM sellers";
$sellersResult = mysqli_query($db, $sellersQuery);

$propertiesQuery = "SELECT id, tittle FROM propierties";
$propertiesResult = mysqli_query($db, $propertiesQuery);
?>

<section>
    <h2>Registrar Venta</h2>
    <div>
        <fieldset>
            <div>
                <form action="showData.php" method="POST">
                    <fieldset>
                        <legend>Información de la Venta</legend>

                        <!-- Nombre del Comprador -->
                        <div>
                            <label for="own_names">Nombre del Comprador</label>
                            <input type="text" name="own_names" id="own_names" placeholder="Nombre del comprador" required>
                        </div>

                        <!-- Apellido del Comprador -->
                        <div>
                            <label for="own_lastname">Apellido del Comprador</label>
                            <input type="text" name="own_lastname" id="own_lastname" placeholder="Apellido del comprador" required>
                        </div>

                        <!-- Seleccionar Vendedor -->
                        <div>
                            <label for="seller_id">Vendedor</label>
                            <select name="seller_id" id="seller_id" required>
                                <?php
                                // Comprobar si hay resultados de vendedores
                                if ($sellersResult) {
                                    while ($seller = mysqli_fetch_assoc($sellersResult)) {
                                        echo "<option value='" . htmlspecialchars($seller['id']) . "'>" . htmlspecialchars($seller['name']) . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No hay vendedores disponibles</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <!-- Seleccionar Propiedad -->
                        <div>
                            <label for="propiertie">Propiedad</label>
                            <select name="propiertie" id="propiertie" required>
                                <?php
                                // Comprobar si hay resultados de propiedades
                                if ($propertiesResult) {
                                    while ($property = mysqli_fetch_assoc($propertiesResult)) {
                                        echo "<option value='" . htmlspecialchars($property['id']) . "'>" . htmlspecialchars($property['tittle']) . "</option>";
                                    }
                                } else {
                                    echo "<option value=''>No hay propiedades disponibles</option>";
                                }
                                ?>
                            </select>
                        </div>

                        <!-- Fecha de Venta -->
                        <div>
                            <label for="date_sold">Fecha de Venta</label>
                            <input type="date" name="date_sold" id="date_sold" required>
                        </div>

                        <!-- Botón de Registro -->
                        <div>
                            <button type="submit">Registrar Venta</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </fieldset>
    </div>
</section>

<?php include "includes/footer.php"; ?>
