<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");

?>

<!DOCTYPE html>
<!-- saved from url=(0086)file:///C:/Users/Dell/Desktop/dice%20game%202/sponser%20site/donate%20us%20aaroha.html -->
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link
      rel="stylesheet"
      href="https://anijs.github.io/lib/anicollection/anicollection.css"
    />
    <!-- <script src="./donate us aaroha_files/jquery.min.js.download"></script>
  <script src="./donate us aaroha_files/popper.min.js.download"></script>
  <script src="./donate us aaroha_files/bootstrap.min.js.download"></script>
<link href="./donate us aaroha_files/css" rel="stylesheet">
 <link href="./donate us aaroha_files/css(1)" rel="stylesheet"> -->
    <style>
        html,body{
         width: 100%;
         height: auto;
         padding:0;
         margin: 0px;
      }
      hr{
      width: 30%;
      border: 0.8px solid #033670 ;

      }
      #buttoncontainer{

       position:absolute;
       top:50%;
       left:50%;
       transform:translate(-50%,-50%);

       }
       #option{
       background-color:#033670;
       }
       .button{
      position:relative:
      text-align:center;
      width:300px;
      font-size:20px;
      padding:10px;
      color:#000000;
      background-color:#ccd9ff;

      font-weight:1000;
      border:5px solid #0033cc;
      letter-spacing:5px;
      cursor:pointer;
      border-radius:100px;
      transition:1.5s;
      }

      .button:hover{
      box-shadow:0 5px 50px 0 #0033cc inset,0 5px 50px 0 #0033cc,
                 0 5px 50px 0 #0033cc inset,0 5px 50px 0 #0033cc;
      }

      #inside{
      width:100%;
      height:auto;
      padding:50px;
      padding-left:100px;
      padding-right:100px;
      border-radius:80px;
       filter: grayscale(100%) drop-shadow(8px 8px 10px black);

      }
      #inside:hover{
      filter: grayscale(0%);
      filter: drop-shadow(8px 8px 10px white);

      }
      #contentdonate{
      padding-left: 50px;
      padding-right: 50px;
      font-size:20px;
      }

      #buttonoption{
      background-color:#3366ff;
      }


      .container h2{
                width:100%;
                color:#26a7dd;
                font-size: 36px;
                text-align:center;
                margin-bottom: 10px;
            }
          .container .row100
          {
              position:relative;
              width:100%;
              display:grid;
              grid-template-columns: repeat(autofit,minmax(300px,1fr));

          }
          .container .row100 .col
          {
              position: relative;
              width:100%;
              padding:0 10px;
              margin: 30px 0 10px;
              transition: 0.5s;
          }
          .container .row100 .inputbox
          {
            position: relative;
            width:100%;
            height:40px;
            color:#26a7dd;
          }
          .rad{
              color:#26a7dd;
          }
          .container .row100 .inputbox input
          {
              position: absolute;
              width:100%;
              height:100%;
              background: transparent;
              box-shadow: none;
              border: none;
              outline: none;
              font-size: 18px;
              padding: 0 10px;
              z-index: 1;
              color:#000;
          }
          .container .row100 .inputbox .text
          {
              position:absolute;
              top:0;
              left:0;
              line-height: 40px;
              font-size: 18px;
              padding: 0 10px;
              display: block;
              transition: 0.5s;
              pointer-events: none;
              }
          .container .row100 .inputbox input:focus + .text,
          .container .row100 .inputbox input:valid + .text

          {
              top:-35px;
              left:-10px;
          }

          .container .row100 .inputbox .line
          {
              position: absolute;
              bottom: 0;
              display:block;
              width:100%;
              height:2px;
              background: #26a7dd;
              transition:0.5s;
              border-radius:2px;
              pointer-events: none;
          }
          .container .row100 .inputbox input:focus ~ .line ,
          .container .row100 .inputbox input:valid ~ .line
          {
            height:100%;
          }
          input[type="submit"]
          {
              border:none;
              padding: 7px 35px;
              cursor: pointer;
              outline: none;
              background: #26a7dd;
              color:#000;
              font-size: 18px;
              border-radius: 2px;
          }
          footer {

        bottom: 0;
      }
      .footer-distributed {
        background-color: #033670;
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        font: bold 16px sans-serif;

        padding: 55px 50px;
        margin-top: 80px;
      }

      .footer-distributed .footer-left,
      .footer-distributed .footer-center,
      .footer-distributed .footer-right {
        display: inline-block;
        vertical-align: top;
      }

      .footer-distributed .footer-left {
        width: 40%;
      }

      .footer-distributed h3 {
        color: #ffffff;
        font: normal 36px "Cookie", cursive;
        margin: 0;
      }

      .footer-distributed h3 span {
        color: #5383d3;
      }

      .footer-distributed .footer-links {
        color: #ffffff;
        margin: 20px 0 12px;
        padding: 0;
      }

      .footer-distributed .footer-links a {
        display: inline-block;
        line-height: 1.8;
        text-decoration: none;
        color: inherit;
      }

      .footer-distributed .footer-company-name {
        color: #8f9296;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
      }

      .footer-distributed .footer-center {
        width: 35%;
      }

      .footer-distributed .footer-center i {
        background-color: #33383b;
        color: whitesmoke;
        font-size: 25px;
        width: 38px;
        height: 38px;
        border-radius: 50%;
        text-align: center;
        line-height: 42px;
        margin: 10px 15px;
        vertical-align: middle;
      }

      .footer-distributed .footer-center i.fa-envelope {
        font-size: 17px;
        line-height: 38px;
      }

      .footer-distributed .footer-center p {
        display: inline-block;
        color: whitesmoke;
        vertical-align: middle;
        margin: 0;
      }

      .footer-distributed .footer-center p span {
        display: block;
        font-weight: normal;
        font-size: 14px;
        line-height: 2;
      }

      .footer-distributed .footer-center p a {
        color: #5383d3;
        text-decoration: none;
      }

      .footer-distributed .footer-right {
        width: 20%;
      }

      .footer-distributed .footer-company-about {
        line-height: 20px;
        color: #d1d1d8;
        font-size: 13px;
        font-weight: normal;
        margin: 0;
      }

      .footer-distributed .footer-company-about span {
        display: block;
        color: whitesmoke;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 20px;
      }

      .footer-distributed .footer-icons {
        margin-top: 25px;
      }

      .footer-distributed .footer-icons a {
        width: 35px;
        height: 35px;
        cursor: pointer;

        font-size: 20px;
        text-align: center;
        line-height: 35px;

        margin-right: 3px;
        margin-bottom: 5px;
      }

      @media (max-width: 880px) {
        .footer-distributed {
          font: bold 14px sans-serif;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
          display: block;
          width: 100%;
          margin-bottom: 40px;
          text-align: center;
        }

        .footer-distributed .footer-center i {
          margin-left: 0;
        }
        .main {
          line-height: normal;
          font-size: auto;
        }
      }
    </style>

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="footer, address, phone, icons" />

    <link
      rel="stylesheet"
      href="./donate us aaroha_files/font-awesome.min.css"
    />
    <link
      href="./donate us aaroha_files/css(2)"
      rel="stylesheet"
      type="text/css"
    />
    <link
      rel="stylesheet"
      href="file:///C:/Users/Dell/Desktop/dice%20game%202/sponser%20site/style1.css"
    />
  </head>
  <body>
    <div
      id="carouselExampleControls"
      class="carousel slide"
      data-ride="carousel"
    >
      <div class="carousel-inner">
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="sitepics/Picture1.jpg"
            alt="First slide"
            style="width: 100%; height: 500px;"
          />
        </div>
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="Picture12.jpg"
            alt="Second slide"
            style="width: 100%; height: 500px;"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="Picture13.jpg"
            alt="Third slide"
            style="width: 100%; height: 500px;"
          />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="file:///C:/Users/Dell/Desktop/dice%20game%202/sponser%20site/donate%20us%20aaroha.html#carouselExampleControls"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="file:///C:/Users/Dell/Desktop/dice%20game%202/sponser%20site/donate%20us%20aaroha.html#carouselExampleControls"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <br />
    <br />
    <div class="container" id="donate">
      <h1 align="center" style="padding-bottom: 15px;">DONATE</h1>
      <p id="contentdonate" style="padding-bottom: 25px;">
        A donation is a gift for charity, humanitarian aid, or to benefit a
        cause. A donation may take various forms, including money, alms,
        services, or goods such as clothing, toys, food, or vehicles. A donation
        may satisfy medical needs such as blood or organs for transplant.
      </p>
      <!-- <hr /> -->
    </div>

    <div class="container.fluid" id="option">
      <div class="row">
        <div class="col-sm-6">
          <a target="_blank" href="sitepics/Picture2.jpg">
            <!--tring modal-->
            <img id="inside" src="sitepics/Picture1.jpg" align="center" />
          </a>

          <div
            id="buttoncontainer"
            class="button"
            align="center"
            type="button"
            data-toggle="modal"
            data-target="#exampleModalCenter22"
          >
            Sponsor a child
          </div>
        </div>
        <div class="col-sm-6">
          <a target="_blank" href="Picture2.jpg">
            <img id="inside" src="Picture2.jpg" align="center" />
          </a>
          <div>
            <div
              id="buttoncontainer"
              class="button"
              align="center"
              type="button"
              data-toggle="modal"
              data-target="#exampleModalCenter"
            >
              Donate any amount
            </div>
          </div>
        </div>
      </div>
    </div>
    <br />
    <br />

    <!--ekdum bass trying-->

    <div
      class="modal fade"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="container">
              <div class="container" class="shadow-lg p-3 mb-5 rounded">
                <h2>Join US</h2>
                <form method="POST" action="pgRedirect.php">
                  <div class="row100">
                    <div class="col">
                      <td><label>ORDER_ID::*</label></td>
                      <td>
                        <input id="ORDER_ID" tabindex="1" maxlength="20"
                        size="20" name="ORDER_ID" autocomplete="off" value="<?php echo  "ORDS" . rand(10000,99999999)?>">
                      </td>
                    </div>
                  </div>
                  <div class="row100">
                    <div class="col">
                      <div class="inputbox">
                        <input type="text" name="name" required="required" />
                        <span class="text">Name</span>
                        <span class="line"></span>
                      </div>
                    </div>
                  </div>

                  <div class="row100">
                    <div class="col">
                      <div class="inputbox">
                        <input type="text" name="email" required="required" />
                        <span class="text">Email Id</span>
                        <span class="line"></span>
                      </div>
                    </div>
                  </div>

                  <div class="row100">
                    <div class="col">
                      <div class="inputbox">
                        <input type="text" name="phone" required="required" />
                        <span class="text">Phone No</span>
                        <span class="line"></span>
                      </div>
                    </div>
                  </div>

                  <div class="row100">
                    <div class="col">
                      <span class="rad">
                        <span class="text">Gender</span>
                        <br />
                        <input
                          type="radio"
                          name="gender"
                          value="Male"
                          required="required"
                        />
                        Male
                        <input
                          type="radio"
                          name="gender"
                          value="Female"
                          required="required"
                        />
                        Female
                        <input
                          type="radio"
                          name="gender"
                          value="Other"
                          required="required"
                        />
                        Other
                      </span>
                    </div>
                  </div>

                  <div class="row100">
                    <div class="col">
                      <div class="inputbox">
                        <input type="text" name="city" required="required" />
                        <span class="text">City</span>
                        <span class="line"></span>
                      </div>
                    </div>
                  </div>

                  <div class="row100">
                    <div class="col">
                      <span class="rad">
                        <span class="text">Donate</span>
                        <br />
                        <td>
                          <input
                            title="txnamount"
                            tabindex="10"
                            type="text"
                            name="amount"
                            value=""
                          />
                        </td>
                      </span>
                    </div>
                  </div>

                  <div class="row100">
                    <div class="col">
                      <div class="rad">
                        <span class="text"
                          >Do you want updates on WhatsApp?</span
                        ><br />
                        <input
                          type="radio"
                          name="update"
                          value="Yes"
                          required="required"
                        />Yes
                        <input
                          type="radio"
                          name="update"
                          value="No"
                          required="required"
                        />
                        No
                      </div>
                    </div>
                  </div>

                  <div class="row100">
                    <div class="col">
                      <input value="CheckOut" type="submit" onclick="" />
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <script src="./donate us aaroha_files/anijs-helper-scrollreveal-min.js.download"></script>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script
              src="./donate us aaroha_files/jquery-3.4.1.slim.min.js.download"
              integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
              crossorigin="anonymous"
            ></script>
            <script
              src="./donate us aaroha_files/popper.min.js(1).download"
              integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
              crossorigin="anonymous"
            ></script>
            <script
              src="./donate us aaroha_files/bootstrap.min.js(1).download"
              integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
              crossorigin="anonymous"
            ></script>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!--TRYING PEHLA FORM-->

    <div
      class="modal fade"
      id="exampleModalCenter22"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <div class="container">
              <h2>DONATE US</h2>
              <form
                action="file:///C:/Users/Dell/Desktop/dice%20game%202/sponser%20site/joinform.php"
                method="POST"
              >
                <div class="row100">
                  <div class="col">
                    <div class="inputbox">
                      <input type="text" name="name" required="required" />
                      <span class="text">Name</span>
                      <span class="line"></span>
                    </div>
                  </div>
                </div>

                <div class="row100">
                  <div class="col">
                    <div class="inputbox">
                      <input type="text" name="email" required="required" />
                      <span class="text">Email Id</span>
                      <span class="line"></span>
                    </div>
                  </div>
                </div>

                <div class="row100">
                  <div class="col">
                    <div class="inputbox">
                      <input type="text" name="phone" required="required" />
                      <span class="text">Phone No</span>
                      <span class="line"></span>
                    </div>
                  </div>
                </div>

                <div class="row100">
                  <div class="col">
                    <span class="rad">
                      <span class="text">Gender</span>
                      <br />
                      <input
                        type="radio"
                        name="gender"
                        value="Male"
                        required="required"
                      />
                      Male
                      <input
                        type="radio"
                        name="gender"
                        value="Female"
                        required="required"
                      />
                      Female
                      <input
                        type="radio"
                        name="gender"
                        value="Other"
                        required="required"
                      />
                      Other
                    </span>
                  </div>
                </div>

                <div class="row100">
                  <div class="col">
                    <div class="inputbox">
                      <input type="text" name="city" required="required" />
                      <span class="text">City</span>
                      <span class="line"></span>
                    </div>
                  </div>
                </div>

                <div class="row100">
                  <div class="col">
                    <div class="inputbox">
                      <input type="text" name="city" required="required" />
                      <span class="text">Donate </span>
                      <span class="line"></span>
                    </div>
                  </div>
                </div>
                <div class="row100">
                  <div class="col">
                    <div class="rad">
                      <span class="text">Do you want updates on WhatsApp?</span
                      ><br />
                      <input
                        type="radio"
                        name="update"
                        value="Yes"
                        required="required"
                      />Yes
                      <input
                        type="radio"
                        name="update"
                        value="No"
                        required="required"
                      />
                      No
                    </div>
                  </div>
                </div>

                <div class="row100">
                  <div class="col">
                    <input type="submit" />
                  </div>
                </div>
              </form>
            </div>
            <script src="./donate us aaroha_files/anijs-helper-scrollreveal-min.js.download"></script>
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script
              src="./donate us aaroha_files/jquery-3.4.1.slim.min.js.download"
              integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
              crossorigin="anonymous"
            ></script>
            <script
              src="./donate us aaroha_files/popper.min.js(1).download"
              integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
              crossorigin="anonymous"
            ></script>
            <script
              src="./donate us aaroha_files/bootstrap.min.js(1).download"
              integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
              crossorigin="anonymous"
            ></script>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <script src="./donate us aaroha_files/anijs-helper-scrollreveal-min.js.download"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="./donate us aaroha_files/jquery-3.4.1.slim.min.js.download"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="./donate us aaroha_files/popper.min.js(1).download"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="./donate us aaroha_files/bootstrap.min.js(1).download"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>

    <!--khatam try-->

    <footer class="footer-distributed">
      <div class="footer-left">
        <h3>Aa<span>ro</span>ha</h3>

        <p class="footer-links">
          <a
            href="file:///C:/Users/Dell/Desktop/dice%20game%202/sponser%20site/donate%20us%20aaroha.html#"
            >Home</a
          >
          ·
          <a
            href="file:///C:/Users/Dell/Desktop/dice%20game%202/sponser%20site/donate%20us%20aaroha.html#"
            >About Us</a
          >
          ·
          <a
            href="file:///C:/Users/Dell/Desktop/dice%20game%202/sponser%20site/donate%20us%20aaroha.html#"
            >Blog</a
          >
          ·
          <a
            href="file:///C:/Users/Dell/Desktop/dice%20game%202/sponser%20site/donate%20us%20aaroha.html#"
            >Events</a
          >
          ·
          <a
            href="file:///C:/Users/Dell/Desktop/dice%20game%202/sponser%20site/donate%20us%20aaroha.html#"
            >Projects</a
          >
          ·
          <a
            href="file:///C:/Users/Dell/Desktop/dice%20game%202/sponser%20site/donate%20us%20aaroha.html#"
            >Contact</a
          >
        </p>

        <p class="footer-company-name">© 2020</p>
      </div>

      <div class="footer-center">
        <!-- <div>
          <i class="fa fa-map-marker"></i>
          <p>
            <span>Anna Nagar slums,Rachna Nagar,Bhopal</span> Madhya Pradesh,
            India
          </p>
        </div> -->

        <div>
          <i class="fa fa-phone"></i>
          <p>+91 75663 09722</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p>
            <a
              href="file:///C:/Users/Dell/Desktop/dice%20game%202/sponser%20site/donate%20us%20aaroha.html#"
              style="color: #2c8af6;"
              >aaroha.youthorg@gmail.com</a
            >
          </p>
        </div>
      </div>

      <div class="footer-right">
        <p class="footer-company-about">
          <span>About Us</span>
          Aaroha is a youth organization which works for the upliftment of the
          underprivileged children.
        </p>

        <div class="footer-icons">
          <a href="https://www.facebook.com/aaroha.youthorg/">
            <img src="./donate us aaroha_files/facebook-new.png"
          /></a>

          <a
            href="file:///C:/Users/Dell/Desktop/dice%20game%202/sponser%20site/donate%20us%20aaroha.html#"
            ><img src="./donate us aaroha_files/twitter.png"
          /></a>
          <a href="https://www.facebook.com/aaroha.youthorg/"
            ><img src="./donate us aaroha_files/instagram-new.png"
          /></a>
        </div>
      </div>
    </footer>
    <!-- AniJS core library -->
    <script src="https://anijs.github.io/lib/anijs/anijs-min.js"></script>

    <!-- Include to use $addClass, $toggleClass or $removeClass -->
    <script src="https://anijs.github.io/lib/anijs/helpers/dom/anijs-helper-dom-min.js"></script>

    <script src="https://anijs.github.io/lib/anijs/helpers/scrollreveal/anijs-helper-scrollreveal-min.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
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
  </body>
</html>
