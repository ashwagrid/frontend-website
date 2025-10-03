<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV Maker Status</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #fff4e6; /* Light orange background */
    }

    .loading-container {
      text-align: center;
      padding: 20px;
    }

    .loading-container h1 {
      font-size: 2rem;
      color: #ff7b00; /* Orange shade */
      margin-bottom: 15px;
    }

    .spinner {
      width: 60px;
      height: 60px;
      border: 6px solid #ffe0b3;
      border-top: 6px solid #ff7b00;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin: 0 auto;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    .loading-container p {
      margin-top: 15px;
      color: #444;
      font-size: 1.1rem;
    }

    @media (max-width: 600px) {
      .loading-container h1 {
        font-size: 1.5rem;
      }

      .spinner {
        width: 45px;
        height: 45px;
      }
    }
  </style>
</head>
<body>
  <div class="loading-container">
    <div class="spinner"></div>
    <h1>CV Maker is not live</h1>
    <p>Please check back later...</p>
  </div>
</body>
</html>
