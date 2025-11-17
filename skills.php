<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<style>
.body,html{
    height: 100%;
    background: linear-gradient(125deg, #2c5364, #203a43, #0f2027);
}
.skills {
  background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
  color: white;
}
.card:hover {
  transform: translateY(-5px);
  transition: 0.3s ease-in-out;
  box-shadow: 0 8px 20px rgba(255, 255, 255, 0.86);
}

.skill-icon {
  width: 150px;
  height: 150px;
  object-fit: contain;
  margin: 0 auto 15px;
  display: block;
}
.card{
  size-adjust:250px;
  block-size:auto;
  background-color: wheat;
}


</style>
<body>
    <section class="skills py-5" id="skills">
    <h2 class="display-4 text-white text-center mb-5">Skills</h2>
    <div class="row g-4 py-3">
      
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card shadow border-light text-center bg-info">
          <img src="html.png" class="skill-icon" alt="HTML">
          <div class="card-body">
            <p class="card-text text-black">
              Proficient in structuring webpages using semantic HTML for clean, accessible layouts.
            </p>
          </div>
        </div>
      </div>

      <!-- Repeat similar structure for CSS, JS, Bootstrap, Python, PHP -->
        <div class="col-md-4 col-sm-6 col-12">
        <div class="card shadow border-light text-center bg-info">
          <img src="cs.jpg" class="skill-icon" alt="HTML">
          <div class="card-body">
            <p class="card-text text-black">
             Skilled in styling webpages with CSS to create responsive, visually appealing designs.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card shadow border-light text-center bg-info">
          <img src="js.png" class="skill-icon" alt="HTML">
          <div class="card-body">
            <p class="card-text text-black">
              Use JavaScript to add interactivity, handle user events, and enhance user experience.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card shadow border-light text-center bg-info">
          <img src="skill4.jpg" class="skill-icon" alt="HTML">
          <div class="card-body">
            <p class="card-text text-black">
              Build mobile-first, consistent layouts quickly using Bootstrap’s grid and components.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card shadow border-light text-center bg-info">
          <img src="py.jpg" class="skill-icon" alt="HTML">
          <div class="card-body">
            <p class="card-text text-black">
             Write clean, readable Python code for scripting, automation, and backend development.
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 col-12">
        <div class="card shadow border-200 text-center bg-info">
          <img src="skill6.png" class="skill-icon" alt="HTML">
          <div class="card-body">
            <p class="card-text text-black">
              Develop dynamic websites using PHP to manage server-side logic and database interaction.
            </p>
          </div>
        </div>
      </div>
    </div>
</section>
</body>
</html>