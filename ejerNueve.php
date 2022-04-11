<!doctype html>
<html>
<head>
    <title>Prueba de Bootstrap 5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0"
    crossorigin="anonymous">
    <link href="ejerNueve.css" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <?php 
        //include_once("structure/header.php");
    ?>


    <div >

        <div id="header" class="container-fluid border border-dark d-flex">            
            <p>Header</p>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div id="uno" class="col-lg-4 col-md-6 col-sm-12 border border-dark d-flex">
                    <p>1</p>
                </div>
                <div id="dos" class="col-lg-4 col-md-6 col-sm-12 border border-dark d-flex">
                    <p>2</p>
                </div>
                <div id="tres" class="col-lg-4 col-md-12 col-sm-12 border border-dark d-flex">
                    <p>3</p>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div id="footer1" class="col-lg-6 col-md-12 col-sm-12 border border-dark d-flex">
                    <p>Footer 1</p>
                </div>
                <div id="footer2" class="col-lg-6 col-md-12 col-sm-12 border border-dark d-flex">
                    <p>Footer 2</p>
                </div>
            </div>
        </div> 
 
    </div>    
</body>
</html>