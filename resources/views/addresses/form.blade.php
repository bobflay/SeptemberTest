    <div class="box-body">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" value="{{isset($address)?$address->name:old('name')}}" name="name" class="form-control" id="name" placeholder="Name">
        </div> 

        <div class="form-group">
          <label for="name">Floor</label>
          <input type="text" value="{{isset($address)?$address->floor:old('floor')}}" name="floor" class="form-control" id="floor" placeholder="Floor">
        </div>

        <div class="form-group">
          <label for="name">building</label>
          <input type="text" value="{{isset($address)?$address->building:old('building')}}" name="building" class="form-control" id="building" placeholder="building">
        </div> 

        <div class="form-group">
          <label for="name">street</label>
          <input type="text" value="{{isset($address)?$address->street:old('street')}}" name="street" class="form-control" id="street" placeholder="street">
        </div>

        <div class="form-group">
          <label for="name">city</label>
          <input type="text" value="{{isset($address)?$address->city:old('city')}}" name="city" class="form-control" id="city" placeholder="city">
        </div> 

        <div class="form-group">
          <label for="name">region</label>
          <input type="text" value="{{isset($address)?$address->region:old('region')}}" name="region" class="form-control" id="region" placeholder="region">
        </div>

        <div class="form-group">
          <label for="name">country</label>
          <input type="text" value="{{isset($address)?$address->country:old('country')}}" name="country" class="form-control" id="country" placeholder="country">
        </div>

        <div class="form-group">
          <label for="name">User</label>
          @if(isset($user))
            <input type="text" value="{{$user->id}}" name="user_id" class="form-control" id="region" disabled>
            <input type="hidden" value="{{$user->id}}" name="user_id" class="form-control" id="region" >
          @else
            <select name="user_id" value="{{isset($address)?$address->user_id:old('user_id')}}" class="form-control">
              @foreach($users as $user)
                <option {{isset($address)?($address->user->id == $user->id)?'selected':'':''}} value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
              @endforeach
          </select>
          @endif
        </div>

        
    </div>