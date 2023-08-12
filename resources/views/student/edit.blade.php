@extends('templates.layout')
@section('content')
<form action="{{route('route_student_edit',['id'=>$student->id])}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">name</label>
          <input type="text" class="form-control" name="name" value="{{$student->name}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">gender</label>
            <input type="text" class="form-control" name="gender" value="{{$student->gender}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">phone</label>
            <input type="text" class="form-control" name="phone" value="{{$student->phone}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">address</label>
            <input type="text" class="form-control" name="address" value="{{$student->address}}">
          </div>
          <div class="form-group">
            <label class="col-md-3 col-sm-4 control-label">Ảnh CMND/CCCD</label>
            <div class="col-md-9 col-sm-8">
                <div class="row">
                    <div class="col-xs-6">
                        <img id="mat_truoc_preview" src="{{$student->image?''. Storage::url($student->image): ""  }}" alt="your image"
                             style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid"/>
                        <input type="file" name="image" accept="image/*"
                               class="form-control-file @error('image') is-invalid @enderror" id="cmt_truoc">
                        <label for="cmt_truoc">Mặt trước</label><br/>
                    </div>
                </div>
             </div>
             </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    
</form>
@endsection
@section('script')
  <script>
    $(function(){
        function readURL(input, selector) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function (e) {
                    $(selector).attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#cmt_truoc").change(function () { //#cmt_truoc  là id của input file
            readURL(this, '#mat_truoc_preview');//$mar_truoc_preview là id của ảnh để file 
        });

    });
</script>
@endsection