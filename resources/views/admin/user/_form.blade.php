<div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ old('name',isset($user)?$user->name:null) }}" class="form-control" id="name" placeholder="Enter user Name">
                    @error('name')
    					<div class="alert alert-danger">{{ $message }}</div>
					@enderror
                 </div>

                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" value="{{ old('email',isset($user)?$user->email:null) }}" class="form-control" id="email" placeholder="Enter email">
                    @error('email')
    					<div class="alert alert-danger">{{ $message }}</div>
					@enderror

                  </div>

                  <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" name="phone" value="{{ old('phone',isset($user)?$user->phone:null) }}" class="form-control" id="phone" placeholder="Enter phone number">
                    @error('phone')
    					<div class="alert alert-danger">{{ $message }}</div>
					@enderror

                  </div>
