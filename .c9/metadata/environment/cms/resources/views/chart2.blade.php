{"filter":false,"title":"chart2.blade.php","tooltip":"/cms/resources/views/chart2.blade.php","ace":{"folds":[],"scrolltop":581,"scrollleft":0,"selection":{"start":{"row":81,"column":7},"end":{"row":81,"column":7},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"hash":"49195171894200fe5c6134543d52e71ddb56f242","mime":"application/octet-stream","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":0,"column":0},"end":{"row":81,"column":7},"action":"insert","lines":["<!DOCTYPE html>","<html lang=\"ja\">","<!-- 最初の設定は終わっています　必要な方は触ってください -->","","<head>","  <meta charset=\"UTF-8\">","  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">","  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">","  <title>BIV</title>","  <link rel=\"stylesheet\" href=\"css/reset.css\">","  <link rel=\"stylesheet\" href=\"css/style.css\">","  <script src=\"https://code.jquery.com/jquery-3.6.0.min.js\" integrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>","  <script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script>","  <script src=\"js/main.js\"></script>","  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js\"></script>","  <script src=\"https://cdn.jsdelivr.net/npm/chart.js@3.7.1\"></script>","  <script>","    window.onload = function () {","      let context = document.querySelector(\"#japanese_people_chart\").getContext('2d')","      new Chart(context, {","        type: 'bar',","        data: {","          labels: ['設計', '基準'],","          datasets: [{","          label: \"空調設備\",","          data: [3180.12, 3756.82],","          backgroundColor: ['#4169e1']","          },{label: \"換気設備\",","          data: [108.80, 144.66],","          backgroundColor: ['#ffa500']","          },{label: \"照明設備\",","          data: [946.14, 1969.83],","          backgroundColor: ['#ffa500']","          },{label: \"給湯設備\",","          data: [125.28, 49.49],","          backgroundColor: ['#ffa500']","          },{label: \"昇降機\",","          data: [170.67, 213.34],","          backgroundColor: ['#ffa500']","          },{label: \"高効率設備\",","          data: [0, 0],","          backgroundColor: ['#ffa500']","          },{label: \"その他\",","          data: [1565.08, 1565.08],","          backgroundColor: ['#ffa500']","          }","        ],","        },","        options: {","            plugins: {","            title: {","              display: true,","              text: '設計/基準一次エネルギー消費量',","            },","          },","  scales: {","    x: {","      stacked: true,","    },","    y: {","      stacked: true","    }","  },","  responsive: false","}","      })","    }","  </script>","</head>","<!-- 最初の設定は終わっています　必要な方は触ってください -->","","<body>","<!-- ここからheader -->","<canvas id=\"japanese_people_chart\" width=\"350\" height=\"350\"></canvas>","","","","","","</body>","","</html>"],"id":1}]]},"timestamp":1675725519225}