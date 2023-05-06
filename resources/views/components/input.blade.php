<div class="mb-3 col-md-6">
    <label for="{{$id}}" class="form-label">{{$title}}</label>
    <input class="@if($darkmode) bg-dark @endif form-control border border-danger" type="{{$type}}" id="{{$id}}" name="{{$name}}" autofocus @if($required) "required" @endif />
</div>