 @extends('layouts.app')
 @section('content')

    <div class="container">
        <form method="POST" action="{{route('admin.posts.store')}}">
            @csrf 




            <div class="mb-3">
                <label for="category_id">Category</label>
                <select  name="category_id" type="text" class="form-control @error('title') is-invalid @enderror" id="category_id" required>
                    <option {{(old('category_id')== "")? 'selected':' '}} value="">No Category </option>
                    @foreach ($categories as $category)
                        <option {{(old('category_id')== $category->id)? 'selected':''}} value="{{$category->id}}">{{$category->name }}</option>
                    @endforeach

                @error('category_id')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="title">Title</label>
                <input  name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" value="{{old('title')}}" required >

                @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="content">Content</label>
                <textarea class="form-control @error('title') is-invalid @enderror" name="content" id="content" required>{{old('content')}}</textarea>
                 
                @error('title')
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
            </div>
            
              <button type="submit" class="btn btn-primary mt-3">Save Post</button>
        </form>
    </div>

 @endsection