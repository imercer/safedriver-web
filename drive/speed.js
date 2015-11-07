function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}

var context = new AudioContext();

            var playAudio = function (buffer) {
                var sourceBuffer = context.createBufferSource();

                sourceBuffer.buffer = buffer;
                sourceBuffer.connect(context.destination);
                sourceBuffer.start(context.currentTime);
                sleep(1000);
            };

            var loadAudioFile = function () {
                var request = new XMLHttpRequest();

                request.open('GET', 'slowdown.mp3', true);
                request.responseType = 'arraybuffer';

                request.onload = function () {
                    var undecodedAudio = request.response;

                    context.decodeAudioData(undecodedAudio, function (buffer) {
                        playAudio(buffer);
                    });
                };

                request.send();
            };

function success(pos) {
  var crd = pos.coords;
  var speed = crd.speed * 3.6;
  document.getElementById("speed").innerHTML = Math.round(speed);
  if (crd.speed > target.onehundred) {
    if (localStorage.audio) {
    } else {
    localStorage.audio = "present";
    loadAudioFile();
    console.log('SLOW DOWN');
    document.getElementById("body").className = "alert";
    navigator.vibrate(5000);
    }
  } else {
    localStorage.removeItem("audio");
    document.getElementById("body").className = "non-alert";
    navigator.vibrate(0);
  }
}

function error(err) {
  console.warn('ERROR(' + err.code + '): ' + err.message);
}

target = {
  onehundred : 28.055555555556,
  eighty : 22.222222222222,
  seventy : 19.444444444444,
  sixty : 16.666666666667,
  fifty : 13.888888888889
};

options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0
};

id = navigator.geolocation.watchPosition(success, error, options);
