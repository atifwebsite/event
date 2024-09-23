<!doctype html>
<html lang="en">

<head>
    <title>Contacts-Us</title>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins';
        }

        .contact {
            position: relative;
            min-height: 100vh;
            padding: 20px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: url(https://www.freecodecamp.org/news/content/images/2022/09/jonatan-pie-3l3RwQdHRHg-unsplash.jpg);
            background-size: cover;
        }

        .contact .contact {
            min-width: 800px;
            text-align: center;
        }

        .contact .contact h2 {
            font-size: 36px;
            font-weight: 500px;
            color: #000000
        }

        .contact .contact p {
            font-weight: 300px;
            color: #ffffff
        }

        .container {

            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 2rem;
        }

        .container .contaceInfo {
            width: 50%;
            display: flex;
            flex-direction: column;
        }

        .container .contaceInfo .box {
            position: relative;
            padding: 20px 0;
            display: flex;
        }

        .container .contaceInfo .box .icon {
            min-width: 60px;
            height: 60px;
            background: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            font-style: 22px;
        }

        .container .contaceInfo .box .text {
            display: flex;
            margin-left: 20px;
            font-style: 16px;
            color: #ffffff;
            flex-direction: column;
            font-weight: 300;
        }

        .container .contaceInfo .box .text h3 {
            font-weight: 500;
            color: #ffffff;
        }

        .contactForm {
            width: 40%;
            padding: 40px;
            background: #ffffff;
        }

        .contactForm h2 {
            font-size: 30px;
            color: #333333;
            font-weight: 500;
        }
        .contactForm .inputBox{
            position: relative;
            width: 100%;
            margin-top: 10px;
        }
        .contactForm .inputBox input,.contactForm .inputBox textarea{
            width: 100%;
            padding: 5px 0;
            font-size: 16px;
            margin: 10px 0;
            border: none;
            border-bottom: 2px solid #333333;
            outline: none;
            resize: none;
        }
        .contactForm .inputBox span{
            position: absolute;
            left: 0;
            padding: 0;
            font-size: 16px;
            margin: 10px o;
            pointer-events: none;
            transform: 0.5s;
            color: #666666
        }
        .contactForm .inputBox input:focus~span,
        .contactForm .inputBox input:valid~span,
        .contactForm .inputBox textarea:focus~span,
        .contactForm .inputBox textarea:valid~span{
            color: #ff0000;
            font-size: 12px;
            transform: translate(-20px)

        }
        .contactForm .inputBox input[type="submit"]{
            width: 100%;
            background: #0ae196;
            border: none;
            cursor: pointer;
            padding: 10px;
        }
        @media(max-width:991px){
            .contact{
                padding: 50px;
            }
            .container{
                flex-direction: column;
            }
            .container .contaceInfo{
                margin-bottom: 40px;
            }
            .container .contaceInfo .contactForm{
                width: 100%;
            }
        }

    </style>
</head>

<body>
    <section class="contact">
        <div class="contact">
            <h2>Contacte-Us</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab totam aliquid non itaque sed culpa, adipisci
                expedita soluta corporis placeat delectus minus, magnam a tenetur voluptas? Cum reiciendis error
                explicabo?</p>
            
            <div class="container">
                <div class="contaceInfo">
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-address-card"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>JSagatdal <br>North24Pargana, <br>West Bangal</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-envelope"></i></div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>admin@gmail.com</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon"><i class="fa-solid fa-phone"></i></div>
                        <div class="text">
                            <h3>Phone no</h3>
                            <p>999-999-999</p>
                        </div>
                    </div>
                </div>
                <div class="contactForm">
                    <form action="">
                        <h2>Send Massage</h2>
                        <div class="inputBox">
                            <input type="text" name="" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                        <textarea required="required"></textarea>
                        <samp>type your massage....</samp>
                        </div>
                        <div class="inputBox">
                            <input type="submit" name="" velu="sen">
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
