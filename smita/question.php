<!DOCTYPE html>
<html lang="en">
<head>
  <title>Question</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="container m-4 pr-5">
   <div class="row">


    <h2>Add Question</h2>
    <form action="/action_page.php">
    <div class="form-group">
      <label for="Question"></label>
      <input type="text" class="form-control" placeholder="Question" name="quest">
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

</center>

</body>
</html>
