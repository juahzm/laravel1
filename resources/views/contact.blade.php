@extends('master')
@section('title', 'Contactez-Nous')
@section('content')

<!-- Page content-->
<section class="py-5">
    <div class="container px-5">
        <!-- Contact form-->
        <div class="bg-light rounded-4 py-5 px-4 px-md-5">
            <div class="text-center mb-5">
                <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i
                        class="bi bi-envelope"></i></div>
                <h1 class="fw-bolder">Écrivez-nous</h1>
                <p class="lead fw-normal text-muted mb-0">Construisons quelque chose ensemble !</p>
            </div>
            <div class="row gx-5 justify-content-center">
                <div class="col-lg-8 col-xl-6">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->


                    @isset($data)
                    <div>
                        <strong>Name: </strong>{{ $data->name }}<br>
                        <strong>Email: </strong>{{ $data->email }}<br>
                        <strong>Phone </strong>{{ $data->phone }}<br>
                        <strong>Message </strong>{{ $data->text2 }}<br>


                    </div>

                    @else



                    <form method="post">
                        @csrf
                        <!-- Name input-->
                        <div class="form-floating mb-3">
                            <input name="name" class="form-control" id="name" type="text" placeholder="Enter your name..."
                                data-sb-validations="required" />
                            <label for="name">Nom</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">Le nom est requis.
                            </div>
                        </div>
                        <!-- Email address input-->
                        <div class="form-floating mb-3">
                            <input name="email" class="form-control" id="email" type="email" placeholder="name@example.com"
                                data-sb-validations="required,email" />
                            <label for="email">Adresse courriel</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">L'e-mail est requis
                            </div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">L'e-mail n'est pas valide.
                            </div>
                        </div>
                        <!-- Phone number input-->
                        <div class="form-floating mb-3">
                            <input name="phone" class="form-control" id="phone" type="tel" placeholder="(123) 456-7890"
                                data-sb-validations="required" />
                            <label for="phone">Numéro de téléphone</label>
                            <div class="invalid-feedback" data-sb-feedback="phone:required">Le Numéro de téléphone est requis.</div>
                        </div>
                        <!-- Message input-->
                        <div class="form-floating mb-3">
                            <textarea class="form-control" id="message" name="text2" type="text"
                                placeholder="Enter your message here..." style="height: 10rem"
                                data-sb-validations="required"></textarea>
                            <label for="message">Votre Message</label>
                            <div class="invalid-feedback" data-sb-feedback="message:required">Le message est requis.</div>
                        </div>
                        <!-- Submit success message-->
                        <!---->
                        <!-- This is what your users will see when the form-->
                        <!-- has successfully submitted-->
                        <div class="d-none" id="submitSuccessMessage">
                            <div class="text-center mb-3">
                                <div class="fw-bolder">Form submission successful!</div>
                                To activate this form, sign up at
                                <br />
                                <a
                                    href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                            </div>
                        </div>
                        <!-- Submit error message-->
                        <!---->
                        <!-- This is what your users will see when there is-->
                        <!-- an error submitting the form-->
                        <div class="d-none" id="submitErrorMessage">
                            <div class="text-center text-danger mb-3">Error sending message!</div>
                        </div>
                        <!-- Submit Button-->
                        <div class="d-grid"><button class="btn btn-primary btn-lg" id="submitButton"
                                type="submit">Soumetre</button></div>
                    </form>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@endsection
@section('js')
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
@endsection