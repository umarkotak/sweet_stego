<script src="lib/cryptostego.min.js"></script>

<section class="content-header">
  <h1>
    JS library Cryptostego
    <small>JavaScript 1</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">JavaScript 1</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    <form role="form">
      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Input Image</h3>
          </div>

            <div class="box-body">
              <div class="form-group">
                <label>#1 File input</label>
                <input type="file" id="file" accept="image/*">

                <p class="help-block">Example block-level help text here.</p>
              </div>
              <hr>
              <div class="form-group">
                <label>#2 Choose robust level</label>

                <p><label for="m0"><input type="radio" name="mode" id="m0" value=0 checked="checked" /> Level 0 - Best Secrecy, No Robustness to Compression</label></p>
                <p><label for="m1"><input type="radio" name="mode" id="m1" value=1 /> Level 1 - (Warning: This level has very low data capacity)</label></p>
                <p><label for="m2"><input type="radio" name="mode" id="m2" value=2 /> Level 2</label></p>
                <p><label for="m3"><input type="radio" name="mode" id="m3" value=3 /> Level 3</label></p>
                <p><label for="m4"><input type="radio" name="mode" id="m4" value=4 /> Level 4</label></p>
                <p><label for="m5"><input type="radio" name="mode" id="m5" value=5 /> Level 5 - Best Robustness to Compression, Worst Secrecy</label></p>
                <p> </p>
                <p style="color:red">If you're going to retrieve message, your level selected here must be the same level you use to generate the image!</p>
              </div>
              <hr>
              <div class="form-group">
                <label>#3 Password</label>
                <input type="text" id="pass" value="" placeholder="No Password" class="form-control" />
              </div>
            </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title"></h3>
          </div>

            <div class="box-body">
              <div class="form-group">
                <label>#4 Result</label>
                <br>
                <div id="result" style="background-color: rgba(0,255,0,0.3); padding: 10px 10px 10px 10px;">Please finish step 1~3 above and click a button below. Your result will then show up here!</div>

                <div style="border: 1px solid blue;">
                  <img id="resultimg" style="display:none" src="" />
                </div>
              </div>
              <hr>
              <div class="form-group">
                <label>#5 Hidden Message</label>
                <textarea id="msg" class="form-control" rows="5" placeholder="Your hidden message here"></textarea>
              </div>
              <div class="form-group">
                <a href="javascript: writeIMG()" class="btn btn-primary">Write message into image</a>
                <a href="javascript: readIMG()" class="btn btn-success">Read message from image</a>
              </div>
            </div>
        </div>
      </div>
    </form>
  </div>
</section>

<script type="text/javascript">
function writeIMG(){
    $("#resultimg").hide();
    $("#resultimg").attr('src','');
    $("#result").html('Processing...');
    function writefunc(){
        var selectedVal = '';
        var selected = $("input[type='radio'][name='mode']:checked");
        if (selected.length > 0) {
            selectedVal = selected.val();
        }
        var t = writeMsgToCanvas('canvas',$("#msg").val(),$("#pass").val(),selectedVal);
        if(t!=null){
            var myCanvas = document.getElementById("canvas");
            var image = myCanvas.toDataURL("image/png");
            $("#resultimg").attr('src',image);
            $("#result").html('Success! Save the result image below and send it to others!');
            $("#resultimg").show();
        }
    }
    loadIMGtoCanvas('file','canvas',writefunc,500);
}

function readIMG(){
  $("#resultimg").hide();
  $("#result").html('Processing...');
  function readfunc(){
    var selectedVal = '';
    var selected = $("input[type='radio'][name='mode']:checked");
    if (selected.length > 0) {
        selectedVal = selected.val();
    }
    var t= readMsgFromCanvas('canvas',$("#pass").val(),selectedVal);
    if(t!=null){
        t=t.split('&').join('&amp;');
        t=t.split(' ').join('&nbsp;');
        t=t.split('<').join('&lt;');
        t=t.split('>').join('&gt;');
        t=t.replace(/(?:\r\n|\r|\n)/g, '<br />');
        $("#result").html(t);
    }else $("#result").html('ERROR REAVEALING MESSAGE!');

  }
  loadIMGtoCanvas('file','canvas',readfunc);
}
</script>
