<!DOCTYPE html>
<html lang="en">

<?php require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/head.php'; ?>

<body>
  <header id="home">
    <div class="bg-img" style="background-image: url('/PIE/img/papetarie.jpg');">
      <div class="overlay"></div>
    </div>
    
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/navbar.php'; ?>

    <div class="home-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="home-content">
              <h1 class="white-text">Papetarie</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div id="about" class="section md-padding" style="background-color:#2F4F4F">
    <div class="container">
      <div class="row">
        <div class="section-header text-center">
          <h2 class="title">Adauga un produs</h2>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="col col-lg-3"></div>
      <div class="col col-lg-6">
        <form method="post" action="includes/process-request.php">
          <div class="form-group">
            <label for="idpapetarie">ID Papetarie</label>
            <input type="text" class="form-control" id="idpapetarie" name="idpapetarie">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Sterge dupa ID</button>
          <div class=" form-group">
            <label for="nume">Nume</label>
            <input type="text" class="form-control" id="nume" name="nume">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Sterge dupa nume</button>
        </form>
      </div>
      <div class="col col-lg-3"></div>
    </div>

  </div>
</body>

</html>
