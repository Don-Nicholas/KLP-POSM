@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0">
                    <h2>Products &nbsp;
                        <a href="#myModal" role="button" class="btn btn-md btn-primary" data-bs-toggle="modal"><i
                                class="fas fa-fw fa-plus"></i>Add</a>
                    </h2>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        {!! Form::open(['action' => 'SuppliersController@store', 'method' => 'POST']) !!}
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Product
                                        Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> Category
                                        Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        New Quantity</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Total quantity</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Price per Case </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Price per Solo </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Date Expiry </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Bad Order </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Created At</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Updated At</th>
                                    <th class="text-secondary opacity-7" colspan="2">
                                        Actions
                                    </th>

                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (count($products) > 0)
                                    @foreach ($products as $product)
                                    @endforeach
                                @else
                                    <h1>No products information.</h1>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Button HTML (to Trigger Modal) -->

    <!-- Modal HTML -->
    <div id="myModal" class="modal fade" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Products Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['action' => 'ProductController@store', 'method' => 'POST']) !!}
                    {{-- <div class="form-group">
                        <input class="form-control" placeholder="Product's Name" name="beverage_name" required>
                    </div> --}}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Product's Name</label>
                        </div>
                        <select name="product_id" class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            @foreach ($beverages as $beverage)
                                <option value="{{ $beverage->id }}">{{ $beverage->beverage_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Category Name</label>
                        </div>
                        <select name="product_id" class="custom-select" id="inputGroupSelect01">
                            <option selected>Choose...</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->cat_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="New Quantity" name="new_quantity" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Total Quantity" name="total_quantity" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="New Quantity" name="new_quantity" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Total Quantity" name="total_quantity" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Price per Case" name="price_case" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Price per Solo" name="price_solo" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Date Expiry" name="date_expire" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="Bad Order " name="badorder" required>
                    </div>
   

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="save">Add</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection
