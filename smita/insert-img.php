<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <title>insert img</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
  <body>
<div class="container">

  <div class="row">
    <form action="/upload.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit"></br></br>
        Operation: &nbsp &nbsp &nbsp &nbsp
         &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit"><br></br></br>
</div>
        <h4 class="">Answer Options</h4>
        <div class="form-inline">
        </br></br>
          <input type="text" class="form-control m-1" placeholder="Option 1" name="Option 1">
          <input type="text" class="form-control m-1" placeholder="Option 2" name="Option 2">
          <input type="text" class="form-control m-1" placeholder="Option 3" name="Option 3">
          <input type="text" class="form-control m-1" placeholder="Option 4" name="Option 4">

        </div><br>
        <h3 class=""><b>Correct Answers</b><h3>
          <div class="form-group">
          <input type="text" class="form-control" placeholder="Answer" name="Option 1">
          <br>

          <button type="submit" class="btn btn-info"> Add Question </button>

    </form>
</div>
</div>
</div>
</body>
</html>
