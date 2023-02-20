<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" dir="rtl" id="navbar_row" >
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">
            <i class="fa fa-home"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/سیاسی" >سیاسی</a>
          <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div> -->
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/اقتصادی">اقتصادی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/ورزشی">ورزشی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/فرهنگی">فرهنگی</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="/category/اجتماعی">اجتماعی</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/بین الملل">بین الملل</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/سلامت">سلامت</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/حوادث">حوادث</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/category/علم و فناوری">علم و فناوری</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0" method="get" action="search">
        <div class="input-group">
          @if($errors->has('q'))
            {{$errors->first('q')}}
          @endif
          <input type="text" class="form-control" name="q" placeholder="جستجو در سایت ..." aria-describedby="btn_search">
          <div class="input-group-prepend">
            <button class="btn btn-outline-secondary" type="submit" id="btn_search" >
              <i class="fa fa-search"></i>
            </button>
          </div>
        </div>
      </form>

    </div>
</nav>