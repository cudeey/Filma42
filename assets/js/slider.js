var vargu = [
"assets/images/upcoming-1.png",
"assets/images/upcoming-2.png",
"assets/images/upcoming-3.png",
"assets/images/upcoming-4.png"
];

var index = 0;


const koha = 4000;



function krijoSlider(){
    document.getElementById('movie-image').src = vargu[index];
    index++;

    if(index == vargu.length){
        index = 0; 
    }

    setTimeout("krijoSlider()", koha); 
}

krijoSlider();



var text = [
  'Doctor Strange in the Multiverse of Madness',
  'Memory',
  'The Unbearable Weight of Massive Talent',
  'The Northman'
];

let index2 = 0;

function updateText() {
  var textElement = document.getElementById('description');
  
  textElement.innerHTML = text[index2];
  
  index2 = (index2 + 1) % text.length;

  if(index2 == vargu.length){
    index2 = 0;
    }
}
setInterval(updateText, 4000);




var time = [
  '126 min',
  '114 min',
  '107 min',
  '137 min'
];

let index3 = 0;

function updateTime() {
  var timeElement = document.getElementById('mtime');
  
  timeElement.innerHTML = time[index3];
  
  index3 = (index3 + 1) % time.length;

  if(index3 == vargu.length){
    index3 = 0;
    }
}
setInterval(updateTime, 4000);


var rating = [
  '6.9',
  '5.7',
  '7.0',
  '7.1'
];

let index4 = 0;

function updateImdbrating() {
  var timeElement = document.getElementById('imdbrating');
  
  timeElement.innerHTML = rating[index4];
  
  index4 = (index4 + 1) % time.length;

  if(index4 == vargu.length){
    index4 = 0;
    }
}
setInterval(updateImdbrating, 4000);