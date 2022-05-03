@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif

<label for="">Имя</label>
@isset($user -> name)
<input type="text" class="form-control" name="name" placeholder="Имя" value="@if(old('name')){{old('name')}}@else{{$user->name}}@endif" required>
@else
<input type="text" class="form-control" name="name" placeholder="Имя" value="@if(old('name')){{old('name')}}@endif" required>
@endif


<label for="">Email</label>
@isset($user -> email)
<input type="email" class="form-control" name="email" placeholder="Email" value="@if(old('email')){{old('email')}}@else{{$user->email}}@endif" required>
@else
<input type="email" class="form-control" name="email" placeholder="Email" value="@if(old('email')){{old('email')}}@endif" required>
@endif
<label for="">Пароль</label>
<input type="password" class="form-control" name="password">

<label for="">Подтверждение</label>
<input type="password" class="form-control" name="password_confirmation">

<hr />

<button class="btn btn-danger" type="submit"><i class="fas fa-save"></i> Сохранить</button>

<a href="{{ route('admin.user_managment.user.index') }}" class="btn btn-primary"><i class="fa fa-ban" aria-hidden="true"></i> Отменить</a>
<br>
<br>
