<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>

  <main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Cars gallery</h1>
   
    
        </div>
       
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      <?php
              require_once('controllers/imagenesController.php');
              
            
              foreach(imagenesController::index() as $row){ 
             
                ?>
        <div class="col">
          <div class="card shadow-sm">
          <img src="<?php echo $row['img'] ?>" class="bd-placeholder-img card-img-top" >

            <div class="card-body">
              <p class="card-text"><?php echo $row['name'] ?></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" data-img="<?php echo $row['img'] ?>" class="btn btn-sm btn-outline-secondary btn-view">View</button>
                
                </div>
                <small class="text-muted">9 mins</small>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
 
      </div>
    </div>
  </div>

</main>


<div class="modal" tabindex="-1" >
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content" style="background: transparent !important; border:0 !important">
      <div class="modal-header">
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img src="" alt="" style="height:100%;width:100%" id="img-data">
      </div>
     
    </div>
  </div>
</div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
   <script>
   $('.btn-view').click(function(){
   
    $('.modal').modal('show');
    $('#img-data').attr('src', $(this).data('img'));
   })
   </script>
</body>
</html>