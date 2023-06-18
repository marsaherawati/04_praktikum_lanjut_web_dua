@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Daftar Program</h1>
        <div class="row col-md-10">
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('program.show', 1) }}">Program 1</a></h5>
                        <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam porro, et, ex maiores veniam asperiores, alias beatae sed facere itaque deserunt. Ipsa facilis molestias tempora alias velit inventore reprehenderit sapiente!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('program.show', 2) }}">Program 2</a></h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis sequi facere vel error commodi. Provident praesentium dolores, inventore velit magnam quas perferendis qui exercitationem accusamus! Quasi debitis provident iusto atque.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('program.show', 3) }}">Program 3</a></h5>
                        <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas iusto cupiditate laboriosam illo voluptates corporis dolor deleniti veniam facere. Sed dicta atque id omnis praesentium, ipsum vero possimus dolor expedita!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
