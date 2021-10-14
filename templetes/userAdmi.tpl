{{include file="./encabezado.tpl"}}
  <h4>Iniciar</h4>
        <form action="confirmarLogin" method="POST">
            <label for="user">Usuario</label>
            <input type="text" placeholder="usuario" name="userIn">
            <label for="password">Contraseña</label>
            <input type="password" placeholder="contraseña"  name="password">
            <input type="submit" value="Iniciar">
        </form>
        
    <h4>Registrar</h4>
    <form action="registrar" method="POST">
        <label for="user">Usuario</label>
        <input type="text" placeholder="usuario" name="user">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="contraseña" name="password">
        <input type="submit" value="Registrar">
    </form>


    <p>{{$user}}</p>

    {{include file="./footer.tpl"}}



