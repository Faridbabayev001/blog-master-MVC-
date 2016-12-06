<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      <a style="margin:25px" class="btn btn-primary" href="Admin/create">Create</a>
      <table class="table table-condensed">
          <tr>
            <th>#</th>
            <th>Author</th>
            <th>News</th>
            <th>Image</th>
            <th>View</th>
            <th>Actions</th>
          </tr>
            <?php foreach($views as $view){ ?>
              <tr>
                <td><?=$view['id']?></td>
                <td><?=$view['author']?></td>
                <td><?=$view['about']?></td>
                <td><?=$view['image']?></td>
                <td><?=$view['view']?></td>
                <td>
                  <a class="btn btn-danger" href="#">Delete</a>
                  <a class="btn btn-primary" href="#">Update</a>
                  <a class="btn btn-info" href="#">Read</a>
                </td>
              </tr>
              <?php } ?>
      </table>
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
