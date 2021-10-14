//Creo la cuenta cuando venga en el POST
 <?php  if(!empty($_POST['email'])&& !empty($_POST['password'])){
       $userEmail=$_POST['email'];
       $userPassword=$_POST['password'];

       //Obtengo el usuario de la base de datos
       $db = new PDO('mysql:host=localhost;'.'dbname=ejemploHashing;charset=utf8', 'root', '');
       $query = $db->prepare('SELECT * FROM users WHERE email = ?');
       $query->execute([$userEmail]);
       $user = $query->fetch(PDO::FETCH_OBJ);

       //Si el usuario existe y las contraseñas coinciden
       if($user && $userPassword==($user->password)){
           echo "Acceso exitoso";
       }else{
           echo "Acceso denegado";
       }
