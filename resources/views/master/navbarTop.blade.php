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

        @foreach($categories_navbar as $categoryItem)
            <li class="nav-item">
              <a class="nav-link" href="/category/{{$categoryItem->category}}" >{{$categoryItem->category}}</a>
              <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div> -->
            </li>
        @endforeach
          <li class="nav-item">
              <a href="" class="nav-link" data-toggle="modal" data-target="#financialModal"  >حمایت مالی</a>
          </li>
      </ul>

      <form class="form-inline my-2 my-lg-0" method="get" action="/search">
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
<!-- Modal -->
<div class="modal fade" id="financialModal" tabindex="-1" aria-labelledby="financialModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حمایت مالی</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" dir="rtl">
                <p>شماره کارت جهت حمایت مالی: <b>5041721078935559</b> بانک رسالت به نام <u>یاسر بهرامی</u></p>
                <a href="https://zarinp.al/yaserbahrami" target="_blank" class="btn btn-primary">واریز مستقیم</a>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
