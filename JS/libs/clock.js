// Method 1
// Function for the clock
function showTime(){
    var date = new Date();
    var dt = date.getDate();
    var mn = date.getMonth()+1; // add +1 since index of javascript starts at 0
    var y = date.getUTCFullYear();
    var h = date.getHours(); //0 - 23
    var m = date.getMinutes(); //0 - 59
    var s = date.getSeconds(); //0 - 59
    var session = "AM";

    if(h == 0){
      h = 12;
    }

    // To show in 12hr clock
    if(h > 12){
      h = h - 12;
      session = "PM";
    }
    // To add 0 before the hour, minute and seconds
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;

    var time = h + ":" + m + ":" + s + " " + session + " " + dt + "/" + mn + "/" + y;
    document.getElementById("clockDisplay").innerText = time;
    document.getElementById("clockDisplay").textContent = time;

    setTimeout(showTime, 1000);
  }
showTime();
//setInterval(showTime,1000);


// Method 2-Using an anonymous function

// var clock = function showTime(){
//   var date = new Date();
//   var d = date.getDate();
//   var mn = date.getMonth()+1; // add +1 since index of javascript stars at 0
//   var y = date.getUTCFullYear();
//   var h = date.getHours(); //0 - 23
//   var m = date.getMinutes(); //0 - 59
//   var s = date.getSeconds(); //0 - 59
//   var session = "AM";

//   if(h == 0){
//     h = 12;
//   }

//   // To show in 12hr clock
//   if(h > 12){
//     h = h - 12;
//     session = "PM";
//   }
//   // To add 0 before the hour, minute and seconds
//   h = (h < 10) ? "0" + h : h;
//   m = (m < 10) ? "0" + m : m;
//   s = (s < 10) ? "0" + s : s;

//   var time = h + ":" + m + ":" + s + " " + session + " " + d + "/" + mn + "/" + y;
//   document.getElementById("clockDisplay").innerText = time;
//   document.getElementById("clockDisplay").textContent = time;

//   setTimeout(showTime, 1000);
// }
// clock();