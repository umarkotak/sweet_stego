var CryptoJS=CryptoJS||function(a,m){var r={},f=r.lib={},g=function(){},l=f.Base={extend:function(a){g.prototype=this;var b=new g;a&&b.mixIn(a);b.hasOwnProperty("init")||(b.init=function(){b.$super.init.apply(this,arguments)});b.init.prototype=b;b.$super=this;return b},create:function(){var a=this.extend();a.init.apply(a,arguments);return a},init:function(){},mixIn:function(a){for(var b in a)a.hasOwnProperty(b)&&(this[b]=a[b]);a.hasOwnProperty("toString")&&(this.toString=a.toString)},clone:function(){return this.init.prototype.extend(this)}},
p=f.WordArray=l.extend({init:function(a,b){a=this.words=a||[];this.sigBytes=b!=m?b:4*a.length},toString:function(a){return(a||q).stringify(this)},concat:function(a){var b=this.words,d=a.words,c=this.sigBytes;a=a.sigBytes;this.clamp();if(c%4)for(var j=0;j<a;j++)b[c+j>>>2]|=(d[j>>>2]>>>24-8*(j%4)&255)<<24-8*((c+j)%4);else if(65535<d.length)for(j=0;j<a;j+=4)b[c+j>>>2]=d[j>>>2];else b.push.apply(b,d);this.sigBytes+=a;return this},clamp:function(){var n=this.words,b=this.sigBytes;n[b>>>2]&=4294967295<<
32-8*(b%4);n.length=a.ceil(b/4)},clone:function(){var a=l.clone.call(this);a.words=this.words.slice(0);return a},random:function(n){for(var b=[],d=0;d<n;d+=4)b.push(4294967296*a.random()|0);return new p.init(b,n)}}),y=r.enc={},q=y.Hex={stringify:function(a){var b=a.words;a=a.sigBytes;for(var d=[],c=0;c<a;c++){var j=b[c>>>2]>>>24-8*(c%4)&255;d.push((j>>>4).toString(16));d.push((j&15).toString(16))}return d.join("")},parse:function(a){for(var b=a.length,d=[],c=0;c<b;c+=2)d[c>>>3]|=parseInt(a.substr(c,
2),16)<<24-4*(c%8);return new p.init(d,b/2)}},G=y.Latin1={stringify:function(a){var b=a.words;a=a.sigBytes;for(var d=[],c=0;c<a;c++)d.push(String.fromCharCode(b[c>>>2]>>>24-8*(c%4)&255));return d.join("")},parse:function(a){for(var b=a.length,d=[],c=0;c<b;c++)d[c>>>2]|=(a.charCodeAt(c)&255)<<24-8*(c%4);return new p.init(d,b)}},fa=y.Utf8={stringify:function(a){try{return decodeURIComponent(escape(G.stringify(a)))}catch(b){throw Error("Malformed UTF-8 data");}},parse:function(a){return G.parse(unescape(encodeURIComponent(a)))}},
h=f.BufferedBlockAlgorithm=l.extend({reset:function(){this._data=new p.init;this._nDataBytes=0},_append:function(a){"string"==typeof a&&(a=fa.parse(a));this._data.concat(a);this._nDataBytes+=a.sigBytes},_process:function(n){var b=this._data,d=b.words,c=b.sigBytes,j=this.blockSize,l=c/(4*j),l=n?a.ceil(l):a.max((l|0)-this._minBufferSize,0);n=l*j;c=a.min(4*n,c);if(n){for(var h=0;h<n;h+=j)this._doProcessBlock(d,h);h=d.splice(0,n);b.sigBytes-=c}return new p.init(h,c)},clone:function(){var a=l.clone.call(this);
a._data=this._data.clone();return a},_minBufferSize:0});f.Hasher=h.extend({cfg:l.extend(),init:function(a){this.cfg=this.cfg.extend(a);this.reset()},reset:function(){h.reset.call(this);this._doReset()},update:function(a){this._append(a);this._process();return this},finalize:function(a){a&&this._append(a);return this._doFinalize()},blockSize:16,_createHelper:function(a){return function(b,d){return(new a.init(d)).finalize(b)}},_createHmacHelper:function(a){return function(b,d){return(new ga.HMAC.init(a,
d)).finalize(b)}}});var ga=r.algo={};return r}(Math);
(function(a){var m=CryptoJS,r=m.lib,f=r.Base,g=r.WordArray,m=m.x64={};m.Word=f.extend({init:function(a,p){this.high=a;this.low=p}});m.WordArray=f.extend({init:function(l,p){l=this.words=l||[];this.sigBytes=p!=a?p:8*l.length},toX32:function(){for(var a=this.words,p=a.length,f=[],q=0;q<p;q++){var G=a[q];f.push(G.high);f.push(G.low)}return g.create(f,this.sigBytes)},clone:function(){for(var a=f.clone.call(this),p=a.words=this.words.slice(0),g=p.length,q=0;q<g;q++)p[q]=p[q].clone();return a}})})();
(function(){function a(){return g.create.apply(g,arguments)}for(var m=CryptoJS,r=m.lib.Hasher,f=m.x64,g=f.Word,l=f.WordArray,f=m.algo,p=[a(1116352408,3609767458),a(1899447441,602891725),a(3049323471,3964484399),a(3921009573,2173295548),a(961987163,4081628472),a(1508970993,3053834265),a(2453635748,2937671579),a(2870763221,3664609560),a(3624381080,2734883394),a(310598401,1164996542),a(607225278,1323610764),a(1426881987,3590304994),a(1925078388,4068182383),a(2162078206,991336113),a(2614888103,633803317),
a(3248222580,3479774868),a(3835390401,2666613458),a(4022224774,944711139),a(264347078,2341262773),a(604807628,2007800933),a(770255983,1495990901),a(1249150122,1856431235),a(1555081692,3175218132),a(1996064986,2198950837),a(2554220882,3999719339),a(2821834349,766784016),a(2952996808,2566594879),a(3210313671,3203337956),a(3336571891,1034457026),a(3584528711,2466948901),a(113926993,3758326383),a(338241895,168717936),a(666307205,1188179964),a(773529912,1546045734),a(1294757372,1522805485),a(1396182291,
2643833823),a(1695183700,2343527390),a(1986661051,1014477480),a(2177026350,1206759142),a(2456956037,344077627),a(2730485921,1290863460),a(2820302411,3158454273),a(3259730800,3505952657),a(3345764771,106217008),a(3516065817,3606008344),a(3600352804,1432725776),a(4094571909,1467031594),a(275423344,851169720),a(430227734,3100823752),a(506948616,1363258195),a(659060556,3750685593),a(883997877,3785050280),a(958139571,3318307427),a(1322822218,3812723403),a(1537002063,2003034995),a(1747873779,3602036899),
a(1955562222,1575990012),a(2024104815,1125592928),a(2227730452,2716904306),a(2361852424,442776044),a(2428436474,593698344),a(2756734187,3733110249),a(3204031479,2999351573),a(3329325298,3815920427),a(3391569614,3928383900),a(3515267271,566280711),a(3940187606,3454069534),a(4118630271,4000239992),a(116418474,1914138554),a(174292421,2731055270),a(289380356,3203993006),a(460393269,320620315),a(685471733,587496836),a(852142971,1086792851),a(1017036298,365543100),a(1126000580,2618297676),a(1288033470,
3409855158),a(1501505948,4234509866),a(1607167915,987167468),a(1816402316,1246189591)],y=[],q=0;80>q;q++)y[q]=a();f=f.SHA512=r.extend({_doReset:function(){this._hash=new l.init([new g.init(1779033703,4089235720),new g.init(3144134277,2227873595),new g.init(1013904242,4271175723),new g.init(2773480762,1595750129),new g.init(1359893119,2917565137),new g.init(2600822924,725511199),new g.init(528734635,4215389547),new g.init(1541459225,327033209)])},_doProcessBlock:function(a,f){for(var h=this._hash.words,
g=h[0],n=h[1],b=h[2],d=h[3],c=h[4],j=h[5],l=h[6],h=h[7],q=g.high,m=g.low,r=n.high,N=n.low,Z=b.high,O=b.low,$=d.high,P=d.low,aa=c.high,Q=c.low,ba=j.high,R=j.low,ca=l.high,S=l.low,da=h.high,T=h.low,v=q,s=m,H=r,E=N,I=Z,F=O,W=$,J=P,w=aa,t=Q,U=ba,K=R,V=ca,L=S,X=da,M=T,x=0;80>x;x++){var B=y[x];if(16>x)var u=B.high=a[f+2*x]|0,e=B.low=a[f+2*x+1]|0;else{var u=y[x-15],e=u.high,z=u.low,u=(e>>>1|z<<31)^(e>>>8|z<<24)^e>>>7,z=(z>>>1|e<<31)^(z>>>8|e<<24)^(z>>>7|e<<25),D=y[x-2],e=D.high,k=D.low,D=(e>>>19|k<<13)^
(e<<3|k>>>29)^e>>>6,k=(k>>>19|e<<13)^(k<<3|e>>>29)^(k>>>6|e<<26),e=y[x-7],Y=e.high,C=y[x-16],A=C.high,C=C.low,e=z+e.low,u=u+Y+(e>>>0<z>>>0?1:0),e=e+k,u=u+D+(e>>>0<k>>>0?1:0),e=e+C,u=u+A+(e>>>0<C>>>0?1:0);B.high=u;B.low=e}var Y=w&U^~w&V,C=t&K^~t&L,B=v&H^v&I^H&I,ha=s&E^s&F^E&F,z=(v>>>28|s<<4)^(v<<30|s>>>2)^(v<<25|s>>>7),D=(s>>>28|v<<4)^(s<<30|v>>>2)^(s<<25|v>>>7),k=p[x],ia=k.high,ea=k.low,k=M+((t>>>14|w<<18)^(t>>>18|w<<14)^(t<<23|w>>>9)),A=X+((w>>>14|t<<18)^(w>>>18|t<<14)^(w<<23|t>>>9))+(k>>>0<M>>>
0?1:0),k=k+C,A=A+Y+(k>>>0<C>>>0?1:0),k=k+ea,A=A+ia+(k>>>0<ea>>>0?1:0),k=k+e,A=A+u+(k>>>0<e>>>0?1:0),e=D+ha,B=z+B+(e>>>0<D>>>0?1:0),X=V,M=L,V=U,L=K,U=w,K=t,t=J+k|0,w=W+A+(t>>>0<J>>>0?1:0)|0,W=I,J=F,I=H,F=E,H=v,E=s,s=k+e|0,v=A+B+(s>>>0<k>>>0?1:0)|0}m=g.low=m+s;g.high=q+v+(m>>>0<s>>>0?1:0);N=n.low=N+E;n.high=r+H+(N>>>0<E>>>0?1:0);O=b.low=O+F;b.high=Z+I+(O>>>0<F>>>0?1:0);P=d.low=P+J;d.high=$+W+(P>>>0<J>>>0?1:0);Q=c.low=Q+t;c.high=aa+w+(Q>>>0<t>>>0?1:0);R=j.low=R+K;j.high=ba+U+(R>>>0<K>>>0?1:0);S=l.low=
S+L;l.high=ca+V+(S>>>0<L>>>0?1:0);T=h.low=T+M;h.high=da+X+(T>>>0<M>>>0?1:0)},_doFinalize:function(){var a=this._data,f=a.words,h=8*this._nDataBytes,g=8*a.sigBytes;f[g>>>5]|=128<<24-g%32;f[(g+128>>>10<<5)+30]=Math.floor(h/4294967296);f[(g+128>>>10<<5)+31]=h;a.sigBytes=4*f.length;this._process();return this._hash.toX32()},clone:function(){var a=r.clone.call(this);a._hash=this._hash.clone();return a},blockSize:32});m.SHA512=r._createHelper(f);m.HmacSHA512=r._createHmacHelper(f)})();


// Decode array of ASCII code to string [65, 66, 67] => "ABC"
function utf8Decode(bytes) {
  var chars = [],
    offset = 0,
    length = bytes.length,
    c, c2, c3;

  while (offset < length) {
    c = bytes[offset];
    c2 = bytes[offset + 1];
    c3 = bytes[offset + 2];

    if (128 > c) {
      chars.push(String.fromCharCode(c));
      offset += 1;
    } else if (191 < c && c < 224) {
      chars.push(String.fromCharCode(((c & 31) << 6) | (c2 & 63)));
      offset += 2;
    } else {
      chars.push(String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63)));
      offset += 3;
    }
  }

  return chars.join('');
}

// Encode string to array of ASCII code "ABC" => [65, 66, 67]
function utf8Encode(str) {
  var bytes = [],
    offset = 0,
    length, char;

  str = encodeURI(str);
  length = str.length;

  while (offset < length) {
    char = str[offset];
    offset += 1;

    if ('%' !== char) {
      bytes.push(char.charCodeAt(0));
    } else {
      char = str[offset] + str[offset + 1];
      bytes.push(parseInt(char, 16));
      offset += 2;
    }
  }

  return bytes;
}

function isInclude(arr, obj) {
  return (arr.indexOf(obj) != -1);
}

// Return a result of integer and set taken value
function gethashval(pass, imgdatalength, taken) {
  var result = 0;

  // var a = 0;
  // for (var i = 1; i < 20; i++) a += pass.charCodeAt(i);
  // result += a * 419430000;

  // a = 0;
  // for (var i = 30; i < 50; i++) a += pass.charCodeAt(i);
  // result += a * 4194000;

  // a = 0;
  // for (var i = 70; i < 90; i++) a += pass.charCodeAt(i);
  // result += a * 41940;

  // a = 0;
  // for (var i = 100; i < 110; i++) a += pass.charCodeAt(i);
  // result += a * 419;

  // for (var i = 20; i < 29; i++) result += pass.charCodeAt(i);
  // for (var i = 90; i < 99; i++) result += pass.charCodeAt(i);

  // result = result % imgdatalength;
  // console.log("RESULT : ", result)
  while (isInclude(taken, result)) result = (result + 1) % imgdatalength;
  taken.push(result);
  return result;
}

function extractBitArray(imgData) {
  var result = Array();
  for (var i = 0; i < imgData.data.length; i += 4) {
    result.push((imgData.data[i] % 2 == 1) ? true : false);
    result.push((imgData.data[i + 1] % 2 == 1) ? true : false);
    result.push((imgData.data[i + 2] % 2 == 1) ? true : false);
  }
  return result;
}

function extractMsgArray_pass(bitarray, pass) {
  var copy = 1;
  function comb(a) {
    var len = a.length;
    var count = 0;
    for (var i = 0; i < len; i++)
      if (a[i]) count++;
    if (count >= (len / 2)) return true;
    else return false;
  }
  var imgdatalength = bitarray.length;
  pass = String(CryptoJS.SHA512(pass));
  taken = Array();
  var modval = imgdatalength;
  var msgarray = Array();
  var data;
  var msgarraylen = Math.floor(Math.floor(imgdatalength / copy) / 8);
  for (var i = 0; i < msgarraylen; i++) {
    data = 0;
    tmp = 128;
    for (var j = 0; j < 8; j++) {
      var tmpArray = Array();
      for (var k = 0; k < copy; k++) {
        tmpArray.push(bitarray[gethashval(pass, modval, taken)]);
        pass = String(CryptoJS.SHA512(pass));
      }
      data += ((comb(tmpArray)) ? 1 : 0) * tmp;
      tmp = Math.floor(tmp / 2);
    }
    if (data == 255) break; //END NOTATION
    msgarray.push(data);
  }

  return msgarray;
}

// Convert string to binnary in true/false form of 8 block array / char
// it gives false for 0, and true for 1
function bitconvert(str) {
  var utf8array = utf8Encode(str);
  var result = Array();
  var utf8strlen = utf8array.length;
  for (var i = 0; i < utf8strlen; i++) {
    for (var j = 128; j > 0; j = Math.floor(j / 2)) {
      if (Math.floor(utf8array[i] / j)) {
        result.push(true);
        utf8array[i] -= j;
      } else result.push(false);
    }
  }
  return result;
}

function unsetbit(k) {
  return (k % 2 == 1) ? k - 1 : k;
}

function setbit(k) {
  return (k % 2 == 1) ? k : k + 1;
}

function setimgdata(imgData, setdata) {
  var j = 0;
  for (var i = 0; i < imgData.data.length; i += 4) {
    imgData.data[i] = (setdata[j]) ? setbit(imgData.data[i]) : unsetbit(imgData.data[i]);
    imgData.data[i + 1] = (setdata[j + 1]) ? setbit(imgData.data[i + 1]) : unsetbit(imgData.data[i + 1]);
    imgData.data[i + 2] = (setdata[j + 2]) ? setbit(imgData.data[i + 2]) : unsetbit(imgData.data[i + 2]);
    imgData.data[i + 3] = 255;
    j += 3;
  }
}

// Obfuscation, randomizing pixels value
function initialize_obfuscation(imgdatalength) {
  result = Array();
  for (var i = 0; i < imgdatalength; i++) {
    // result.push((Math.floor(Math.random() * 2)) ? true : false);
    result.push(false);
  }
  return result;
}

function generate_pass(image_data_length, message, pass) {
  var message_binnary_block = bitconvert(message);
  if ((message_binnary_block.length + 24) > image_data_length) {
    alert('Pesan yang anda masukkan terlalu panjang');
    return null;
  }
  var result = initialize_obfuscation(image_data_length);
  var obs_result = initialize_obfuscation(image_data_length);
  // SHA512 length 128 bit
  pass_sha512 = String(CryptoJS.SHA512(pass));
  console.log('Pass SHA512 : ', pass_sha512);
  var taken = Array();
  for (var i = 0; i < message_binnary_block.length; i++) {
    result[gethashval(pass_sha512, image_data_length, taken)] = message_binnary_block[i];
    pass_sha512 = String(CryptoJS.SHA512(pass_sha512));
  }
  // for (var j = 0; j < 24; j++) {
  //   result[gethashval(pass_sha512, image_data_length, taken)] = true;
  //   pass_sha512 = String(CryptoJS.SHA512(pass_sha512));
  // }

  console.log('========= MESSAGE SPESIFICATION =========');
  console.log('Message length : ', message.length);
  console.log('Message size : ', message_binnary_block.length, " bit");
  console.log('Message in utf8Encode : ', utf8Encode(message));
  console.log('Message in binary : ', message_binnary_block);
  console.log('Message MAP : ', taken);
  console.log('Pass : ', pass);
  // console.log('Result obfuscation : ', obs_result);
  console.log('Result generated : ', result);
  // var true_val = Array();
  // for (var i = 0; i < result.length; i++) {
  //   if (result[i]==true) {
  //     true_val.push(i)
  //   }
  // }
  // console.log('True result map : ', true_val);
  console.log('========= FINISH MESSAGE DATA =========');

  return result;
}

//MAIN
// Parameters optimized according to tests.
function writeMsgToCanvas(canvasid, message, pass) {
  message = "AB";
  pass = (pass === undefined) ? '' : pass;
  var c = document.getElementById(canvasid);
  var ctx = c.getContext("2d");

  var c_clean = document.getElementById("canvas_clean");
  var ctx_clean = c_clean.getContext("2d");

  var imageData_clean = ctx_clean.getImageData(0, 0, c_clean.width, c_clean.height);
  var imageDataLength_clean = Math.floor(imageData_clean.data.length / 4) * 3;
  var setdata_clean = generate_pass(imageDataLength_clean, message, pass);

  if (setdata_clean == null) return null;
  setimgdata(imageData_clean, setdata_clean);

  console.log('========= IMAGE CAPABILITY SPESIFICATION =========');
  console.log('Image max capacity : ', imageDataLength_clean);
  console.log('Image data : ', imageData_clean.data);
  console.log('Valid array map : ', setdata_clean);
  console.log('========= FINISH CAPABILITY CHECK =========');

  ctx.putImageData(imageData_clean, 0, 0);
  return 1;
}

//Read message from the image in canvasid.
//Return message (null -> fail)
function readMsgFromCanvas(canvasid, pass) {
  pass = (pass === undefined) ? '' : pass;
  var c = document.getElementById("canvas_clean");
  var ctx = c.getContext("2d");
  console.log(c.width, c.height);
  var imgData = ctx.getImageData(0, 0, c.width, c.height);
  var bitarray = extractBitArray(imgData);
  var msgArray = extractMsgArray_pass(bitarray, pass);
  if (msgArray == null) return null;
  return utf8Decode(msgArray);
}

//Create canvas, load image from HTML5 input and execute callback() if successful
function loadIMGtoCanvas(inputid, canvasid, callback) {
  var input = document.getElementById(inputid);
  if (input.files && input.files[0]) {
    var f = input.files[0];
    var reader = new FileReader();
    reader.onload = function(e) {
      var data = e.target.result;
      var image = new Image();
      image.onload = function() {
        // MAX_WIDTH = 800;
        // MAX_HEIGHT = 450;
        // HEIGHT_DATA = 170;

        MAX_WIDTH = 5;
        MAX_HEIGHT = 5;
        HEIGHT_DATA = 5;
        var width = MAX_WIDTH;
        var height = MAX_HEIGHT;

        var body = document.getElementsByTagName("body")[0];
        var resize_canvas = document.createElement('canvas');
        var canvas = document.createElement('canvas');
        var canvas_clean = document.createElement('canvas');

        resize_canvas.id = "resize_canvas";
        canvas.id = canvasid;
        canvas_clean.id = "canvas_clean"

        resize_canvas.width = width;
        resize_canvas.height = height;
        body.appendChild(resize_canvas);

        canvas.width = width;
        canvas.height = height;
        body.appendChild(canvas);

        canvas_clean.width = width;
        canvas_clean.height = HEIGHT_DATA;
        body.appendChild(canvas_clean);

        var resize_context = resize_canvas.getContext('2d');
        resize_context.drawImage(image, 0, 0, width, height);

        var context = canvas.getContext('2d');
        context.drawImage(image, 0, 0, width, height);

        var context_clean = canvas_clean.getContext('2d');
        context_clean.drawImage(image, 0, 0, width, height);

        callback();

        // canvas.style.display = "none";
        document.body.removeChild(resize_canvas);
        document.body.removeChild(canvas);
        document.body.removeChild(canvas_clean);
      };
      image.src = data;
    };
    reader.readAsDataURL(f);
  } else {
    alert('Silahkan masukkan sertifikat yang akan diberikan pengaman');
    return 'Terjadi masalah dalam pengamanan sertifikat';
  }
}