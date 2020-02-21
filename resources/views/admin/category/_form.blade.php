<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name',isset($category)?$category->name:null) }}" class="form-control" id="name" placeholder="Enter user Name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label for="status">Status</label><br>
    <input type="radio" @if(old('status',isset($category)?$category->status:null) == 'Active') checked @endif name="status" id="active" value="Active">
    <label for="active">Active</label>
    <input type="radio" @if(old('status',isset($category)?$category->status:null) == 'Inactive') checked @endif name="status" id="inactive" value="Inactive">
    <label for="inactive">Inactive</label>
    @error('status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>


