<!doctype html>

<html lang="es">
@include('layouts.header')

<body>
    @include('layouts.navbar')

    <body
        background="https://static.vecteezy.com/system/resources/previews/001/072/211/large_2x/abstract-digital-technology-blue-abstract-hud-background-vector.jpg">
        <section class="vh-100">

            <h1 class="text-center text-light">¡Hola!</h1>
            <h2 class="text-center text-light">Bievenido aca puedes agregar tus notas</h2>


            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="card" style="background-color:transparent;" >
                            <div class="card-header">

                            </div>


                            <form class>


                               <label class="text-light">Nombre de la nota:</label><input required class="form-control "  style="background-color:transparent;"  type="text" name="" id="">

                               <label class="text-light">Descripcion:</label>
                                <textarea required class="form-control" style="background-color:transparent;" id="" rows="3"></textarea>
                                <br />
                                <input class="btn btn-lg  btn-outline-info fw-bold text-white"   type="submit" value="Guardar">


                            </form>


                            <div class="card-footer text-muted">

                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <table class="table">
                            <thead>

                                <tr>
                                    <th class="text-light">Id</th>
                                    <th class="text-light">Nota</th>
                                    <th class="text-light">Descripcion</th>
                                </tr>

                            </thead>



                            <tr class="table-active">
                                <td class="text-light">id</td>
                                <td class="text-light">muestra nota2</td>
                                <td class="text-light">descripcion</td>

                                <td><a name="" class="btn btn-outline-danger" href="">Eliminar</a></td>
                                <td><a class="btn btn-outline-info text-light">Actualizar</a></td>

                            </tr>



                            </tr>

                        </table>

                    </div>

                </div>
            </div>

        </section>

        @include('layouts.footer')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

    </body>

</html>