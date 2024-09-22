//create
<div class="form-group row">
    <label class="col-form-label text-right col-lg-3 col-sm-12">{{__("words.specifications")}}</label>
    <div class="col-lg-4 col-md-9 col-sm-12">
        <select class="form-control selectpicker" id="multiSelect1" multiple="multiple"
                data-live-search="true" name="specifications[]">
            @foreach($specifications as $specification)
                <option value="{{$specification->id}}" {{(collect(old('specifications'))->contains($specification->id)) ? 'selected':'' }}>{!! $specification->description !!}</option>
            @endforeach
        </select>
    </div>
</div>

//edit
<div class="form-group row">
    <label class="col-form-label text-right col-lg-3 col-sm-12">{{__("words.specifications")}}</label>
    <div class="col-lg-4 col-md-9 col-sm-12">
        <select class="form-control selectpicker" id="multiSelect1" multiple="multiple"
                data-live-search="true" name="specifications[]">
            @foreach($all_specifications as $specification)
                <option value="{{$specification->id}}" {{(collect(old('specifications',$specifications))->contains($specification->id)) ? 'selected':'' }}>{!! $specification->description !!}</option>
            @endforeach
        </select>
    </div>
</div>


//store
if ($request->has('specifications')) {
// return 'yes';
$specifications = array_map(function ($value) {
return intval(($value));
}, $request->specifications);
$project->specifications()->attach($specifications);
}

//edit
public function edit(Project $project)
{
$all_specifications = $this->specification->get();
$specifications = $project->specifications->pluck('id');
return view('admin.projects.edit', compact('project', 'specifications', 'all_specifications'));
}



