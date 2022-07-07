<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calcular IMC</title>
</head>
<body>

    <h1>Índice de Massa Corporal - IMC</h1>

    <div id="global">
    <div id="texto">
        <p> - A classificação do índice de massa corporal IMC pode ajudar a identificar problemas de obesidade ou desnutrição, em crianças, adolescentes, adultos e idosos.

        <p> - Além de calcular o valor de IMC, esta calculadora também indica qual o intervalo de peso ideal que deve ter para garantir uma melhor qualidade de vida.
        
        <p> - Ter um peso dentro do intervalo de peso ideal ajuda ainda a evitar o aparecimento de várias doenças crônicas, como diabetes e hipertensão.
    </div>

    <div id="formulario">
        <form action="index.php" method="get">
            <br><h3>ALTURA</h3>
            <input type="text" name="altura" placeholder="Ex: 1.80" required>
            <br><h3>PESO</h3>
            <input type="text" name="peso" placeholder="Ex: 80" required>

            <br><button type="submit">IMC</button>
        </form>

    <?php 
        function IMC(){

            @$altura = $_GET['altura'];
            @$peso = $_GET['peso'];

            @$multiplicar = ($altura * $altura);
            @$dividir = ($peso / $multiplicar);
            print_r("<h3>IMC = $dividir");

            if($dividir < 18.5){
                print_r ("<h3 style='color:Red'>MAGREZA!</h3>");
            }elseif($dividir < 24.9 ){
                print_r("<h3 style='color:Green'>NORMAL</h3>");
            }elseif($dividir < 29.9 ){
                print_r("<h3 style='color:Orange'>SOBREPESO</h3>");
            }elseif($dividir < 34.9 ){
                print_r("<h3 style='color:Crimson'>OBESIDADE GRAU I</h3>");
            }elseif($dividir < 39.9 ){
                print_r("<h3 style='color:Crimson'>OBESIDADE GRAU II</h3>");
            }elseif($dividir > 40 ){
                print_r("<h3 style='color:Red'>OBESIDADE GRAU III</h3>");
            }         
        }
        $result = IMC();
        return $result;
    ?>
    
    </div>
    </div>
    
</body>
</html>