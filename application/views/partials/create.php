<div class="row">
      <div class="col s12 m6  offset-m3">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title grey-text text-darken-3"><b>METHOD: CREATE</b></span>
            <h5 class = "yellow-text text-lighten-3"><b>...Example for: table name: "notes"...<b></h5>
            <div class ="row">
              <div class = "col s12 m6 top">
                <ul>
                  <li> $.ajax({ </li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; url: '/notes', </li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; method: 'POST', </li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; data: 'send stuff' </li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; success: function(data){</li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; ---'do stuff'--- </li>
                  <li> &nbsp;&nbsp; } </li>
                  <li>});</li>
                </ul>
              </div>
              <div classs = "col s12 m6">
              </br>
                <p><span class = "green-text text-lighten-4">URL: </span>"/notes"</p>
                <p><span class = "green-text text-lighten-4">VERB: </span>"POST"</p>
                <p><span class = "green-text text-lighten-4">METHOD: </span>"create"</p>
              </div>
            </div>
            <div>
              <p class = "yellow-text text-lighten-3">Order of Operations</p>
              <p> Ajax requests url, goes to routes, routes redirect to method, method fires in controller,posted data goes to DB INSERT INTO notes ... FROM sent data, returned data: usually true or false (or errors). <span class ="green-text">DOES NOT render a view </span> (often redirects to index or show on completion.
              </p>
              <p class = "black-text">$route['notes']['post'] = 'notes/create'; </p>
            </div>
          </div>
        </div>
      </div>
    </div>
