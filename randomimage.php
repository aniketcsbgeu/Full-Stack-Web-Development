<html>
<head>
<title>Random image</title>
</head>
<body>
    <img src="1.png" id="image" width="500">
    
    </div>
    <button id="btn" onclick="randomImageGeneration()">change</button>
    <script type="text/javascript">
        function randomImageGeneration()
        {
                random = Math.ceil(Math.random()*6);
                var m=random+".png";
                document.getElementById('image').src=m;
        }
    </script>
</body>
</html>