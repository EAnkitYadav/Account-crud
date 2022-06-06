    <div class="form-group">
    {!!Form::label('project_title', 'Project_Title');!!}
    {!! Form::text('project_title', $projects->project_title ??  '',['id'=>'project_title','name'=>'project_title','class'=>'form-control','placeholder'=>''] ); !!}
    @error('project_title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror


       <div class="form-group">
        {!!Form::label('project_name', 'Project_Name');!!}
        {!! Form::text('project_name', $projects->project_name ??  '',['id'=>'project_name','name'=>'project_name','class'=>'form-control','placeholder'=>''] ); !!}
        @error('project_name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <div class="form-group">
            {!!Form::label('phone', 'Phone_no');!!}
            {!! Form::number('phone',$projects->phone ?? '',['id'=>'phone','name'=>'phone','class'=>'form-control','placeholder'=>'+91123456789'] ); !!}
            @error('phone')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                {!! Form::label('email', 'E-Mail Address'); !!}
                {!! Form::email('email', $projects->email ??  '',['id'=>'email','name'=>'email','class'=>'form-control','placeholder'=>'example@gmail.com'] ); !!}
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    {!!Form::label('description', 'Description');!!}
                    {!! Form::textarea('description', $projects->description ?? '', ['class'=>'form-control']); !!}
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>

                    <div class="form-group">
                        <label for ="exampleFormControlselect1">Account</label>
                            @php
                             $accounts = DB::table('accounts')->select('name','id')->get();
                            @endphp
                             <select class="form-control" name="account_id",value="">
                                @foreach($accounts as $account)
                                <option value= "{{$account->id}}"> {{$account->name}}</option><br/>
                                @endforeach
                            </select>
                            <input type="hidden" name="relationshipmodulename" value="Account"/>
                            </div>
                         </div>
