<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
        <h2>Koobli Page Manager</h2>
        <p class="lead">
            This content managment system has been designed to mimic WordPress!<br />
            <small class="text-muted">To learn more about how WordPress works visit: <a href="https://wordpress.org/support/article/wordpress-editor/" target="blank">https://wordpress.org/support/article/wordpress-editor/</a></small>
        </p>
        @if(isset($_GET['warning']))
          <div class="alert alert-warning">
              <h4>Missing SELECT Support</h4>
              This feature does not currently support SELECT tags - I'm still working out a way to make them work with Bootstrap's native examples.
          </div>
        @endif
        <hr />

        <div class="row">
            <div class="col-sm-8">
              <form action="/pages" method="POST">
                @csrf
                  <h4 class="page-header">Page Attributes</h4>
                      <div class="form-group float-label-control">
                          <label for="">Page title</label>
                          <input type="text" name="title" class="form-control" placeholder="Username">
                      </div>
                      <div class="form-group float-label-control">
                          <label for="">Link (/page/?)</label>
                          <input type="text"  name="slug" class="form-control" placeholder="/terms-and-conditions">
                      </div>
                      <div class="form-group float-label-control">
                          <label for="">Description</label>
                          <textarea class="form-control" name="description" placeholder="Textarea" rows="5"></textarea>
                      </div>


                  <h4 class="page-header">Meta info (Advanced- HTML only)</h4>
                      <div class="form-group float-label-control label-bottom">
                          <label for="">Meta Tags</label>
                          <textarea class="form-control" name="meta" placeholder="Textarea" rows="5"></textarea>
                      </div>


                  <h4 class="page-header">Sections</h4>
                      <div class="form-group float-label-control">
                          <label for="">Number of sections</label>
                          <select class="form-control" name="sections">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                          </select>
                      </div>
                  <input type="submit" class="btn btn-primary" value="Create Page"/>
              </form>

            </div>
            <div class="col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Features
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>Very customizable</li>
                            <li>Works with Bootstrap's native form examples</li>
                            <li>Uses CSS transitions for fallback browser support</li>
                            <li>Placeholder override for labels when fields are empty</li>
                            <li>Included authored jQuery plugin</li>
                            <li>Optional bottom label positioning with the <code>.label-bottom</code> utility</li>
                            <li>Works great with Chrome's AutoComplete</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
