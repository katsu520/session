@extends('layouts.admin')

@section('title', 'Session')

@section('content')

  <div class="container-fluid">
    <div class="row">
      <div class="mx-auto">
        <body>
          <div class="search-title">
            <h1>サーフショップ・サーフィンスクール</h1>
            <hr width="50%" noshade>
          </div>
          
          <div class="result">
            <ul class="result-all">
              <li class="resultList"></li>
              <li class="resultList"></li>
              <li class="resultList"></li>
              <li class="resultList"></li>
              <li class="resultList"></li>
              <li class="resultList"></li>
              <li class="resultList"></li>
              <li class="resultList"></li>
              <li class="resultList"></li>
              <li class="resultList"></li>
            </ul>
            <nav aria-label="pages">
              <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">前へ</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">次へ</a></li>
              </ul>
            </nav>
          </div>
          <footer>
            <hr class="home" noshade>
            <span class="copyright">©︎session</span>
          </footer>
        </body>
@endsection
