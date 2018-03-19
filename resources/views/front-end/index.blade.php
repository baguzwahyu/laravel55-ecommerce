@extends('front-end.master.master')

@section('content')
        <!-- Page Content -->
    <div class="container">

      <div class="col-auto">
        <div class="input-group mb-2">
          <div class="input-group-prepend col-sm-12">
            <div class="input-group-text">HOT</div>
            <marquee class=" bg-light">Diskon besar besara buruan beli !!!</marquee>
          </div>
        </div>
    </div>

      <div class="row">
        @include('front-end.master.category')

        <div class="col-lg-9">

        @include('front-end.master.slider')

          <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="{{ asset("images/products/$product->Picture") }}" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">{{ $product->ProductName }}</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">{{ $product->ProductDescription }}</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
            @endforeach
            
            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card h-100">
                <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
                <div class="card-body">
                  <h4 class="card-title">
                    <a href="#">Item Five</a>
                  </h4>
                  <h5>$24.99</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="card-footer">
                  <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                </div>
              </div>
            </div>
            
          </div>
          {{ $products->links("pagination::bootstrap-4") }}

          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection