let execTime = Date.now();

const FIRST_FACE = 0;
const FAV_CLASS_SCORE = 0.95;

Promise.all([
    faceapi.nets.tinyFaceDetector.loadFromUri('/sessionLogin/face-r/models'),
    faceapi.nets.faceRecognitionNet.loadFromUri('/sessionLogin/face-r/models'),
    faceapi.nets.faceLandmark68Net.loadFromUri('/sessionLogin/face-r/models'),
    faceapi.nets.ssdMobilenetv1.loadFromUri('/sessionLogin/face-r/models'),
    faceapi.nets.mtcnn.loadFromUri('/sessionLogin/face-r/models'),

]).then(start);

async function start() {

    const video = document.getElementById('video');
    navigator.mediaDevices.getUserMedia({ video: true, audio: false }).then((stream) => {
        video.srcObject = stream;
    });

    video.addEventListener('play', () => {

        const canvas = faceapi.createCanvasFromMedia(video);
        document.body.append(canvas);
        const displaySize = { width: video.width, height: video.height };
        faceapi.matchDimensions(canvas, displaySize);
        const intervalID = setInterval(async () => {

            const detections = await faceapi.detectAllFaces(video, new faceapi.TinyFaceDetectorOptions());
            var message=document.getElementById('message');

      try{                 
         if(detections[FIRST_FACE].classScore < 0.6){
                    document.getElementById('message').style.color = "#ff3547";
                    message.innerHTML = 'Mauvaise qualité !'
                  }
                  else if(detections[FIRST_FACE].classScore < 0.8 &&detections[FIRST_FACE].classScore > 0.6){
                            document.getElementById('message').style.color = "#c48000";
                    message.innerHTML = 'Qualité insuffisante ! essayez plus'
                  }
           else if(detections[FIRST_FACE].classScore < 0.94 &&detections[FIRST_FACE].classScore > 0.8){
                            document.getElementById('message').style.color = "#43c4da";
                    message.innerHTML = 'Un peu plus !'
                  }

                  else if (detections[FIRST_FACE].classScore > FAV_CLASS_SCORE) {
                           document.getElementById('message').style.color = "#00bf36";
                    message.innerHTML = 'Parfait ! merci de patienter quelques instants....'
                  }
          }   
          catch(e){}
            let firstImage = false;
            if ((detections.length > 0) && (detections[FIRST_FACE].constructor.name === "FaceDetection") && (detections[FIRST_FACE].classScore > FAV_CLASS_SCORE)) {

                if (!firstImage) {
                    const canvasImg = document.getElementById('capturedImage');
                    canvasImg.getContext('2d').drawImage(video, 0, 0);
                    const dataUrl = canvasImg.toDataURL();
                    imageDetected = document.getElementById('imgDetected');
                    imageDetected.src = dataUrl;
                    imageDetected.style.width = video.width;
                    imageDetected.style.height = video.height;


                    clearInterval(intervalID);
                    execTime = Date.now() - execTime;
                    canvasImg.remove();
                    console.log('Execution Time : ' + execTime / 1000 + 's');
                    firstImage = !firstImage;
                }
                                      const labeledFaceDescriptors = await loadLabeledImages()
    const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, 0.6)
    let canvas
    const container = document.getElementById('imageContainer')
    container.append(imageDetected)
    canvas = faceapi.createCanvasFromMedia(imageDetected)
    container.append(canvas)
    const displaySize = { width: imageDetected.width, height: imageDetected.height }
    faceapi.matchDimensions(canvas, displaySize)
    const detections = await faceapi.detectAllFaces(imageDetected).withFaceLandmarks().withFaceDescriptors()
    const resizedDetections = faceapi.resizeResults(detections, displaySize)
    const results = resizedDetections.map(d => faceMatcher.findBestMatch(d.descriptor))
    results.forEach((result, i) => {
      const box = resizedDetections[i].detection.box
      const drawBox = new faceapi.draw.DrawBox(box, { cin: result.toString() })
      var fd=result.toString()
    // if username had a space this method is better: 
    var namefd=fd.split(' ')[0];
    // if username had no space this method is better
    /* var n = 2; // second space
     var a = fd.split(' ')
     var namefd = a.slice(0, n).join(' ')*/
     //var namefd= fd.substr(0, fd.indexOf('(')); 

      console.log(fd)
            document.getElementById("resultat").value += namefd ;
      var cinetudiant=document.getElementById('cin').value;

  if(namefd == cinetudiant){
    var form=document.getElementById("face");
    form.submit();
  }
  else{
    document.getElementById('message').style.display = "none";
 document.getElementById("reload").style.display = "block" ;
  document.getElementById("reload2").style.display = "block" ;

      var timeleft = 10;
    var downloadTimer = setInterval(function(){
        timeleft--;
        document.getElementById("countdowntimer").textContent = timeleft;
        if(timeleft == 0){
                           location.reload();

            }

        else if(timeleft <= 0){
            clearInterval(downloadTimer);}
            
   },1000)
  }
      drawBox.draw(canvas) })
            }
            canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height);
            const resizedDetections = faceapi.resizeResults(detections, displaySize);
            faceapi.draw.drawDetections(canvas, resizedDetections);
        }, 1000)
    });

 
}
function loadLabeledImages() {
    var filiere=document.getElementById('filiere').value;
    var cin=document.getElementById('cin').value;
    var nom=document.getElementById('nom').value;
    var prenom=document.getElementById('prenom').value;
    var prnomnom     = prenom.concat(" ",nom)
  const labels = [prnomnom]
  return Promise.all(
    labels.map(async label => {
      const descriptions = []
        const img = await faceapi.fetchImage(`/storage/public/option_image/etudiant/${filiere}/${label}/${cin}.jpg`)
        const detections = await faceapi.detectSingleFace(img).withFaceLandmarks().withFaceDescriptor()
        descriptions.push(detections.descriptor)
      
 
      return new faceapi.LabeledFaceDescriptors(cin, descriptions)
      
    })
  )
}



