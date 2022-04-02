<!DOCTYPE HTML>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Formularios en PHP</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre </label>
        <p><input type="text" name="nombre" /></p>

        <label for="apellidos">Apellidos</label>
        <p><input type="text" name="apellidos" maxlength=5 /></p>

        <label for="boton">Boton</label>
        <p><input type="button" name="boton" value="Pulsar" /></p>

        <label for="sexo">Sexo </label>
        <p>
            Hombre<input type="checkbox" name="sexo" />
            Mujer<input type="checkbox" name="sexo" checked="true" / </p>
            <label for="nombre">Color </label>
        <p>

            <label for="fecha">Fecha </label>
        <p><input type="date" name="fecha" /></p>

        <label for="email">Email </label>
        <p><input type="email" name="email" /></p>

        <label for="fichero">Fichero </label>
        <p><input type="file" name="fichero" /></p>

        <label for="numero">Numero </label>
        <p><input type="number" name="numero" /></p>

        <label for="password">Contraseña </label>
        <p><input type="password" name="password" /></p>

        <label for="color">Color </label>
        <p><input type="color" name="color" /></p>

        <label for="continente">Continente </label>
        <p>
            Asia<input type="radio" name="continente" value="Asia" />
            Europa<input type="radio" name="continente" value="Europa" />
        </p>

        <label for="web">Web </label>
        <p>
            <input type="web" name="web" />
        </p>

        <textArea></textArea>

        <br />
        Peliculas:
        <select name="peliculas">
            <option>Ordet</option>
            <option>Parasitos</option>
            <option>Estiu 1993</option>
        </select>
        
        <br />
        <input type="submit" value="Enviar" />
    </form>
</body>

</html>