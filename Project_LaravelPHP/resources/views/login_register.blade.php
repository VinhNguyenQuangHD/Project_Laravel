<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Đăng nhập và đăng ký</title>
    <style>
                @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap');
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body, input{
            font-family: 'Poppins',sans-serif;
        }
        .container{
            position: relative;
            width: 100%;
            min-height: 100vh;
            background-color: #fff;
            overflow: hidden;

        }
        .container::before{
            content: '';
            position: absolute;
            width: 2000px;
            height: 2000px;
            border-radius: 50%;
            background: linear-gradient(-45deg, #4481eb,#04befe);
            top: -10%;
            right: 48%;
            transform: translateY(-48%);
            z-index: 6;
            transition: 1.8s ease-in-out;
        }
        /*.form-container{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
        }*/
        .signin-signup{
            position: absolute;
            top: 50%;
            left: 75%;
            transform: translate(-50%,-50%);
            width: 50%;
            display: grid;
            grid-template-columns: 1fr;
            z-index: 5;
            transition: 1s 0.7s ease-in-out;
        }
        form{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            grid-column: 1 / 2;
            grid-row: 1 / 2;
            transition: 0.2s 0.7s ease-in-out;
        }
        form.login_form{
            z-index: 2;
        }
        form.signup_form{
            z-index: 1;
            opacity: 0;
        }
        .title{
            font-size: 2.2rem;
            color: #444;
            margin-bottom: 10px;
        }

        .input-field{
            max-width: 380px;
            width: 100%;
            height: 55px;
            background-color: #f0f0f0;
            margin: 10px 0;
            border-radius: 55px;
            display: grid;
            grid-template-columns: 15% 85%;
            padding: 0 .4rem;
        }
        .input-field i{
            text-align: center;
            line-height: 55px;
            color: #acacac;
            font-size: 1.1rem;  
        }
        .input-field input{
            background: none;
            outline: none;
            border: none;
        }
        .input-field input::placeholder{
            color: #aaa;
            font-weight: 500;
        }
        .btn{
            width: 150px;
            height: 49px;
            border: none;
            outline: none;
            border-radius: 49px;
            cursor: pointer;
            background-color: #5995fd;
            color: #fff;
            text-transform: uppercase;
            font-weight: 600;
            margin: 10px 0;
            transition: .5s;
        }
        .btn:hover{
            background-color: #4d84e2;
        }
        .social_notice{
            padding: .7rem 0;
            font-size: 1rem;
        }
        .social_list{
            display: flex;
            justify-content: center;
        }
        .social_icon{
            height: 50px;
            width: 50px;
            border: 1px solid #333;
            margin: 0 0.45rem;
            display: flex;
            justify-content: center;
            align-items: center;
            text-decoration: none;
            color: #333;
            font-size: 1.1rem;
            border-radius: 50%;
            transition: 0.3s;
        }
        .social_icon:hover{
            color: #4481eb;
            border-color: #4481eb;
        }
        .panel-container{
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: grid;
            grid-template-columns: repeat(2,1fr);
        }
        .image{
            width: 100%;
            transition: .9s .6s ease-in-out;
        }
        .panel{
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            justify-content: space-around;
            text-align: center;
            z-index: 7;
        }
        .panel .content{
            color: #fff;
            transition: .9s .6s ease-in-out;
        }
        .panel h3{
            font-weight: 600;
            line-height: 1;
            font-size: 1.5rem;
        }
        .panel p{
            font-size: 0.95rem;
            padding: 0.7rem 0;
        }
        .left-panel{
            pointer-events: all;
            padding: 3rem 17% 2rem 12%;
        }
        .right-panel{
            pointer-events: none;
            padding: 3rem 17% 2rem 12%;
        }
        .btn.transparent{
            margin: 0;
            background: none;
            border: 2px solid #fff;
            width: 150px;
            height: 41px;
            font-weight: 600;
            font-size: 0.8rem;
        }
        .right-panel .content, .right-panel .image{
            transform: translateX(800px);
        }
        .container.sign-up-mode:before{
            transform: translate(100%,-50%);
            right: 52%;
        }
        .container.sign-up-mode .left-panel .image,
        .container.sign-up-mode .left-panel .content{
            transform: translateX(-180%);
        }
        .container.sign-up-mode .right-panel .image,
        .container.sign-up-mode .right-panel .content{
            transform: translateX(0);
        }
        .container.sign-up-mode .left-panel{
            pointer-events: none;
        }

        .container.sign-up-mode .right-panel{
            pointer-events: all;
        }

        .container.sign-up-mode .signin-signup{
            left: 25%;
        }

        .container.sign-up-mode form.login_form{
            z-index: 1;
            opacity: 0;
        }

        .container.sign-up-mode form.signup_form{
            z-index: 2;
            opacity: 1;
        }
        @media(max-width:870px){
            .container{
                width: 100%;
                left: 50%;
                top: 95%;
                transform: translate(-50%,-100%);
            }
            .container::before{
                width: 1500px;
                height: 1500px;
                left: 30%;
                bottom: 60%;
                transform: translateX(-60%);
                right: initial;
                top: initial;
            }
            .panel-container{
                background-color: green;
                z-index: 10;
                grid-template-columns: 1fr;
            }
            .panel{
                flex-direction: row;
                justify-content: space-around;
                align-items: center;
            }
            .panel h3{
                font-size: 1.3rem;
            }
            .panel p{
                font-size: 0.7rem;
                padding: 0.5rem 0;
            }
            .btn.btn.transparent{
                width: 110px;
                height: 35px;
                font-size: 0.7rem;
            }
            .panel .content{
                padding-right: 15%;
                transition: 0.9s 0.8s ease-in-out;
            }
            .image{
                width: 200px;
                transition: 0.9s 0.6s ease-in-out;
            }
            .left-panel{
                grid-row: 1 / 2;
            }
            .right-panel{
                grid-row: 3 / 4;
            }
            .right-panel .content, .right-panel .image{
                transform: translateY(300px);
            }
            .container.sign-up-mode::before{
                transform: translate(-50%,100%);
                bottom: 32%;
                right: initial;
            }
            .container.sign-up-mode .left-panel .image,
            .container.sign-up-mode .left-panel .content{
                transform: translateY(-300px);
            }
            .container.sign-up-mode .signin-signup{
                top: 5%;
                transform: translate(-50%,0);
                left: 50%;

            }
        }
        @media(max-width:570px){
            form{
                padding: 0 1.5rem;
            }
            .image{
                display: none;
            }
            .panel .content{
                padding: 0.5rem 1rem;
            }
            .container::before{
                bottom: 72%;
                left: 50%;
            }
            .container.sign-up-mode::before{
                bottom: 28%;
                left: 50%;
            }
        }
    </style>
    </head>
    <body>
        <div class="container">
            <div class="form-container">
                <div class="signin-signup">
                    <form action="" class="login_form">
                        <h2 class="title">Đăng nhập tài khoản</h2>
                        <div class="input-field">
                            <i class="far fa-user"></i>
                            <input type="text" placeholder="Tên đăng nhập">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Mật khẩu">
                        </div>
                        <input type="submit" value="Đăng nhập" class="btn login">
                        <p class="social_notice">Hoặc đăng nhập bằng tài khoản thay thế</p>
                        <div class="social_list">
                            <a href="#" class="social_icon">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social_icon">
                                <i class="fab fa-google"></i>
                            </a>
                            <a href="#" class="social_icon">
                                <i class="fas fa-user"></i>
                            </a>
                        </div>
                    </form>
                    <form action="{{route('user-progress')}}" method="POST" class="signup_form">
                        @if(Session::has('done'))
                        <div class="alert alert-success">{{Session::get('done')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-success">{{Session::get('fail')}}</div>
                        @endif
                        @csrf
                        <h2 class="title">Đăng ký tài khoản</h2>
                        <div class="input-field">
                            <i class="far fa-user"></i>
                            <input type="text" placeholder="Tên đăng nhập">
                        </div>
                        <div class="input-field">
                            <i class="far fa-envelope"></i>
                            <input type="text" placeholder="Email">
                        </div>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Mật khẩu">
                        </div>
                        <div class="input-field">
                        <i class="fas fa-lock"></i>
                            <input type="password" placeholder="Nhập lại mật khẩu">
                        </div>
                        <input type="submit" value="Đăng ký" class="btn sign_up">
                        
                    </form>
                </div>
            </div>
            <div class="panel-container">
                <div class="panel left-panel">
                    <div class="content">
                        <h3>Bạn là người mới</h3>
                        <p>Nhấn vào đây để tạo một tài khoản mới</p>
                        <button class="btn transparent" id="sign-up-bnt">Tạo tài khoản</button>
                    </div>

                    <img src="img/undraw_shopping_re_3wst.svg" class="image" alt="">
                </div>
                <div class="panel right-panel">
                    <div class="content">
                        <h3>Bạn đã có tài khoản</h3>
                        <p>Nhấn vào đây để tiến hành đăng nhập bằng tài khoản có sẵn</p>
                        <button class="btn transparent" id="sign-in-bnt">Vào đăng nhập</button>
                    </div>

                    <img src="img/undraw_gone_shopping_re_2lau.svg" class="image" alt="">
                </div>
            </div>
        </div>
        <script>
                            const sign_in_bnt = document.querySelector("#sign-in-bnt");
                const sign_up_bnt = document.querySelector("#sign-up-bnt");
                const container = document.querySelector(".container");

                sign_up_bnt.addEventListener('click',() =>
                {
                    container.classList.add("sign-up-mode")
                }
                );

                sign_in_bnt.addEventListener('click',() =>
                {
                    container.classList.remove("sign-up-mode")
                }
                );

        </script>
    </body>
</html>