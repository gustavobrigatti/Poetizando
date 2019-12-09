<!DOCTYPR html>
<html lang="pt-br">
    <style> 
    
    </style>
    <head>
        <meta charset="utf-8">
        <title>Poetizando</title>
        <link type="text/css" rel="stylesheet" href="css/estilo.css">
        <link type="text/css" rel="stylesheet" href="css/slider.css">
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <script src="js/slider.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/navbar.css" rel="stylesheet" type="text/css">
    </head>
    <body>               
        <table border="0" height="90%" width="100%">
            <tr>
                <td widht="100%">
                    <div class="slideshow-container">

                    <div class="mySlides">
                      <img src="img/po2.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                      <img src="img/po.jpg" style="width:100%">
                    </div>

                    <div class="mySlides">
                      <img src="img/po3.jpg" style="width:100%">
                    </div>

                    </div>
                    <br>

                    <div style="text-align:center">
                      <span class="dot"></span> 
                      <span class="dot"></span> 
                      <span class="dot"></span> 
                    </div>
                </td>
            </tr>
        </table>
        <script>
            var slideIndex = 0;
            showSlides();

            function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                   slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex> slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 3000); // Change image every 2 seconds
            }
        </script>

    </body>
</html>