<!doctype html>

<html lang="es">
@include('layouts.header')

<body>
    @include('layouts.navbar')

    <body
        background="https://static.vecteezy.com/system/resources/previews/001/072/211/large_2x/abstract-digital-technology-blue-abstract-hud-background-vector.jpg">
        <section class="vh-100">

            <div class="container-fluid h-custom">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="https://emowe.com/wp-content/uploads/tomar-nota.png" class="img-fluid"
                            alt="Sample image">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                        <div class="form-group text-white fw-bold ">
                            <h3>Editar Notas</h3>
                            <label for="exampleInputNombre">Tu titulo de la Nota actual</label>
                            <input type="text" class="form-control" style="background-color:transparent;"
                                id="exampleInputNombre"
                                placeholder="aca se coloca la nota actual que selecciona el usuario" require
                                value="{{ $contentNote['title'] }}">
                        </div>
                        <div class="form-group text-white fw-bold">
                            <label for="exampleInputApellidos">Descripcion actual de tu nota</label>
                            <input type="text" class="form-control " style="background-color:transparent; id="
                                exampleInputApellidos"
                                placeholder="aca se coloca la descripciom actual que selecciona el usuario" require
                                value="{{ $contentNote['content'] }}">
                        </div>

                        <form method="POST" action="{{ route('note.update', $contentNote['uuid']) }}">
                            @csrf
                            @method('PUT')
                            <br />

                            <div class="form-group text-white fw-bold">

                                <label for="exampleInputNombre">Titulo de la nota</label>
                                <input type="text" class="form-control" style="background-color:transparent;"
                                    id="exampleInputNombre" placeholder="no dejar espacios en blanco" require
                                    name="title">
                            </div>
                            <div class="form-group text-white fw-bold">
                                <label for="exampleInputApellidos">Descripcion de la nota</label>
                                <input type="text" class="form-control" style="background-color:transparent;"
                                    id="exampleInputApellidos" placeholder="no dejar espacios en blanco" require
                                    name="content">
                            </div>
                            <br />
                            <div class="col-12 text-center">
                                <button type="submit"
                                    class="btn btn-lg  btn-outline-info fw-bold text-white">Actualizar</button>

                            </div>

                            <input type="hidden" name="userId" value="{{ $contentNote['uuid'] }}">
                        </form>
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
