<!doctype html>
<html lang="es">
@include('layouts.header')
<body>
    @include('layouts.navbar')
    <body background="https://static.vecteezy.com/system/resources/previews/001/072/211/large_2x/abstract-digital-technology-blue-abstract-hud-background-vector.jpg">
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://emowe.com/wp-content/uploads/tomar-nota.png"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
   
    <form >
        <div class="form-group text-white fw-bold">
            <h3>Ingresa tus datos para registrarte</h3>
            <label for="exampleInputNombre">Nombre</label>
            <input name="name" type="text" class="form-control" style="background-color:transparent;" id="exampleInputNombre" placeholder="Ingresa tú nombre" require>
        </div>
        <div class="form-group text-white fw-bold">
            <label for="exampleInputApellidos">Apellidos</label>
            <input name="lastName" type="text" class="form-control" style="background-color:transparent;" id="exampleInputApellidos" placeholder="Ingresa tús apellidos" require>
        </div>
        <div class="form-group text-white fw-bold">
            <label for="exampleInputCedula">Número de identicación </label>
            <input name="id" type="number" class="form-control" style="background-color:transparent;" id="exampleInputCedula" placeholder="Ingresa tu identificación" require>
        </div>
        <div class="form-group text-white fw-bold">
            <label for="exampleInputEdad">Edad</label>
            <input name="age" type="number" class="form-control" style="background-color:transparent;" id="exampleInputEdad" placeholder="Ingresa tú edad" require>
        </div>  
        <div class="form-group text-white fw-bold">
            <label for="exampleInputEmail1">Correo electronico</label>
            <input name="email" type="email" class="form-control" style="background-color:transparent;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu correo" require>
        </div>
        <div class="form-group text-white fw-bold">
            <label for="exampleInputPassword1">Contraseña</label>
            <input name="password" type="password" class="form-control" style="background-color:transparent;" id="exampleInputPassword1" placeholder="Ingresa tu contraseña" require>
        </div>
        <br/>
        <div class="col-12 text-center">
        <button type="submit" class="btn btn-lg  btn-outline-info fw-bold text-white">Registrar</button>
        <p class="small fw-bold mt-2 pt-1 mb-0 fw-bold text-white">¿Ya tienes una cuenta? <a href="{{ url('/login') }}"
                                    class="link-danger ">Ingresar</a></p>
        </div>
    </form>
</div>
</div>
</div>
</section>
@include('layouts.footer')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
