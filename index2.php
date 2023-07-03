<?php 

    if(isset($_POST['submit'])){
       
      //  print_r($_POST['nome']);
     // print_r('<br>');
        //print_r($_POST['email']);
       // print_r('<br>');
       // print_r($_POST['professor']);
       // print_r('<br>');
       // print_r($_POST['qtdAulas']);
       
        include_once('config.php');

       $nome = $_POST['nome'];
       $email = $_POST['email'];
       $professor = $_POST['professor'];
       $qtdAulas = $_POST['qtdAulas'];

       $result = mysqli_query($conexao, "INSERT INTO cadastro_aulas(nome,email,professor,qtdAulas) VALUE('$nome','$email','$professor','$qtdAulas')");
    }

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/style2.css">
    <title>MyTeacher</title>

    <style>
    #submit{
    background-color: #f52273;
    width: 100%;
    border: none;
    padding: 15px;
    color: white;
    font-size: 15px;
    cursor:pointer ;

}
    </style>
</head>

<body>
    <header>
        <img class="logo" src="./img/logo_myteacher.png" alt="logo do site MyTeacher">
        <span>Encontre o professor perfeito!</span>
    </header>
    <main>
        <section class="teacher-container">
            <img src="./img/foto_professor_1.png" alt="Foto do professor" class="teacher-img">
            <p><strong class="teacher-name">João da Silva</strong></p>
            <p class="teacher-price">R$ 100,00 por hora</p>
            <p class="teacher-description">Professor de inglês, já morou nos Estados Unidos e Inglaterra.</p>
        
        </section>
        <section class="teacher-container">
            <img src="./img/foto_professor_2.png" alt="Foto do professor" class="teacher-img">
            <p><strong class="teacher-name">Maria da Silva</strong></p>
            <p class="teacher-price">R$ 90,00 por hora</p>
            <p class="teacher-description">Professora de inglês, já morou nos Estados Unidos e Inglaterra.</p>
        </section>


    <div class='box'>
        <form action="index2.php" method="POST">
            <fieldset>
                <legend><b>Cadastro Aulas</b></legend>
            <br>
            <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome"> <b>Nome</b></label>
            </div>
            <div class="inputBox">
                <input type="email" name="email" id="email" class="inputUser" required>
                <label for="email"> <b>E-mail</b></label>
            </div>
            <p> <b>Escolha Professor:</b></p>
            <input type="text" name="professor" id="professor" class="inputUser" >
            <label for="text"></label>
            <br>
            <p><b>Quantidades de Aulas:</b></p>
            
            <input type="text"  name="qtdAulas" id="qtdAulas" class="inputUser" >
            <label for="text"></label>
            <br>
            <br>
            <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
    </main>

    
</body>