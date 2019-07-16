@extends('adminlte::page')

@section('title', 'SGCOM | Admin')

@section('content_header')
    <h1>AISP</h1>
    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">CPR</a></li>
    </ol>
@stop

@section('content')
    <p>Gestão de CPR</p>
    <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tb-cpr" class="table table-bordered table-striped">
                <thead>
                <tr>                  
                  <th>#</th>
                  <th>Sigla</th>
                  <th>Descrição</th>
                </tr>
                </thead>
                <tbody>
                @forelse($cprs as $cpr)
                <tr></tr>
                  <td>
                    {{$cpr -> id}}
                  </td>
                  <td>
                    {{$cpr -> sigla}}
                  </td>
                   <td>
                    {{$cpr -> descricao}}
                  </td>
                </tr>
                @empty
                @endforelse               
               </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Sigla</th>
                  <th>Descrição</th>
                </tr>
                </tfoot>
              </table>
            <div >
            {!! $cprs->links()!!}
            </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@stop

@section('js')

<script>
$('#tb-cpr').DataTable(
    {
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
</script>
@stop