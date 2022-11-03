<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Equation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <section class="border border-2 rounded border-primary p-3">

        <div class="fs-4 text-center mb-2 p-1 bg-primary bg-opacity-75 text-white rounded">
            <?php
            if(isset($_POST['submit'])){
                include("controller/system.php");
            }
            ?>
        </div>

        <form action="" method="post">
            <div class="mb-3">
                <label class="form-label" for="">Quantidade de equações</label>
                <select class="form-select" aria-label="Default select example" name="quantity" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Número a ser conseguido</label>
                <input type="number" name="result" id="" class="form-control" required>
            </div>

            <div class="mb-3 d-flex justify-content-between align-items-center">
                <div class="mx-2 px-1 w-50">
                    <label class="form-label" for="">Operação</label>
                    <select class="form-select" aria-label="Default select example" name="operation" required>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">x</option>
                        <option value="/">/</option>
                    </select>
                </div>

                <div class="mx-2 px-1 w-100">
                    <label class="form-label" for=""> N° de Algarismos </label>
                    <select class="form-select" aria-label="Default select example" name="numAlg" required>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
            </div>



            <button class="btn btn-success w-100" type="submit" name="submit">Enviar</button>
        </form>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>