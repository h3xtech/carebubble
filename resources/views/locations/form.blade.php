<form class="col-sm-12" action="/web/locations/store" method="post">
  @csrf
    <div class="col-sm-6 form-group">
        <label>Name</label>
        <input name="title" type="text" class="form-control" placeholder="Name of the location" required>
    </div>
    <div class="col-sm-6 form-group">
        <label>Post Code</label>
        <input name="postcode" type="text" class="form-control" placeholder="Enter Postcode * UK Only" required>
    </div>
    <div class="col-sm-6 form-group">
        <label>How often can they go there</label>
        <select  name="limitations" class="form-control" id="exampleSelect">
            <option value="0">Please Select</option>
            <option>Unrestricted</option>
            <option>Once a week</option>
            <option>Twice a week</option>
            <option>Three times a week</option>
            <option>4 times a week</option>
            <option>5 times a week</option>
            <option>Once a day</option>
        </select>
    </div>
    <div class="col-sm-6 form-group">
        <label>Who's location is it?</label>
        <select  name="user_id" class="form-control" id="exampleSelect">
            <option value="0">Please Select</option>
            <?php $patients = \App\Patient::all();?>
            @foreach($patients as $patient)
              <option value="{{$patient->id}}">{{$patient->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-12 form-group">
        <label >Picture (url)</label>
        <input name="image" type="text" class="form-control" placeholder="Enter link to image" required>
    </div>

      <div class="col-sm-12 reset-button">
         <button type="reset" class="btn btn-warning">Reset</button>
         @if($type == "create")
            <button type="submit" class="btn btn-success">Save</button>
         @else
            <button type="submite" class="btn btn-success">Edit</button>
         @endif
     </div>
 </form>
