 // The data/time we want to countdown to
 let countDownDate = new Date("Jan 25, 2026 16:37:52").getTime();

 // Run myfunc every second
 let myfunc = setInterval(function() {

 let now = new Date().getTime();
 let timeleft = countDownDate - now;
     
 // Calculating the days, hours, minutes and seconds left
 let days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
 let hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
 let minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
 let seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
     
 // Result is output to the specific element
 document.getElementById("days").innerHTML = days + " days "
 document.getElementById("hours").innerHTML = hours + " hours " 
 document.getElementById("mins").innerHTML = minutes + " minutes " 
 document.getElementById("secs").innerHTML = seconds + " seconds " 
     
 // Display the message when countdown is over
 if (timeleft < 0) {
     clearInterval(myfunc);
     document.getElementById("days").innerHTML = ""
     document.getElementById("hours").innerHTML = "" 
     document.getElementById("mins").innerHTML = ""
     document.getElementById("secs").innerHTML = ""
     document.getElementById("end").innerHTML = "It's too late, next time the early the better";
 }
 }, 1000);

let today = new Date()
let curHr = today.getHours()

if (curHr < 12) {
 document.getElementById("greet").innerHTML = 'Good morning, ';
  console.log('good morning')
} else if (curHr < 18) {
    document.getElementById("greet").innerHTML = 'Good afternoon, ';
  console.log('good afternoon')
} else {
    document.getElementById("greet").innerHTML = 'Good evening, ';
  console.log('good evening')
}