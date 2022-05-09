<!doctype html>

<html lang="es">
@include('layouts.header')

<body>
    <body background="https://static.vecteezy.com/system/resources/previews/001/072/211/large_2x/abstract-digital-technology-blue-abstract-hud-background-vector.jpg">
    @include('layouts.navbar')

    @if (Session::has('success'))
        <div class="alert alert-info">{{ Session::get('success') }}</div>
    @endif
    <div class="container-fluid text-center">
        <div class="m-0 row justify-content-center">
            <div class="col-sm-8 border border-white mt-5">  
                <div class="form-group text-white fw-bold">
                <h1>Bienvenido a Tus Notas</h1>
                <p class="fst-italic fw-bold fs-6" >Piensa en Tus Notas como tu centro de referencia, no solo para
                 tus listas de tareas pendientes, sino para todas tus notas. 
                 Las posibilidades de organización que ofrece son amplias sobre todo 
                 es una herramienta potente que puede ayudar a ejecutivos, 
                 emprendedores y personas creativas a capturar y organizar sus ideas.
                  Lo único que tienes que hacer es utilizarlo.</p>
                <hr>
                <h3>Creadores</h3>
                <figure class="container overflow-hidden">
                    <div class="row gy-5">
                      <div class="col-6">
                        <blockquote class="card p-0 border fst-italic fw-bold blockquote" style="background-color:transparent;">
                            <p>Juan David Ramirez</p>
                          </blockquote>
                          <figcaption class="blockquote-footer text-dark fw-bold">
                             <cite title="Source Title">Backend</cite>
                          </figcaption>
                      </div>
                      <div class="col-6">
                        <blockquote class="card p-0 border fst-italic fw-bold blockquote" style="background-color:transparent;">
                            <p>Santiago Largo</p>
                          </blockquote>
                          <figcaption class="blockquote-footer text-dark fw-bold">
                             <cite title="Source Title">Base de datos y backend</cite>
                          </figcaption>
                      </div>
                      <div class="col-6">
                        <blockquote class="card p-0 border fst-italic fw-bold blockquote" style="background-color:transparent;">
                            <p>Angelica Aristizabal</p>
                          </blockquote>
                          <figcaption class="blockquote-footer text-dark fw-bold">
                             <cite title="Source Title">Fronted</cite>
                          </figcaption>
                      </div>
                      <div class="col-6">
                        <blockquote class="card p-0 border fst-italic fw-bold blockquote" style="background-color:transparent;">
                            <p>Jessuar Gutierrez</p>
                          </blockquote>
                          <figcaption class="blockquote-footer text-dark fw-bold">
                             <cite title="Source Title">Fronted</cite>
                          </figcaption>
                      </div>
                    </div>
                    </figure>
                  </div>
            </div>
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-lg  btn-outline-info fw-bold text-white"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Mis notas</button>
      </div>
   
            @include('layouts.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
