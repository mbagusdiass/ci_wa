<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=  base_url('form/') ?>/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?=  base_url('form/') ?>/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=  base_url('form/') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=  base_url('form/') ?>/css/style.css">

    <title>Login #8</title>
  </head>
  <body>
  

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="images/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In to <strong>Colorlib</strong></h3>
              <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>
            <form action="<?= base_url('welcome/send') ?>" method="post">
              <div class="form-group first">
                <label for="tujuan">tujuan</label>
                <input type="text" class="form-control" id="tujuan" name="tujuan">

              </div>
              <div class="form-group">
        
                <input type="text" name="message" id="message">
                
              </div>

              <input type="submit" value="kirim" class="btn text-white btn-block btn-primary">
            </form>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

  
    <script src="<?=  base_url('form/') ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?=  base_url('form/') ?>/js/popper.min.js"></script>
    <script src="<?=  base_url('form/') ?>/js/bootstrap.min.js"></script>
    <script src="<?=  base_url('form/') ?>/js/main.js"></script>
  </body>
</html>