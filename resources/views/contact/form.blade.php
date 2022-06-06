       <div class="form-group">
       {!!Form::label('company_name', 'Company_Name');!!}
       {!! Form::text('company_name', $contacts->company_name ?? '',['id'=>'company_name','name'=>'company_name','class'=>'form-control','placeholder'=>'Enter Your Company_Name '] ); !!}
       @error('company_name')
       <div class="alert alert-danger">{{ $message }}</div>
       @enderror

        <div class="form-group">
        {!!Form::label('phone_number', 'Phone_no');!!}
        {!! Form::number('phone_number', $contacts->phone_number ?? '',['id'=>'phone_number','name'=>'phone_number','class'=>'form-control','placeholder'=>'+91123456789'] ); !!}
        @error('phone_number')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>
        <div class="form-group">
        {!! Form::label('email', 'E-Mail Address'); !!}
        {!! Form::email('email', $contacts->email ?? '',['id'=>'email','name'=>'email','class'=>'form-control','placeholder'=>'example@gmail.com'] ); !!}
        @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="form-group">
        {!!Form::label('address', 'Address');!!}
        {!! Form::textarea('address', $contacts->address ?? '', ['class'=>'form-control']); !!}
        @error('address')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="form-group">
        {!!Form::label('description', 'Description');!!}
        {!! Form::textarea('description',$contacts->description ?? '', ['class'=>'form-control']); !!}
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="form-group">
        <label for ="exampleFormControlselect1">Accounts_Id</label>
            @php
             $accounts = DB::table('accounts')->select('name','id')->get();
            @endphp
             <select class="form-control" name="account_id", value="">
                @foreach($accounts as $account)
                <option value= "{{$account->id}}"> {{$account->name}}</option><br/>
                @endforeach
            </select>
            <input type="hidden" name="relationshipmodulename[]" value="Account"/>
            </div>
         </div>


