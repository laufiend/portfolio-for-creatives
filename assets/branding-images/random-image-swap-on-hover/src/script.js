import $ from "https://esm.sh/jquery@4.0.0";

// Western Icons
const western = [
    "https://s3-us-west-2.amazonaws.com/s.cdpn.io/316293/boots.svg",
    "https://s3-us-west-2.amazonaws.com/s.cdpn.io/316293/western.svg",
    "https://s3-us-west-2.amazonaws.com/s.cdpn.io/316293/wheel.svg"
];

let previousImage = "";

function getRandomWesternImage() {
    let image;

    do {
        const index = Math.floor(Math.random() * western.length);
        image = western[index];
    } while (image === previousImage);

    previousImage = image;
    return image;
}

$("#western-wrapper").mouseenter(function () {
    $("#western").attr("src", getRandomWesternImage());
});