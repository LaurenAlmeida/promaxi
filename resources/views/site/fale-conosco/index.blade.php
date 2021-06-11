@extends('site.app')

@section('content')
     <!-- Start Page Banner -->
     <div class="page-banner-area">
            <div class="container">
                <div class="page-banner-content">
                    <h2>Fale Conosco</h2>
                    
                    <ul class="pages-list">
                        <li><a href="index.html">Home</a></li>
                        <li>Fale Conosco</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Page Banner -->
        
         <!-- Start Contact Area -->
         <section class="contact-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">
                        <i class="flaticon-hashtag-symbol"></i>
                        Fale Com a Promaxi
                    </span>
                    <h2>Queremos receber sua mensagem</h2>
                    <p>Preencha o formulário abaixo, em breve estaremos retornando seu contato. Se quiser agendar uma consulta, informe na mensagem os dias e horários de sua preferência.</p>
                </div>

                <div class="contact-form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Nome não informado" placeholder="Nome*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required data-error="E-mail não informado" placeholder="E-mail*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Telefone não informado" class="form-control" placeholder="Fone / whatsapp*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Assunto não informado" placeholder="Assunto*">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="5" required data-error="Mensagem não informada" placeholder="Como podemos ajudar você?"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            
                            <div class="col-md-6 no-padding">
                                    <div class="g-recaptcha col-md-6 pull-left" data-sitekey="6LciOPcaAAAAAGa85PtKNqW-ygZqqtUsWNT5gC_X"></div>
                                    @error('g-recaptcha-response') 
                                        <p class="recaptcha-message">Marque a opção do recaptcha</p>
                                    @enderror
                                </div>

                           


                            <div class="col-lg-12 col-md-12" style="margin-top: 50px;" >
                                <button type="submit" class="default-btn">Enviar mensagem</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="contact-info" style="margin-top: 100px; background-color: #e8f0f1;">
                    <div class="contact-info-content" style="padding: 50px;" >
                        <h3>Você pode entrar em contato conosco pelos telefones</h3>
                        <h2>
                            <a href="tel:+5555999972838">(55) 3317 1403 / (55) 99997 2838</a><br><br><br>
                          <h3>Ou e-mail</h3>
                            <a href="mailto:atendimento@clinicapromaxi.com">promaxiclinicaodontologica@hotmail.com <br>
                                atendimento@clinicapromaxi.com</a>
                        </h2>

                        <ul class="social" style="margin-top: 50px;" >
                    
                            <li><a href="https://www.facebook.com/PromaxiOdontologia" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="https://www.instagram.com/promaxiodontologica/" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Area -->

@endsection
