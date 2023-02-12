<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>価格設定案内</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD">
  <!--//CSSの設定など-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- CSSの設定ファイル -->
  <link rel="stylesheet" href="/css/pricing.css">
</head>

<body>
  <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check" viewBox="0 0 16 16">
      <title>チェック</title>
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
    </symbol>
  </svg>

  <div class="container py-3">
    <header>
      <!--<div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">-->
      <!--  <a href="/" class="d-flex align-items-center text-dark text-decoration-none">-->
      <!--    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><path fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></path></svg>-->
      <!--    <span class="fs-4">価格設定の実例</span>-->
      <!--  </a>-->

      <!--  <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">-->
      <!--    <a class="me-3 py-2 text-dark text-decoration-none" href="#">特長</a>-->
      <!--    <a class="me-3 py-2 text-dark text-decoration-none" href="#">事業</a>-->
      <!--    <a class="me-3 py-2 text-dark text-decoration-none" href="#">サポート</a>-->
      <!--    <a class="py-2 text-dark text-decoration-none" href="#">価格設定</a>-->
      <!--</nav>-->
      <!--</div>-->

      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">価格設定</h1>
        <p class="lead">このBootstrapの例で潜在的な顧客のための効果的な価格表がすばやく作成可能。デフォルトのBootstrapコンポーネントとユーティリティを少しカスタマイズして構築されている。</p>
      </div>
    </header>

    <main>
      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">フリー</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">￥0 <small class="text-muted">/ 月</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>10 ユーザーを含む</li>
                <li>2 GBのストレージ</li>
                <li>メールサポート</li>
                <li>ヘルプセンターへのアクセス</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-primary">無料で申込</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">プロ</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">￥1500 <small class="text-muted">/ 月</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>20 ユーザーを含む</li>
                <li>10 GBのストレージ</li>
                <li>優先メールサポート</li>
                <li>ヘルプセンターへのアクセス</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-primary">お申込</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-bg-primary border-primary">
              <h4 class="my-0 fw-normal">企業向け</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">￥2900 <small class="text-muted">/ 月</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>30 ユーザーを含む</li>
                <li>15 GBのストレージ</li>
                <li>電話とメールのサポート</li>
                <li>ヘルプセンターへのアクセス</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-primary">お問い合わせ</button>
            </div>
          </div>
        </div>
      </div>

    <!--  <h2 class="display-6 text-center mb-4">プランの比較</h2>-->

    <!--  <div class="table-responsive">-->
    <!--    <table class="table text-center">-->
    <!--      <thead>-->
    <!--        <tr>-->
    <!--          <th style="width: 34%;"></th>-->
    <!--          <th style="width: 22%;">フリー</th>-->
    <!--          <th style="width: 22%;">プロ</th>-->
    <!--          <th style="width: 22%;">企業向け</th>-->
    <!--        </tr>-->
    <!--      </thead>-->
    <!--      <tbody>-->
    <!--        <tr>-->
    <!--          <th scope="row" class="text-start">公的</th>-->
    <!--          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>-->
    <!--          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>-->
    <!--          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>-->
    <!--        </tr>-->
    <!--        <tr>-->
    <!--          <th scope="row" class="text-start">私的</th>-->
    <!--          <td></td>-->
    <!--          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>-->
    <!--          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>-->
    <!--        </tr>-->
    <!--      </tbody>-->

    <!--      <tbody>-->
    <!--        <tr>-->
    <!--          <th scope="row" class="text-start">権限</th>-->
    <!--          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>-->
    <!--          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>-->
    <!--          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>-->
    <!--        </tr>-->
    <!--        <tr>-->
    <!--          <th scope="row" class="text-start">共有</th>-->
    <!--          <td></td>-->
    <!--          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>-->
    <!--          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>-->
    <!--        </tr>-->
    <!--        <tr>-->
    <!--          <th scope="row" class="text-start">無制限のメンバー</th>-->
    <!--          <td></td>-->
    <!--          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>-->
    <!--          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>-->
    <!--        </tr>-->
    <!--        <tr>-->
    <!--          <th scope="row" class="text-start">追加のセキュリティ</th>-->
    <!--          <td></td>-->
    <!--          <td></td>-->
    <!--          <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>-->
    <!--        </tr>-->
    <!--      </tbody>-->
    <!--    </table>-->
    <!--  </div>-->
    <!--</main>-->


    <!--<footer class="pt-4 my-md-5 pt-md-5 border-top">-->
    <!--  <div class="row">-->
    <!--    <div class="col-12 col-md">-->
    <!--      <img class="mb-2" src="../images/bootstrap-logo.svg" alt="" width="24" height="19">-->
    <!--      <small class="d-block mb-3 text-muted">&copy; 2017–2023</small>-->
    <!--    </div>-->
    <!--    <div class="col-6 col-md">-->
    <!--      <h5>特徴</h5>-->
    <!--      <ul class="list-unstyled text-small">-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">クールなスタッフ</a></li>-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">ランダム機能</a></li>-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">チームの特徴</a></li>-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">開発者向け</a></li>-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">もう一つ</a></li>-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">最終回</a></li>-->
    <!--      </ul>-->
    <!--    </div>-->
    <!--    <div class="col-6 col-md">-->
    <!--      <h5>リソース</h5>-->
    <!--      <ul class="list-unstyled text-small">-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">リソース</a></li>-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">リソース名</a></li>-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">別のリソース</a></li>-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">最終的リソース</a></li>-->
    <!--      </ul>-->
    <!--    </div>-->
    <!--    <div class="col-6 col-md">-->
    <!--      <h5>概要</h5>-->
    <!--      <ul class="list-unstyled text-small">-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">チーム</a></li>-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">場所</a></li>-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">プライバシー</a></li>-->
    <!--        <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">条項</a></li>-->
    <!--      </ul>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</footer>-->
  <!--</div>-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <!--//JavaScriptプラグインの設定など--
</body>

</html>