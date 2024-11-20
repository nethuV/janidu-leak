<!DOCTYPE html>
<html lang="si">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Video</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        video {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2rem;
            margin: 20px 0;
        }
        p {
            font-size: 1.2rem;
            text-align: center;
            color: #555;
            margin-top: 10px;
        }
        
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: sans-serif;

}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #252839;

}

h2 {
    position: relative;
    font-size: 14vw;
    color:#252839;
    -webkit-text-stroke: 0.3vw #383d52;
    text-transform: uppercase;
}
h2::before {
    content: attr(data-text);
    position: absolute;
    top:0;
    left:0;
    width: 0;
    height: 100%;
    color:#01fe87;
    -webkit-text-stroke: 0vw #383d52;
    border-right: 2px solid #01fe87;
    overflow: hidden;
    animation: animate 6s linear infinite;
}

@keyframes animate {


    0% ,10%,100%{
        width: 0;
    }
    70%,90%{
        width: 100%;
    }
}
    </style>
</head>
<body>
   
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>CSS Text Animation Effects</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2 data-text="ජනිදුගේ ලීක්...">ජනිදුගේ ලීක්...</h2>
    <video controls>
        <source src="video.mp4" type="video/mp4">
    </video>
</body>
</html>
