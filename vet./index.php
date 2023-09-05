<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SoluPet</title>
    <!-- LINK BOOTSTRAP -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-image: url('image/fundo.png');
            background-repeat: no-repeat;
        }
        header {
            display: flex;
            align-items:center;
            justify-content: space-around;
        }

        .row {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 1rem;
        }

        .btn {
            background-color: #6d65c4;
            color: white;
            background-color: transparent;
            border: 2px solid #9a4ecaf0;
            box-shadow: 0 0 10px 0 #9a4ecaf0 inset,
                        0 0 10px 4px #9a4ecaf0;
            border-radius: 10px;
            animation: vibrate-1 1s infinite;
       }

                @keyframes vibrate-1 {
        0% {
            -webkit-transform: translate(0);
                    transform: translate(0);
        }
        20% {
            -webkit-transform: translate(-2px, 2px);
                    transform: translate(-2px, 2px);
        }
        40% {
            -webkit-transform: translate(-2px, -2px);
                    transform: translate(-2px, -2px);
        }
        60% {
            -webkit-transform: translate(2px, 2px);
                    transform: translate(2px, 2px);
        }
        80% {
            -webkit-transform: translate(2px, -2px);
                    transform: translate(2px, -2px);
        }
        100% {
            -webkit-transform: translate(0);
                    transform: translate(0);
        }
        }


        .btn:hover {
            background: #B3AEE8;
        }

        small{
            color: #7F14C0;
            font-weight: 900;
        }

        img {
            margin-bottom: 1rem;
        }
           
    </style>

</head>
<body class="text-center">

 <header>
    <img width="200" src="./image/logo1.png" alt="Logo"><br>
    <a class="btn" href="login.php">Logar</a>
 </header>

    <main class="container text-center">
        <div class="row">
            <div class="col">
                <img width="320" src="./image/titulo.png" alt="">

                <p>A SOLUPET é um sistema onde o <small>TUTOR</small> pode acessar as  informações de saúde do seu animalzinho pós consulta. <br><br>

                    Logo após o animal ser registrado no sistema pelo Médico Veterinário, o dono do animal poderá fazer o login com os dados que foram criados na consulta, podendo assim ter acesso as informações. Ele pode acessar as clinicas mais próximas contendo avaliações, agendar consultas e imprimir carteira de vacinação e histórico clínico do seu Pet.

                    O sistema abrange também auxilio ao <small>MÉDICO VETERINÁRIO</small>, podendo ter acesso ao histórico clínico dos pacientes. <br><br> 

                    Durante a consulta, o Médico consegue realizar o cadastro do animal no sistema e também acessar cadastros já existentes. Ele pode editar o histórico clínico do paciente adicionando informações atuais, editar carteira de vacinação, agendar retorno e também cadastrar sua própria clínica.
                </p>
            </div>

            <div class="text col">
               <img class="img-fluid fixed" src="./image/menina.png" alt="Menina">
            </div>
        
       </div>

    </main>
    
</body>
</html>