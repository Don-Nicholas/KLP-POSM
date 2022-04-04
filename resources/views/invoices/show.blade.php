@extends('layouts.app')
@section('content')
    <div class="container">
        <h3>Cash Payment Method</h3>

        <div class="row mt-5">
            <div class="col-sm-6">
                {!! Form::open(['action' => 'PurchasedController@store', 'method' => 'POST']) !!}
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Total Quantity</span>
                    <input type="text" class="form-control ps-3"  name="total_quantity" value="{{$total_quantity}}" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Customer Name</span>
                    <input type="text" class="form-control ps-3" value="{{$customerName}}" readonly name="customer_name" placeholder="Customer Name" aria-label="CustomerName" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Amount Due</span>
                    <input type="text" class="form-control ps-3" id="amountDue" value="{{$grandTotal}}" name="amount_due" placeholder="Username" readonly aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1" >Discount %</span>
                    <input type="text" class="form-control ps-3" id="discount" name="discount" oninput="calcDiscountedAmount()" placeholder="Discount" aria-label="discount" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Discounted Amount</span>
                    <input type="text" class="form-control ps-3" id="discountedAmount"  placeholder="Discounted Amount" readonly aria-label="discounted amout" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Cash</span>
                    <input type="text" class="form-control ps-3" oninput="calcChange()" id="cash" name="cash" placeholder="Cash" aria-label="Cash" aria-describedby="basic-addon1">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Change</span>
                    <input type="text" name="change" id="change" class="form-control ps-3"  placeholder="Change" readonly aria-label="Username"  aria-describedby="basic-addon1">
                </div>

                <button class="btn btn-primary" type="submit">Submit</button>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

    <script>
        function calcDiscountedAmount() {
            var discount = document.getElementById("discount").value;
            var amount_due = document.getElementById("amountDue").value;
            var discountedAmount = parseInt(amount_due ) * parseInt(discount) / 100;
            document.getElementById("discountedAmount").value = discountedAmount;
        }

        function calcChange() {
            var cash = document.getElementById("cash").value;
            var amount = document.getElementById("discountedAmount").value;
            document.getElementById("change").value = parseInt(cash) - amount;
        }
    </script>
@endsection
