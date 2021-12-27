<main class="text-light mt-5">
    <h2 class="ml-1">Caculo do valor (R$) do consumo</h2>

    <form action="calculo.php" method="POST" class="">
        <div class="form-group col-md-6">
            <label for="distancia" class="col-form-label"> <strong>Distância em Quilômetros a ser percorrida:</strong> </label>
            <input type="number" class="form-control" name="distancia">
        </div>
        <div class="form-group col-md-6">
            <label for="autonomia" class="col-form-label"> <strong>Consumo de combustível do veículo (Km/l):</strong> </label>
            <input type="number" class="form-control" name="autonomia">
        </div>
        <div class="form-group ml-3">
            <button type="submit" class="btn btn-success">Enviar</button>
        </div>
    </form>
</main>