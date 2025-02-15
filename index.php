<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>D&F</title>
    <link
      href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link
      rel="shortcut icon"
      href="./assets/img/Logo-DF.png"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css"
    />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body>
    <div id="container">
      <div id="header">
        <img src="./assets/img/Logo-DF.png" alt="" class="brand-logo" />
        <ul id="nav">
          <div class="underline"></div>
          <div class="underline"></div>
          <div class="underline"></div>
          <li style="border-bottom: 5px solid #000"><a href="#">Home</a></li>
          <li><a href="./shop.php">Shop</a></li>
          <li><a href="#">Menu</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">More</a></li>
        </ul>

        <div id="header-option">
          <div class="cart-icon">
            <i class="fas fa-shopping-cart"></i>
            <span>Cart </span>
            <p>0</p>
          </div>
          <div class="account">
            <i class="fas fa-user-circle"></i>
            <p>Log in</p>
          </div>
        </div>
      </div>
      <div id="slider">
        <!-- <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">Slide 01</li>
                        <li class="splide__slide">Slide 02</li>
                        <li class="splide__slide">Slide 03</li>
                    </ul>
                </div>
            </div> -->
        <div id="image-slider" class="splide">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <img src="./assets/img/slidebackground1.jpg" />
              </li>
              <li class="splide__slide">
                <img src="./assets/img/slidebackground2.jpg" />
              </li>
              <li class="splide__slide">
                <img src="./assets/img/slidebackground3.jpg" />
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div id="content">
        <!-- <h3 class="heading-text">The D&F experience</h3>
        <p class="body-text">
          D&F has been a neighborhood staple since 2000. Since then, we’ve been
          providing you with excellent food at unbeatable prices. Today, D&F
          proudly serves the San Francisco area and beyond.
        </p> -->
        <div class="mostPopular">
          <span class="small-heading-text">Most Popular </span>
          <span class="small-heading-text"> Food</span>
        </div>
        <div style="width: 100%">
          <div id="product-container" class="splide">
            <div class="splide__track">
              <ul id="product-box" class="splide__list"></ul>
            </div>
          </div>
        </div>
      </div>
      <div id="aboutus">
        <div class="item-left" data-aos="fade-right">
          <h5 class="small-heading-text">all about us</h5>
          <p class="body-text">
            D&F opened to San Francisco shoppers in 2000 with the mission of
            spreading our love of incredible food and the finest ingredients as
            widely as possible. We couldn’t have asked for a better reception.
            Since we first started operating, we’ve developed a loyal fan base
            that it just as particular about good food as we are! Come on down
            and meet us in person.
          </p>
          <button class="aboutus-btn">Get in Touch</button>
        </div>
        <div data-aos="fade-left" class="item-right"></div>
      </div>
      <div id="contact">
        <div class="contact-left">
          <h5 class="small-heading-text">contact</h5>
          <p class="body-text">
            500 Terry Francois Street San Francisco, CA 94158
          </p>
          <a href="" class="body-text">vinhdq2005@gmail.com</a>
          <p class="body-text">0849.114.166</p>
        </div>
        <div class="contact-right">
          <form id="feedbackForm" class="contact-form">
            <div class="contact-form-1">
              <div class="contact-form-box">
                <label for="name" class="body-text">Name*</label>
                <input
                  type="text"
                  placeholder="Enter your name"
                  class="body-text"
                  id="name"
                  name="name"
                  required
                />
              </div>
              <div class="contact-form-box">
                <label for="email" class="body-text">Email*</label>
                <input
                  type="text"
                  placeholder="Enter your email"
                  class="body-text"
                  id="email"
                  name="email"
                  required
                />
              </div>
            </div>
            <div class="contact-form-2">
              <div class="contact-form-box">
                <label for="phone" class="body-text">Phone</label>
                <input
                  type="text"
                  placeholder="Enter your phone number"
                  class="body-text"
                  id="phone"
                  name="phone"
                  required
                />
              </div>
              <div class="contact-form-box">
                <label for="address" class="body-text">Address</label>
                <input
                  type="text"
                  placeholder="Enter your address"
                  class="body-text"
                  id="address"
                  name="address"
                  required
                />
              </div>
            </div>
            <div class="contact-form-3">
              <div class="contact-form-box">
                <label for="subject" class="body-text">Subject</label>
                <input
                  type="text"
                  placeholder="Type the subject"
                  class="body-text"
                  id="subject"
                  name="subject"
                  required
                />
              </div>
              <div class="contact-form-box">
                <label for="massage" class="body-text">Massage</label>
                <input
                  type="text"
                  placeholder="Type your massage here"
                  class="body-text"
                  id="massage"
                  name="massage"
                  required
                />
              </div>
            </div>
            <input type="submit" value="Submit" class="submit-btn body-text" />
          </form>
        </div>
      </div>
      <div id="footer">
        <div class="social">
          <div class="network-icon">
            <i class="fab fa-facebook-f"></i>
          </div>
          <div class="network-icon">
            <i class="fab fa-instagram"></i>
          </div>
          <div class="network-icon">
            <i class="fab fa-tiktok"></i>
          </div>
          <div class="network-icon">
            <i class="fab fa-youtube"></i>
          </div>
          <div class="network-icon">
            <i class="fab fa-twitter"></i>
          </div>
        </div>
        <span><i class="far fa-copyright"></i> Copyright by D&F</span>
      </div>
    </div>

    <div class="viewmore_conatainer"></div>

    <div id="login" class="login">
      <div class="login-container">
        <div class="login-left"></div>
        <div class="login-right">
          <h5 class="login-header">Log in</h5>
          <form action="" class="login-form">
            <input type="text" class="username" placeholder="Login" />
            <input type="password" class="password" placeholder="Password" />
            <div class="remember-account">
              <input type="checkbox" name="" class="remember-box" id="" />
              <label for="remember-box">Remember me</label>
            </div>
            <input type="submit" value="Login" class="submit-btn" />
          </form>
          <p class="login-text">Or join with</p>
          <div class="connect-social">
            <div class="network-icon">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
            </div>
            <div class="network-icon">
              <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <div class="network-icon">
              <a href="#"><i class="fab fa-google"></i></a>
            </div>
          </div>
          <p class="login-text">Not a member yet? <a href="#">Sign up!</a></p>
        </div>
      </div>
    </div>

    <div id="chat">
      <a href="#"><i class="fas fa-comment-lines"></i> Let's chat</a>
    </div>

    <div class="cart">
      <div class="cart-container">
        <div class="cart-content">
          <div class="cart-heading">
            <i class="far fa-chevron-right close-cart"></i>
            <h3 class="heading-text">Cart</h3>
          </div>
          <div class="cart-product">
            <!-- <div class="product">
              <div class="image-product-cart">

              </div>
              <div class="product-content-cart">
                <h3 class="name-product-cart">I'm a product</h3>
                <p class="price-product-cart">49.999d</p>
                <div class="quantity">
                  <input type="number" min="0" value="1">
                </div>
              </div>
            </div> -->
          </div>
          <div class="submit-cart">
            <div class="total-price">
              <h3 class="total">Total:</h3>
              <!-- <p class="total-price-cart">0</p> -->
            </div>
            <div class="viewcart-btn">
              <button class="view-cart">View Cart</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="./js/index.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      AOS.init();
    </script>

    <script>

function sweetAlert(icon, content) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                onOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: icon,
                title: content
            })
        }
      let formVinhFeedback = document.querySelector("#feedbackForm");
      formVinhFeedback.onsubmit = (e) => {
        e.preventDefault();

        let name = formVinhFeedback.name.value;
        let email = formVinhFeedback.email.value;
        let phone = formVinhFeedback.phone.value;
        let add = formVinhFeedback.address.value;
        let sub = formVinhFeedback.subject.value;
        let msg = formVinhFeedback.massage.value;

        let data = {
          name: name,
          email: email,
          phone: phone,
          address: add,
          subject: sub,
          message: msg,
        };

        $.ajax({
          url: "./sendEmail.php",
          method: "POST",
          dataType: "json",
          data: data,
          success: function (data) {
            sweetAlert(data.status, data.response);
          },
        });

        console.log(data);
      };
    </script>
  </body>
</html>
