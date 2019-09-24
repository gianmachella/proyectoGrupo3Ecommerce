@include ('menu')
@include ('head')
<body>
  <div class="container">
    <div class="contenedor" >
        <form class="login" action="formulario.html" method="post">
          <h2>Contacto</h2>
          <div class="campo">
            <input class="login-campos" type="text" name="nombre" value="" placeholder="Decinos tu Nombre" required><br>
          </div>
          <div class="campo">
            <input class="login-campos" type="text" name="apellido" value="" placeholder="Decinos tu Apellido" required><br>
          </div>
          <div class="campo">
            <input class="login-campos" type="email" name="email" value="" placeholder="Decinos tu e-mail" required><br>
          </div>
          <div class="campo">
            <input class="login-campos" type="text" name="email" value="" placeholder="Decinos tu Numero de Telefono" required><br>
          </div>
          <div class="campo">
            <input type="text" name="comentarios" class="cajatext" value="" placeholder="Dejanos tus comentarios">
          </div>
          <button class="btn" type="submit" name="button">Enviar</button>

        </form>
    </div>
  </div>
  @include ('footer')
    <!-- Bootstrap JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
