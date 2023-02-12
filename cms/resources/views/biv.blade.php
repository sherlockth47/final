<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ダッシュボード</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD">
  <!--//CSSの設定など-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- CSSの設定ファイル -->
  <link rel="stylesheet" href="/css/dashboard.css">
  <!--<link rel="stylesheet" href="/css/style.css">-->
</head>

<body>
  <header class="navbar  sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <div class="container-fluid">
      <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">BIV</a>
      <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="検索" aria-label="検索">
      <div class="navbar-nav">
        <div class="nav-item text-nowrap">
          <!--<a class="nav-link px-3" href="#">サインアウト</a>-->
          
          <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>
                        
          <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
        </div>
      </div>
    </div>
  </header>
  

  <div class="container-fluid">
    <div class="row">
      <!--<nav id="sidebarMenu" class="d-md-block sidebar collapse">-->
      <!--  <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">-->
      <!--  <div class="position-sticky pt-3 sidebar-sticky">-->
      <!--    <ul class="nav flex-column">-->
          <!--<div class="navigation">-->
          <!--  <ul>-->
          <!--      <li class="list active">-->
          <!--          <a href="#">-->
          <!--              <span class="icon"><ion-icon name="home-outline"></ion-icon></span>-->
          <!--              <span class="title">&emsp;Home</span>-->
          <!--          </a>-->
          <!--      </li>-->
          <!--      <li class="list">-->
          <!--          <a href="#">-->
          <!--              <span class="icon"><ion-icon name="logo-buffer"></ion-icon></span>-->
          <!--              <span class="title">&emsp;Project Admin</span>-->
          <!--          </a>-->
          <!--      </li>-->
          <!--      <li class="list">-->
          <!--          <a href="https://68a17fea44334cb083633de7961db0ba.vfs.cloud9.us-east-1.amazonaws.com/chart1">-->
          <!--              <span class="icon"><ion-icon name="add-circle-outline"></ion-icon></span>-->
          <!--              <span class="title">&emsp;Add Project</span>-->
          <!--          </a>-->
          <!--      </li>-->
          <!--      <li class="list">-->
          <!--          <a href="#">-->
          <!--              <span class="icon"><ion-icon name="stats-chart-outline"></ion-icon></ion-icon></span>-->
          <!--              <span class="title">&emsp;BIV</span>-->
          <!--          </a>-->
          <!--      </li>-->
          <!--      <li class="list">-->
          <!--          <a href="#">-->
          <!--              <span class="icon"><ion-icon name="school-outline"></ion-icon></span>-->
          <!--              <span class="title">&emsp;Learning</span>-->
          <!--          </a>-->
          <!--      </li>-->
          <!--      <li class="list">-->
          <!--          <a href="#">-->
          <!--              <span class="icon"><ion-icon name="help-circle-outline"></ion-icon></span>-->
          <!--              <span class="title">&emsp;Help</span>-->
          <!--          </a>-->
          <!--      </li>-->
          <!--  </ul>-->
          <!--  </di>-->
          <!--  </ul>-->
          <!--  </div>-->
          <!--  </nav>-->
          <!--  </div>-->
          <!--  </div>-->
          
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
        <div class="position-sticky pt-3 sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">
                <span data-feather="home" class="align-text-bottom"><ion-icon name="stats-chart-outline"></ion-icon></span>
                BIVダッシュボード
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file" class="align-text-bottom"><ion-icon name="logo-buffer"></ion-icon></span>
                プロジェクト情報入力
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="shopping-cart" class="align-text-bottom"><ion-icon name="add-circle-outline"></ion-icon></span>
                プロジェクト一覧
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="users" class="align-text-bottom"><ion-icon name="school-outline"></ion-icon></span>
                学習
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="bar-chart-2" class="align-text-bottom"><ion-icon name="timer-outline"></ion-icon></span>
                アップロード回数
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="layers" class="align-text-bottom"><ion-icon name="help-circle-outline"></ion-icon></span>
                ヘルプ
              </a>
            </li>
          </ul>

          <!--<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">-->
          <!--  <span>保存されたレポート</span>-->
          <!--  <a class="d-flex align-items-center text-muted" href="#">-->
          <!--    <span data-feather="plus-circle" class="align-text-bottom"></span>-->
          <!--  </a>-->
          <!--</h6>-->
          <!--<ul class="nav flex-column mb-2">-->
          <!--  <li class="nav-item">-->
          <!--    <a class="nav-link" href="#">-->
          <!--      <span data-feather="file-text" class="align-text-bottom"></span>-->
          <!--      今月-->
          <!--    </a>-->
          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--    <a class="nav-link" href="#">-->
          <!--      <span data-feather="file-text" class="align-text-bottom"></span>-->
          <!--     前四半期-->
          <!--    </a>-->
          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--    <a class="nav-link" href="#">-->
          <!--      <span data-feather="file-text" class="align-text-bottom"></span>-->
          <!--      社会的関与-->
          <!--    </a>-->
          <!--  </li>-->
          <!--  <li class="nav-item">-->
          <!--    <a class="nav-link" href="#">-->
          <!--      <span data-feather="file-text" class="align-text-bottom"></span>-->
          <!--      年末販売-->
          <!--    </a>-->
          <!--  </li>-->
          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <!--<h1 class="h2">ダッシュボード</h1>-->
          <!--<div class="btn-toolbar mb-2 mb-md-0">-->
          <!--  <div class="btn-group me-2">-->
          <!--    <button type="button" class="btn btn-sm btn-outline-secondary">シェア</button>-->
          <!--    <button type="button" class="btn btn-sm btn-outline-secondary">輸出</button>-->
          <!--  </div>-->
          <!--  <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">-->
          <!--    <span data-feather="calendar" class="align-text-bottom"></span>-->
          <!--    今週-->
          <!--  </button>-->
          <!--</div>-->
        </div>
        <iframe id="inline-frame" width="1200" height="600" src="http://localhost:8080/" frameborder="0"></iframe>
        
      


          
        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

        
        
        <!--<iframe id="inline-frame" width="790" height="500" src="http://localhost:8888/php05/index3.html" frameborder="0"></iframe>-->

        <h2>セクションタイトル</h2>
        <div class="table-responsive">
          <table class="table table-striped table-sm">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">見出し</th>
                <th scope="col">見出し</th>
                <th scope="col">見出し</th>
                <th scope="col">見出し</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1,001</td>
                <td>あお</td>
                <td>交</td>
                <td>小</td>
                <td>記</td>
              </tr>
              <tr>
                <td>1,002</td>
                <td>いね</td>
                <td>鋼</td>
                <td>省</td>
                <td>黄</td>
              </tr>
              <tr>
                <td>1,003</td>
                <td>うた</td>
                <td>抗</td>
                <td>商</td>
                <td>木</td>
              </tr>
              <tr>
                <td>1,004</td>
                <td>えま</td>
                <td>工</td>
                <td>匠</td>
                <td>規</td>
              </tr>
              <tr>
                <td>1,005</td>
                <td>おか</td>
                <td>項</td>
                <td>生</td>
                <td>機</td>
              </tr>
              <tr>
                <td>1,006</td>
                <td>かさ</td>
                <td>孔</td>
                <td>章</td>
                <td>期</td>
              </tr>
              <tr>
                <td>1,007</td>
                <td>きじ</td>
                <td>構</td>
                <td>証</td>
                <td>既</td>
              </tr>
              <tr>
                <td>1,008</td>
                <td>くり</td>
                <td>高</td>
                <td>章</td>
                <td>気</td>
              </tr>
              <tr>
                <td>1,009</td>
                <td>けち</td>
                <td>孝</td>
                <td>少</td>
                <td>基</td>
              </tr>
              <tr>
                <td>1,010</td>
                <td>こま</td>
                <td>功</td>
                <td>将</td>
                <td>貴</td>
              </tr>
              <tr>
                <td>1,011</td>
                <td>さら</td>
                <td>公</td>
                <td>招</td>
                <td>着</td>
              </tr>
              <tr>
                <td>1,012</td>
                <td>しか</td>
                <td>甲</td>
                <td>庄</td>
                <td>樹</td>
              </tr>
              <tr>
                <td>1,013</td>
                <td>すぎ</td>
                <td>候</td>
                <td>性</td>
                <td>来</td>
              </tr>
              <tr>
                <td>1,014</td>
                <td>せみ</td>
                <td>考</td>
                <td>頌</td>
                <td>奇</td>
              </tr>
              <tr>
                <td>1,015</td>
                <td>そと</td>
                <td>講</td>
                <td>勝</td>
                <td>器</td>
              </tr>
            </tbody>
          </table>
        </div><!-- /.table-responsive -->
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!--//JavaScriptプラグインの設定など-->
  <!-- アイコン -->
  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <!-- グラフ -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <!-- JSの設定ファイル -->
  <script src="/js/dashboard.js">
      
      
  
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
            <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>