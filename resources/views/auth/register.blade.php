@extends('app')

@section('content')
   <center>
   		<h1> <b> E-Skwela </b></h1> 
   		<hr/>

		<div class="container">
		  <section id="content">
		    <form action="">
		    <h1> Register Form</h1>
		      <div>
		        <input type="text" placeholder="School ID" required="" id="school_id" />
		      </div>
		      <div>
		        <input type="password" placeholder="Password" required="" id="password" />
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