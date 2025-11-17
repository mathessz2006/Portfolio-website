<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body,html{
          height: 300px;
          background: linear-gradient(125deg, #0f2027, #203a43, #2c5364);
        }
        .hero-certi{
            background: linear-gradient(125deg, #0f2027, #203a43, #2c5364);
        }
        .img{
            height: 300px;
            width: 30px;
        }
        .flip-card {
             background-color: transparent;
             width: 300px;
             height: 200px;
             perspective: 1000px;
         }

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  transition: transform 0.6s;
  transform-style: preserve-3d;
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
  
}

.flip-card-front,
.flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  backface-visibility: hidden;
  border-radius: 10px;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.flip-card-front {
  background-color: #fafdfe;
  color: rgb(25, 24, 24);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
}

.flip-card-back {
  background-color: #fff;
  transform: rotateY(180deg);
  display: flex;
  align-items: center;
  justify-content: center;
}
    </style>
</head>
<body>
    <section class="hero-certi py-5" id="certificates">
      <h2 class="display-4 text-white text-center">Certificates</h2>
        <div class="container py-5">
          <div class="row g-5">
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                         <h6>Software Engineering job simulation<br>
                         -->(place the mouse on)
                         </h6>
                    </div>
                    <div class="flip-card-back">
                      <img src="certificate1.jpg" class="img-fluid" alt="JS Certificate">
                    </div>
                </div>
              </div>  
            </div>
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                         <h5> Certificate<br>
                         -->(place the mouse on)
                         </h5>
                    </div>
                    <div class="flip-card-back">
                      <img src="certificate1.jpg" class="img-fluid" alt="JS Certificate">
                    </div>
                </div>
              </div>  
            </div>
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                         <h5>JavaScript Certificate<br>
                         -->(place the mouse on)
                         </h5>
                    </div>
                    <div class="flip-card-back">
                      <img src="certificate1.jpg" class="img-fluid" alt="JS Certificate">
                    </div>
                </div>
              </div>  
            </div>
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                         <h5>python certificate<br>
                         -->(place the mouse on)
                         </h5>
                    </div>
                    <div class="flip-card-back">
                      <img src="CERTIFICATE2.jpg" class="img-fluid" alt="JS Certificate">
                    </div>
                </div>
              </div>  
            </div>
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                         <h5>Web developement internship<br>
                         -->(place the mouse on)
                         </h5>
                    </div>
                    <div class="flip-card-back">
                      <img src="certificate3.jpg" class="img-fluid" alt="JS Certificate">
                    </div>
                </div>
              </div>  
            </div>
            <div class="col-md-4">
              <div class="flip-card">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                         <h5>Typewriting Certificate<br>
                         -->(place the mouse on)
                         </h5>
                    </div>
                    <div class="flip-card-back">
                      <img src="certificate4.jpg" class="img-fluid" alt="JS Certificate">
                    </div>
                </div>
              </div>  
            </div>
          </div>
        </div>
    </section>
</body>
</html>