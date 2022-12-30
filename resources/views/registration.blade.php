<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>
    <script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #f6b2ff">
<section class="vh-100 gradient-custom">
<div class="container py-5 h-100">
  <div class="row justify-content-center align-items-center h-100">
    <div class="col-12 col-lg-9 col-xl-7">
      <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
        <div class="card-body p-4 p-md-5">
          <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Registration Form</h3>
          <form action="registration-submit" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="row">
              <div class="col-md-12 mb-4">

                <div class="form-outline">
                  <label class="form-label" for="Name">Name</label>
                  <input type="text" name="Name" id="Name" class="form-control form-control-lg" />
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                  <label class="form-label" for="emailAddress">Email</label>
                  <input type="email" name="emailAddress" id="emailAddress" class="form-control form-control-lg" />
                </div>

              </div>
              <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                  <label class="form-label" for="phoneNumber">Phone Number</label>
                  <input type="tel" name="phoneNumber" id="phoneNumber" class="form-control form-control-lg" />
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                  <label class="form-label" for="BusinessName">Business Name</label>
                  <input type="text" name="BusinessName" id="BusinessName" class="form-control form-control-lg" />
                </div>

              </div>
              <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                  <label class="form-label" for="businessLogo">Logo</label>
                 <input type="file" name="businessLogo" id="businessLogo">
                </div>

              </div>
            </div>

            <div class="row">
              <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                  <label class="form-label" for="businessAddress">Business Address</label>
                  <input type="text" name="businessAddress" id="businessAddress" class="form-control form-control-lg" />
                </div>

              </div>
              <div class="col-md-6 mb-4 pb-2">

                <div class="form-outline">
                  <label class="form-label" for="websiteURL">Website URL</label>
                 <input type="text" name="websiteURL" id="websiteURL">
                </div>
                <input type="hidden" name="location" id="location">
              </div>
            </div>

            <div class="mt-4 pt-2">
              <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
            </div>

          </form> 
        </div>
      </div>
    </div>
  </div>
</div>
</section>

<script>
  const options = {
  enableHighAccuracy: true,
  timeout: 5000,
  maximumAge: 0
};

function success(pos) {
  const crd = pos.coords;
  latitude = crd.latitude;
  longitude = crd.longitude
  $("#location").val(crd.latitude + " " + crd.longitude );
  console.log('Your current position is:');
  console.log(`Latitude : ${crd.latitude}`);
  console.log(`Longitude: ${crd.longitude}`);
  console.log(`More or less ${crd.accuracy} meters.`);
}

function error(err) {
  console.warn(`ERROR(${err.code}): ${err.message}`);
}

navigator.geolocation.getCurrentPosition(success, error, options);
</script>
</body>

