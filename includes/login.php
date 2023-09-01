
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:wght@600&display=swap" rel="stylesheet">    <style> 

        body{

            background: #8ec3c8;
            background: linear-gradient( #1b7980, #8ec3c8, #8ec3c8 );



        }
        
    .bg{
        background-image: url(img/sgdoc.png);
        background-position: center center;
        background-repeat:  no-repeat;
        background-color: #f1f1f1;
        
    
    

    }


    .btn{

        background:  #04848c;
        color: #f1f1f1;

    }


   .btn:hover{


    background-color: #0ab5e4 ;
    color:#f1f1f1;




    }
    
h2{

    font-family: 'Lora', serif;
    color: #1b7980;
}



   
    
    </style>
        <title>Login</title>
</head>

<body>
    <div class="container w-75 mt-5 bg-white rounded shadow">

        <div class="row color align-items-stretch">
            <div class="col w-50 bg d-none d-lg-block col-md-5 col-lg-5 col-xl-5 rounded" >

            </div>
            <div class="col  p-5 rounded-end">
                <div class="text-end">
                </div>
                    <h2 class="fw-blod text-center py-5 display-1  font-family-base8ec3c8">BIENVENIDO</h2>

                    <form  action="_functions.php" method="POST">
                        <div class="mb-4">
                            <label for="correo">No.Empresa:</label><br>
                            <input type="text" name="id_empresa" id="id_empresa" class="form-control" required>
                        </div>
                         <div class="form-group">
                            <label for="correo">Usuario:</label><br>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña:</label><br>
                            <input type="password" name="password" id="password" class="form-control" required>
                            <input type="hidden" name="accion" value="acceso_user">
                        </div>
                        
                        <div class="d-grid">

                            <input type="submit" class="btn mt-5" value="Ingresar"></input>


                        </div>

                    </form>


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>