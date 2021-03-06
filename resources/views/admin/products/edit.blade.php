@extends('layouts.admin')
@section('content')

<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">
    <div class="container-fluid">
         @include('template.lang') 
        <div class="row">
            <div class="col-lg-12">
                <form action="{{URL::asset(LaravelLocalization::setLocale().DIRECTORY_SEPARATOR.'admin-product-edit/'.$product->id)}} " method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <label for="usr">Заглавие: </label>                 
                        <input name="title" value="{{$product->title}}" type="text" class="form-control" id="usr">
                    </div>
                    
                     <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                    <div class="form-group">
                        <label for="usr">Кратко описание: </label>
                        <textarea name='summary'  class="form-control" rows="3" id="comment">{{$product->summary}}</textarea>
                    </div>
                    
                     <div class="form-group">
                        <label for="usr">Oписание: </label>
                        <textarea name='description'  class="form-control" rows="3" id="comment">{{$product->description}}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="usr">Цена: </label>
                        <input name="price" value="{{$product->price}}" type="text" class="form-control" id="usr">
                    </div>
                    
                      <div class="form-group">
                        <label for="usr">Код на продукта: </label>
                        <input name="code" type="text" value="{{$product->code}}" class="form-control" id="usr">
                    </div>

                   <div class="form-group">
                        <label for="sel1">Категория на продукта:</label>
                        <select class="form-control" id="sel1" name="category">
                           @foreach ($category as $cat )
                            <option value="{{$cat->id}}" @if($cat->id ==$product->categories_id)  selected  @endif>{{$cat->title}}</option>
                           @endforeach
                        </select>
                    </div>
                    
                    
                    @if (isset($product->image_url))
                    <div class="form-group">
                        <label for="comment"><img src="{{URL::asset('admin/product/'.$product->image_url)}}" width="50px" height="50px"/> Картинка:</label>
                        <input type="file" class="form-control" name="image_url" id="fileToUpload">
                    </div>
                    @endif
                    <button type="submit" class="btn btn-default">Редактиране</button>
                </form>

            </div> 
        </div>

    </div>
</div>

@endsection