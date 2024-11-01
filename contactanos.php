<?php include "includes/header.php" ?>

    <section>
        <h2>Contacto</h2>
        <!--imagen-->
    </section>

    <section>
        <h2>Llene el formulario de Contacto</h2>
        <form action="">
            <!--nombre, email, telfono, mensaje, boton-->
            <fieldset>
                <legend>Informacion Personal</legend>
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email">
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone">
                </div>
                <div>
                    <label for="msg">Message</label>
                    <textarea name="msg" id="msg"></textarea>
                </div>
                
                <button type="submit">Contactar</button>
            </fieldset>

            <fieldset>
                <legend>Informacion de la Propiedad</legend>
                <div>
                    <label for="ventacompra"> Vende o Compra</label>
                    <input type="select" name="vencom" id="vencom">
                </div>
                <div>
                    <label for="cantidad">Cantidad</label>
                    <input type="numer" name="cantidad" id="cantidad">
                </div>
            </fieldset>

            <fieldset>
                <div>
                    <legend>Contacto</legend>
                    <label for="tel">Telefono</label>
                    <input type="radio" name="tel" id="tel">

                    <label for="mail">Email</label>
                    <input type="radio" name="mail" id="mail">
                </div>
            </fieldset>

            <div>
                <button type="submit">Contactars</button>
            </div>
        </form>
    </section>

    <?php include "includes/footer.php" ?>
</body>
</html>