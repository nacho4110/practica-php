<html>
  <head>
    <title>PHP Test</title>
    <script src="script.js"></script>
  </head>
  <body>
    <?php echo '<p>Hello World</p>'; ?> 
<form id="formulario" action="envio.php" method="post" >
    <label>Formulario</label>
    <label for="nombre"> nombre</label>
  <input  id="nombre" type="text" name="nombre" id="nombre">
 <label for="apellido"> apellido</label>
  <input id="apellido" type="text" name="apellido" id="apellido">
  <label for="edad"> edad</label>
  <input id="edad" type="number" name="edad" >
  <select id="carrera" name="carrera">
  <option value="Ingenieria"> Ingenieria</option>
  <option value="Diseño multimedial">Diseño multimedial</option>
  </select>
  <button id="enviar" type="button" onclick="validar()">Enviar</button>
  </form>
  </body>
</html>