import $ from "https://esm.sh/jquery@4.0.0";

// Yuna icons
const yuna = [
    "../assets/branding-images/random-image-swap-on-hover/test/yuna-expression-01.jpg",
    "../assets/branding-images/random-image-swap-on-hover/test/yuna-expression-02.jpg",
    "../assets/branding-images/random-image-swap-on-hover/test/yuna-expression-03.jpg",
    "../assets/branding-images/random-image-swap-on-hover/test/yuna-expression-04.jpg"
];

let previousImage = "";

function getRandomYunaImage() {
    let image;

    do {
        const index = Math.floor(Math.random() * yuna.length);
        image = yuna[index];
    } while (image === previousImage);

    previousImage = image;
    return image;
}

$("#yuna-wrapper").mouseenter(function () {
    $("#yuna").attr("src", getRandomYunaImage());
});

