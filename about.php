<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="" />
    <style>
      .body,html{
         font-size: medium;
         height: 100%;
         margin: 0;
         font-family: 'Segoe UI', sans-serif;
         scroll-behavior: smooth;
      }
      .hero-about{
          height: 100vh;
          background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
          color: white;
          animation: fadeIn 1.5s ease-in;
      }
      p{
         font-family: 'Times New Roman', Times, serif;
      }
      .img{
         place-self:unset;
         image-resolution: 50rem;
         border-color: white;
      }
      @keyframes fadeIn {
        from{ opacity: 0;}
         to {opacity: 2;}
      }
      
      
    </style>
</head>
<body>
   <section class="hero-about  d-flex py-5" id="about">
      <div class="container ">
         <h2 class="display-4 text-white text-center">About</h2>
         <div class="row align-items-center g-4">
            <div class="col-md-4 col-sm-6 col-12 text-center">
            <img src="math.jpg" alt="" class="square border-5 border-primary shadow mb-4" style="width: 250px; height: 250px;object-fit: cover;">
            </div>
            <div class="col-md-8 col-sm-6 col-12">
               <p class="fs-5">I have strong passionate about creating an user-friendly and responsive webpage.I eagerly ready to take on new challenges and real world
            projects. My strength are Quick learner, Adaptability, Problem Solving.I am currenlty studying BCA with aim of web developer|
            Frontend-developer.</p>
               </div>
          </div>
      </div>
   </section>
</body>
</html>