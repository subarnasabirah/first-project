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
    <textarea  name="address"  class="form-control" id="address" cols="30" rows="3" placeholder="Enter your address">{{ old('address',isset($author)?$author->address:null) }}</textarea>
    @error('address')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

</div>




<div class="form-group">
    <label for="status">Status</label><br>
    <input type="radio" @if(old('status',isset($author)?$author->status:null) == 'Active') checked @endif name="status" id="active" value="Active">
    <label for="active">Active</label>
    <input type="radio" @if(old('status',isset($author)?$author->status:null) == 'Inactive') checked @endif name="status" id="inactive" value="Inactive">
    <label for="inactive">Inactive</label>
    @error('status')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>




