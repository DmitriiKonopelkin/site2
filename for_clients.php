<?php



if($_SERVER['REQUEST_METHOD']=='POST') {
    $name= $_POST['name'];
    $email= $_POST['email'];
    $phone= $_POST['phone'];
    $equipment= $_POST['equipment'];
    $description= $_POST['description'];

    $to='dm.konopelkin@gmail.com';
    $subject= 'Заявка на ремонт';
    $message= 'имя: $name \n
    email: $email \n
     телефон: $phone \n
     проблема: $description \n
     тип оборудования: $equipment \n';

     mail($to, $subject, $message);
}


?>

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
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="container mt-5 mb-5">
    <h1>Оформление заявки на ремонт</h1>
    <form action="for_clients.php" method="post">
        <div class="mb-3">
            <label for="name" class="form-label">Ваше имя</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Телефон</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="mb-3">
            <label for="equipment" class="form-label">Тип оборудования</label>
            <select class="form-select" id="equipment" name="equipment" required>
                <option value="">Выберите оборудование</option>
                <option value="forklift">Погрузчик</option>
                <option value="stacker">Штабелер</option>
                <option value="pallet_truck">Гидравлическая тележка</option>
                <option value="other">Другое</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание проблемы</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить заявку</button>
    </form>
</div>


<?php include 'footer.php'; ?>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.5/umd/popper.min.js" integrity="sha512-kf+Wf8yeMn18gftKzhmwodigEnaAM00vrxByXvPg9ufBlrxS8paOgexbrwnS7owJnlyRPpT2lPqmCrUzkypMqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.stackpathbootstrap.com/bootstrap/5.0.2/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>