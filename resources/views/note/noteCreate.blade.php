<!doctype html>

<html lang="es">
@include('layouts.header')

<body>
    @include('layouts.navbar')

    <body
        background="https://static.vecteezy.com/system/resources/previews/001/072/211/large_2x/abstract-digital-technology-blue-abstract-hud-background-vector.jpg">
        <section class="vh-100">
            @if (Session::has('success'))
                <div class="alert alert-info">{{ Session::get('success') }}</div>
            @endif
            <h1 class="text-center text-light">¡Hola!</h1>
            <h2 class="text-center text-light">Bievenido aca puedes agregar tus notas</h2>


            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="card" style="background-color:transparent;">
                            <div class="card-header">

                            </div>


                            <form method="POST" id="formCreateNote">


                                <label class="text-light">Nombre de la nota:</label>
                                <input required class="form-control " style="background-color:transparent;" type="text"
                                    name="title" id="">

                                <input type="hidden" name="userId" value="{{ session('id') }}" id="userId">

                                <label class="text-light">Descripcion:</label>
                                <textarea name="content" required class="form-control" style="background-color:transparent;" id=""
                                    rows="3"></textarea>
                                <br />
                                <input class="btn btn-lg  btn-outline-info fw-bold text-white" type="submit"
                                    value="Guardar">


                            </form>


                            <div class="card-footer text-muted">

                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <table class="table">
                            <thead>

                                <tr>
                                    <th class="text-light">Nota</th>
                                    <th class="text-light">Descripcion</th>
                                    <th class="text-light">Acciones</th>
                                </tr>

                            </thead>
                            <tbody id="bodyTable">

                            </tbody>
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

<script>
    /* Añadir una nueva nota  */
    document.getElementById('formCreateNote').addEventListener('submit', (event) => {

        event.preventDefault();

        var myHeaders = new Headers();

        var formData = new FormData(document.getElementById('formCreateNote'));

        var myInit = {
            method: 'POST',
            headers: myHeaders,
            mode: 'cors',
            cache: 'default',
            body: formData
        };

        var myRequest = new Request('http://localhost:5000/api/note', myInit);

        fetch(myRequest)
            .then(response => response.json())
            .then(data => {
                alert("Nota creada");
                setInterval("location.reload()", 2000)
            });
    });

    /* Traer las notas */
    window.addEventListener('DOMContentLoaded', () => {
        var myHeaders = new Headers();

        var myInit = {
            method: 'GET',
            headers: myHeaders,
            mode: 'cors',
            cache: 'default',
        };

        var myRequest = new Request(`http://localhost:5000/api/note/${document.getElementById("userId").value}`,
            myInit);

        fetch(myRequest)
            .then(response => response.json())
            .then(data => data.map((obj) => {
                document.getElementById("bodyTable").innerHTML += `
                    <tr>
                        <td class="text-white">${obj.title}</td>
                        <td class="text-white">${obj.content}</td>
                        <td>
                            <div class="row">
                                <div class="col-4">
                                    <a href="note/${obj.uuid}" class="btn btn-outline-info text-light">Editar</a>
                                </div>
                                <div class="col-4">
                                    <form action="note/${obj.uuid}" method="post">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    `
            }))
    });
</script>
