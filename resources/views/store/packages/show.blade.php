
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Checkout example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="bg-light">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://carebubble.co/assets/img/logo.png" alt="" width="72" height="72">
        <h2>Checkout form</h2>
        <p class="lead">This is a monthly package. Signing up for this package will charge your account 19.99 per month. You can cancel at any time and return to the free package.</p>
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Your cart</span>
            <span class="badge badge-secondary badge-pill">1</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Full Support</h6>
                <small class="text-muted">
                  Up to 5 Caregivers<br>
                  Emergency notifications and warnings<br>
                  Full metrics<br>
                  Email Support<br>
                </small>
              </div>
              <span class="text-muted">£15</span>
            </li>
            <!--
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Promo code</h6>
                <small>EXAMPLECODE</small>
              </div>
              <span class="text-success">-£5</span>
            </li>
          -->
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (GBP)</span>
              <strong>£15</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Promo code">
              <div class="input-group-append">
                <button type="submit" class="btn btn-secondary">Redeem</button>
              </div>
            </div>
          </form>
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Billing address</h4>
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">First name</label>
                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Address</label>
              <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="country">Country</label>
                <select class="custom-select d-block w-100" id="country" required>
                  <option value="">Choose...</option>
                  <option>United Kingdom</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid country.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="state">County</label>
                <select class="custom-select d-block w-100" id="state" required>
                  <option value="">Choose...</option>
                  <optgroup label="England">
                    <option value="bath-and-north-east-somerset">Bath and North East Somerset</option>
                    <option value="bedford">Bedford</option>
                    <option value="berkshire">Berkshire</option>
                    <option value="blackburn-with-darwen">Blackburn with Darwen</option>
                    <option value="blackpool">Blackpool</option>
                    <option value="bournemouth">Bournemouth</option>
                    <option value="brighton-&amp;-hove">Brighton &amp; Hove</option>
                    <option value="bristol">Bristol</option>
                    <option value="buckinghamshire">Buckinghamshire</option>
                    <option value="cambridgeshire">Cambridgeshire</option>
                    <option value="central-bedfordshire">Central Bedfordshire</option>
                    <option value="cheshire-east">Cheshire East</option>
                    <option value="cheshire-west-and-chester">Cheshire West and Chester</option>
                    <option value="cornwall">Cornwall</option>
                    <option value="cumbria">Cumbria</option>
                    <option value="darlington">Darlington</option>
                    <option value="derby">Derby</option>
                    <option value="derbyshire">Derbyshire</option>
                    <option value="devon">Devon</option>
                    <option value="dorset">Dorset</option>
                    <option value="durham">Durham</option>
                    <option value="east-riding-of-yorkshire">East Riding of Yorkshire</option>
                    <option value="east-sussex">East Sussex</option>
                    <option value="essex">Essex</option>
                    <option value="gloucestershire">Gloucestershire</option>
                    <option value="greater-london">Greater London</option>
                    <option value="greater-manchester">Greater Manchester</option>
                    <option value="halton">Halton</option>
                    <option value="hampshire">Hampshire</option>
                    <option value="hartlepool">Hartlepool</option>
                    <option value="herefordshire">Herefordshire</option>
                    <option value="hertfordshire">Hertfordshire</option>
                    <option value="isle-of-wight">Isle of Wight</option>
                    <option value="kent">Kent</option>
                    <option value="kingston-upon-hull">Kingston upon Hull</option>
                    <option value="lancashire">Lancashire</option>
                    <option value="leicester">Leicester</option>
                    <option value="leicestershire">Leicestershire</option>
                    <option value="lincolnshire">Lincolnshire</option>
                    <option value="luton">Luton</option>
                    <option value="medway">Medway</option>
                    <option value="merseyside">Merseyside</option>
                    <option value="middlesbrough">Middlesbrough</option>
                    <option value="milton-keynes">Milton Keynes</option>
                    <option value="norfolk">Norfolk</option>
                    <option value="north-east-lincolnshire">North East Lincolnshire</option>
                    <option value="north-lincolnshire">North Lincolnshire</option>
                    <option value="north-somerset">North Somerset</option>
                    <option value="north-yorkshire">North Yorkshire</option>
                    <option value="northamptonshire">Northamptonshire</option>
                    <option value="northumberland">Northumberland</option>
                    <option value="nottingham">Nottingham</option>
                    <option value="nottinghamshire">Nottinghamshire</option>
                    <option value="oxfordshire">Oxfordshire</option>
                    <option value="peterborough">Peterborough</option>
                    <option value="plymouth">Plymouth</option>
                    <option value="poole">Poole</option>
                    <option value="portsmouth">Portsmouth</option>
                    <option value="redcar-and-cleveland">Redcar and Cleveland</option>
                    <option value="rutland">Rutland</option>
                    <option value="shropshire">Shropshire</option>
                    <option value="somerset">Somerset</option>
                    <option value="south-gloucestershire">South Gloucestershire</option>
                    <option value="south-yorkshire">South Yorkshire</option>
                    <option value="southampton">Southampton</option>
                    <option value="southend-on-sea">Southend-on-Sea</option>
                    <option value="staffordshire">Staffordshire</option>
                    <option value="stockton-on-tees">Stockton-on-Tees</option>
                    <option value="stoke-on-trent">Stoke-on-Trent</option>
                    <option value="suffolk">Suffolk</option>
                    <option value="surrey">Surrey</option>
                    <option value="swindon">Swindon</option>
                    <option value="telford-and-wrekin">Telford and Wrekin</option>
                    <option value="thurrock">Thurrock</option>
                    <option value="torbay">Torbay</option>
                    <option value="tyne-and-wear">Tyne and Wear</option>
                    <option value="warrington">Warrington</option>
                    <option value="warwickshire">Warwickshire</option>
                    <option value="west-midlands">West Midlands</option>
                    <option value="west-sussex">West Sussex</option>
                    <option value="west-yorkshire">West Yorkshire</option>
                    <option value="wiltshire">Wiltshire</option>
                    <option value="worcestershire">Worcestershire</option>
                    <option value="york">York</option>
                </optgroup>
                <optgroup label="Scotland">
                    <option value="aberdeen">Aberdeen</option>
                    <option value="aberdeenshire">Aberdeenshire</option>
                    <option value="angus">Angus</option>
                    <option value="argyll-and-bute">Argyll and Bute</option>
                    <option value="ayrshire-and-arran">Ayrshire and Arran</option>
                    <option value="banffshire">Banffshire</option>
                    <option value="berwickshire">Berwickshire</option>
                    <option value="caithness">Caithness</option>
                    <option value="clackmannanshire">Clackmannanshire</option>
                    <option value="dumfries">Dumfries</option>
                    <option value="dunbartonshire">Dunbartonshire</option>
                    <option value="dundee">Dundee</option>
                    <option value="east-lothian">East Lothian</option>
                    <option value="edinburgh">Edinburgh</option>
                    <option value="fife">Fife</option>
                    <option value="glasgow">Glasgow</option>
                    <option value="inverness">Inverness</option>
                    <option value="kincardineshire">Kincardineshire</option>
                    <option value="lanarkshire">Lanarkshire</option>
                    <option value="midlothian">Midlothian</option>
                    <option value="moray">Moray</option>
                    <option value="nairn">Nairn</option>
                    <option value="orkney-islands">Orkney Islands</option>
                    <option value="perth-and-kinross">Perth and Kinross</option>
                    <option value="renfrewshire">Renfrewshire</option>
                    <option value="ross-and-cromarty">Ross and Cromarty</option>
                    <option value="roxburgh,-ettrick-and-lauderdale">Roxburgh, Ettrick and Lauderdale</option>
                    <option value="shetland-islands">Shetland Islands</option>
                    <option value="stirling-and-falkirk">Stirling and Falkirk</option>
                    <option value="sutherland">Sutherland</option>
                    <option value="the-stewartry-of-kirkcudbright">The Stewartry of Kirkcudbright</option>
                    <option value="tweeddale">Tweeddale</option>
                    <option value="west-lothian">West Lothian</option>
                    <option value="western-isles">Western Isles</option>
                    <option value="wigtown">Wigtown</option>
                </optgroup>
                <optgroup label="Wales">
                    <option value="blaenau-gwent">Blaenau Gwent</option>
                    <option value="bridgend">Bridgend</option>
                    <option value="caerphilly">Caerphilly</option>
                    <option value="cardiff">Cardiff</option>
                    <option value="carmarthenshire">Carmarthenshire</option>
                    <option value="ceredigion">Ceredigion</option>
                    <option value="conwy">Conwy</option>
                    <option value="denbighshire">Denbighshire</option>
                    <option value="flintshire">Flintshire</option>
                    <option value="gwynedd">gwynedd</option>
                    <option value="isle-of-anglesey">Isle of Anglesey</option>
                    <option value="merthyr-tydfil">Merthyr Tydfil</option>
                    <option value="monmouthshire">Monmouthshire</option>
                    <option value="neath-port-talbot">Neath Port Talbot</option>
                    <option value="newport">Newport</option>
                    <option value="pembrokeshire">Pembrokeshire</option>
                    <option value="powys">Powys</option>
                    <option value="rhondda-cynon-taf">Rhondda Cynon Taf</option>
                    <option value="swansea">Swansea</option>
                    <option value="torfaen">Torfaen</option>
                    <option value="vale-of-glamorgan">Vale of Glamorgan</option>
                    <option value="wrexham">Wrexham</option>
                </optgroup>
                <optgroup label="Northern Ireland">
                    <option value="antrim">Antrim</option>
                    <option value="ards">Ards</option>
                    <option value="armagh">Armagh</option>
                    <option value="ballymena">Ballymena</option>
                    <option value="ballymoney">Ballymoney</option>
                    <option value="banbridge">Banbridge</option>
                    <option value="belfast">Belfast</option>
                    <option value="carrickfergus">Carrickfergus</option>
                    <option value="castlereagh">Castlereagh</option>
                    <option value="coleraine">Coleraine</option>
                    <option value="cookstown">Cookstown</option>
                    <option value="craigavon">Craigavon</option>
                    <option value="derry">Derry</option>
                    <option value="down">Down</option>
                    <option value="dungannon-and-south-tyrone">Dungannon and South Tyrone</option>
                    <option value="fermanagh">Fermanagh</option>
                    <option value="larne">Larne</option>
                    <option value="limavady">Limavady</option>
                    <option value="lisburn">Lisburn</option>
                    <option value="magherafelt">Magherafelt</option>
                    <option value="moyle">Moyle</option>
                    <option value="newry-and-mourne">Newry and Mourne</option>
                    <option value="newtownabbey">Newtownabbey</option>
                    <option value="north-down">North Down</option>
                    <option value="omagh">Omagh</option>
                    <option value="strabane">Strabane</option>
                </optgroup>
                <optgroup label="Ireland">
                    <option value="carlow">Carlow</option>
                    <option value="cavan">Cavan</option>
                    <option value="clare">Clare</option>
                    <option value="cork">Cork</option>
                    <option value="donegal">Donegal</option>
                    <option value="dublin">Dublin</option>
                    <option value="dun-laoghaire-rathdown">Dún Laoghaire-Rathdown</option>
                    <option value="fingal">Fingal</option>
                    <option value="galway">Galway</option>
                    <option value="kerry">Kerry</option>
                    <option value="kildare">Kildare</option>
                    <option value="kilkenny">Kilkenny</option>
                    <option value="laois">Laois</option>
                    <option value="leitrim">Leitrim</option>
                    <option value="limerick">Limerick</option>
                    <option value="longford">Longford</option>
                    <option value="louth">Louth</option>
                    <option value="mayo">Mayo</option>
                    <option value="meath">Meath</option>
                    <option value="monaghan">Monaghan</option>
                    <option value="offaly">Offaly</option>
                    <option value="roscommon">Roscommon</option>
                    <option value="sligo">Sligo</option>
                    <option value="south-dublin">South Dublin</option>
                    <option value="tipperary">Tipperary</option>
                    <option value="waterford">Waterford</option>
                    <option value="westmeath">Westmeath</option>
                    <option value="wexford">Wexford</option>
                    <option value="wicklow">Wicklow</option>
                </optgroup>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid county.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Postal Code</label>
                <input type="text" class="form-control" id="zip" placeholder="" required>
                <div class="invalid-feedback">
                  Postal code code required.
                </div>
              </div>
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">
            <h4 class="mb-3">Payment</h4>
            <div class="accordion" id="accordionExample">
              <div class="card">
                <div class="card-header" id="headingOne">
                  <h2 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      PayPal
                    </button>
                  </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                      <input type="hidden" name="cmd" value="_s-xclick">
                      <input type="hidden" name="hosted_button_id" value="984FD44QJUAJY">
                      <input type="image" src="https://simple-membership-plugin.com/wp-content/uploads/2018/09/membership-smart-button-checkout.jpg" border="0" name="submit" alt="PayPal â€“ The safer, easier way to pay online!">
                      <img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
                    </form>

                    <img src="" class="img-fluid" />
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingTwo">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Credit/Debit Card
                    </button>
                  </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="cc-name">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required>
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                          Name on card is required
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="cc-number">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required>
                        <div class="invalid-feedback">
                          Credit card number is required
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="cc-expiration">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                        <div class="invalid-feedback">
                          Security code required
                        </div>
                      </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                  </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header" id="headingThree">
                  <h2 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Google/Apple Pay
                    </button>
                  </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                      Coming soon
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; {{date('Y')}} CareBubble.</p>
        <ul class="list-inline">
          <li class="list-inline-item"><a href="#">Privacy</a></li>
          <li class="list-inline-item"><a href="#">Terms</a></li>
          <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.0/assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  </body>
</html>
