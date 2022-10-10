<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/register.css">

    <style>
        
    </style>
</head>
<body>
    
    <div class="row">
        <div class=""></div>
        <div class="">
                    <!-- partial:index.partial.html -->

                    <section class="mt-5">
                        <article>
                        <form method="POST" action="class.php" class="pure-steps">
                            <input type="radio" name="steps" class="pure-steps_radio" id="step-0" checked="">
                            <input type="radio" name="steps" class="pure-steps_radio" id="step-1">
                            <input type="radio" name="steps" class="pure-steps_radio" id="step-2">
                            <div class="pure-steps_group">
                            <ol>
                                <li class="pure-steps_group-step">
                                <header>
                                    <h2 class="pure-steps_group-step_legend">Welcome</h2>
                                    <p class="pure-steps_group-step_item">The <strong>"Step By Step"</strong> pattern is usually 100% developed with JavaScript but you can use CSS too.</p>
                                    <p class="pure-steps_group-step_item">Enjoy this example of "what can be done" <strong>just with SASS,</strong> simulating a "sign-up" process.</p>
                                    <p class="pure-steps_group-step_item"></p>
                                </header>
                                </li>
                                <li class="pure-steps_group-step">
                                <fieldset>
                                    <legend class="pure-steps_group-step_legend">Sign Up</legend>
                                    <p class="pure-steps_group-step_item flexy-item flexy-column reverse">
                                    <input required name="email" type="email" class="font-monospace" placeholder="Type your email here" value="" id="input_email">
                                    <label class="fw-bolder text-dark" for="input_email">Email</label>
                                    </p>
                                    <p class="pure-steps_group-step_item flexy-item flexy-column reverse">
                                    <input required name="fname" type="text" class="font-monospace" placeholder="Type your FName here" value="" id="input_nick">
                                    <label class="fw-bolder text-dark" for="input_nick">First Name</label>
                                    </p>
                                    <p class="pure-steps_group-step_item flexy-item flexy-column reverse">
                                        <input required name="lname" type="text" class="font-monospace" placeholder="Type your LName here" value="" id="input_nick">
                                        <label class="fw-bolder text-dark" for="input_nick">Last Name</label>
                                    </p>
                                    <p class="pure-steps_group-step_item flexy-item flexy-column reverse">
                                        <input required name="phone" type="number" class="font-monospace" placeholder="Type your Phon here" value="" id="input_nick">
                                        <label class="fw-bolder text-dark" for="input_nick">Phone</label>
                                    </p>
                                    <p class="pure-steps_group-step_item flexy-item flexy-column reverse">
                                        <input required name="address" type="text" class="font-monospace" placeholder="Type your Address here" value="" id="input_nick">
                                        <label class="fw-bolder text-dark" for="input_nick">Address</label>
                                    </p>
                                    <p class="pure-steps_group-step_item flexy-item flexy-column reverse">
                                        <input required name="username" type="text" class="font-monospace" placeholder="Type your Username here" value="" id="input_nick">
                                        <label class="fw-bolder text-dark" for="input_nick">Username</label>
                                    </p>
                                    <p class="pure-steps_group-step_item flexy-item flexy-column reverse">
                                    <input required name="password" type="password" class="font-monospace" placeholder="Type your password here" value="" id="input_password">
                                    <label class="fw-bolder text-dark" for="input_password">Password</label>
                                    </p>
                                </fieldset>
                                </li>
                                <li class="pure-steps_group-step flexy-item">
                                <div class="pure-steps_preload">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                    <path d="M31.8,3.6c-0.2-0.5-0.4-0.9-0.9-1.2C30.4,2,29.7,1.8,29,1.9c-0.6,0.1-1.2,0.4-1.6,1l-8.5,11.2l0,0l-7.2,9.5l-7.1-9.4 c-0.5-0.7-1.3-1-2.1-1c-0.5,0-1,0.2-1.4,0.5c-0.5,0.4-0.9,1-1,1.7s0.1,1.2,0.5,1.8l9.1,12.1l0,0c0.1,0.2,0.3,0.3,0.4,0.4 c0.4,0.3,0.9,0.5,1.4,0.5c0.8,0,1.6-0.3,2.1-1L22.1,18l0,0l9.1-12.1C32,5.2,32.1,4.4,31.8,3.6z"></path>
                                    </svg>
                                </div>
                                </li>
                            </ol>
                            <ol class="pure-steps_group-triggers">
                                <li class="pure-steps_group-triggers_item">
                                <label for="step-0">Restart</label>
                                </li>
                                <li class="pure-steps_group-triggers_item">
                                <label for="step-1">Sign Up</label>
                                </li>
                                <li class="pure-steps_group-triggers_item">
                                <input name="register" class="btn btn-info mt-2" type="submit" for="step-2" value="Jump in">
                                </li>
                            </ol>
                            </div>
                            <br>
                            <label for="step-0">Restart</label>
                        </form>
                        </article>
                    </section>
                    <!-- partial -->
        </div>
        <div class=""></div>
    </div>

    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>
</body>
</html>