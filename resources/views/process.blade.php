@if(Session::has('data'))

<div class="container tex-center mx-auto">
    <form action="/pay" method="post" class="text-center mx-auto mt-5">
        <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_amX6L7ZY8KQNR7"
            data-amount="{{Session::get('data.amount')}}" data-currency="INR"
            data-order_id="{{Session::get('data.order_id')}}" data-buttontext="Pay with Razorpay"
            data-name="Coffee" data-description="Test transaction" data-theme.color="#F37254"></script>
        <input type="hidden" custom="Hidden Element" name="hidden">
    </form>

</div>

@endif
