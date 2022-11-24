@extends('form')

@section('contents')
<script
    src="https://www.paypal.com/sdk/js?client-id=Ad1VsNYKCeDSgpTa9hIlYYiafJ8boXUlWGxQMQopETUucLVojHRlcHADBzL_H7tAtBesciJgqFttrBfT&currency=PHP">
</script>
<!-- Set up a container element for the button -->
<div id="paypal-button-container"></div>
<script>

    paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '77.44' // Can also reference a variable or function
                    }
                }]
            });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
            return actions.order.capture().then(function(orderData) {
                // Successful capture! For dev/demo purposes:
                console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                const transaction = orderData.purchase_units[0].payments.captures[0];
                if (transaction.status == "COMPLETED") {
                    alert('transaction complete');
                }
                // alert(Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details);
                // When ready to go live, remove the alert and show a success message within this page. For example:
                // const element = document.getElementById('paypal-button-container');
                // element.innerHTML = '<h3>Thank you for your payment!</h3>';
                // Or go to another URL:  actions.redirect('thank_you.html');
            });
        }
    }).render('#paypal-button-container');
</script>
@endsection