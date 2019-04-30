<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Result Generator</title>

  <!-- CSS -->
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/my.css">

  <!-- JS -->
  <script src="js/jquery-3.4.0.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>
</head>

<body>
  <div class="container">
    <h3 class="text-center text-primary mt-4">Generate Your Result</h3>
    <form action="result.php" method="POST" class="m-2 p-2">
      <fieldset class="border border-warning p-3 my-3">
        <legend class="px-2" style="width:250px;">Conpulsory Subjects</legend>

        <div class="row pl-3">
          <div class="col-md-6 pr-5">
            <div class="form-group row">
              <label class="col-sm-4" for="bn1st">Bangla 1st</label>
              <input type="number" class="form-control col-sm-8 drkfcs" id="bn1st" name="bn1st"
                placeholder="Enter Total Number" required>
            </div>
            <div class="form-group row">
              <label class="col-sm-4" for="bn2nd">Bangla 2nd</label>
              <input type="number" class="form-control col-sm-8 drkfcs" id="bn2nd" name="bn2nd"
                placeholder="Enter Total Number" required>
            </div>
            <div class="form-group row">
              <label class="col-sm-4" for="en1st">English 1st</label>
              <input type="number" class="form-control col-sm-8 drkfcs" id="en1st" name="en1st"
                placeholder="Enter Total Number" required>
            </div>
          </div>
          <div class="col-md-6 pr-5">
            <div class="form-group row">
              <label class="col-sm-4" for="en2nd">English 2nd</label>
              <input type="number" class="form-control col-sm-8 drkfcs" id="en2nd" name="en2nd"
                placeholder="Enter Total Number" required>
            </div>
            <div class="form-group row">
              <label class="col-sm-4" for="gMath">General Math</label>
              <input type="number" class="form-control col-sm-8 drkfcs" id="gMath" name="gMath"
                placeholder="Enter Total Number" required>
            </div>
            <div class="form-group row">
              <label class="col-sm-4" for="ict">ICT</label>
              <input type="number" class="form-control col-sm-8 drkfcs" id="ict" name="ict" placeholder="Enter Total Number" required>
            </div>
          </div>
        </div>
      </fieldset>
      <fieldset class="border border-warning p-3 my-3">
        <legend class="px-2" style="width:240px;">Optional Subjects</legend>

        <div class="row pl-3">
          <div class="col-md-6 pr-5">
            <div class="form-group row">
              <input type="number" class="form-control col-sm-4 drkfcs" id="opCode1" name="opCode1"
                placeholder="Subject code" required>
              <input type="number" class="form-control col-sm-8 drkfcs" id="opNum1" name="opNum1"
                placeholder="Enter Total Number" required>
            </div>
            <div class="form-group row">
              <input type="number" class="form-control col-sm-4 drkfcs" id="opCode2" name="opCode2"
                placeholder="Subject code" required>
              <input type="number" class="form-control col-sm-8 drkfcs" id="opNum2" name="opNum2"
                placeholder="Enter Total Number" required>
            </div>
          </div>
          <div class="col-md-6 pr-5">
            <div class="form-group row">
              <input type="number" class="form-control col-sm-4 drkfcs" id="opCode3" name="opCode3"
                placeholder="Subject code" required>
              <input type="number" class="form-control col-sm-8 drkfcs" id="opNum3" name="opNum3"
                placeholder="Enter Total Number" required>
            </div>
          </div>


        </div>
      </fieldset>
      <fieldset class="border border-warning p-3 my-3">
        <legend class="px-2" style="width:200px;">Forth Subjects</legend>

        <div class="row pl-3">
          <div class="col-md-6 pr-5">
            <div class="form-group row">
              <input type="number" class="form-control col-sm-4 drkfcs" id="frtCode" name="frtCode"
                placeholder="Subject code" required>
              <input type="number" class="form-control col-sm-8 drkfcs" id="frtNum" name="frtNum"
                placeholder="Enter Total Number" required>
            </div>
          </div>
        </div>
      </fieldset>
      <button type="submit" class="btn btn-primary px-4 my-3 float-right">Submit</button>
  </div>
  </form>
  </div>
</body>

</html>