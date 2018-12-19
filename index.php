<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title> Flexbox opdracht 1 </title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>

    <div class="menuContainer">
      <div class="menu">
        <img src="images/logo.PNG" class="logoMenu">
        <div class="home">Home</div>
        <div class="about">About</div>
        <div class="products">Products</div>
        <div class="services">Services</div>
        <input class="inputMenu"></input>
        <div class="btn">Search</div>
      </div>
    </div>

    <div class="blockOneContainer">
      <div class="blockOneLineOne">
        <img src="images/picBlock1.PNG" class="pictureBlockOne">
        <div class="blockOneHeader">Dramatically Engage</div>
      </div>
      <div class="blockOneText">Objectively innovate enpowered manufactured products whereas parallel platforms.</div>
      <div class="btn btnBlockOne">Engage Now</div>
    </div>

    <div class="bodyContainer">
      <div class="bodyText">
        <p><span class="bodyHeaderOne">Superior Collaboration</span> <span class="bodyHeaderTwo">Visualize Qualtity</span></p>
        <hr/>
        <p>Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.</p>
      </div>
    </div>

    <div class="bodyBlockWithBorderContainer">
      <div class="bodyBlockWithBorder"><p>700x300</p></div>
      <div class="bodyBlockWithBorder"><p>700x300</p></div>
      <div class="bodyBlockWithBorder"><p>700x300</p></div>
    </div>

    <div class="bodyBlockContainer">
      <div class="bodyBlock"><span class="bodyHeaderThree">Efficiently Unleash</span> <br/> Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</div>
      <div class="bodyBlock"><span class="bodyHeaderThree">Completely Synergize</span> <br/> Dramatically maintain clicks-and-mortar solutions without functional solutions. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. </div>
      <div class="bodyBlock"><span class="bodyHeaderThree">Dynamically Procrastinate</span> <br/> Professionally cultivate one-to-one customer service with robust ideas. Completely synergize resource taxing relationships via premier niche markets. Dynamically innovate resource-leveling customer service for state of the art customer service. </div>
    </div>

    <div class="contact">
      <form action="index.php" method="post">
        <p>Jouw response in ons gastenboek?</p>
        <input class="contactInput" type="text" name="contact" value="">
        <input type="submit" value="submit">
      </form>
      <br/>
      <p>Gastenboek</p>
      <div class="gastenboek">

        <?php
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
          $contact = $_POST['contact'];
          echo $contact;
        } else {
          die('Laat hier jouw boodschap achter.');
        }
        ?>

      </div>
    </div>

    <div class="bodyEndContainer">
      <div class="bodyBlock"><span class="bodyHeaderFour">Dynamically Procrastinate</span>
        <br/> Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.
        <br/>
        <div class="btn btnEnd">Procastinate</div>
      </div>
      <div class="bodyBlock"><span class="bodyHeaderFour">Efficiently Unleash</span>
        <br/> Dramatically maintain clicks-and-mortar solutions without functional solutions. Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
        <br/>
        <div class="btn btnEnd">Unleash</div>
      </div>
      <div class="bodyBlock"><span class="bodyHeaderFour">Completely Synergize</span>
        <br/> Professionally cultivate one-to-one customer service with robust ideas. Completely synergize resource taxing relationships via premier niche markets. Dynamically innovate resource-leveling customer service for state of the art customer service.
        <br/>
        <div class="btn btnEnd">Synergize</div>
      </div>
    </div>

    <div class="footer">
      <p>
        <a class="link" href="https://www.quackit.com/html/templates/download/bootstrap/corporate-1/index.html#">
          Terms & Conditions</a>
         |
        <a class="link" href="https://www.quackit.com/html/templates/download/bootstrap/corporate-1/index.html#">
          Privacy Policy</a>
         |
        <a class="link" href="https://www.quackit.com/html/templates/download/bootstrap/corporate-1/index.html#">
          Contact</a>
        <br/>
        Copyrigth Example.com 2015
      </p>
    </div>
  </body>
</html>
