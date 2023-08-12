@extends('templates.layout')
@section('content')
    <table>
        <tr>
          <td>id</td>
          <td>name</td>
          <td>gender</td>
          <td>phone</td>
          <td>address</td>
          <td>image</td>
          <td>AcTION</td>
        </tr>
@foreach($student as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->gender}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->address}}</td>
            <td><img src="{{$item->image?''. Storage::url($item->image): ""  }}" style="width:100px" alt=""></td>
            <td><a href="{{route('route_student_edit',['id'=>$item->id])}}">edit</a>
                <a href="{{route('route_student_delete',['id'=>$item->id])}}">delete</a></td>
        </tr>
        @endforeach
    </table>
@endsection