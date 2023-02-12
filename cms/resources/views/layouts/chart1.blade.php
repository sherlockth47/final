<!DOCTYPE html>
<html lang="ja">
<!-- 最初の設定は終わっています　必要な方は触ってください -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BIV</title>
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="js/main.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.1"></script>
  <script>
    window.onload = function () {
      let context = document.querySelector("#sushi_circle").getContext('2d')
      new Chart(context, {
        type: 'doughnut',
        data: {
          labels: ["躯体:コンクリート", "躯体:鉄筋", "躯体:鉄骨", "躯体:ALC", "仕上:SD", "仕上:アルミサッシ", "仕上:ガラス","仕上:LGS","仕上:石膏ボード","仕上:ユニットバス","仕上:キッチン"],
          datasets: [{
            backgroundColor: ["#fa8072", "#00ff7f", "#00bfff", "#a9a9a9", "#f5f5f5"],
            data: [2345,1323.8,99.1,47.1,61.7,141.1,36.1,132.1,147.5,148.5,90]
          }]
        },
        options: {
            plugins: {
            title: {
              display: true,
              text: '建材に関わるCO2排出量'},
            },
          responsive: false,
        }
      });
    }
  </script>
</head>
<!-- 最初の設定は終わっています　必要な方は触ってください -->

<body>
<!-- ここからheader -->
<canvas id="sushi_circle" width="350" height="340"></canvas>





</body>

</html>