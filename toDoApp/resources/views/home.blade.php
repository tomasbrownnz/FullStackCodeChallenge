@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading">
        Current Tasks
    </div>
    <div class="panel-body"> 
        <table class="table table-striped task-table">

            <!-- Table Body -->
            <tbody>
                @foreach ($tasks as $task)
                <tr>
                    <!-- Task Name -->
                    <td class="table-text">
                        <div>{{ $task->name }}</div>
                    </td>

                    <!-- Delete Button -->
                    <td>
                        <form action="/completetask" method="get"> 
                            <button>Complete Task</button>
                            <input type="hidden" name='taskId' value="<?php echo $task->id;?>">
                        </form>
                    </td>
                </tr>                                                     
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="container">
    <form action="{{'newtask'}}" method='get'>
        
        <div class="form-group">
            <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name='taskName' class='form-control'>
                    <input type="hidden" name='userId' value={{ Auth::user()->id }}>
                </div>
            </div>

            <!-- Add Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Add Task
                    </button>
                </div>
            </div>
    </form>
</div>

@endsection