<section class="content-header">
  <h1>
    Javascript Basic
    <small>JavaScript 0</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">JavaScript 0</li>
  </ol>
</section>

<section class="content">
  
  <div class="row">
    <div class="col-md-6">
      <!-- basic sample -->
      <div class="box box-primary">
        <div class="box-header">
          <h3 class="box-title">Latihan</h3>
        </div>

        <div class="box-body">
          <div>
            <p id="demo1">Demo1</p>
            <button type="button" onclick="demo1()">Try it</button>
          </div>

          <hr>
          <div>
            <p id="demo2">Demo2</p>
            <button type="button" onclick="demo2()">Try it</button>
          </div>

          <hr>
          <div>
            <button onclick="document.getElementById('myImage').src='https://cdn.worldvectorlogo.com/logos/php-1.svg'">Pic 1</button>
            <img id="myImage" src="https://cdn.worldvectorlogo.com/logos/php-1.svg" style="width:100px">
            <button onclick="document.getElementById('myImage').src='https://www.w3.org/html/logo/downloads/HTML5_Logo_512.png'">Pic 2</button>  
          </div>

          <hr>
          <div>
            <p>Console action & windows alert</p>
            <button type="button" onclick="demo3()">Try it</button>
          </div>

          <hr>
          <div>
            <p id="demo4"></p>
            <button type="button" onclick="demo4()">Try it</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>

<script type="text/javascript">
function demo1() {
  document.getElementById("demo1").innerHTML = "<b>Paragraph changed.</b>";
}

function demo2(){
  document.getElementById("demo2").innerHTML = 5 + 6;
  // document.write( 5 + 7); // akan mereplace seluruh document
}

function demo3(){
  console.log(45 + 3);
  window.alert(50 + 1);
}

function demo4(){
  var x, y, z;
  x = 5;
  y = 6;

  // typeof variable // akan return tipe data variable

  z = null;
  z = x + y;
  z = 2 << 1;
  z = {
    name: 'umar',
    age: 15,
    gender: 'male'
  };
  z = [1, 2, "a"];
  z = {'nama': 'joko'}

  document.getElementById("demo4").innerHTML = z;
  // document.getElementById("demo4").innerHTML = z['nama'];
  // document.getElementById("demo4").innerHTML = z[0];    // untuk array
  // document.getElementById("demo4").innerHTML = z.name;  // untuk object

}
</script>