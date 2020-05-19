<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>T2S-Feedback</title>
    <style type="text/css">

      h2
  {
    padding-bottom: 0.5em;
  }

  label
  {
    font-size: 1.3em;
  }
  .container
  {
    margin: auto;
  }

      .rating {
  display: inline-block;
  position: relative;
  height: 50px;
  line-height: 50px;
  font-size: 50px;
}

.rating label {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  cursor: pointer;
}

.rating label:last-child {
  position: static;
}

.rating label:nth-child(1) {
  z-index: 5;
}

.rating label:nth-child(2) {
  z-index: 4;
}

.rating label:nth-child(3) {
  z-index: 3;
}

.rating label:nth-child(4) {
  z-index: 2;
}

.rating label:nth-child(5) {
  z-index: 1;
}

.rating label input {
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}

.rating label .icon {
  float: left;
  color: transparent;
}

.rating label:last-child .icon {
  color: #000;
}

.rating:not(:hover) label input:checked ~ .icon,
.rating:hover label:hover input ~ .icon {
  color: #09f;
}

.rating label input:focus:not(:checked) ~ .icon:last-child {
  color: #000;
  text-shadow: 0 0 5px #09f;
}
    </style>
  </head>
  <body>
    <div class="container col-sm-4 mt-4 p-0 ml-4 border border-dark">
         <div class="jumbotron m-1 py-1">
      <form method="POST" class="T2S-Feedback">
        <h2 class="text-center mb-5">FEEDBACK</h2>
        <div class="form-group row">
              <label for="prefix" class="col-sm-6">Prefix<span class="star" style="color:red">*</span></label>
              <div class="col-sm-6">
                <select class="form-control prefix" id="prefix" name="prefix" autofocus>
                  <option></option>
                  <option value="MAN">MAN</option>
                  <option value="API">API</option>
                  <option value="CHECK">CHECK</option>
                </select>
              </div>
           </div>
        <div class="form-group row">
              <label for="ticketnumber" class="col-sm-6">Ticket MS-<span class="star" style="color:red">*</span></label>
              <div class="col-sm-6">
                 <input type="text" class="form-control ticketnumber" name="ticketnumber" id="ticketnumber" pattern="([0-9]+)" title="Only numbers are accepeted" placeholder="Ticket Number"required>
              </div>
            </div>
          <div class="form-group row">
              <label for="star_rating" class="col-sm-6">Work Rating<span class="star" style="color:red">*</span></label>
              <div class="col-sm-6">
                <form class="rating">
  <label>
    <input type="radio" name="stars" value="1" />
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="2" />
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="3" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>   
  </label>
  <label>
    <input type="radio" name="stars" value="4" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
  <label>
    <input type="radio" name="stars" value="5" />
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
    <span class="icon">★</span>
  </label>
</form>
      </div>
           </div>

           <div class="form-group row">
              <label for="status" class="col-sm-6">Status<span class="star" style="color:red">*</span></label>
              <div class="col-sm-6">
                <select class="form-control status" id="status" name="status">
                  <!-- <option></option> -->
                  <option value="Good">Good</option>
                  <option value="Very_Good">Very Good</option>
                  <option value="Excellent">Excellent</option>
                  <option value="Not_Good">Not Good</option>
                  <option value="Bad">Bad</option>
                </select>
              </div>
           </div>

           <div class="form-group row">
              <label for="Reason" class="col-sm-6">Reason<span class="star" style="color:red">*</span></label>
              <div class="col-sm-6">
                <select class="form-control status" id="reason" name="reason">
                  <option></option>
                  <option value="Repeated Same code error">Repeated Same code error</option>
                  <option value="Code standard Not good">Code standard Not good</option>
                  <option value="Inconsistency of the flow">Inconsistency of the flow</option>
                  <option value="Syntax Errors in code">Syntax Errors in code</option>
                  <option value="Communication is not good">Communication is not good</option>
                  <option value=" Didn't understand Logic">Didn't understand Logic</option>
                  <option value="Production got affected">Production got affected</option>
                  <option value="Taken long time to complete">Taken long time to complete</option>
                  <option value="More sent backs from testing">More sent backs from testing</option>
                  <option value="quality is not good">quality is not good</option>
                  
                </select>
              </div>
           </div>
           <div class="form-group row">
              <label for="comments" class="col-sm-6">Comments</label>
              <div class="col-sm-6">
                 <textarea class="form-control" cols="10" rows="5" name="comments" id="comments" placeholder=""></textarea>
                </div>
            </div>

            <div class="form-group row">
            <div class="col-sm-6"></div>
           <div class="buttons col-sm-6">
                <button type="submit" name= "submit" id="submit" class="btn btn-success mr-2">Submit</button>
                <button type="button" name="reset" id="reset" class="btn btn-danger mr-2">Clear</button>
                <!-- <button type="button" name="add_more" id="add_more" class="btn btn-warning">Add More</button> -->
               </div>
             </div>

      </form>
      
    </div>
    </div>
    <script type="text/javascript">
      $(':radio').change(function() {
  console.log('New star rating: ' + this.value);
});
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>