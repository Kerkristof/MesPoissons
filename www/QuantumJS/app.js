var canvas = document.createElement('canvas');
var w = window.innerWidth-20;
var h = window.innerHeight-20;
canvas.id = "CursorLayer";
canvas.width = w;
canvas.height = h;
canvas.style.zIndex = 8;
canvas.style.position = "absolute";
canvas.style.border = "1px solid";
var ctx = canvas.getContext("2d");
var body = document.getElementsByTagName("body")[0];
body.appendChild(canvas);


var Q = prompt('Quantum Circuit\nEx : [NotG  : ("x","var1");XorG  : ("y","var1","var0")]').replace("[","").replace("]","");
//var Q = 'NotG  : ("x","var1");XorG  : ("y","var1","var0");AndG : ("y","var1","var0")';

var Qs = Q.split(";");
var monSet = new Set();
var f = [];
var wire = {};

for (var i = 0; i < Qs.length; i++) {
  var tmp = Qs[i].split(":");
  var t = [];
  for (a of tmp[1].replace("(","").replace(")","").split(",")) {
    a = a.replace("\"","").replace("\"","").replace(/\s/g, '');
    monSet.add(a);
    t.push(a)
  }
  f[i] = [tmp[0].replace(/\s/g, ''),t];

}
var i = 1;
for (item of monSet){
  wire[item] = i;
  i++;
};
draw(w,h,wire,f);


var onresize = function() {
    w = window.innerWidth-20;
    h = window.innerHeight-20;
   canvas.width = w;
   canvas.height = h;
   draw(w,h,wire,f);

}
window.addEventListener("resize", onresize);

function draw(w,h,wire,f) {
  var nbvar = monSet.size;
  var d = {"NotG":1,"AndG":1,"XorG":2};
  var nbcol = 1;
  for (el in f) {
    nbcol += d[f[el][0]];
  }
  cursorLayer = document.getElementById("CursorLayer");
  ctx.clearRect(0, 0, canvas.width, canvas.height);


  ctx.beginPath();
  var i = 1;
  for (var item in wire) {

    ctx.font = "20px Arial";
    ctx.fillText(item,w*0.05,h/(nbvar+1)*i);
    ctx.moveTo(w*0.10,h/(nbvar+1)*i);
    ctx.lineTo(w*0.90,h/(nbvar+1)*i);
    i++;
  }

  ctx.stroke();
  var nb = 1;
  for (var i in f) {

    if (f[i][0]=="NotG") {
      ctx.beginPath();
      ctx.arc((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][1]],10,0,2*Math.PI);
      ctx.stroke();
      ctx.beginPath();
      ctx.moveTo((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][0]]);
      ctx.lineTo((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][1]]);
      ctx.stroke();
      ctx.beginPath();
      ctx.arc((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][0]],10,0,2*Math.PI);
      ctx.fillStyle = 'white';
      ctx.fill();
      ctx.stroke();
      nb++;
    }else if (f[i][0]=="AndG") {
      ctx.beginPath();
      ctx.arc((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][0]],10,0,2*Math.PI);
      ctx.fillStyle = 'black';
      ctx.fill();
      ctx.stroke();

      ctx.beginPath();
      ctx.arc((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][1]],10,0,2*Math.PI);
      ctx.fillStyle = 'black';
      ctx.fill();
      ctx.stroke();
      ctx.beginPath();
      ctx.arc((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][2]],10,0,2*Math.PI);
      ctx.stroke();
      ctx.beginPath();
      ctx.moveTo((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][0]]);
      ctx.lineTo((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][1]]);
      ctx.stroke();
      ctx.beginPath();
      ctx.moveTo((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][2]]);
      ctx.lineTo((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][1]]);
      ctx.stroke();
      nb++;
    }else {
      ctx.beginPath();
      ctx.arc((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][0]],10,0,2*Math.PI);
      ctx.fillStyle = 'black';
      ctx.fill();
      ctx.stroke();
      ctx.beginPath();
      ctx.arc((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][2]],10,0,2*Math.PI);
      ctx.stroke();
      ctx.beginPath();
      ctx.moveTo((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][0]]);
      ctx.lineTo((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][2]]);
      ctx.stroke();
      nb++;
      ctx.beginPath();
      ctx.arc((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][1]],10,0,2*Math.PI);
      ctx.fillStyle = 'black';
      ctx.fill();
      ctx.stroke();
      ctx.beginPath();
      ctx.arc((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][2]],10,0,2*Math.PI);
      ctx.stroke();
      ctx.beginPath();
      ctx.moveTo((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][1]]);
      ctx.lineTo((w*0.8*nb/nbcol)+w*0.1,h/(nbvar+1)*wire[f[i][1][2]]);
      ctx.stroke();
      nb++;
    }
  }


}
