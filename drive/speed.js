var id, target, options;

function success(pos) {
  var crd = pos.coords;
  document.getElementById("speed").innerHTML = crd.speed + "m/s";
    
  if (crd.speed > target.onehundred) {
    console.log('SLOW DOWN');
    document.getElementById("body").className = "alert";
    document.getElementById("msg").className = "display";
    navigator.vibrate(5000);
  } else {
    document.getElementById("body").className = "non-alert";
    document.getElementById("msg").className = "dont-display";
    navigator.vibrate(0);
  }
}

function error(err) {
  console.warn('ERROR(' + err.code + '): ' + err.message);
}

target = {
  onehundred : 27.777777777778,
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
