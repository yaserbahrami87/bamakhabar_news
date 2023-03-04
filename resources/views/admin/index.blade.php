@extends('admin.master.index')
@section('content')
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{$news->count()}}</h3>

                <p>خبر</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{$users->count()}}</h3>

                <p>کاربران ثبت شده</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>{{$news->where('date_fa','=',$dateNow)->count()}}</h3>
                <p>اخبار امروز</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="" class="small-box-footer">مشاهده خبرها<i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>


    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">

                <h3>{{$news_errorLink->count()}}</h3>
                <p>لینک های خراب</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="/repair_shortlink" class="small-box-footer">تعمیر لینک ها<i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>
    <!-- ./col -->

    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>65</h3>

                <p>بازدید جدید</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">اطلاعات بیشتر <i class="fa fa-arrow-circle-left"></i></a>
        </div>
    </div>

    <div class="col-12">
        <!-- TABLE: Most views News -->
        <div class="card">
            <div class="card-header border-transparent">
                <h3 class="card-title">پربازدیدترین اخبار</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>

                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table m-0">
                        <thead>
                        <tr>
                            <th>ای دی خبر</th>
                            <th>تیتر</th>
                            <th>تاریخ انتشار</th>
                            <th>تعداد بازدید</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($news->sortByDesc('views')->take(10) as $mostView)
                            <tr dir="ltr">
                                <td><a href="/news/{{$mostView->shortlink}}">{{$mostView->id}}</a></td>
                                <td>
                                    <a href="/news/{{$mostView->shortlink}}">{{$mostView->title}}</a>
                                </td>
                                <td>{{$mostView->date_fa.' '.$mostView->time_fa}}</td>
                                <td>{{$mostView->views}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
                <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">سفارش جدید</a>
                <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">مشاهده همه سفار</a>
            </div>
            <!-- /.card-footer -->
        </div>
        <!-- /.card -->

    </div>


@endsection
