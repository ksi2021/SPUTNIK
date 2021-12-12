<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .list-group-item-action:hover{
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class='container text-center mt-4'>
<?php if($session->isAlert()): ?>
        <?php if($session->getAlert() == TRUE): ?>
        <div class="alert alert-success" role="alert">
        Верно!
        </div>
        <?php else: ?>
        <div class="alert alert-danger" role="alert">
        Неверено!
        </div>
        <?php endif; ?>
    <?php endif; ?>
</div>
<div class="card w-75 mx-auto mt-4">
    <form action="" method="post">
        <h5 class="card-header">Игра  «Счастливый билет»</h5>
        <div class="card-body">
            <h5 class="card-title">Определите является ли номер билета снизу счастливым ()</h5>
            <span class="card-text text-decoration-underline bg-info"><?= $num->getData() ?></span>
            <br>
            <div class="btn-group" role="group" >
                <button type="submit" class="btn btn-success" name="vote" value="1">Да</button>
                <button type="submit" class="btn btn-danger" name="vote" value="0">Нет</button>
                <input type="hidden" name="number" value="<?= $num->getData() ?>">
            </div>
        
        </div>
    </form>
</div>

<div class="container">
    <?php if($db->getData()): ?>
        <?php if(count($db->getData()) > 0 ): ?>
            <h3 class='text-center mt-4'>Все билеты</h3>
            <ul class="list-group ">
            <?php foreach($db->getData() as $el): ?>
                <li class="list-group-item  list-group-item-action fs-5"> <?= $el['number'] ?></li>
            <?php endforeach; ?>
            <ul class="list-group">
        <?php endif; ?>
    <?php endif; ?>
</div>
</body>
</html>