@include('djoz.layout.menu')

<div class="pb-5" style="margin-top:20em">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 p-5 bg-white rounded shadow-sm mb-5">
    
              <!-- Shopping cart table -->
            <form method="POST" action="{{route('caisse.store')}}" id="payment-form">
                @csrf
                    <div id="card-element">
                      <!-- Elements will create input elements here -->
                    </div>
                  
                    <!-- We'll put the error messages in this element -->
                    <div id="card-errors" role="alert"></div>
                  
                    <button class="btn btn-success mt-4" id="submit">Proceder au payement ({{getPrice(Cart::total())}}) </button>
            </form>
            </div>
         
          </div>
    
</div>
</div>

@include('djoz.layout.script')

<script>
        var stripe = Stripe('pk_test_51Hf39aHaGvKGAPJJmqMCw1BNLtlJWzxbBykGKTeGLE7sEH98lorvU3IyUQLR9y1xn0EayoKbzEnEvaP08QzOYZZ300abBvXYGf');
        var elements = stripe.elements();
        var style = {
        base: {
          color: "#32325d",
          fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
          fontSmoothing: "antialiased",
          fontSize: "16px",
          "::placeholder": {
            color: "#aab7c4"
          }
            },
            invalid: {
            color: "#fa755a",
            iconColor: "#fa755a"
            }
        };
      
        var card = elements.create("card", { style: style });
        card.mount("#card-element");
    
                card.on('chicken', ({error}) => {
            let displayError = document.getElementById('card-errors');
            if (error) {
                displayError.textContent = error.message;
            } else {
                displayError.textContent = '';
            }
            });
    
            var form = document.getElementById('payment-form');
    
            form.addEventListener('submit', function(ev) {
            ev.preventDefault();
            form.disabled=true;
            stripe.confirmCardPayment("{{$clientSecret}}", {
                payment_method: {
                card: card,
                }
            }).then(function(result) {
                if (result.error) {
                    form.disabled=false;
                // Show error to your customer (e.g., insufficient funds)
                console.log(result.error.message);
                } else {
                // The payment has been processed!
                if (result.paymentIntent.status === 'succeeded') {
                    var paymentIntent= result.paymentIntent;
                    var token= document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                  var form = document.getElementById('payment-form');
                  var url = form.action;
                  var redirect = '/merci';

                  fetch(
                      url,{
                          headers:{
                              "Content-type":"application/json",
                              "Accept":"application/json, text-plain, */*",
                              "X-Requested-With":"XMLHttpRequest",
                              "X-CSRF-TOKEN": token
                          },
                          method: 'post',
                          body:JSON.stringify ({
                            paymentIntent: paymentIntent
                          })
                  }).then((data)=> {
                      console.log(data)
                      window.location.href=redirect;
                  }).catch((error)=> {
                      console.log(error)
                  })
                }
                }
            });
            });
    </script>