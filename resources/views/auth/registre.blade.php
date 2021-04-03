@extends('layout')

@section('content')
<body>
<div class="container">
    <div class="row">
		<div class="col-md-5 mx-auto">
			<div class="myform form ">
				<div class="logo mb-3">
					<div class="col-md-12 text-center">
							<h1>Resgistro</h1>
					</div>
			    </div>
                <form action="#" method="post">
                @csrf 
                    <div class="form-group">
                        <label for="name" >Nombre</label>
                        <input type="text" name="name"  class="form-control" id="name" aria-describedby="nameHelp" placeholder="Enter name">
                    </div>  
                    <div class="form-group">
                        <label for="email" >Email</label>
                        <input type="email" name="name"  class="form-control" id="email" aria-describedby="nameHelp" placeholder="Enter name">
                    </div> 
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" name="password" id="password"  class="form-control" aria-describedby="emailHelp" placeholder="Enter Password">
                    </div>
                    </br>
                    <div class="col-md-12 text-center ">
                        <button type="submit" class=" btn btn-block mybtn btn-primary tx-tfm">Login</button></a>
                    </div>
                </form>
			</div>
		</div>
	</div>
</div>    
</body>
@endsection

