<?php
?>
@extends('layouts.app');
@section('content');

{{--định nghĩa nội dung trang--}}
<div class="panel-body">

    {{--        form nhập product mới--}}
    <form action="{{url('product')}}" method="post" class="form-horizontal">
        {{csrf_field()}}


        <div class="form-group">
            {{--            tên sản phẩm--}}
            <label for="name" class="col-sm-3 control-label">Name product</label>
            <div class="col-sm-6">
                <input type="text" name="name" id="pro-name" class="form-control">
            </div>
{{--            giá sản phẩm--}}
            <label for="price" class="col-sm-3 control-label">Price</label>
            <div class="col-sm-6">
                <input type="number" name="price" id="pro-price" class="form-control">
            </div>
{{--            miêu tả sản phẩm--}}
            <label for="des" class="col-sm-3 control-label">Description</label>
            <div class="col-sm-6">
                <input type="text" name="des" id="pro-des" class="form-control">
            </div>
{{--            số lượng sản phẩm--}}
            <label for="qty" class="col-sm-3 control-label">Qty</label>
            <div class="col-sm-6">
                <input type="number" name="qty" id="pro-qty" class="form-control">
            </div>
{{--            trạng thái sản phẩm--}}
            <label for="status" class="col-sm-3 label-primary">Status</label>
            <div class="col-sm-6">
                <select name="status" id="pro-status">
                    <option value="stocking">Stocking</option>
                    <option value="cold out">Sold out</option>
                    <option value="comming">Comming</option>
                </select>
            </div>
        </div>

        {{--            Task button--}}
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-6">
                <button type="submit" class="btn btn-default">
                    <i class="fa fa-plus"></i>Add Product
                </button>
            </div>
        </div>
    </form>

    {{--        hiển thị product hiện tại có trong database --}}
    @if(count($products)>0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Product
            </div>
            <div class="panel-body">
                <table class="table table-stripped task-table">
                    {{--                        tạo tiêu đề các cột--}}
                    <thead>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Price</td>
                    <td>Description</td>
                    <td>Qty</td>
                    <td>Status</td>
                    </thead>
                    {{--                            tạo các dòng để hiển thị nội dung--}}
                    <tbody>
                    @foreach($products as $product)
                        <tr>
                            <td class="table-text">
                                <div>{{$product->name}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->price}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->description}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->qty}}</div>
                            </td>
                            <td class="table-text">
                                <div>{{$product->status}}</div>
                            </td>
                            {{--                                    //delete--}}
                            <td>
                                <form action="/product/{{$product->id}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                    <button>Delete Product</button>
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
