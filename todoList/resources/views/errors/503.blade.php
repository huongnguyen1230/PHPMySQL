<?php
?>

<!DOCTYPE html>
<html>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Be right back</div>
                @if(count($errors)>0)
{{--                    danh sách lỗi--}}
                    <div class="alert alert-danger">
                        <strong>Error</strong>
                        <br><br>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
    </body>
</html>
