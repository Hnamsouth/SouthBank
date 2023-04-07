const video = document.getElementById('video')
const capture = document.getElementById('click');
const canvas = document.getElementById('canvas');
const CMND_CCCD_IMG_BEFORE = document.getElementById('CMND_CCCD_IMG_BEFORE');
const CMND_CCCD_IMG_AFTER = document.getElementById('CMND_CCCD_IMG_AFTER');

canvas.width = video.width;
canvas.height = video.height;
localStorage.removeItem('face');

let stream = null;
let index = 0;
let MAX_FACE=3;


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
        // if(index===0){
        //     setInterval(async ()=>{
        //         const detect= faceapi.detectAllFaces(video,new faceapi.SsdMobilenetv1Options())
        //             .withFaceLandmarks();
        //         // const resizeDetects = faceapi.resizeResults(detect, sizes);
        //         if(detect.length===1){
        //
        //         }
        //
        //     },300)
        // }
    }
}

function storage(img){
    const face = localStorage.getItem('face');
    let data;
    if(!face){
        data=[img];
        localStorage.setItem('face',JSON.stringify(data))
    }else if(JSON.parse(face).length < MAX_FACE){
        data=JSON.parse(face);
        data.push(img);
        localStorage.setItem('face',JSON.stringify(data))
        if(JSON.parse(face).length === MAX_FACE){
            $('#step2_2')
        }
    }else if(JSON.parse(face).length > MAX_FACE){

    }
}



function CloseWebcam(){
    const stream = video.srcObject;
    const tracks = stream.getTracks();
    tracks.forEach(track => track.stop());
    video.srcObject = null;
}

const loadFaceAPI = async() => {

    await faceapi.nets.ssdMobilenetv1.loadFromUri('../face-api/models');
    await faceapi.nets.faceLandmark68Net.loadFromUri('../face-api/models');
    await faceapi.nets.faceRecognitionNet.loadFromUri('../face-api/models');

    // await faceapi.nets.tinyFaceDetector.loadFromUri('../models');
    // await faceapi.nets.faceExpressionNet.loadFromUri('../face-api/models');

    //  load training data
    // và dạy cho faceapi biết có những ng nào bằng cách sử dụng hàm FaceMatcher
    // const trainingData = await loadTrainingData()
    // faceMatcher = new faceapi.FaceMatcher(trainingData, 0.6)
}
// loadFaceAPI().then();



capture.addEventListener('click', () => {
    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
    const screenshotUrl = canvas.toDataURL('image/png');
    // // Set the Base64-encoded image as the value of the hidden input field
    if(index===0){
        storage(screenshotUrl);
    }else{
        index===1?
            CMND_CCCD_IMG_BEFORE.setAttribute('value', screenshotUrl):
            CMND_CCCD_IMG_AFTER.setAttribute('value', screenshotUrl);
        CloseWebcam();
    }

})

function convertImageData(){
    // Nhận diện chữ bằng Tesseract.js
    // const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
    // Tesseract.recognize(
    //     imageData, 'eng', {
    //         logger: m => console.log(m)
    //     }
    // ).then(({data: {text}}) => {
    //     console.log(text);
    // })
}
