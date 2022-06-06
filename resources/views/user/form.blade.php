    <div class="form-group">
    {!!Form::label('name', 'Name');!!}
    {!! Form::text('name', $users->name ?? '',['id'=>'name','name'=>'name','class'=>'form-control','placeholder'=>'Enter Your Name '] ); !!}
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
    {!! Form::label('email', 'E-Mail Address'); !!}
    {!! Form::email('email',$users->email ??  '',['id'=>'email','name'=>'email','class'=>'form-control','placeholder'=>'example@gmail.com'] ); !!}
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


    <div class="form-group">
    {!! Form::label('password', 'Password'); !!}
    {!! Form::password('password',['class'=>''] ); !!}
    </div>

    <div class="form-group">
        <label for ="exampleFormControlselect1">Project_Id</label>
            @php
             $projects = DB::table('projects')->select('project_name','id')->get();
            @endphp
             <select class="form-control" name="project_id">
                @foreach($projects as $project)
                <option value= "{{$project->id}}"> {{$project->project_name}}</option><br/>
                @endforeach
            </select>
            <input type="hidden" name="relationshipmodulename" value="Project"/>
            </div>
         </div>



