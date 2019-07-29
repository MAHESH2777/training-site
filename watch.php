<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body  class="bgtag">
  <div class="bodyclr">
  <div class="container-fluid nav">
    <div class="col-4 text-center home">
      <a class="nav-link" href="index.php">
        <img src="img/hom.png"></a>
      <!-- <span class="fas fa-home iconclr"></span> -->
    </div>
    <div class="col-4 text-center"></div>
    <div class="col-4 text-center">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <img src="img/man.png">
        <!-- <i class="fas fa-user"></i> -->
      </a>
      <div class="dropdown-menu dropdown-menu-right dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
      <a class="dropdown-item" href="login.php">Login </a>
          <a class="dropdown-item" href="register.php">Sign up</a>
    </div>
  </div>
  </div>
  <!-- 21:9 aspect ratio -->
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-8  pt-4">
        <div class="container text-center bgcolor">
          <div class="row text-center">
            <div class="col-12 ">
              <h1>Live Sessions</h1>
              <h2 class="textbg">Course:java</h2>
              <h4>Basic programming Language</h4>
              <iframe width="100%" height="320px" src="https://www.youtube.com/embed/eIrMbAQSU34" id="vido" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          </div>
          <button class="btn downbtn" type="button"><img src="img/down.png"> Download</button>
        </div>
        <div class="container">
          <div class="media">
            <div class="row">
              <div class="col-12 txtbdy">
                <br>
                <span class="dinline">
                  <img class="d-flex align-self-center mr-3" src="img/man2.jpg" width="100px" alt="Generic placeholder image">
                  <h6>Jeckob</h6>
                </span>
                <div class="media-body">
                  <h5 class="mt-0 font-weight-bold">Center-aligned media</h5>
                  <p class="fontsz">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                    odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                    Donec lacinia congue felis in faucibus.
                    Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus
                    et magnis dis parturient montes, nascetur ridiculus mus.</p>
                  <h5 class="mt-0  font-weight-bold">Description:</h5>
                  <h5 class="mt-0">Basic programming Language</h5>
                  <p class="fontsz">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                    odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla.
                    Donec lacinia congue felis in faucibus.
                    Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus
                    et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="container chat">
          <div class="phone-top"></div>
          <h2 class="text-center" style="color:white">Chat box</h2>
          <ul class="chat-container">
            <li class="message right">
              <img class="profile" src="https://randomuser.me/api/portraits/men/6.jpg" alt="user photo">
              <p>Ay, el querer</p>
            </li>
            <li class=" message left">
              <img class="profile" src="https://randomuser.me/api/portraits/women/16.jpg" alt="user photo">
              <p>Que en un momento </p>
            </li>
            <li class=" message right">
              <img class="profile" src="https://randomuser.me/api/portraits/men/6.jpg" alt="user photo">
              <p>Estar loca y no querer</p>
            </li>
            <li class="message left">
              <img class="profile" src="https://randomuser.me/api/portraits/women/16.jpg" alt="user photo">
              <p>Porque el querer </p>
            </li>
            <li class="message right">
              <img class="profile" src="https://randomuser.me/api/portraits/men/6.jpg" alt="user photo">
              <p>Pena que no tiene fin</p>
            </li>
            <li class=" message left">
              <img class="profile" src="https://randomuser.me/api/portraits/women/16.jpg" alt="user photo">
              <p>Si el loco vive sin ella</p>
            </li>
          </ul>
          <input class="reply-input" type="text" placeholder="Enter message">
        </div>
      </div>
    </div>
  </div>
  <!-- Full Height Modal Right -->
              </div>
</body>
<!-- JQuery -->
<script>
  const replyBox = document.querySelector('.reply-input');
  const ul = document.querySelector('.chat-container');
  const message = document.querySelectorAll('.message');
  //main function to add the new message to the list: creates the li, picks a random class between the choices of 'left' and 'right', then adds it to the list/chat
  function addNewMsg() {
    const newMsg = document.createElement("LI");
    const classChoices = ['left', 'right'];
    let randomChoice = Math.floor(Math.random() * classChoices.length);
    // console.log(randomChoice);
    newMsg.setAttribute('class', classChoices[randomChoice]);
    newMsg.classList.add('message');
    var textnode = document.createTextNode(replyBox.value);
    newMsg.appendChild(textnode);
    ul.appendChild(newMsg);
    for (var i = 0; i < message.length; i++) {
      let msg = message[i];
      //the line below aims to replicate the way older messages go off screen as new ones come in
      msg.setAttribute('style', 'transform: translateY(-20px);');
    }
  }
  //listens for submission with enter button
  replyBox.addEventListener('keypress', (e) => {
    if (e.keyCode == 13) {
      addNewMsg();
      replyBox.value = '';
    } else {
      return
    }
  })
</script>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>