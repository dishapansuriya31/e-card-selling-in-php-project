<!DOCTYPE html>
<html>
<head>
    <title>Demo 4 - with Navigation Buttons</title>
    <link href="themes/home1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="themes/home1/js-image-slider.js" type="text/javascript"></script>
    <link href="generic.css" rel="stylesheet" type="text/css" />
</head>

<body>
        <div id="slider">
            <img src="image/b6.jpg" height="300px" width="200px" />
			<img src="image/b9.jpg" height="300px" width="200px" />
			<img src="image/1.6.jpg" height="250px" width="190px" />
			<img src="image/b2.png" height="250px" width="190px" />
			<img src="image/b9.jpg" height="250px" width="190px" />
			<img src="image/fs6.png" height="250px" width="190px" />
			<img src="image/fs7.jpg" height="250px" width="190px" />
			
        </div>
        <!--Custom navigation buttons on both sides-->
        
        <!--nav bar-->
       
    <script type="text/javascript">
        //The following script is for the group 2 navigation buttons.
        function switchAutoAdvance() {
            imageSlider.switchAuto();
            switchPlayPauseClass();
        }
        function switchPlayPauseClass() {
            var auto = document.getElementById('auto');
            var isAutoPlay = imageSlider.getAuto();
            auto.className = isAutoPlay ? "group2-Pause" : "group2-Play";
            auto.title = isAutoPlay ? "Pause" : "Play";
        }
        switchPlayPauseClass();
    </script>
</body>
</html>

<html></html> 
<html></html> 
<html></html> 
