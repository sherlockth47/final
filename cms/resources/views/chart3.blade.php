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
      let context = document.querySelector("#rain_and_temperature").getContext('2d')
      new Chart(context, {
        data: {
            datasets: [{
                type: 'bar',
                label: '建築',
                data: [0,0,0,0,1221,0,0,16070,0,22553,0,0,0,0,55446,5881,0,0,0,156511,0,0,10189,5881,1221,0,0,0,0,237903],
                backgroundColor: "rgb(54, 162, 235, 0.5)",
                borderColor: "rgb(54, 162, 235, 0.5)",
                // yAxisID: "rainChart",
            },{
                type: 'bar',
                label: '設備',
                data: [0,1816,2751,1970,13328,4673,912,8753,2901,78749,0,4200,636,2725,91486,8516,45,4148,837,234491,2726,1816,1768,9735,30564,2869,1981,1816,1091,369113],
                backgroundColor: "#fff",
                borderColor: "#fff",
                // yAxisID: "rainChart",
            }, 
            {
                type: 'line',
                label: '累計',
                data: [0,1816,4567,6537,21086,25759,26671,51494,54395,155697,155697,159897,160533,163258,310190,324587,324632,328780,329617,720619,723345,725161,737118,752734,784519,787388,789369,791185,792276,1399292],
                backgroundColor: "rgb(255, 99, 132, 0.5)",
                borderColor: "rgb(255, 99, 132, 0.5)",
                yAxisID: "temperatureChart",
            }],
            labels: ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30']
        },
        options: {
          responsive: false,
          plugins: {
            title: {
              display: true,
              text: '概算修繕計画 コスト推移',
            },
          },
          scales: {
            x: {stacked: true,
            },
            y: {stacked: true
            },
            "temperatureChart": {
              type: "linear", 
              position: "right",
            }
          },
        //   scales: {
        //     "rainChart": {
        //       type: "linear", 
        //       position: "left",
        //       x: {stacked: true},
        //       y: {stacked: true}
        //     },
        //     "temperatureChart": {
        //       type: "linear", 
        //       position: "right",
        //     }
        //   },
        }
      });
    }
  </script>
</head>
<!-- 最初の設定は終わっています　必要な方は触ってください -->

<body>
<!-- ここからheader -->
<canvas id="rain_and_temperature" width="780" height="350"></canvas>





</body>

</html>