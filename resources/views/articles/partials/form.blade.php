@csrf
<div class="mb-3">
 <label for="image" class="form-label">Thumbnail</label>
 <input type="file" class="form-control" name="image" id="image">
@error ('image')
<small class="text-danger">{{$message}}</small>
@enderror
</div>


<div class="mb-3">
<label for="title" class="form-label">Title</label>

<input type="text" placeholder="" id="title" name="title" class="form-control" value="{{ old('title') ?? $article->title }}">
@error('title')
<small class="text-danger">{{$message}}</small>
@enderror
</div>

<div class="mb-3">
<label for="desription">Description</label>
<textarea name="description" id="description"  rows="10" class="form-control">{{old('article') ?? $article->description}}</textarea>        
@error('title')
<small class="text-danger">{{$message}}</small>
@enderror     
</div>

<button type="submit" class="btn btn-primary">Submit</button>