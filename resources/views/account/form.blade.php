<div class="form-group">
{!!Form::label('name', 'Name');!!}
{!! Form::text('name',$accounts->name ?? '',['id'=>'name','name'=>'name','class'=>'form-control','placeholder'=>'Enter Your Name '] ); !!}
@error('name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div class="form-group">
{!!Form::label('first_name', 'First_Name');!!}
{!! Form::text('first_name',$accounts->first_name ??'',['id'=>'first_name','name'=>'first_name','value' =>'','class'=>'form-control','placeholder'=>'First Name'] ); !!}
@error('first_name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div class="form-group">
{!!Form::label('last_name', 'Last_Name');!!}
{!! Form::text('last_name',$accounts->last_name ??'',['id'=>'last_name','name'=>'last_name','class'=>'form-control','placeholder'=>'Last Name'] ); !!}
@error('last_name')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div class="form-group">
{!!Form::label('dob', 'DOB');!!}
{!! Form::date('dob',$accounts->dob ?? '',['id'=>'dob','name'=>'dob','class'=>'form-control','placeholder'=>' '] ); !!}
@error('dob')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div class="form-group">
{!!Form::label('phone', 'Phone_no');!!}
{!! Form::number('phone',$accounts->phone ?? '',['id'=>'phone','name'=>'phone','class'=>'form-control','placeholder'=>'+91123456789'] ); !!}
@error('phone')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>
<div class="form-group">
{!! Form::label('email', 'E-Mail Address'); !!}
{!! Form::email('email', $accounts->email ?? '',['id'=>'email','name'=>'email','class'=>'form-control','placeholder'=>'example@gmail.com'] ); !!}
@error('email')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>

<div class="form-group">
{!!Form::label('address', 'Address');!!}
{!! Form::textarea('address',$accounts->address ?? '', ['class'=>'form-control']); !!}
@error('address')
<div class="alert alert-danger">{{ $message }}</div>
@enderror
</div>


<div class="form-group">
{!! Form::label('hobby', 'Hobby'); !!}<br/>
</div>

<div class="form-group">
{!! Form::checkbox('hobby[]', 'Cricket','',['class'=>'control-label']); !!}
{!! Form::label('hobby','Cricket'); !!}<br/>

{!! Form::checkbox('hobby[]', 'Badminton','',['class'=>'control-label']); !!}
{!! Form::label('hobby', 'Badminton'); !!}<br/>

{!! Form::checkbox('hobby[]', 'Singing','',['class'=>'control-label']); !!}
{!! Form::label('hobby', 'Singing'); !!}<br/>

{!! Form::checkbox('hobby[]', 'Dancing','',['class'=>'control-label']); !!}
{!! Form::label('hobby', 'Dancing'); !!}<br/>
</div>

<div class="form-group">
{!! Form::label('gender', 'Select Your Gender'); !!}<br/>
</div>
<div class="form-group">
{!! Form::radio('gender', 'Male','',['id'=>'gender','name'=>'gender','class'=>'control-radio'] ); !!}
{!! Form::label('gender', 'Male'); !!}
{!! Form::radio('gender', 'Female','',['id'=>'gender','name'=>'gender','class'=>'control-radio'] ); !!}
{!! Form::label('gender', 'Female'); !!}<br/><br/>
</div>

{{-- <div class="form-group">
{!!Form::label('country', 'Country')!!}
{!! Form::select('country',[
    'india' => 'India',
     'france' => 'France',
     'russia' => 'Russia',
     'nepal' => 'Nepal',
     'bhutan'=>'Bhutan',
     'ukraine'=>'Ukraine'
   ]);
!!}<br/><br/>
</div> --}}

<div class="form-group">
    <label for ="exampleFormControlselect1">Country</label>
    <select class="form-control" name="country">
        <option value="India" selected="selected">India</option>
        <option value="nepal">Nepal</option>
        <option value="pakistan">Pakistan</option>
        <option value="Bhutan">Bhutan</option>
    </select>
    </div>

<div class="form-group">
<label for ="exampleFormControlselect1">State</label>
<select class="form-control" name="state">
    <option value="gujarat"  selected="selected">Gujarat</option>
    <option value="maharastra">Maharastra</option>
    <option value="punjab">Punjab</option>
    <option value="Banglore">Banglore</option>
</select>
</div>



{{-- <div class="form-group">
{!! Form::select('state',[
     'gujarat' => 'Gujarat',
     'maharatsra' => 'Maharastra',
     'punjab' => 'Punjab',
      'bihar' => 'Bihar',
     'uttarpradesh' => 'Uttarpradesh',
     'haryana'=>'Haryana',
     'new delhi'=>'New delhi'
]);  !!}<br/><br/>
</div> --}}

<div class="form-group">
    <label for ="exampleFormControlselect1">contact</label>
        @php
         $contacts = DB::table('contacts')->select('company_name','id')->get();
        @endphp
         <select class="form-control" name="contact_id", value="">
            @foreach($contacts as $contact)
            <option value= "{{$contact->id}}"> {{$contact->company_name}}</option><br/>
            @endforeach
        </select>
        <input type="hidden" name="relationshipmodulename" value="Contact"/>
        </div>
     </div>


     @php
     @endphp

<script type="text/javascript" src="{{ asset('bundle/js/form.js')}}"></script>

