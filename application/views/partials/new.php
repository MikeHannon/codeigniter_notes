<div class="row">
      <div class="col s12 m6 offset-m3">
        <div class="card blue-grey darken-1">
          <div class="card-content white-text">
            <span class="card-title grey-text text-darken-3"><b>METHOD: NEW</b></span>
            <h5 class = "yellow-text text-lighten-3"><b>...Example for: table name: "notes"...<b></h5>
            <div class ="row">
              <div class = "col s12 m6 top">
                <ul>
                  <li> $.ajax({ </li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; url: '/notes/new', </li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; method: 'GET', </li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; success: function(data){</li>
                  <li> &nbsp;&nbsp; &nbsp;&nbsp; ---'do stuff'--- </li>
                  <li> &nbsp;&nbsp; } </li>
                  <li>});</li>
                </ul>
              </div>
              <div classs = "col s12 m6">
              </br>
                <p><span class = "green-text text-lighten-4">URL: </span>"/notes/new"</p>
                <p><span class = "green-text text-lighten-4">VERB: </span>"GET"</p>
                <p><span class = "green-text text-lighten-4">METHOD: </span>"new"</p>
              </div>
            </div>
            <div>
              <p class = "yellow-text text-lighten-3">Order of Operations</p>
              <p> Ajax requests url, goes to routes, routes redirect to method, method fires in controller,
                 returning data that allows us to render a view for creating creating a note. Normally <span class ="green-text">renders a view </span> (form for a new note).  No need to go to the Database usually.
              </p>
              <p class = "black-text">$route['notes/new']['get'] = 'notes/new'; but new is a key word in codeigniter so use notes_new as your function in your notes controller</p>
            </div>
          </div>
        </div>
      </div>
    </div>
