<?php require 'header.php' ?>

<section class="container page">

  <div class="row">
    <div class="col-md-12 title">
      <h2>CONTATO</h2>
      <h3>CONTATO</h3>
    </div>
  </div>

  <div class="row mt5">
    <div class="col-md-8">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.sed do eiusmod tempor incididunt ut.</p>
      <p class="mt3 cm">
        <i class="fa fa-map-marker cm"></i>Rua Emílio Blum, 131. Bloco A , Sala 408, 88020-010 Florianópolis
        &nbsp;&nbsp;
        <i class="fa fa-phone cm"></i>(48) 99991-1866
      </p>

    </div>
    <div class="col-md-3 col-md-offset-1 contato">
      <form class="" action="" method="post">

        <input type="text" name="nome" placeholder="Nome">
        <input type="text" name="email" placeholder="E-mail">
        <input type="text" name="assunto" placeholder="Assunto">
        <textarea name="msg" placeholder="Mensagem"></textarea>
        <br>
        <input type="hidden" name="contato" value="-11">
        <button type="submit" name="button">ENVIAR</button>

      </form>
    </div>

  </div>

</section>

<?php require 'footer.php' ?>
