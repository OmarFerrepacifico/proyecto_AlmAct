$(document).ready(function() {
  // Selector del video, canvas y el input
  var video = document.getElementById('barcode-scanner');
  var canvas = document.getElementById('barcode-detector');
  var ctx = canvas.getContext('2d');
  var resultField = document.getElementById('item');
  var scannerIsRunning = false;

  // Inicialización de la cámara
  navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
    .then(function(stream) {
      video.srcObject = stream;
      video.play();
    })
    .catch(function(err) {
      console.error("Error: " + err);
    });

  // Cuando se presiona el botón de escaneo
  $('#start-scan').click(function() {
    if (!scannerIsRunning) {
      startScanner();
    }
  });

  // Función para iniciar el escáner
  function startScanner() {
    Quagga.init({
      inputStream: {
        name: "Live",
        type: "LiveStream",
        target: video
      },
      decoder: {
        readers: ["ean_reader", "upc_reader", "code_128_reader", "code_39_reader", "code_93_reader"]
      }
    }, function(err) {
      if (err) {
        console.error(err);
        return;
      }
      // Comienza a escuchar
      Quagga.start();
      scannerIsRunning = true;
    });

    // Cuando Quagga detecta un código de barras
    Quagga.onDetected(function(result) {
      // Detiene la detección
      Quagga.stop();
      scannerIsRunning = false;

      // Muestra el código de barras en el input
      resultField.value = result.codeResult.code;

      // Dibuja el cuadro de detección en el canvas
      var loc = result.codeResult.decodedCodes[0].boundingBox;
      var x = loc[0];
      var y = loc[1];
      var width = loc[2] - loc[0];
      var height = loc[3] - loc[1];
      ctx.clearRect(0, 0, canvas.width, canvas.height);
      ctx.strokeStyle = 'red';
      ctx.lineWidth = 2;
      ctx.strokeRect(x, y, width, height);
    });
  }
});