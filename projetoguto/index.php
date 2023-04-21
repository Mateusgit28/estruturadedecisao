<body>
  <?php
  include "menu.php";
  include "cabecalho.php";
  ?>

  <div class="container-fluid banner">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/forza.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/rdr2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/seaof.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>Jogos em Destaque</h1>
      </div>
      <div class="col-12 text-center">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi, debitis optio. Sit reiciendis consequuntur et, culpa dignissimos voluptatem ex. Earum labore sed reiciendis. Quis dolores fuga, recusandae cum accusantium ea!</p>
      </div>
      <div class="row">

        <?php
        for ($i = 0; $i < 8; $i++) :
        ?>
          <div class="col-md-3 text-center mb-4">
            <img src="img/farcry.jpg" class="img-fluid">
            <h2>Nome do jogo</h2>
            <a href="nomedojogo.php" class="btn btn-primary">VER MAIS</a>
          </div>
        <?php
        endfor;
        ?>

        <!-- <div class="col-3 text-center">
          <img src="img/pung.jpg" class="img-fluid">
          <h2>Nome do jogo</h2>
          <a href="nomedojogo.php" class="btn btn-primary">VER MAIS</a>
        </div>
        <div class="col-3 text-center">
          <img src="img/farcry.jpg" class="img-fluid">
          <h2>Nome do jogo</h2>
          <a href="nomedojogo.php" class="btn btn-primary">VER MAIS</a>
        </div>
        <div class="col-3 text-center">
          <img src="img/warzone.jpg" class="img-fluid">
          <h2>Nome do jogo</h2>
          <a href="nomedojogo.php" class="btn btn-primary">VER MAIS</a>
        </div> -->
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-12">
        <h2>Entre em contato</h2>
      </div>
      <div class="col-12">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti cupiditate maxime ducimus neque earum magnam similique necessitatibus optio! Voluptas, nisi iusto enim asperiores tenetur dolorem dolores maiores quod quam labore.</p>
      </div>
    </div>
    <div class="row">
      <form action="inserir-contato.php" method="post">
        <div class="mb-2">
          <input type="text" class="form-control" name="nome" placeholder="nome">
        </div>
        <div class="mb-2">
          <input type="tel" class="form-control" name="nome" placeholder="Telefone">
        </div>
        <div class="mb-2">
          <div class="mb-2">

            <textarea class="form-control" name="duvida" placeholder="Duvida" rows="4"></textarea>
          </div>
        </div>
        <div class="mb-2 text-center">
          <button type="submit" class="btn btn-success w-25">ENVIAR</button>
        </div>

      </form>
    </div>


  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>