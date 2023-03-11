@extends('admin.master.index')
@section('headerScript')
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap4.css">
@endsection
@section('content')
    <div class="col-12">
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">عنوان</h3>
            </div>
            <div class="card-body">
                <table id="newsTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>آیدی</th>
                            <th>تیترخبر</th>
                            <th>تاریخ انتشار</th>
                            <th>وضعیت</th>
                            <th>تعداد نمایش</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    <a href="/news/{{$item->shortlink}}" target="_blank">{{$item->title}}</a>
                                </td>
                                <td>{{$item->date_fa}}</td>
                                <td>{{$item->status}}</td>
                                <td>{{$item->views}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                فوتر
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    </div>
@endsection

@section('footerScript')
    <!-- DataTables -->
    <script src="/admin/plugins/datatables/jquery.dataTables.js"></script>
    <script src="/admin/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script>
        $(function () {
            $('#newsTable').DataTable({
                "language": {
                    "paginate": {
                        "next": "بعدی",
                        "previous" : "قبلی"
                    }
                },
                "info" : true,
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "autoWidth": false,
                "sorting":0,
            });
        });
    </script>
@endsection
