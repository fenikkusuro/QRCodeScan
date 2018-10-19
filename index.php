<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro de usuarios</title>
    <meta content="width-device-width, initial-scale-1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/AdminLTE.css" type="text/css"/>
</head>
<body class="bg-black">
   <div class="form-box" id="login-box">
       <div class="header">Registro de usuarios</div>
       <form action="RegistrarUsuarios.php" method="post">
           <div class="body bg-gray">
              <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Nombre Completo"/>
              </div>
              <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Email"/>
               </div>
           </div>
           <div class="footer">
               <button id="BtnRegistrar" type="submit" class="btn bg-olive btn-block">Enviar</button>
           </div>
       </form>
   </div>
   
   <script src="//http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js" type="text/javascript"></script>
    
</body>
</html>