@foreach($skills as $data)
<form action="{{route('skills.update', $data->id)}}" method="POST" id="skill-updated">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-9">
            <input type="text" class="col-9" value="{{$data->title}}" name="title">
            <button type="button" onclick="updateDelete()" class="btn btn-primary updated col-2">Update</button>
        </div>
        <div class="col-md-3">
            <a href="#" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                <i class="fas fa-trash"></i>
            </a>
        </div>
    </div>
</form>
@endforeach
