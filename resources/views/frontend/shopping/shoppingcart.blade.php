@extends('layouts.frontend.frontend')

@section('title', 'Elite Shoppy an Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Home :: w3layouts')

@section('content')
<div class="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('/')}}">首頁</a></li>
        <li class="breadcrumb-item active">購物車</li>
    </ol>
</div>
<div class="new_arrivals_agile_w3ls_info">
    <div class="container">
        <h2>購物車({{$cartCount}})</h2>
        <div style="margin-top: 20px">
            <form action="" method="post">
                {{csrf_field()}}
                <!-- Table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th> 產品</th> 
                            <th> 數量</th> 
                            <th> 價格</th>  
                            <th> 操作</th> 
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($cart as $v)
                        <tr id="{{$v->rowId}}">
                            <td>
                                <p> <strong> {{$v->name}} </strong> </p>
                            </td>
                            <td><input class="form-control input-sm" type ="text"  value = "{{$v->qty}}"  ></td>
                            <td> $ {{$v->price}}</td>
                            <td>
                                <a href="{{url('shopping/remove/'.$v->rowId)}}">删除</a>
                            </td>
                        </tr>

                        @endforeach

                    </tbody>

                    <tr>
                        <td> </td>
                        <td> </td>
                        <td> $ {{$total}}</td>
                        <td> </td>
                    </tr>
                </table>
                <div style="text-align: right">
                    <a href="{{url('/')}}" class="btn btn-default" role="button">繼續選購</a>
                    <a href="{{url('checkout/order_info')}}" class="btn btn-info" role="button">立即結帳</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection