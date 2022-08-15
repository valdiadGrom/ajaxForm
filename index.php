<!doctype html>
<html lang="en">

<head>
    <title>Отправка формы</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>


<body>

    <div class="container">
        <form>
            <div class="mb-3 row">
                <label for="inputLogin" class="col-xs-4 col-form-label">Логин</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="inputLogin" id="inputLogin" placeholder="Логин">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputEmail" class="col-xs-4 col-form-label">Почта</label>
                <div class="col-xs-8">
                    <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Почта" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                </div>
            </div>
            <div class="mb-3">
                <label for="imgFile" class="form-label"></label>
                <input type="file" class="form-control" name="imgFile" id="imgFile" placeholder="" aria-describedby="fileHelpId">
            </div>
            <div class="mb-3">
                <label for="firstPass" class="form-label">Введите пароль</label>
                <input type="password" class="form-control" name="firstPass" id="firstPass" placeholder="Пароль">
            </div>
            <div class="mb-3">
                <label for="secPass" class="form-label">Повторите пароль</label>
                <input type="password" class="form-control" name="secPass" id="secPass" placeholder="Пароль">
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary" id="sendButton">Отправить</button>
                </div>
            </div>
        </form>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/form.js"></script>
</body>

</html>