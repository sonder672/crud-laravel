<!doctype html>

<html lang="es">
@include('layouts.header')
<body>
    @include('layouts.navbar')

    <section class="vh-100">

        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                    <form method="POST" action="{{ route('login') }}">
                      @csrf
                        <div class="form-outline mb-3">
                            <label for="exampleInputEmail1">Correo electronico</label>
                            <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="Ingresa tu correo" name="email">
                            <small id="emailHelp" class="form-text text-muted">No se compartirá su correo con nadie
                                más.</small>
                        </div>

                        <div class="form-outline mb-3">
                            <label for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                placeholder="Ingresa tu contraseña" name="password">
                        </div>

                        <div class="d-flex justify-content-between align-items-center">

<<<<<<< HEAD
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                                <label class="form-check-label" for="exampleCheck1">Mostrar clave</label>
                            </div>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes una cuenta? <a href="#!"
                                    class="link-danger">Registrate</a></p>
                        </div>

                    </form>

=======
                           
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg" id="submit"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar></button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">¿No tienes una cuenta? <a href="{{ url('/register') }}"
                                    class="link-danger">Registrate</a></p>
                        </div>
                    </form>
>>>>>>> 91af0b1a9ec0e5e7954752c06586b149623e2d9f
                </div>
            </div>
        </div>
    </section>
<<<<<<< HEAD

    @include('layouts.footer')
=======
<script> 
catch (error) {
    alert(error)
}
</script> 
>>>>>>> 91af0b1a9ec0e5e7954752c06586b149623e2d9f
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>
