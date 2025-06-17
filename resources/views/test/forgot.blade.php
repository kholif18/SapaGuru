<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glassmorphism Login Form | CodingNepal</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@200;300;400;500;600;700&display=swap");
        * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Open Sans", sans-serif;
        }
        body {
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        width: 100%;
        padding: 0 10px;
        }
        body::before {
        content: "";
        position: absolute;
        width: 100%;
        height: 100%;
        background: url("https://images.unsplash.com/photo-1550236520-7050f3582da0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1575&q=80"), #000;
        background-position: center;
        background-size: cover;
        }
        .wrapper {
        width: 400px;
        border-radius: 8px;
        padding: 30px;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.5);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        }
        form {
        display: flex;
        flex-direction: column;
        }

        .login-header {
            text-align: center;
            margin-bottom: 30px;
            color: #fff;
        }

        .login-header h1 {
            font-size: 2rem;
            margin-bottom: 10px;
            font-weight: 600;
        }

        .login-header p {
            opacity: 0.8;
            font-size: 0.9rem;
        }

        .input-field {
        position: relative;
        border-bottom: 2px solid #ccc;
        margin: 15px 0;
        }
        .input-field label {
        position: absolute;
        top: 50%;
        left: 0;
        transform: translateY(-50%);
        color: #fff;
        font-size: 16px;
        pointer-events: none;
        transition: 0.15s ease;
        }
        .input-field input {
        width: 100%;
        height: 40px;
        background: transparent;
        border: none;
        outline: none;
        font-size: 16px;
        color: #fff;
        }
        .input-field input:focus~label,
        .input-field input:valid~label {
        font-size: 0.8rem;
        top: 10px;
        transform: translateY(-120%);
        }

        .input-field i {
            position: absolute;
            color: #ccc;
            right: 20px;
            top: 15px;
            opacity: 0.7;
        }
        .forget {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: 25px 0 35px 0;
        color: #fff;
        font-size: 0.9rem;
        }
        #remember {
        accent-color: #fff;
        }
        .forget label {
        display: flex;
        align-items: center;
        }
        .forget label p {
        margin-left: 8px;
        }
        .wrapper a {
        color: #efefef;
        text-decoration: none;
        }
        .wrapper a:hover {
        text-decoration: underline;
        }
        button {
        background: #fff;
        color: #000;
        font-weight: 600;
        border: none;
        padding: 12px 20px;
        cursor: pointer;
        border-radius: 5px;
        font-size: 16px;
        border: 2px solid transparent;
        transition: 0.3s ease;
        }
        button:hover {
        color: #fff;
        border-color: #fff;
        background: rgba(255, 255, 255, 0.15);
        }
        .register {
        text-align: center;
        margin-top: 30px;
        color: #fff;
        }

        .ingat {
            text-align: center;
            margin-top: 30px;
            color: #fff;
            font-size: 0.9rem;
        }

        /* Responsive design */
            @media (max-width: 500px) {
                .wrapper {
                    width: 90%;
                    padding: 30px 20px;
                }
            }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    {{-- <link rel="stylesheet" href="style.css"> --}}
    </head>
    <body>
    <div class="wrapper">
        <div class="login-header">
            <h1>Password Reset</h1>
            <p>Masukkan alamat email yang terkait dengan akun Anda untuk memulihkan kata sandi Anda</p>
        </div>
        <form action="#">
            <div class="input-field">
                <input type="text" autofocus required>
                <label>Masukkan email Anda</label>
                <i class="fas fa-user"></i>
            </div>
            <button type="submit">Reset Password</button>
            <div class="ingat">
                <p>Ingat kata sandi Anda? <a href="{{ url('/login') }}">Login</a></p>
            </div>
            <div class="register">
                <small>Tidak memiliki akun? <a href="{{ url('/register') }}">Register</a></small>
            </div>
        </form>
    </div>
    </body>
</html>