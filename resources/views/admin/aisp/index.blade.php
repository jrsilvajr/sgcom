@extends('adminlte::page')

@section('title', 'SGCOM | Admin')

@section('content_header')
    <h1>AISP</h1>
    <ol class="breadcrumb">
        <li><a href="">Dashboard</a></li>
        <li><a href="">AISP</a></li>
    </ol>
@stop

@section('content')
    <p>Gestão de AISP</p>
    <div class="box">
            <div class="box-header">
              <form action="{{route('aisp.search')}}" method="POST" class="form form-inline">
              {!! csrf_field() !!}    
              <input  type="text" name="descricao"  id="descricao" class="form-control" placeholder="Informe a AISP para buscar"/>

                  <button  type="submit" class="btn btn-primary">Pesquisar</button>
              </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="tb-aisp" class="table table-bordered table-striped">
                <thead>
                <tr>                  
                  <th>#</th>
                  <th>Aisp</th>
                </tr>
                </thead>
                <tbody>
                @forelse($aisps as $aisp)
                <tr></tr>
                  <td>
                    {{$aisp -> id}}
                  </td>
                   <td>
                    {{$aisp -> descricao}}
                  </td>
                </tr>
                @empty
                @endforelse               
               </tbody>
                <tfoot>
                <tr>
                  <th>#</th>
                  <th>Aisp</th>
                </tr>
                </tfoot>
              </table>
            <div >
            {!! $aisps->links()!!}
            </div>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
@stop

@section('js')

<script>
$('#tb-aisp').DataTable(
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