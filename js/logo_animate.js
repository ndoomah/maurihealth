onload = function startAnimation(){

            var frames = document.getElementById("animateLogo").children;
            var frameCount = frames.length;
            var i =0;
            
            
            setInterval(function() {
                frames[i % frameCount].style.display = "none";
                frames[++i % frameCount].style.display = "block";
            }, 1000);
        }