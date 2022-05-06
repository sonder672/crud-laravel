<!doctype html>
<html lang="es">
@include('layouts.header')
<body>
    @include('layouts.navbar')
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://emowe.com/wp-content/uploads/tomar-nota.png"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
    <h3>Ingresa tus datos para registrarte</h3>
    <form>
        <div class="form-group">
            <label for="exampleInputNombre">Nombre</label>
            <input type="text" class="form-control" id="exampleInputNombre" placeholder="Ingresa tú nombre" require>
        </div>
        <div class="form-group">
            <label for="exampleInputApellidos">Apellidos</label>
            <input type="text" class="form-control" id="exampleInputApellidos" placeholder="Ingresa tús apellidos" require>
        </div>
        <div class="form-group">
            <label for="exampleInputCedula">Número de identicación </label>
            <input type="number" class="form-control" id="exampleInputCedula" placeholder="Ingresa tu identificación" require>
        </div>
        <div class="form-group">
            <label for="exampleInputEdad">Edad</label>
            <input type="date" class="form-control" id="exampleInputEdad" placeholder="Ingresa tú edad" require>
        </div>  
        <div class="form-group">
            <label for="exampleInputEmail1">Correo electronico</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu correo" require>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu contraseña" require>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</div>
</div>
</div>
</section>
    @include('layouts.footer')
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
