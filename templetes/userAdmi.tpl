{{include file="./encabezado.tpl"}}
 
        <form action="login" method="POST">
            <label for="user">Usuario</label>
            <input type="text" placeholder="usuario" name="user">
            <label for="password">Contraseña</label>
            <input type="password" placeholder="contraseña"  name="password">
            <input type="submit" value="Iniciar">
        </form>

        <form action="registrar" method="POST">
        <label for="user">Usuario</label>
        <input type="text" placeholder="usuario" name="user">
        <label for="password">Contraseña</label>
        <input type="password" placeholder="contraseña" name="password">
        <input type="submit" value="Registrar">
    </form>


    <p>{{$user}}</p>

    {{include file="./footer.tpl"}}



