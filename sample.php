<!DOCTYPE html> 
    <html> 
    <body> 
    <video id="myVideo" width="320" height="176" controls>
      <source src="mov_bbb.mp4" type="video/mp4">
    </video>

    <script>
        $(document).ready(function(){
            var vid = document.getElementById("myVideo");
            //Converting seconds to miliseconds.
            var durationOfVideo   = parseInt(vid.duration * 1000);
            setTimeout(function(){
                alert("Hello"); 
            }, durationOfVideo);

    });

    </script> 


    </body> 
    </html>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>