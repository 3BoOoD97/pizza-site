@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-3">
        <div class="card">
            <div class="card-header">Menu</div>
            <div class="card-body">
         <ul class="list-group">
             <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action"> View </a>
             <a href="{{route('pizza.create')}}" class="list-group-item list-group-item-action"> Create </a>
             <a href="{{route('user.order')}}" class="list-group-item list-group-item-action"> User Osrder </a>

            </ul>
            </div>
        </div>

    </div>


        <div class="col-md-9">
            <div class="card">
                <div class="card-header">All Pizza
                <a href="{{route('pizza.create')}}">
                <button class="btn btn-success" style="float: right">Add Pizza</button>
                </a>
              </div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Image</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Category</th>
                            <th scope="col">S.Price</th>
                            <th scope="col">M.Price</th>
                            <th scope="col">L.Price</th>
                            <th scope="col"></th>
                            <th scope="col"></th>


                          </tr>
                        </thead>
                        <tbody>
                            @if(count($pizzas)>0)
                            @foreach ($pizzas as $key=>$pizza)
                                
                          <tr>
                            <th scope="row">{{$key+1}}</th>
                            <td><img src="{{Storage::url($pizza->image)}}" width="80"></td>
                            <td>{{$pizza->name}}</td>
                            <td>{{$pizza->description}}</td>
                            <td>{{$pizza->category}}</td>
                            <td>{{$pizza->small_pizza_price}}</td>
                            <td>{{$pizza->medium_pizza_price}}</td>
                            <td>{{$pizza->large_pizza_price}}</td>
                            <td><a href="{{route('pizza.edit', $pizza->id)}}"><button class="btn btn-primary">Edit</button></a></td>
                            <td><button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$pizza->id}}">Delete</button></td>






                            <figure class="pizza">
                              <div class="pizza__hero">
                                <img src="{{Storage::url($pizza->image)}}" alt="Pizza" class="pizza__img">
                              </div>
                              <div class="pizza__content">
                                <div class="pizza__title">
                                  <h1 class="pizza__heading">{{$pizza->name}} 👌</h1>
                                  <div class="pizza__tag pizza__tag--1">#{{$pizza->category}}</div>
                                  <div class="pizza__tag pizza__tag--2">#italian</div>
                                </div>
                                <p class="pizza__description">{{$pizza->description}}</p>
                                <div class="pizza__details">
                                  <p class="pizza__detail"><span class="emoji">🍕</span>850 kcal</p>
                                  <p class="pizza__detail"><span class="emoji">⏱</span>30 min</p>
                                  <p class="pizza__detail"><span class="emoji">⭐️</span>4.7 / 5</p>
                                </div>
                              </div>
                              <div class="pizza__price">$11.99</div>
                            </figure>





































                            <!-- Modal -->
<div class="modal fade" id="exampleModal{{$pizza->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form action="{{route('pizza.destroy',$pizza->id)}}" method="POST">@csrf
    @method('DELETE')
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       ARE YOU SURE?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger">Delete</button>
      </div>
    </div>
  </div>
</form>
</div>

                          </tr>
                        
                          @endforeach
                          @else
                          <p>No Pizza To Show</p>
                          @endif

                        </tbody>
                      </table>
                    {{$pizzas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
