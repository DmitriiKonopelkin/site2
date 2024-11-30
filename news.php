<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Ремонт складской техники</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .card {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.card-body {
    padding: 20px;
    background-color: #fff;
}

.card-title {
    color: #333;
    font-size: 24px;
    font-weight: bold;
    margin-bottom: 10px;
}

.card-subtitle {
    color: #777;
    font-size: 16px;
    margin-bottom: 15px;
}

.card-text {
    color: #444;
    font-size: 16px;
    line-height: 1.5;
}
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container my-5">
        <h1>Последние новости</h1>
        
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Новая услуга: диагностика складского оборудования</h5>
                <h6 class="card-subtitle mb-2 text-muted">24 октября 2024 года</h6>
                <p class="card-text">Рады сообщить, что теперь наша компания предлагает новую услугу - диагностику складского оборудования. Наш опытный персонал проведет тщательный анализ состояния ваших машин и предоставит рекомендации по дальнейшему обслуживанию.</p>
            </div>
        </div>
        
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Расширение ассортимента запчастей</h5>
                <h6 class="card-subtitle mb-2 text-muted">15 сентября 2024 года</h6>
                <p class="card-text">У нас отличные новости! Мы расширяем ассортимент запчастей для складской техники. Теперь у нас в наличии детали от ведущих производителей, что позволит быстрее и качественнее выполнять ремонтные работы.</p>
            </div>
        </div>
        

        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Участие в выставке складских технологий</h5>
                <h6 class="card-subtitle mb-2 text-muted">05 августа 2024 года</h6>
                <p class="card-text">Приглашаем посетить нашу экспозицию на выставке складских технологий, которая пройдет с 10 по 12 ноября. У нас будет возможность продемонстрировать наши последние достижения и обсудить возможности сотрудничества.</p>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js" integrity="sha512-kf+Wf8yeMn18gftKzhmwodigEnaAM00vrxByXvPg9ufBlrxS8paOgexbrwnS7owJnlyRPpT2lPqmCrUzkypMqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.stackpathbootstrap.com/bootstrap/5.0.2/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>