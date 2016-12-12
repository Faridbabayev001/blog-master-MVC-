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
      <?php if($this->session->hasSession('createErrorMsj')){ ?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <?= $this->session->getSession('createErrorMsj') ?>
          </div>
      <?php } ?>
      <?php
                    $this->session->deleteSession('createErrorMsj');
       ?>
        <div class="col-md-6 col-md-offset-2">
          <form class="" action="<?=url.'Admin/create_data'?>" method="post" enctype="multipart/form-data">
            <label style="margin-top:25px">Author</label>
            <input type="text" class="form-control" name="author" value="">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="">
            <label>News</label>
            <input type="text" class="form-control" name="news" value="">
            <label>Image</label>
            <input type="file" class="form-control" name="image" value="">
            <a style="margin-top:10px" class="btn btn-primary pull-left" href="<?=url.'Admin'?>">Back</a>
            <input type="submit" style="margin-top:10px" class="btn btn-success pull-right" name="submit" value="Create">
          </form>
        </div>
    </div>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
