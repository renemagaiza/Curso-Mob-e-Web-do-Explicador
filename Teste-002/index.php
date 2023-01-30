<?php
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscricao</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js" integrity="sha512-WBbdKQKeIQFarq1hrOxNL/gnp0Tqh25fn0z3X1po+ej8iuHhHdp6Sh9l+tghGw5L1bsvtzjeuSKsL80RW3XdYw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-weight: bold;
            font-size: 1em;
        }
        main{
            position: relative;
            color: rgb(167, 167, 1);
            width: 100vw;
            height: 100vh;
            text-align: center;
            background-color: white;
            background-image: url("fundo.jpg");
            background-size: cover;
        }



        section{
            position: absolute;
            top: 50%;
            left: 50%;
            width: 80vw;
            height: 60vh;
            padding: 15px;
            padding-top: 30px;
            box-shadow: -0px -0px 15px black;
            border-radius: 15px;
            background-color: rgba(255, 255, 255, 0.719);
            transform: translate(-50%,-50%)

        }
        h1{
            padding: 50px;
            font-size: 2em;
            text-shadow: 1px 3px 5px black;
        }
        button{
            padding: 10px;
            color: aliceblue;
            border: none;
            border-radius: 10px;
            margin: 30px;
            cursor: pointer;
            background-color: olive;
        }
        article{
            display: block;
            color: black;
            background-color: rgba(117, 117, 74, 0.877);
            padding: 60px;
            border-radius: 10px;
            text-align: justify;
            line-height: 30px;
        }
        strong{
            text-decoration: underline;
        }
        
    </style>
</head>
<body>
    <main>
        <section>
            <h1>Curso de Mobile&Web</h1>
            <div id="tela">
            <p>Inscrevar-se clicando no botao abaixo!</p>
            <button onclick="clickMenu ()">Inscrever-se</button>
            </div>
            <article id="sms">
                
            </article>
        </section>
    </main>

    <script>
        function clickMenu (){
            $.ajax({url:"sms.php", success:function(result){
                $("article").text(result);
            }
        })
            //sms.style.display = "block";
            tela.style.display = "none"
            window.alert(ola);
        }
    </script>
</body>
</html>
?>
