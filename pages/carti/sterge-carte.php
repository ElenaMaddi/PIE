<!DOCTYPE html>
<html lang="en">

<?php require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/head.php'; ?>

<body>
  <header id="home">
    <div class="bg-img" style="background-image: url('/PIE/img/books.jpg');">
      <div class="overlay"></div>
    </div>
    
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/PIE/includes/navbar.php'; ?>

    <div class="home-wrapper">
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <div class="home-content">
              <h1 class="white-text">Carti</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div id="about" class="section md-padding" style="background-color:#DEB887">
    <div class="container">
      <div class="row">
        <div class="section-header text-center">
          <h2 class="title">Sterge o carte</h2>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="col col-lg-3"></div>
      <div class="col col-lg-6">
        <form method="post" action="/PIE/backend/process-request.php">
          <div class="form-group">
            <label for="idcarte">ID Carte</label>
            <input type="text" class="form-control" id="idcarte" name="idcarte">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Sterge dupa ID</button>
          <div class="form-group">
            <label for="numec">Nume</label>
            <input type="text" class="form-control" id="numec" name="numec">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Sterge dupa nume</button>
          <div class="form-group">
            <label for="editura">Editura</label>
            <input type="text" class="form-control" id="editura" name="editura">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Sterge dupa editura</button>
        </form>
      </div>
      <div class="col col-lg-3"></div>
    </div>
  </div>
</body>

</html>
