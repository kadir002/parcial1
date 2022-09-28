<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Calificacion</th>
          <th scope="col">Nota</th>
          <th scope="col">view</th>
        </tr>
      </thead>
      <tbody>
        <?php
        require_once('controllers/StudenController.php');
        require_once('util/NoteValidate.php');
        // var_dump(viewController::view())

        ?>
        <?php foreach (viewController::view() as $row) { ?>
          <tr>
            <td class="<?Php echo validateNote::colorText($row['nota']) ?>"><?php echo $row['id'] ?></td>
            <td class="<?Php echo validateNote::colorText($row['nota']) ?>"><?php echo $row['name'] ?></td>
            <td class="<?Php echo validateNote::colorText($row['nota']) ?>"><?php echo $row['nota'] ?></td>
            <td class="<?Php echo validateNote::colorText($row['nota']) ?>"><?php echo validateNote::nota($row['nota']) ?></td>
            <td data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" data-nota="<?php echo $row['nota'] ?>" data-letra="<?php echo validateNote::nota($row['nota']) ?>" class="btn-view"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z" />
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z" />
              </svg></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>




  <div class="modal" id="modal-studen" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body ">
          <p class="data-p" id="studen-data"></p>
          <p class="data-p" id="nota-studen"></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
  <script>
    $('.btn-view').click(function() {
      console.log($(this).data("id"));
      let color = ""

      color = $(this).data("letra") == "A" ? "text-success" : $(this).data("letra") == "B" ? "text-info" : $(this).data("letra") == "C" ? "text-secondary" : $(this).data("letra") == "D" ? "text-warning" : "text-danger"
      $('#studen-data').removeClass();
      $('#nota-studen').removeClass();
      $('#studen-data').addClass(color)
      $('#nota-studen').addClass(color)
      $('#modal-studen').modal('show');
      $('#nota-studen').text(`La nota es: ${$(this).data("letra")}`);
      $('#studen-data').text(`user ID: ${$(this).data("id")} Nombre: ${$(this).data("name")}  Calificacion: ${$(this).data("nota")}`)
    })
  </script>

</body>

</html>