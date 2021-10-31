function displayNextImage() {
    x = (x === images.length - 1) ? 0 : x + 1;
    document.getElementById("img").src = images[x];
}

function startTimer() {
    setInterval(displayNextImage, 2000);
}

var images = [], x = -1;
images[0] = "/eduwork/HTML-CSS/tugas-4/img/eduwork/image1.jpg";
images[1] = "/eduwork/HTML-CSS/tugas-4/img/eduwork/image2.jpg";
images[2] = "/eduwork/HTML-CSS/tugas-4/img/eduwork/image3.jpg";