<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{ old('name',isset($author)?$author->name:null) }}" class="form-control" id="name" placeholder="Enter user Name">
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="email">Email address</label>
    <input type="email" name="email" value="{{ old('email',isset($author)?$author->email:null) }}" class="form-control" id="email" placeholder="Enter email">
    @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>

<div class="form-group">
    <label for="phone">Phone Number</label>
    <input type="text" name="phone" value="{{ old('phone',isset($author)?$author->phone:null) }}" class="form-control" id="phone" placeholder="Enter phone number">
    @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>

<div class="form-group">
    <label for="address">Address</label>
    <textarea  name="address"  class="form-control" id="address" row="10" placeholder="Enter your address">{{ old('address',isset($author)?$author->address:null) }}</textarea>
    @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>

<div class="form-group">
    <label for="photo">Photo</label>
    <input type="file" name="photo" value="{{ old('photo',isset($author)?$author->photo:null) }}"  id="photo">
    @error('photo')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>

<div class="form-group">
    <label for="total_post">Total Post</label>
    <input type="text" name="total_post" value="{{ old('total_post',isset($author)?$author->total_post:null) }}" class="form-control" id="total_post" placeholder="Total Post">
    @error('total_post')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>





