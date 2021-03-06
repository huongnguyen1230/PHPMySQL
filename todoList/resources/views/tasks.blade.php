<?php
?>

{{--thừa kế app.blade.php--}}
@extends('layouts.app'); {{--layout la ten thu muc, app te template ta da quy dinh, lay toan bo html ben app--}}
@section('content'); {{--quy dinh noi dung content--}}


{{--định nghĩa nội dung trang--}}
    <div class="panel-body">

{{--        hiển thị thông báo lỗi --}}
        @include('errors.503')

{{--        form nhập task mới--}}
        <form action="{{url('task')}}" method="post" class="form-horizontal">
            {{csrf_field()}}

{{--            tên task--}}
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>
                <div class="col-sm-6">
                    <input type="text" name="name" id="task-name" class="form-control">
                </div>
            </div>

{{--            Task button--}}
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i>Add Task
                    </button>
                </div>
            </div>
        </form>

{{--        hiển thị Task hiện tại có trong database --}}
        @if(count($tasks)>0)
            <div class="panel panel-default">
                <div class="panel-heading">
                    Current Task
                </div>
                <div class="panel-body">
                    <table class="table table-stripped task-table">
{{--                        tạo tiêu đề các cột--}}
                        <thead>
                            <td>Task</td>
                            <td>&nbsp;</td>
                        </thead>
{{--                            tạo các dòng để hiển thị nội dung--}}
                        <tbody>
                            @foreach($tasks as $task)
                                <tr>
                                    <td class="table-text">
                                        <div>{{$task->name}}</div>
                                    </td>
{{--                                    //delete--}}
                                    <td>
                                        <form action="/task/{{$task->id}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button>Delete Task</button>
                                            <input type="hidden" name="_method" value="DELETE">
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
