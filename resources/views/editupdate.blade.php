@extends('layouts.app2')
@section('content')
<div class="panel-body">
       
        <form action="{{url('editTask/'.$task->id)}}" method="POST" class="form-horizontal">
            {{ csrf_field() }}

            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">

                    <input type="text" name="name" id="task-name" class="form-control" value="{{ $task->name}}" required>
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Update
                    </button>
                </div>
            </div>
        </form>
    </div>


@endsection

