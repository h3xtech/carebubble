<form class="col-sm-12" action="/caregivers/store" method="post">
  @csrf
    <div class="col-sm-6 form-group">
        <label>First Name</label>
        <input name="firstname" type="text" class="form-control" placeholder="Enter firstname" required>
    </div>
    <div class="col-sm-6 form-group">
        <label>Last Name</label>
        <input name="lastname" type="text" class="form-control" placeholder="Enter Lastname" required>
    </div>
    <div class="col-sm-6 form-group">
        <label>Email</label>
        <input name="email" type="email" class="form-control" placeholder="Enter Email" required>
    </div>
    <div class="col-sm-6 form-group">
        <label>Password</label>
        <input name="password" type="password" class="form-control" placeholder="Enter password" required>
    </div>
    <!--
    <div class="col-sm-12 form-group">
        <label>Primary location</label>
        <textarea id="some-textarea" class="form-control" rows="5" placeholder="Enter text ..."></textarea>
    </div>
  -->
    <div class="col-sm-6 form-group">
        <label>Cares for</label>
        <select  name="patient_id" class="form-control" id="exampleSelect">
            <option value="0">Please Select</option>
            <?php $patients = \App\Patient::all();?>
            @foreach($patients as $patient)
              <option value="{{$patient->id}}">{{$patient->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="col-sm-6 form-group">
        <label>Mobile</label>
        <input name="telephone" type="number" class="form-control" placeholder="Enter Mobile" required>
    </div>

    <div class="col-sm-12 form-group">
        <label >Picture (url)</label>
        <input name="avatar" type="text" class="form-control" placeholder="Enter link to image" required>
    </div>
    <div class="col-sm-12 form-group">
        <label>Short Biography</label>
        <textarea name="description" id="some-textarea" class="form-control" rows="3" placeholder="Enter text ..."></textarea>
    </div>
    <div class="col-sm-6 form-group">
        <label>Date of Birth</label>
        <input name="date_of_birth" class="datepicker form-control hasDatepicker" type="date" placeholder="Date of Birth DD/MM/YYYY" id="date_of_birth">
    </div>
    <div class="col-sm-6 form-group">
        <label>Blood group</label>
        <select name="blood" class="form-control" id="exampleSelect">
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
         <input type="radio" name="gender" value="1" checked="checked">Male</label>
         <label class="radio-inline"><input type="radio" name="gender" value="0" >Female</label>
     </div>
     <div class="col-sm-6 form-check">
      <label>Status</label><br>
      <label class="radio-inline"><input type="radio" name="status" value="1" checked="checked">Active</label>
      <label class="radio-inline">
          <input type="radio" name="status" value="0" >Inctive</label>
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
