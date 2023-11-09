<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    * {
        background-color: rgb(255, 119, 210);
    }

    #bt {
        text-align: center;

    }

    h1 {
        text-align: center;
    }

    #posi {
        font: size 20px;

        color: white;
    }
</style>

<body>
<?php
 $fibon = array();
 $fibonacci[0]= 1;
 $fibonacci[1]= 1;

 function fibo($fibon){
 $fibonacci = array();
 $fibonacci[0]= 1;
 $fibonacci[1]= 1;

 for ($valor = 2; $valor <$fibon; $valor++){
     $fibonacci[$valor] = $fibonacci[$valor - 1] + $fibonacci[$valor - 2];
 }
 return $fibonacci[$fibon - 1];}

 ?>
    <h1>calculadora</h1>
    <div class="row mt-2">
        <div class="col-6 offset-3">
            <?php
            if (isset($_POST["posicao"])) {
            ?>
                <h1>resultado</h1>
                <div class="row mt-4">
                    <div class="col-5 ">
                        <div class="alert alert-dark" role="alert">
                        <small> posiçao: </small>
                        <h2></? echo $_POST["posicao"]; ?></h2>
                        </div>
                    </div>
                    <div class="col-3">
                    <div class="col-5 offset-2">
                         <div class="alert alert-dark" role="alert">
                           <small> valor Y: </small>
                           <h2><?php echo fibo($_POST["posicao"]); ?></h2>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>

            <form method="post">
                <label>posicao</label>
                <input name="posicao" type="text" class="form-control" placeholder="sequencia de fibonacci" value="<?php if (isset($_POST["posicao"])) echo $_POST["posicao"]; ?>" />
                <div id="bt">
                    <button type="submit" class="btn btn-outline-primary">enviar</button>
                    <button type="button" class="btn btn-outline-danger">resetar</button>
                </div>
        </div>
    </div>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</html>