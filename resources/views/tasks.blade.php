@extends('layouts.app2')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        
        <form action="{{ url('/task') }}" method="POST" class="form-horizontal">
            {{ csrf_field() }}
            <center>
            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label"><strong style="color:blue"><b>Welcome<b></strong> <H3 style="color:red">{{ Auth::user()->fisrtname }} </H3><label>
            </center></
                <div class="col-sm-6"  >
                    <input type="text" name="name" id="task-name" class="form-control" required >
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>

        </form>
    </div>


    <!-- TODO: Current Tasks -->
@if (count($tasks) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
               
            </div>

            <div class="panel-body" style="margin: 20px;">
                <table border="1em;" >
                    <th style="color: black;"><h3>Current Tasks</h3></th>
                     <th style="color: black"><center><h3>Action</center></h3></th>

                   
                        @foreach ($tasks as $task)
                           
                            

                               
                                    <!-- TODO: Delete Button -->

<tr style=" margin-left: 100px;">
     <td style="color: black;">
                                   {{ $task->name }}


                                </td>

    <td>
        <form action="{{ url('task/'.$task->id) }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Delete
            </button>
            <button type="submit" class="btn btn-danger" >
            <a href="{{url('editTask/'.$task->id)}}" > Edit </a>
            </button>
        </form>
        
    </td>
    
</tr>

                                </td>
                            </tr>
                        @endforeach
                   
                </table>
            </div>
        </div>
    @endif


@endsection