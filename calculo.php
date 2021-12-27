<?php 

    $precoGasolina = 6.80;
    $precoDiesel = 5.80;
    $precoEtanol = 5.20;
    $mensagem = '';

    function CalcularGasolina($distancia,$autonomia){
        global $precoGasolina;
        $calculo = ($distancia / $autonomia) * $precoGasolina;
        $calculo = number_format($calculo,2,",",".");
        return $calculo;
    }

    function CalcularDiesel($distancia,$autonomia){
        global $precoDiesel;
        $calculo = ($distancia / $autonomia) * $precoDiesel;
        $calculo = number_format($calculo,2,",",".");
        return $calculo;
    }

    function CalcularEtanol($distancia,$autonomia){
        global $precoEtanol;
        $calculo = ($distancia / $autonomia) * $precoEtanol;
        $calculo = number_format($calculo,2,",",".");
        return $calculo;
    }

if($_POST){
    if(is_numeric($_POST['distancia']) && is_numeric($_POST['autonomia'])){
        if($_POST['distancia'] > 0 && $_POST['autonomia'] > 0){
            $gasolina = CalcularGasolina($_POST['distancia'],$_POST['autonomia']);
            $diesel = CalcularDiesel($_POST['distancia'],$_POST['autonomia']);
            $etanol = CalcularEtanol($_POST['distancia'],$_POST['autonomia']);

            $mensagem .= '<div class="jumbotron bg-success mt-4">
                            <h2>O Valor total gasto foi de:</h2>
                            <ul>
                                <li><b>Gasolina: R$ '.$gasolina.'</b></li>
                                <li><b>Diesel: R$ '.$diesel.'</b></li>
                                <li><b>Etanol: R$ '.$etanol.'</b></li>
                            </ul>
                            
                         </div>
                         <a href="index.php">
                            <button type = "button" class = "btn btn-primary btn-lg">Voltar</button>
                         </a>';
        }else{
            $mensagem .='<section>
                    <div class="jumbotron bg-danger mt-4">
                        <h3>Erro: Valor passado é menor que zero</h3>
                        <p>Passe somente valores maiores que zero</p>
                    </div>
                    <a href="index.php">
                        <button type = "button" class = "btn btn-primary btn-lg">Voltar</button>
                    </a>
    
    

                </section>';
        }
    }else{
        $mensagem .='<section>
                    <div class="jumbotron bg-danger mt-4">
                        <h3>Erro: Dados passado não são númericos</h3>
                        <p>Passe dados númericos</p>
                    </div>
                    <a href="index.php">
                        <button type = "button" class = "btn btn-primary btn-lg">Voltar</button>
                    </a>
    
    

                </section>';
    }
}else{
    $mensagem .='<section>
                    <div class="jumbotron bg-danger">
                        <h3>Erro: Nenhum dado foi passado</h3>
                        <p>Adcione algum dado</p>
                    </div>
                    <a href="index.php">
                        <button type = "button" class = "btn btn-primary btn-lg">Voltar</button>
                    </a>
    
    

                </section>';
}

?>

<?php include __DIR__."/includes/header.php"; ?>

    <div class="container">
        <?=$mensagem?>
    </div>
    
<?php include __DIR__."/includes/footer.php";?>