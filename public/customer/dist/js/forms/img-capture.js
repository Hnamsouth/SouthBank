const video = document.getElementById('video')
let stream = null;
let index=0;
function Webcam(i) {
    if(!stream) {
        navigator.getUserMedia({video: true},
            (stream) => {
                // set the video stream as the srcObject of the video element
                video.srcObject = stream;
                // save a reference to the stream object
                stream = stream;
            },
            (error) => {
                console.error('Failed to get user media:', error);
            })
        index=i;
    }
}
function CloseWebcam(){
    const stream = video.srcObject;
// get the tracks from the stream
    const tracks = stream.getTracks();
// stop all tracks
    tracks.forEach(track => track.stop());
// clear the video srcObject
    video.srcObject = null;
}

const capture = document.getElementById('click');
const canvas = document.getElementById('canvas');
const CMND_CCCD_IMG_BEFORE = document.getElementById('CMND_CCCD_IMG_BEFORE');
const CMND_CCCD_IMG_AFTER = document.getElementById('CMND_CCCD_IMG_AFTER');

canvas.width = video.width;
canvas.height = video.height;

capture.addEventListener('click', () => {
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
    const screenshotUrl = canvas.toDataURL('image/png');
    // // Set the Base64-encoded image as the value of the hidden input field
    console.log(screenshotUrl);
// Nhận diện chữ bằng Tesseract.js
    // const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
    // Tesseract.recognize(
    //     imageData, 'eng', {
    //         logger: m => console.log(m)
    //     }
    // ).then(({data: {text}}) => {
    //     console.log(text);
    // })

    index===1?
    CMND_CCCD_IMG_BEFORE.setAttribute('value', screenshotUrl):
    CMND_CCCD_IMG_AFTER.setAttribute('value', screenshotUrl);
    // close camera
    CloseWebcam();
})
