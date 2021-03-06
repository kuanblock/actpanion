@extends('backtemplate.main')
<!--Header Title -->
@section('title')
Dashboard
@endsection

<!--Plugins CSS -->
@section('cssextent')

@endsection

<!--Customs CSS -->
@section('csscustom')

@endsection

<!--Page title-->
@section('pagetitle')
Dashboard
@endsection

<!--Top navigation-->
@section('navigation')
  <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
@endsection

<!--Main Content -->
@section('content')
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Title</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      Start creating your amazing application!
    </div><!-- /.box-body -->
    <div class="box-footer">
      Footer
    </div><!-- /.box-footer-->
  </div><!-- /.box -->
@endsection

<!--Plugins JS -->
@section('jsextent')

@endsection

<!--Customs JS -->
@section('jscustom')

@endsection


<!--Control alert box -->
@section('alertcontrol')
  @if(Session::has('loginsuccess'))
    <script>
      $(document).ready(function() {

          $(window).load(function(){
            swal({
       title: "Login Success",
       text: "",
       type: "success"
                 });

                   });

        });
    </script>
  @endif
@endsection
