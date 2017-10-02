<?php
/**
 * Created by PhpStorm.
 * User: 11356839
 * Date: 10/2/2017
 * Time: 7:16 PM
 */


Route::get('/', function(){
    return view('welcome');
});

Route::get('hello', function(){
    return "Hello world";
});

Route::



    ?>
<html>
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
    <div class="container">
        <div class="card col l12 m12 s12">
            <h1>M<y Own Laravel Website</h1>
            <div class="jumbotron">
                <p>This is my own Laravel Website, in Materialize!</p>
            </div>
        </div>
    </div>
<body>
<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>
</html>
