var canvas = document.getElementById('canvas');

// canvas.width = window.innerWidth;
// canvas.height = window.innerHeight;

var c = canvas.getContext('2d');

c.fillStyle = 'rgba(255, 0, 0, 0.5)';
c.fillRect(10, 5, 25, 25);
c.fillStyle = 'rgba(0, 255, 0, 0.5)';
c.fillRect(45, 5, 25, 25);

c.beginPath();
c.moveTo(10, 45);
c.lineTo(15, 75);
c.lineTo(20, 45);
c.lineTo(35, 45);
c.strokeStyle = 'rgba(255, 0, 0, 1)';
c.stroke();

c.beginPath();
c.arc(120, 50, 30, 0, Math.PI * 2, false);
c.strokeStyle = 'rgba(0, 0, 245, 1)';
c.stroke();