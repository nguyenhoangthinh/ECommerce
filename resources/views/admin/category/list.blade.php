@extends('admin.layout.admin')

@section('content')

            <div class="row">
            
                    <!-- /.col-lg-12 -->
                    <!-- đây là nơi chua noi dung -->
                 <div class="container-fluid">

                <div class="row">
            
                    <!-- /.col-lg-12 -->
                    <!-- đây là nơi chua noi dung -->
            
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php  $stt=0  ?>
                            @foreach($data as $item)
                            <?php $stt=$stt + 1 ?>
                            <tr class="odd gradeX" align="center">
                                <td>{!! $stt !!}</td>
                                <td>{!! $item["name"]!!}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a  href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
               </div>
               
               </div>
               </div>
                <!-- /.row -->
            
            <!-- /.container-fluid -->
        
        @endsection()