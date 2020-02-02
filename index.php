<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/ab959ee33f.js" crossorigin="anonymous"></script>
    <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 text-white py-3" id="leftcol">
            <ul>
                <section class="mb-5">
                    <label>[Einlogstatus - UserName]</label>
                    <label>[AdminOderUser]</label>
                </section>

                <label for="login_section"><i class="fas fa-sign-in-alt"></i> Login</label>
                <section id="login_section" class="mb-5">
                    <li class="list-item">Einloggen</li>
                    <li class="list-item">Ausloggen</li>
                    <li class="list-item">Zeiterfassung</li>
                </section>

                <label for="zeitchecker_section"><i class="fas fa-business-time"></i> Zeitchecker</label>
                <section id="zeitchecker_section" class="mb-5">
                    <li class="list-item">Zeiterfassung anzeigen</li>
                    <li class="list-item">Alle Benutzer anzeigen</li>
                </section>

                <label for="benutzerverwalten_section"><i class="fas fa-user-edit"></i> Benutzer verwalten</label>
                <section id="benutzerverwalten_section" class="mb-5">
                    <li class="list-item">Benutzer anlegen</li>
                    <li class="list-item">Benutzer bearbeiten</li>
                </section>
            </ul>
        </div>
        <div class="col-sm-9 py-3" id="content">
            <section id="logoff-content">
                <img src="img/logo.png" width="400" class="rounded mx-auto d-block" alt="Flyinc Group">
                <h5 class="text-center">Du musst dich zuerst einloggen um auf die
                    <br>Seite zugreifen zu können.
                </h5>
                <a href="javascript::" data-toggle="modal" data-target="#exampleModalCenter"
                   onclick='$(".list-item")[0].click();' class="d-block text-center">Hier einloggen.</a>
            </section>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="id_user">User ID:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control" name="user_id" id="id_user">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password_user">Passwort:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                            </div>
                            <input type="password" class="form-control" name="user_password" id="password_user">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary">Schlei&szlig;en</button>
                    <button type="submit" class="btn btn-primary">Einloggen</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="js/ui.js"></script>
</body>
</html>