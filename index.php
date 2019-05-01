<?php require_once("header.php")?>
<div class="container bg-dark text-white">
  <h3 class="text-center display-4 py-4">Generate Your Result</h3>
</div>
<div class="container">
  <form action="result.php" method="POST" class="m-2 p-2">
    <fieldset class="border border-warning p-3 my-3">
      <legend class="px-2" style="width:250px;">Conpulsory Subjects</legend>
      <div class="row pl-3">
        <div class="col-md-6 pr-5">
          <div class="form-group row">
            <label class="col-sm-4" for="bn1stNum">Bangla 1st</label>
            <input type="number" class="form-control col-sm-8 drkfcs" id="bn1stNum" name="bn1stNum"
              placeholder="Enter Total Number" min="0" max="101" required>
          </div>
          <div class="form-group row">
            <label class="col-sm-4" for="bn2ndNum">Bangla 2nd</label>
            <input type="number" class="form-control col-sm-8 drkfcs" id="bn2ndNum" name="bn2ndNum"
              placeholder="Enter Total Number" min="0" max="101" required>
          </div>
          <div class="form-group row">
            <label class="col-sm-4" for="en1stNum">English 1st</label>
            <input type="number" class="form-control col-sm-8 drkfcs" id="en1stNum" name="en1stNum"
              placeholder="Enter Total Number" min="0" max="101" required>
          </div>
        </div>
        <div class="col-md-6 pr-5">
          <div class="form-group row">
            <label class="col-sm-4" for="en2ndNum">English 2nd</label>
            <input type="number" class="form-control col-sm-8 drkfcs" id="en2ndNum" name="en2ndNum"
              placeholder="Enter Total Number" min="0" max="101" required>
          </div>
          <div class="form-group row">
            <label class="col-sm-4" for="gMathNum">General Math</label>
            <input type="number" class="form-control col-sm-8 drkfcs" id="gMathNum" name="gMathNum"
              placeholder="Enter Total Number" min="0" max="101" required>
          </div>
          <div class="form-group row">
            <label class="col-sm-4" for="ictNum">ICT</label>
            <input type="number" class="form-control col-sm-8 drkfcs" id="ictNum" name="ictNum"
              placeholder="Enter Total Number" min="0" max="101" required>
          </div>
        </div>
      </div>
    </fieldset>
    <fieldset class="border border-warning p-3 my-3">
      <legend class="px-2" style="width:120px;">Religion</legend>
      <div class="row pl-3">
        <div class="col-md-6 pr-5">
          <div class="form-group row">
            <input type="number" class="form-control col-sm-4 drkfcs" id="rlgnCode" name="rlgnCode" min="101" max="157"
              placeholder="Subject code" required>
            <input type="number" min="0" max="101" class="form-control col-sm-8 drkfcs" id="rlgnNum" name="rlgnNum"
              placeholder="Enter Total Number" required>
          </div>
        </div>
      </div>
    </fieldset>
    <fieldset class="border border-warning p-3 my-3">
      <legend class="px-2" style="width:240px;">Optional Subjects</legend>
      <div class="row pl-3">
        <div class="col-md-6 pr-5">
          <div class="form-group row">
            <input type="number" class="form-control col-sm-4 drkfcs" id="opCode1" name="opCode1" min="101" max="157"
              placeholder="Subject code" required>
            <input type="number" class="form-control col-sm-8 drkfcs" id="opNum1" name="opNum1"
              placeholder="Enter Total Number" min="0" max="101" required>
          </div>
          <div class="form-group row">
            <input type="number" class="form-control col-sm-4 drkfcs" id="opCode2" name="opCode2" min="101" max="157"
              placeholder="Subject code" required>
            <input type="number" class="form-control col-sm-8 drkfcs" id="opNum2" name="opNum2"
              placeholder="Enter Total Number" min="0" max="101" required>
          </div>
        </div>
        <div class="col-md-6 pr-5">
          <div class="form-group row">
            <input type="number" class="form-control col-sm-4 drkfcs" id="opCode3" name="opCode3" min="101" max="157"
              placeholder="Subject code" required>
            <input type="number" class="form-control col-sm-8 drkfcs" id="opNum3" name="opNum3"
              placeholder="Enter Total Number" min="0" max="101" required>
          </div>
        </div>
      </div>
    </fieldset>
    <fieldset class="border border-warning p-3 my-3">
      <legend class="px-2" style="width:200px;">Fourth Subject</legend>
      <div class="row pl-3">
        <div class="col-md-6 pr-5">
          <div class="form-group row">
            <input type="number" class="form-control col-sm-4 drkfcs" id="frtCode" name="frtCode" min="101" max="157"
              placeholder="Subject code" required>
            <input type="number" min="0" max="101" class="form-control col-sm-8 drkfcs" id="frtNum" name="frtNum"
              placeholder="Enter Total Number" required>
          </div>
        </div>
      </div>
    </fieldset>
    <button type="submit" class="btn btn-primary px-4 my-3">Get Result</button>
  </form>
</div>
<?php require_once("footer.php")?>