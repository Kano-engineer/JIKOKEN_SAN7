@extends('layouts.app')
@include('common.aside')

@section('content')


<div class="linkbox-nav">
                <p><a　href="{{action('HomeController@index')}}"><i class="fas fa-house-user"></i></a></p>
</div>




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h1>登録情報</h>
                 </div>
                    <div class="card-body">
                      <div style="margin-top: 30px;">
                       <table class="table table-striped">  
                         <tr>
                           <th>NAME</th>
                             <td>{{ Auth::user()->name }}</td>
                           </tr>  
                         <tr>
                           <th>E-MAIL</th>
                             <td>{{ Auth::user()->email }}</td>
                          </tr>  
                        </table>
                      </div>
                 </div>
             </div>
        </div>
    </div>
</div>
@endsection
