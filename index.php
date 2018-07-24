<?php
require 'database/querybuilder.php';
$db = new QueryBuilder;
$task = $db->all('tasks');
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-md12">
            <h1>All task</h1>
            <a href="create.php" class="btn btn-success">Add Task</a>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($task as $tasks):?>
                <tr>
                  <td><?=$tasks['id'];?></td>
                  <td><?=$tasks['title'];?></td>
                  <td>
                  <a href="show.php?id=<?=$tasks['id'];?>"class ="btn btn-info">Show</a>
                    <a href="edit.php?id=<?=$tasks['id'];?>"class ="btn btn-warning">Edit</a>
                    <a href="delete.php?id=<?=$tasks['id'];?>" class="btn btn-danger">Delete</a>

                  </td>

                </tr>
<?php endforeach;?>
              </tbody>

            </table>
          </div>
        </div>
      </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
  </body>
</html>
