@extends('app')

@section('content')
   <center>
   		<h1> <b> E-Skwela </b></h1> 
   		<hr/>

		<div class="container">
		  <section id="content">
		    <form action="{{url('users')}}" method="POST">
		    <h1> Register Form</h1>
		      <div>
		        <input type="text" placeholder="School ID" required="" id="school_id" name="school_id" />
		      </div>
		      <div>
		      	 <input type="text" placeholder="Lastname" required="" id="lastname" name="lastname" />
		      </div>
		      <div>
		      	 <input type="text" placeholder="Firstname" required="" id="firstname" name="firstname" />
		      </div>
		      <div>
		      	 <input type="text" placeholder="Middlename" required="" id="middlename" name="middlename" />
		      </div>
		      <div>
		        <input type="password" placeholder="Password" required="" id="password" name="password" />
		      </div>
		      <div>
		      	 <input type="password" placeholder="Confirm Password" required="" id="password" name="password_confirmation" />
		      </div>
		      <div>
		         <input type="submit" value="Sign Up" />
		      	 <input type="submit" value="Cancel" />
		      </div>
		    </form><!-- form -->
		  </section><!-- content -->
		</div><!-- container -->

	</center>

@stop