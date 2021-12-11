<form class="col-sm-12">
    <div class="col-sm-6 form-group">
        <label>First Name</label>
        <input type="text" class="form-control" placeholder="Enter firstname" required>
    </div>
    <div class="col-sm-6 form-group">
        <label>Last Name</label>
        <input type="text" class="form-control" placeholder="Enter Lastname" required>
    </div>
    <div class="col-sm-6 form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter Email" required>
    </div>
    <div class="col-sm-6 form-group">
        <label>Temp Password</label>
        <input type="password" class="form-control" placeholder="Enter password" required>
    </div>
    <div class="col-sm-12 form-group">
        <label>Primary location</label>
        <textarea id="some-textarea" class="form-control" rows="5" placeholder="Enter text ..."></textarea>
    </div>
    <div class="col-sm-6 form-group">
        <label>Care Giver</label>
        <select class="form-control" id="exampleSelect">
            <option value="0">Please Select</option>
            <?php $caregivers = \App\Caregiver::all();?>
            @foreach($caregivers as $caregiver)
              <option value="{{$caregiver->id}}">{{$caregiver->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-6 form-group">
        <label>Mobile</label>
        <input type="number" class="form-control" placeholder="Enter Mobile" required>
    </div>

    <div class="col-sm-12 form-group">
        <label >Picture upload</label>
        <input type="text" class="form-control" placeholder="Enter link to image" required>
    </div>
    <div class="col-sm-12 form-group">
        <label>Short Biography</label>
        <textarea id="some-textarea" class="form-control" rows="3" placeholder="Enter text ..."></textarea>
    </div>
    <div class="col-sm-12 form-group">
        <label>Conditions</label>
        <select class="form-control" id="exampleSelect" multiple>
            <option value="0">Arthritis</option>
            <option value="1">Diabetes</option>
            <option value="2">Artificial knee</option>
            <option value="3">Artificial Hip</option>
            <option value="4">Hypertension</option>
            <option value="5">Blindness</option>
            <option value="6">Cancer</option>
            <option value="7">Dementia</option>
        </select>
    </div>
    <div class="col-sm-6 form-group">
        <label>Date of Birth</label>
        <input name="date_of_birth" class="datepicker form-control hasDatepicker" type="text" placeholder="Date of Birth" id="date_of_birth">
    </div>
    <div class="col-sm-6 form-group">
        <label>Blood group</label>
        <select class="form-control" id="exampleSelect">
            <option>A+</option>
            <option>AB+</option>
            <option>O+</option>
            <option>AB-</option>
            <option>B+</option>
            <option>A-</option>
            <option>B-</option>
            <option>O-</option>
        </select>
    </div>

    <div class="col-sm-6 form-group">
     <label>Sex</label><br>
     <label class="radio-inline">
         <input type="radio" name="sex" value="1" checked="checked">Male</label>
         <label class="radio-inline"><input type="radio" name="sex" value="0" >Female</label>
     </div>
     <div class="col-sm-6 form-check">
      <label>Status</label><br>
      <label class="radio-inline"><input type="radio" name="status" value="1" checked="checked">Active</label>
      <label class="radio-inline">
          <input type="radio" name="status" value="0" >Inctive</label>
      </div>

      <div class="col-sm-12 reset-button">
         <a href="/caregivers" class="btn btn-warning">Reset</a>
         @if($type == "create")
            <a href="/caregivers/added" class="btn btn-success">Save</a>
         @else
            <a href="/caregivers/edited" class="btn btn-success">Edit</a>
         @endif
     </div>
 </form>
