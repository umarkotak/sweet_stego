<section class="content-header">
  <h1>
    JS Exercise - Canvas and Image Processing
    <small>JavaScript 2</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">JavaScript 2</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <!-- <form> -->
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Javascript Canvas Test</h3>
          </div>

          <div class="box-body">
            <div class="form-group">
              <label>Upload Image</label>
              <input type="file" id="image_file" name="image_file" class="form-control">
              <br>
              <button name="load" class="btn btn-primary btn-xs btn-block" onclick="">Load</button>
            </div>

            <div class="form-group">
              <label>Load Image</label>
              <div>
                <canvas id="imageCanvas"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header">
            <h3 class="box-title">Javascript Canvas Tutorial</h3>
          </div>

          <div class="box-body">
            <div class="form-group">
              <label>Canvas</label>
              <br>
              <canvas id="canvas" style="border: 1px solid black; width: 100%;"></canvas>

              <script src="lib/sandbox/canvas.js"></script>
            </div>
          </div>
        </div>
      </div>
      </div>
    <!-- </form> -->
  </div>
</section>
