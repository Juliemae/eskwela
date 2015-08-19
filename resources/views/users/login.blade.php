@extends('app')

@section('content')
   <center>
   		<h1> <b> E-Skwela </b></h1> 
   		<hr/>

		<div class="container">
		  <section id="content">
		    <form action="{{url('users/')}}" method="POST">
		      <h1>Login Form</h1>
		      <div>
		        <input type="text" placeholder="School ID" required="" id="school_id" />
		      </div>
		      <div>
		        <input type="password" placeholder="Password" required="" id="password" />
		      </div>
		      <div>
		        <input type="submit" value="Log in" />
		        <a href="#">Lost your pas	 sword?</a>
		        <a href="/users/create">Register</a>
		      </div>
		    </form><!-- form -->
		    <div class="button">
		      <a href="#">have a nice day :) !!! </a>
		    </div><!-- button -->
		  </section><!-- content -->
		</div><!-- container -->

	</center>

@stop