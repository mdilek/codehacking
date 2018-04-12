@extends('layouts.admin')


@section('content')

<h1>All Media</h1>

@if($photos)

     <table class="table">
         <thead>
           <tr>
             <th>ID</th>
             <th>Name</th>
             <th>Created</th>
           </tr>
         </thead>

         @foreach($photos as $photo)

         <tbody>
           <tr>
             <td>{{$photo->id}}</td>
             <td><img src="{{$photo->file}}" height="40" alt=""></td>
             <td>{{$photo->created_at ? $photo->created_at : 'No Date'}}</td>
               <td>

                       {!! Form::open(['method'=>'DELETE', 'action' => ['AdminMediasController@destroy', $photo->id]]) !!}


                           <div class="form-group">

                               {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}

                           </div>

                           {!! Form::close() !!}


               </td>

           </tr>
         </tbody>

         @endforeach
     </table>




@endif


@endsection