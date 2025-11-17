<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
</svg>
    <style>
        html,body{
            height:100%;
            background:linear-gradient(125deg,#0f2027, #2a464fff, #304f5dff)
        }
        .card{
            background-color:bisque;
            color:black;
            font-size: medium;
            font-family: Arial, Helvetica, sans-serif;
            width: 400px;
        }
        .button{
          background-color:wheat;
          color:rgb(27, 28, 29);
          border-radius: radius 15px;
          cursor: pointer;
          box-shadow: 0 9px #999;
        }
        .button:hover{
            background-color:gainsboro;
        }
        .Button{
            background-color:wheat;
        }
        .Button:hover{
            background-color:white;
        }
        
    </style>
</head>
<body>
    <section class="hero-contact py-5" id="contact">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col col-md-6">
                    <div class="card border-5 bg-info">
                        <div class="card-head">
                           <h3 class="display-5 text-center">Contact Me!!</h3>
                        </div>
                        <div class="card-body">
                         <form action="" class="text-center">
                             Name:   &nbsp;<input type="text" id="tb1" required><br><br>
                             Phone:  &nbsp;<input type="tel" id="tn" required><br><br>
                             Email:   &nbsp;<input type="email" id="en" required><br><br>
                            Address:
                            <Textarea></Textarea><br><br>
                            <Button class="button" id="send">Send Message</Button>  
                         </form>
                        </div>
                    </div>
                </div>
                <div class="col col-md-6">
                    <p class="display-4 text-white">Let's get in touch.You can also contact me via whatsapp,LinkedIn</p> <br>
                    <p class="text-white">  --> &nbsp;<i class="bi bi-whatsapp"></i>WHATSAPP &nbsp; &nbsp;<Button class="Button " id="whatsappbtn">Chat with me</Button></p> <br>
                    <p class="text-white">  -->&nbsp;&nbsp;LINKEDIN  &nbsp;&nbsp;&nbsp;<button class="Button " id="linkedinbtn">Visit my page</button></p>
                
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById("whatsappbtn").addEventListener("click", function () {
      const phoneNumber = "918610481578"; // Replace with your number (country code + number)
      const message = "Hi Mathesh, I saw your portfolio!"; // Optional preset message
       const whatsappURL = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;
       window.open(whatsappURL, "_blank");
      });
      document.getElementById("linkedinbtn").addEventListener("click", function () {
       const linkedInURL = "https://www.linkedin.com/in/mathesh-k-79a5aa31b";
       window.open(linkedInURL, "_blank");
     });     
      document.getElementById("send").addEventListener("click",function() {
        alert("✅ Successfully sent!");
      })
      
    </script>
</body>
</html>