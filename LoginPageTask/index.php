<!-- THE BOILERPLATE SHOULD NOT BE REMOVED -->
<!-- Proper naming convention should be used while naming id attributes. -->
<!-- ADDING A SUCCESS PAGE FOR THE SAME WILL BOOST YOUR CHANCES -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <style>
      div.col {
        height: auto;

        width: auto;

        background-color: transparent;
        margin-top: 0.25rem;
        padding-top: 0.25rem;
        top: 50%;

        -webkit-animation-duration: 2s;
        animation-duration: 2s;
        -webkit-animation-name: SkrrrPaPaPum;
        animation-name: SkrrrPapaPum;
      }
      div.col:hover {
        border: 0.05px dotted rgba(255, 230, 230, 0.8);
      }

      @keyframes SkrrrPapaPum {
        0% {
          transform: scale(0.1);
          opacity: 0;
        }
        60% {
          transform: scale(1.2);
          opacity: 1;
        }
        100% {
          transform: scale(1);
        }
      }
    </style>
    <script src="main.js"></script>
  </head>
  <body>
    <div style="display: inline-block; width:100%">
      <nav class="navbar navbar-light bg-light ">
        <a class="navbar-brand" href="#">
          <img
            src="https://incubateind.com/images/IncubateIND%20Black.png"
            width="30"
            height="30"
            class="logo d-inline-block align-top"
            alt=""
            id="logo"
          />
        </a>
      </nav>
    </div>

    <!-- Beautify This -->
    <center>
      <div class="log-form" id="form-outer">
        <div class="row">
          <div class="col col-md-12">
            <h2 id="headingClick"></h2>
          </div>
        </div>
        <!--<form class="col col-md-12" action="sucess.html" id="form">-->
        <form class="col col-md-12" id="form">
          <div class="row">
            <div class="col col-md-5">
              <i class="fas fa-user"></i>
              <label class="label">Username</label>
            </div>
            <div class="col col-md-6">
              <input
                type="text"
                title="username"
                placeholder="username"
                class="input col-auto"
                name="usrname"
                id="usrname"
                required
              />
              <p id="usrname" style="color: red; font-size: 10px;"></p>
            </div>
          </div>
          <div class="row">
            <div class="col col-md-5">
              <i class="fas fa-envelope"></i><label class="label"> Email</label>
            </div>
            <div class="col col-md-6">
              <input
                type="email"
                title="email"
                placeholder="email"
                class="input col-auto"
                name="email"
                id="email"
                required
              />
            </div>
          </div>
          <div class="row">
            <div class="col col-md-5">
              <i class="fas fa-lock"></i>
              <label class="label">Password</label>
            </div>
            <div class="col col-md-6">
              <input
                type="password"
                title="password"
                placeholder="password"
                class="input col-auto"
                name="pass"
                id="pass"
                required
              />
            </div>
          </div>
          <div class="row">
            <div class="col col-md-5" style="padding: 0;">
              <i class="fas fa-lock"></i>
              <label class="label">Confirm Password</label>
            </div>
            <div class="col col-md-6">
              <input
                type="password"
                title="password"
                placeholder="password"
                class="input col-auto"
                name="confpass"
                id="confpass"
                required
              />
            </div>
          </div>
          <div class="row">
            <div class="col col-md-5">
              <i class="fas fa-comment-alt"></i>
              <label class="label">Enter message</label>
            </div>
            <div class="col col-md-6">
              <textarea
                name="message"
                id="message"
                cols="35"
                rows="4"
                placeholder="enter message"
                class="col-auto input"
              ></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col col-md-3">
              <i class="fas fa-child"></i>
              <p class="label">Age</p>
            </div>
            <div class="col col-md-4">
              <label for="above" class="label">Above 18</label>
              <input
                type="radio"
                id="below"
                name="age"
                value="above"
                class="radiobtn"
              />
            </div>
            <div class="col col-md-4">
              <label for="below" class="label">Below 18</label
              ><input
                type="radio"
                id="above"
                name="age"
                value="below"
                class="radiobtn"
              />
            </div>
          </div>
          <div class="row">
            <div class="col col-md-11" style="height:2rem"></div>
          </div>
          <div class="row">
            <div class="col col-md-6">
              <input
                type="button"
                value="Submit"
                class="btn btn-primary"
                id="submit"
              />
            </div>
            <div class="col col-md-5">
              <input type="reset" class="btn btn-danger" />
            </div>
          </div>
        </form>
      </div>
    </center>

    <div class="footer col-md-12">
      <ul class="footer-list">
        <li class="col-md-2"><a href="#">About</a> |</li>
        <li class="col-md-2"><a href="#">Blog</a> |</li>
        <li class="col-md-2"><a href="#">FAQs</a> |</li>
        <li class="col-md-2"><a href="#">Contact us</a></li>
      </ul>
    </div>
    <!-- Beautify Ends -->
  </body>
</html>
