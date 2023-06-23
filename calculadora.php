<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercearia do Seu João</title>
    <link href="calculadora.css" rel="stylesheet">
    <link rel="icon" href="mercearia.png">
</head>

<body>
        <fieldset id="seujoao">
            <h1>Valores</h1>
        </fieldset>
        <fieldset id="calculadora">
            <h3>Calculadora</h3>
        </fieldset>
        <div class="valor1">
            <form action="calculadora.php" method="post" >
                <label>R$:</label>
                <input type="number" size="43" name="valor1" placeholder="Digite aqui" maxlength="90" required>
            
        </div>
        <div class="valor2">
            
                <label>R$:</label>
                <input type="number" size="43" name="valor2" placeholder="Digite aqui" maxlength="90" required>

        </div>
        <div class="adicao">
            <input type="radio" name="calculadora" value="soma" >
            <label>Adição + </label>
        </div>
        <div class="subtracao">
            <input type="radio" name="calculadora" value= "subtracao">
            <label>Subtração - </label>
        </div>
        <div class="multiplicacao">
            <input type="radio" name="calculadora" value="multiplicacao">
            <label>Multiplicação x </label>
        </div>
        <div class="divisao">
            <input type="radio" name="calculadora" value="divisao" >
            <label>Divisão / </label>
        </div>
        <div class="calcular">
            <input type="submit" name="Calcular" value="Calcular">
        </div>
        </form>
        <div class="fim">
            <a href="logout.php">
                <img src="fim.png" width="35" height="35">
            </a>
        </div>
        <fieldset id="total">
            <h3>Total</h3>
        </fieldset>
        <div class="total">
            <textarea name="total" type="text" rows="3" cols="13" readonly span style="font-size: 20px;">     
        
        <?php
        if (isset($_POST["valor1"]) && isset($_POST["valor2"]) && isset($_POST["calculadora"])){

        $a = $_POST["valor1"];
        $b = $_POST["valor2"];
        $op = $_POST["calculadora"];
        $c = 0;
        
        if($op == "soma"){
            $c = $a + $b;
        }
        //echo $c = "resultado";
        else if($op == "subtracao"){
            $c = $a - $b;
        }
        //echo $c = "resultado";
        else if($op == "multiplicacao"){
            $c = $a*$b;
        }
        //echo $c = "resultado";
        else{
            $c = $a/$b;
        }
        
        echo "$c";
    }
        ?>
   
    </textarea>
    </div>
    <!-- Plugin VLibras -->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
            <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
            <script>
                new window.VLibras.Widget('https://vlibras.gov.br/app');
            </script> <!-- Plugin VLibras -->
</body>

</html>
