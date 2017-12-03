<body>

  <div class="shop_top">
  <div class="container">
    @forelse($products as $shirt)





            <div class="col-md-2 column productbox">
                <img src="{{url('images',$shirt->image)}}" class="img-responsive">
                <div class="producttitle">{{$shirt->name}}</div>
                <div class="productprice"><div class="pull-right"><a href="#" class="btn btn-danger btn-sm" role="button">COMPRA</a></div><div class="pricetext">£8.95</div></div>
            </div>


          @empty
          <h3>No shirts</h3>
         @endforelse
      </div>
    </div>
</body>
