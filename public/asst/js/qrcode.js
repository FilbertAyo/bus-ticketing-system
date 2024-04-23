"use strict";

const qrText = document.getElementById('qrText');
const generateQRButton = document.getElementById('generateQR');
const saveQRButton = document.getElementById('saveQR');
const qrImage = document.getElementById('qrImage');

generateQRButton.addEventListener('click', function() {
  const text = qrText.value;
  if (text) {
    generateQRCode(text);
  } else {
    alert('Please enter some text.');
  }
});

saveQRButton.addEventListener('click', function() {
  saveQRCode();
});

function generateQRCode(text) {
  qrImage.src = `https://quickchart.io/qr?text=${encodeURIComponent(text)}`;
}


let downloadLink = null;

function saveQRCode() {
  if (!downloadLink) {
    // Create download link if it doesn't exist
    downloadLink = document.createElement('a');
    downloadLink.id = 'downloadLink';
    downloadLink.download = 'qr_code.png';
    document.body.appendChild(downloadLink);
  }

  // Create a new canvas and context
  const canvas = document.createElement('canvas');
  const context = canvas.getContext('2d');
  canvas.width = qrImage.naturalWidth;
  canvas.height = qrImage.naturalHeight;
  context.drawImage(qrImage, 0, 0);

  // Update download link href with new QR code data
  downloadLink.href = canvas.toDataURL('image/png');
  
  // Trigger click event on the download link
  downloadLink.click();
}
