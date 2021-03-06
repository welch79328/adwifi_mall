@extends('layouts.frontend.frontend')

@section('title', "$websiteTitle 密碼修改")

@section('content')
    <div class="new_arrivals_agile_w3ls_info" style="font-family: Microsoft JhengHei;">
        <div class="container">
            <form class="form-horizontal" action="{{url('member_update_password')}}" method="post">
                {{csrf_field()}}
                <div class="col-md-offset-2 col-md-8">
                    <h2 style="margin-bottom: 20px">密碼修改</h2>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_o" placeholder="請輸入原密碼" required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password"
                               placeholder="密碼(6至8位、第一位為英文、只接受英文或數字)"
                               pattern="[a-zA-Z][a-zA-Z0-9]{5,7}"
                               oninvalid="this.setCustomValidity('密碼限制(6至8位、第一位為英文、只接受英文或數字)')"
                               oninput="this.setCustomValidity('')"
                               required>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirmation" placeholder="新密碼確認"
                               required>
                    </div>
                </div>
                <div class="col-md-offset-2 col-md-8">
                    @if(count($errors)>0)
                        <div>
                            @if(is_object($errors))
                                @foreach($errors->all() as $error)
                                    <p style="color: red; text-align: center;">{{$error}}</p>
                                @endforeach
                            @else
                                <p style="color: red; text-align: center;">{{$errors["msg"]}}</p>
                            @endif
                        </div>
                    @endif
                    @if(session('sussess.msg'))
                        <p style="color: #009966; text-align: center;">{{session('sussess.msg')}}</p>
                    @endif
                    <div style="text-align: right">
                        <button type="submit" class="btn btn-primary">送出</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

