    @extends('layouts.master')

    @section('title')
        Laravel Shoping Cart
    @endsection

    @section('content')
        @foreach($products->chunk(3) as $productChunk)
            <div class="row">
                @foreach($productChunk as $product)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{ $product->imagePath }}" alt="..." class="img-responsive">
                            <div class="caption">
                                <h3>{{ $product->title }}</h3>
                                <p>
                                    {{ $product->description }}
                                </p>

                                <div class="clearfix">

                                    <div class="pull-left">
                                        <a href="#" class="btn btn-primary" role="button">View Product</a>
                                        <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-default" role="button">Add to Cart</a>
                                    </div>
                                    <div class="pull-right price"> {{ $product->price }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endforeach
    @endsection