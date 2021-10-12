{{include file="./encabezado.tpl"}}

    <form action="confirmarLogin"   method="POST">
        <label for="user">Usuario</label>
        <input type="text" name="user" required value="admi@admi.com">
        <label for="password">Contraseña</label>
        <input type="password" name="password" required value="1234">

        <input type="submit" value="Cargar Usuario">

        
    </form>


    <p>{{$user}}</p>

    {{include file="./footer.tpl"}}


