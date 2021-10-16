@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Menu') }}</div>

                <div class="card-body">
             <ul>
                 <a herf="" class="list-group-item list-group-item-action"> View </a>
                 <a herf="" class="list-group-item list-group-item-action"> Create </a>

                </ul>
                </div>
            </div>
        </div>


        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Pizza') }}</div>

                <div class="card-body">
                 <div class="form-group">
                     <label for="name">Pizza Name</label>
                     <input type="text" class="form-control" name="name" placeholder="Pizza Nmae">
                </div>
                </br>
                <div class="form-group">
                     <label for="description">Pizza Description </label>
                     <textarea class="form-control" name="description"></textarea>
                </div>
                </br>
                <div class="form-inline">
                    <label>Pizza price($)</label>
                    <input type="number" class="form-control" placeholder="small pizza price">
                    <input type="number" class="form-control" placeholder="medium pizza price">
                    <input type="number" class="form-control" placeholder="large pizza price">
                </div>
                </br>
              

                <div class="form-group">
                    <label for="description">Category</label>
                    <select class="form-control">
                    <option value="Cheese">Cheese </option>  
                    <option value="Veggie">Veggie</option>     
                    <option value="Pepperoni">Pepperoni </option>     
                    <option value="Meat">Meat</option>     
                    <option value="Margherita">Margherita</option>     
                    <option value="BBQChicken">BBQ Chicken</option>     
                    <option value="Hawaiian">Hawaiian </option>     
                    <option value="Buffalo">Buffalo </option>     
                    <option value="Supreme">Supreme  </option>      
                    </select>
                </div>

                </br>
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" name="image"> 
                </div>

                <div class="form-group text-center"> 
                  <button class="btn btn-primary" type="submit">ADD</button>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
