@extends ('layouts.mainglobal')
@section ('contenido')
<div class="wrapper">
<section id="cover" class="cover-page hidden-xs hidden-sm"></section>
  <section id="about" class="about-page">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12">
          <h2>Contáctenos</h2>
          <form id="form-contact">
            <div class="form-group">
              <input type="text" class="form-control" name="name" placeholder="Nombre (*)" required="true">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="lastname" placeholder="Apellidos  (*)" required="true">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" name="phone" placeholder="Teléfono  (*)" required="true">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" placeholder="Correo electrónico  (*)" required="true">
            </div>
            <div class="form-group">
              <textarea rows="5" class="form-control" name="message" placeholder="Mensaje "></textarea>
            </div>
            <div class="form-group text-right">
              <button type="submit" class="btn btn-primary" id="send">Enviar correo</button>
            </div>
          </form>
        </div>
        <div class="col-md-4 col-sm-12">
          <div class="fb-page" data-href="https://www.facebook.com/mainglobaloficial/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/mainglobaloficial/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/mainglobaloficial/">Main Global</a></blockquote></div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection