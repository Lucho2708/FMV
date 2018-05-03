@extends('principal')

@section('menu')
    @include('website.principal.menu')
@endsection

@section('contenido')
    <div class="container">
        <div class="row clearfix divider4">
            <div class="span7">
                <h2>UBIQUENOS</h2>
                <div id="top-area-contact">
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d3299.9521513703853!2d-74.80085188584323!3d4.299073846207538!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f289407c273cb%3A0xd2b6bed1de463121!2sCl.+21b+%233-32%2C+Girardot%2C+Cundinamarca!5e1!3m2!1ses!2sco!4v1520389118680" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

            <div class="span5">
                <h2>CONTACTENOS</h2>
                <div id="note"></div>
                <div id="fields" class="contact-form">
                    <form id="ajax-contact-form" class="form-horizontal" action="javascript:alert('success!'); ">
                        <div class="control-group">
                            <label class="control-label" for="inputName">Nombre:</label>
                            <input type="text" name="name" >
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Correo Electronico:</label>
                            <input type="text" name="email" >
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Tema:</label>
                            <input type="text" name="subject" >
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Mensaje:</label>
                            <textarea name="content" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn_ btn-small_">Enviar</button>
                    </form>
                </div>

            </div>
        </div>
@endsection