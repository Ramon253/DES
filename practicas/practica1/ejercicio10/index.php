<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container" style="text-align: center">
    <form action="ejercicio10.php" method="post">
        <!--Alumno 1 -->
        <h1>Inserte su nombre, el nombre de la asignatura y su nota</h1>
        <div class="container" style="margin: 50px; text-align: center">
            <h2>Estudiante 1</h2>
            <input type="text" class="form-control" placeholder="Nombre del estudiante"
                   aria-label="Nombre del estudiante" aria-describedby="basic-addon2" name="studentName1"
                   style="align-self: center; margin-bottom: 20px">
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura 1"
                           aria-label="Nombre asignatura 1" aria-describedby="basic-addon2" name="student1Subject1" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student1Grade1" maxlength="5"  required>
                </div>
            </div>
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura 2"
                           aria-label="Nombre asignatura 2" aria-describedby="basic-addon2" name="student1Subject2" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student1Grade2" maxlength="5" required>
                </div>
            </div>
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura3"
                           aria-label="Nombre asignatura" aria-describedby="basic-addon2" name="student1Subject3" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student1Grade3" maxlength="5" required>
                </div>
            </div>
        </div>

        <!--Alumno 2-->
        <div class="container" style="margin: 50px; text-align: center">
            <h2>Estudiante 2</h2>
            <input type="text" class="form-control" placeholder="Nombre del estudiante"
                   aria-label="Nombre del estudiante" aria-describedby="basic-addon2" name="studentName2"
                   style="align-self: center; margin-bottom: 20px">
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura 1"
                           aria-label="Nombre asignatura 1" aria-describedby="basic-addon2" name="student2Subject1" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student2Grade1" maxlength="5" required>
                </div>
            </div>
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura 2"
                           aria-label="Nombre asignatura 2" aria-describedby="basic-addon2" name="student2Subject2" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student2Grade2" maxlength="5" required>
                </div>
            </div>
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura 3"
                           aria-label="Nombre asignatura" aria-describedby="basic-addon2" name="student2Subject3" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student2Grade3" maxlength="5" required>
                </div>
            </div>
        </div>
        <!--Alumno 3-->
        <div class="container" style="margin: 50px; text-align: center">
            <h2>Estudiante 3</h2>
            <input type="text" class="form-control" placeholder="Nombre del estudiante"
                   aria-label="Nombre del estudiante" aria-describedby="basic-addon2" name="studentName3"
                   style="align-self: center; margin-bottom: 20px">
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura 1"
                           aria-label="Nombre asignatura 1" aria-describedby="basic-addon2" name="student3Subject1" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student3Grade1" maxlength="5" required>
                </div>
            </div>
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura 2"
                           aria-label="Nombre asignatura 2" aria-describedby="basic-addon2" name="student3Subject2" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student3Grade2" maxlength="5" required>
                </div>
            </div>
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura3"
                           aria-label="Nombre asignatura" aria-describedby="basic-addon2" name="student3Subject3" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student3Grade3" maxlength="5" required>
                </div>
            </div>
        </div>

        <!--Alumno 4-->
        <div class="container" style="margin: 50px; text-align: center">
            <h2>Estudiante 4</h2>
            <input type="text" class="form-control" placeholder="Nombre del estudiante"
                   aria-label="Nombre del estudiante" aria-describedby="basic-addon2" name="studentName4"
                   style="align-self: center; margin-bottom: 20px">
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura 1"
                           aria-label="Nombre asignatura 1" aria-describedby="basic-addon2" name="student4Subject1" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student4Grade1" maxlength="5" required>
                </div>
            </div>
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura 2"
                           aria-label="Nombre asignatura 2" aria-describedby="basic-addon2" name="student4Subject2" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student4Grade2" maxlength="5" required>
                </div>
            </div>
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura3"
                           aria-label="Nombre asignatura" aria-describedby="basic-addon2" name="student4Subject3" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student4Grade3" maxlength="5" required>
                </div>
            </div>
        </div>

        <!--Alumno 5-->
        <div class="container" style="margin: 50px; text-align: center">
            <h2>Estudiante 5</h2>
            <input type="text" class="form-control" placeholder="Nombre del estudiante"
                   aria-label="Nombre del estudiante" aria-describedby="basic-addon2" name="studentName5"
                   style="align-self: center; margin-bottom: 20px">
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura 1"
                           aria-label="Nombre asignatura 1" aria-describedby="basic-addon2" name="student5Subject1" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student5Grade1" maxlength="5" required>
                </div>
            </div>
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura 2"
                           aria-label="Nombre asignatura 2" aria-describedby="basic-addon2" name="student5Subject2" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student5Grade2" maxlength="5" required>
                </div>
            </div>
            <div style="display: flex; gap: 20px">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nombre de asignatura3"
                           aria-label="Nombre asignatura" aria-describedby="basic-addon2" name="student5Subject3" required>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="nota"
                           aria-label="nota" aria-describedby="basic-addon2" name="student5Grade3" maxlength="5" required>

                </div>

            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enviar</button>
            </div>
        </div>


    </form>
</div>
</body>
</html>
