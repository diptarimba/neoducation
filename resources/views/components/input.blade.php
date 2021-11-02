<div class="mb-3">
	<label class="form-label" for="{{$field}}">{{$name}}</label>
	<input type="{{$type}}"
	@isset($readonly)
		readonly
	@endisset
	
	@isset($value)
		value="{{$value}}"
	@endisset
	class="form-control" aria-label="{{$field}}" name="{{$field}}" id="{{$field}}">
</div>