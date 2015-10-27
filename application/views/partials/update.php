<div class="row">
      <div class="col s12 m6 offset-m3">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title grey-text text-darken-3"><b>METHOD: UPDATE</b></span>
            <h5 class = "yellow-text text-lighten-3"><b>...Example for: table name: "notes"...<b></h5>
            <div class ="row">
              <div class = "col s12 m6 top">
                <ul>
                  <li> $.ajax({ </li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; url: '/notes/:id', </li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; method: 'PUT' OR 'PATCH', </li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; data: 'data to update'</li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; success: function(data){</li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; ---'do stuff'--- </li>
                  <li> &nbsp;&nbsp; } </li>
                  <li>});</li>
                </ul>
              </div>
              <div classs = "col s12 m6">
              </br>
                <p><span class = "green-text text-lighten-4">URL: </span>"/notes/:id"</p>
                <p><span class = "green-text text-lighten-4">VERB: </span>"PUT" or "PATCH"</p>
                <p><span class = "green-text text-lighten-4">METHOD: </span>"update"</p>
              </div>
            </div>
            <div>
              <p class = "yellow-text text-lighten-3">Order of Operations</p>
              <p> Ajax requests url, goes to routes, routes redirect to method, method fires in controller, goes to model and deletes entry of id :id in DB, e.g. UPDATE FROM notes ... FROM ... WHERE id = :id.  Generally returns true on completion <span class ="green-text">DOES NOT render a view </span> (often redirects to index or show on completeion.
              </p>
              <p class = "black-text">$route['notes/(:any)']['put'] (or ['patch']) = 'notes/update/$1'; </p>
            </div>
          </div>
        </div>
      </div>
    </div>
