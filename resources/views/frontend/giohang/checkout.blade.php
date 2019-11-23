@extends('frontend.layout.app')

@section('title')
Checkout
@endsection

@section('style')
@endsection

@section('content')
@include('frontend.includes.menu')

<div class="container">
	<div class="row">
		<div class="col-md-9">
			<p class="mb-4">
				Tổng tiền là: <strong>{{ $amount }}</strong>
			</p>
			<form action="../charge" method="post" id="payment-form">
			@csrf
			  <div class="form-row">
			  	<input type="hidden" name="amount" value="{{ $amount }}">
			    <label for="card-element">
			      Credit or debit card
			    </label>
			    <div id="card-element">
			      <!-- A Stripe Element will be inserted here. -->
			    </div>

			    <!-- Used to display Element errors. -->
			    <div id="card-errors" role="alert"></div>
			  </div>

			  <button class="btn btn-primary">Submit Payment</button>
			  <p id="loading" style="display: none;"> Payment is in process . Please wait....</p>
			</form>
		</div>
	</div>
</div>

@endsection

@section('script')
<script src="https://js.stripe.com/v3/"></script>
<script>
	window.onload = function(){
		var stripe = Stripe('pk_test_eVZJoSvjo2NDUVqkunlzBluN00s57B4RRq');
		
		var elements = stripe.elements();
		// Set up Stripe.js and Elements to use in checkout form
		var style = {
		  base: {
		    // Add your base input styles here. For example:
		    fontSize: '16px',
		    color: "#32325d",
		  }
		};

		// Create an instance of the card Element.
		var card = elements.create('card', {style: style});

		// Add an instance of the card Element into the `card-element` <div>.
		card.mount('#card-element');

		card.addEventListener('change', function(event) {
		  var displayError = document.getElementById('card-errors');
		  if (event.error) {
		    displayError.textContent = event.error.message;
		  } else {
		    displayError.textContent = '';
		  }
		});

		var form = document.getElementById('payment-form');
		form.addEventListener('submit', function(event) {
		  event.preventDefault();

		  stripe.createToken(card).then(function(result) {
		    if (result.error) {
		      // Inform the customer that there was an error.
		      var errorElement = document.getElementById('card-errors');
		      errorElement.textContent = result.error.message;
		    } else {
		      // Send the token to your server.
		      stripeTokenHandler(result.token);
		    }
		  });
		});

		function stripeTokenHandler(token) {
		  // Insert the token ID into the form so it gets submitted to the server
		  var form = document.getElementById('payment-form');
		  var hiddenInput = document.createElement('input');
		  hiddenInput.setAttribute('type', 'hidden');
		  hiddenInput.setAttribute('name', 'stripeToken');
		  hiddenInput.setAttribute('value', token.id);
		  form.appendChild(hiddenInput);
		  document.getElementById('loading')
		  loading.style.display = "block";
		  // Submit the form
		  form.submit();
		}
	}
</script>
@endsection