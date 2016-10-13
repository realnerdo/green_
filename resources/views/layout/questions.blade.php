<div class="col-6">
    <div class="questions">
        <h2 class="title">Preguntas al vendedor <span>Tiempo apróx. de respuesta 15 minutos</span></h2>
        {!! Form::open(['url' => 'foo/bar', 'class' => 'question-form']) !!}
            {!! Form::text('question', null, ['class' => 'question-input', 'placeholder' => 'Hazle una pregunta al vendedor...']) !!}
        {!! Form::close() !!}
        <div class="question">
            <div class="details">
                <span><a href="#">Asael</a> preguntó el 15/Ago/2016 · 16:30:</span>
                <div class="bubble">
                    <span>¿De qué tipo de madera está hecho el toallero? Saludos.</span>
                </div><!-- end bubble -->
            </div><!-- end details -->
        </div><!-- end question -->
        <div class="answer">
            <div class="details">
                <span><a href="#">Vendedor</a> respondió el 15/Ago/2016 · 16:45:</span>
                <div class="bubble">
                    <span>Está hecho de madera de pino.</span>
                </div><!-- end bubble -->
            </div><!-- end details -->
        </div><!-- end answer -->
    </div><!-- end questions -->
</div><!-- end col-6 -->