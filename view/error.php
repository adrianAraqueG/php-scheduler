<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error | Error</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url?>public/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>

<div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="bg-secondary rounded  text-center p-5 text-light">
        <h4>Lo siento, no pudimos encontrar lo que buscas :(</h4>
        <p>Redirigiendo...</p>
        <h5 id="counter">6</h5>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () =>{
            const counter = document.querySelector('#counter');

            let i = 5;

            setInterval(() =>{
                if(i === 0){
                    window.location.replace('/php-scheduler/');
                }

                counter.textContent = i;
                i--;
            }, 1000);
        });
    </script>
</div>

<?php require_once 'layout/footer.php' ?> 