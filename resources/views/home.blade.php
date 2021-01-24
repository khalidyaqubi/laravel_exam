@extends('layouts.app')
@section('css')
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>
                    <div class="card-body">
                        <h4>المهام المطلوبة</h4>
                        <ul>
                            <li>تمكين خيار البحث من خلال تحديد اكثر من منطقة وليس منطقة واحد</li>
                            <li>تضمين نتيجة البحث مع ترقيم الصفحات paginate</li>
                            <li>استخدام احد رسومات البيانات مثل AmCharts أو GoogleCharts لتمثيل المدن وعدد المستشفيات
                                <p>https://www.amcharts.com/demos/column-with-rotated-series/</p>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <form class="row">
                            <div class="col-md">
                                <select class="form-control" name="country_id">
                                    <option value="">اختر المنطقة</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->id}}">{{$country->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md">
                                <button type="submit" class="btn btn-primary">بحث</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">city</th>
                                <th scope="col">area</th>
                                <th scope="col">hospital count</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cities as $item)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->country->name}}</td>
                                    <td>{{$item->hospitals_count}}</td>
                                </tr>
                            @endforeach
                            {{$cities->links()}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
