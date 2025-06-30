<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Image Not Found</title>
  <link rel="icon" type="image/x-icon" href="./depotrace-fevicon.png">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: poppins, sans-serif;
      background-color: #fff;
      color: #111;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
      flex-direction: column;
      padding: 20px;
    }
    .container img {
      width: 200px;
      max-width: 100%;
    }
    h1 {
      font-size: 26px;
      font-weight: 600;
      margin-top: 20px;
    }
    p {
      font-size: 20px;
      color: #333;
      margin-top: 10px;
    }
    .btn {
      margin-top: 30px;
      background-color: #33B0FF;
      color: black;
      border: none;
      padding: 8px 12px;
      font-size: 12.8571px;
      border-radius: 6px;
      cursor: pointer;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      transition: 0.3s;
    }
    .btn:hover {
      background-color: #007dd4;
    }
  </style>
</head>
<body>
  <div class="container">

    <img src="https://i.ibb.co/vs1dD6j/image-not-found.png" alt="image not found">
    <h1>Whoops, We can't seem to find the resource you're looking for.</h1>
    <p>Perhaps you’ve mistyped the URL? Be sure to check your spelling.</p>
    <a href="login.php"><button class="btn">GO TO HOME</button></a>
  </div>
</body>
</html>
